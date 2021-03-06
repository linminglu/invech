<?php

namespace bong\service\auth\traits;

use bong\foundation\Str;

trait Authenticatable
{

    protected $rememberTokenName = 'remember_token';


    public function getAuthIdentifierName()
    {
        
        return $this->getPk();
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        if (! empty($this->getRememberTokenName())) {
            return $this->{$this->getRememberTokenName()};
        }
    }

    public function setRememberToken($value)
    {
        if (! empty($this->getRememberTokenName())) {
            $this->{$this->getRememberTokenName()} = $value;
        }
    }

    public function getRememberTokenName()
    {
        return $this->rememberTokenName;
    }

    public function freshRememberToken(){
        $random = Str::random(60);
        $this->setRememberToken($random);
        $this->save();
    }     
}
