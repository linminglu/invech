<?php

namespace bong\service\queue;

use bong\service\queue\Jobs\Job;
use bong\service\queue\Contracts\ShouldQueue;
use bong\service\queue\traits\InteractsWithQueue;

class CallQueuedListener implements ShouldQueue
{
    use InteractsWithQueue;

    public $class;

    public $method;

    public $data;

    public $tries;

    public $timeoutAt;

    public $timeout;

    public function __construct($class, $method, $data)
    {
        $this->data = $data;
        $this->class = $class;
        $this->method = $method;
    }

    public function displayName()
    {
        return $this->class;
    }

    public function __clone()
    {
        $this->data = array_map(function ($data) {
            return is_object($data) ? clone $data : $data;
        }, $this->data);
    }

    protected function prepareData()
    {
        if (is_string($this->data)) {
            $this->data = unserialize($this->data);
        }
    }

    public function handle()
    {
        $this->prepareData();

        $handler = container($this->class);

        call_user_func_array(
            [$handler, $this->method], $this->data
        );
    }

    protected function setJobInstanceIfNecessary(Job $job, $instance)
    {
        if (in_array(InteractsWithQueue::class, class_uses_recursive(get_class($instance)))) {
            $instance->setJob($job);
        }

        return $instance;
    }

    public function failed($e)
    {
        $this->prepareData();

        $handler = container($this->class);

        $parameters = array_merge($this->data, [$e]);

        if (method_exists($handler, 'failed')) {
            call_user_func_array([$handler, 'failed'], $parameters);
        }
    }

}
