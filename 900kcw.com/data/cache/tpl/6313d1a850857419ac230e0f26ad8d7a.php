<?php exit;?>001551270981f4580d4876981a07cc6ad6dca2ae3e7ds:10330:"a:2:{s:8:"template";s:10265:"<div class="footer1">
	<ul>
		<li class="lileft">
 <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"kefu", "limit"=>10));  if(is_array($listList)) foreach($listList as $list){ ?>
			<img src="<?php echo $list["logo"];?>" />
			<?php } ?>
			<p>最专业的彩票开奖网站</p>
			<p>数据分析最全面的开奖数据平台 </p>
		</li>
		<li class="about_li">
			<div><span class="about"></span><span class="">关于我们</span></div>
			<p class="p1"></p>
		<?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>534, "limit"=>20));  if(is_array($listList)) foreach($listList as $list){ ?>
			<p>
				<a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a>
			</p>
			<?php } ?>
		</li>
		<li class="about_li">
			<div><span class="rewards"></span><span class="">中奖神器</span></div>
			<p class="p1">
				<a href="/beijingsaichePK10.html">开奖号码</a>
			</p>
			<p>
				<a href="/zoushitubiao.html">走势图表</a>
			</p>
			<p>
				<a href="/wanfaguize.html">玩法规则</a>
			</p>
		</li>
		<li class="about_li">
			<div><span class="call"></span><span class="">免费调用</span></div>
			<p class="p1">
				<a href="/" target="_blank">自助网址导航</a>
			</p>
			<p>
				<a href="/" target="_blank">开奖调用</a>
			</p>
		</li>
		<li style="clear:both;">			
		</li>
	</ul>
</div>
<div class="footer3">
	<div class="footer3c">
		Copyright <span id="localyears"></span>All rights reserved  <?php echo $sys["site_subtitle"];?> 版权所有 <?php echo $sys["site_copyright"];?> 
		<script type="text/javascript">
			$("#localyears").text(new Date().getFullYear());
		</script>
		<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1272814918'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/stat.php%3Fid%3D1272814918' type='text/javascript'%3E%3C/script%3E"));</script>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="/themes/168pc/css/densigner_contest.css">
<div class="c_meau">
  <div class="fl">
 <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"kefu", "limit"=>10));  if(is_array($listList)) foreach($listList as $list){ ?>
    <h4>关注&amp;咨询<br>
     <?php echo $list["mc"];?></h4>
    <div class="fl_o">
      <dl class="fl_o_o">
        <dt> <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $list["qq"];?>&site=qq&menu=yes" target="_blank"> <img src="/themes/168pc/images/c_meau_1.png"></a></dt>
        <dd>QQ咨询</dd>
      </dl>
      <dl class="fl_o_o">
        <dt><img src="<?php echo $list["ewm"];?>" style="width:92px;height:92px;" ></dt>
        <dd>扫一扫有惊喜</dd>
      </dl>
      <dl class="fl_o_o">
        <dt><a href="<?php echo $list["dz"];?>" target="_blank"><img src="/themes/168pc/images/c_meau_7.gif"></a></dt>
        <dd>试玩投注</dd>
      </dl>
		<!--用户反馈-->
		<dl class="fl_o_o fl_o_o_back">
			<dt><a href="javaScript:;" style="padding-top: 8px"><img src="/themes/168pc/images/bjpknum_03.png"></a></dt>
			<dd>用户反馈</dd>
		</dl>
    </div>
    <img src="/themes/168pc/images/c_meau_7.png"> </div>
  <div class="fr">
    <div class="fr_o"><img src="/themes/168pc/images/c_meau_5.png"></div>
    <div class="fr_t"><img src="/themes/168pc/images/c_meau_6.png"></div>
  </div>
   <?php } ?>
  <div class="clear"></div>
</div>




<div id="user_adv">
	<!--模态框 遮罩层-->
	<div class="modal fade in" style="z-index: 999; display: none;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
		<div class="modal-backdrop fade in">
		</div>
		<!-- 模态框（Modal） -->
		<div class="modal-dialog" style="margin: 30px auto;margin-top: 130px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						<img src="/themes/168pc/images/close.png" alt="">
					</button>
					<h4 class="modal-title" id="myModalLabel">在线反馈</h4>
				</div>
				<div class="modal-body">
					<!--info1 表单-->
					<div class="info" id="info1" style="display: none;">
						<div class="div_top div_top_add_title">欢迎对开奖网提出宝贵的建议或意见</div>
						<div class="div_middle">
							<div class="middle_l">
								<div class="l_div">称呼</div>
								<div class="r_div"><input type="text" name='nickname'placeholder="" class="input_l" id="nickname"></div>
							</div>
							<div class="middle_r">
								<select name="contact_type" class="middle_select" id="linkType" >
									<option value="1">电话</option>
									<option value="2">邮箱</option>
									<option value="3">QQ</option>
									<option value="4">微信</option>
								</select>
								<input type="text" name="contact" class="input_r" id="linkNumber">
							</div>
						</div>
						<div class="div_down">
							<textarea name="content" id="content"  rows="" cols="" id="advice" placeholder="请写下您宝贵的意见..."></textarea>
						</div>
						<div>
							<button type="button" class="btn  modal-title_model" id="sub">提交</button>
							<button type="button" class="btn btn_submiting" id="btn_submiting">正在提交...</button>
						</div>
					</div>
					<!--info2 成功-->
					<div class="info" id="info2" style="display: none;">
						<div class="success_div">
							<div class="pic"><img src="/themes/168pc/images/tishi.png" alt=""></div>
							<div class="success_h">
								<h1>提交成功</h1>
								<p>感谢您反馈，我们将尽快做出相应的调整！</p>
							</div>
						</div>
					</div>
					<!--info3 再次点击-->
					<div class="info" id="info3" style="display: none;">
						<div class="success_div">
							<div class="pic"><img src="/themes/168pc/images/fankuidh.gif" alt=""></div>
							<div class="success_h">
								<h1>您已提交</h1>
								<p>请您稍适休息，喝杯咖啡，谢谢您的支持！</p>
							</div>
						</div>
					</div>
					<!--info3 失败-->
					<div class="info" id="info4" style="display: none;">
						<div class="success_div">
							<div class="pic"><img src="/themes/168pc/images/fankuidh.gif" alt=""></div>
							<div class="success_h">
								<h1>您提交失败了</h1>
								<p>请重新提交一次吧，刚刚开小灶了，谢谢您的支持！</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<script type="text/javascript">
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".c_meau").stop().show().animate({ bottom: '100px' }, 300);
            $('.fr_t').show();
        }
        else {
        	$('.fr_t').hide();
            $(".c_meau").stop().animate({ bottom: '100px' }, 300);
        }
    });
    $('.c_meau .fr_t').click(function () {
        $('body,html').animate({ scrollTop: 0 }, 500);
        $(".c_meau").animate({ bottom: '100px', opacity: '0' }, 500);
        return false;
    });

    $(function () {
        /**
		 * 	这个现实分别有三种转态
         */
		$(".fl_o_o_back").click(function () {
		    $.post('/?r=home/index/isFeedback',{},function(res) {
				if (res) {
//					alert('已提交过了反馈') ;
					//提交成功了  显示咖啡的图片
                    fadeFnInfo_three();
				} else {
                    fadeFn();
				}
			});

        })
        /**
		 * 	X 关闭
         */
		$(".close").click(function () {
            $(".modal").hide();
        });
		$(".modal-backdrop").click(function () {
            $(".modal").hide();
        })
		function fadeFn() {
            $(".modal").fadeToggle("fast",function () {
                // console.log('执行成功了！')
            });
            /**
			 * 第一个模态框现实
             */
            $("#info1").show();
            $("#info2").hide();
            $("#info3").hide();
            $("#info4").hide();
        }
        function fadeFnInfo_three() {
            /**
             * 第一个模态框现实
             */
            $(".modal").fadeToggle("fast",function () {
                // console.log('执行成功了！')
            });
            $("#info3").show();
            $("#info1").hide();
            $("#info2").hide();
            $("#info4").hide();
        }
        $('#sub').click(function (){
			var nickname     = $('#nickname').val(); //昵称
			var contact_type = $('#linkType').val(); //联系方式类型
			var contact      = $('#linkNumber').val(); //联系方式
			var content      = $('#content').val(); //反馈内容

			if (nickname == '') {
			   alert('昵称不能为空');
			   return false ;
			}
            if (contact == '') {
                alert('联系方式不能为空');
                return false ;
            }
            if (content == '') {
                alert('反馈内容不能为空');
                return false ;
            }

			$.post('/?r=home/index/feedback',{nickname:nickname,contact_type:contact_type,contact:contact,content:content},function (res){
					if (res) {
//                        alert('提交成功');
                        $(".modal").show();
                        $("#info2").show();
                        $("#info1").hide();
					} else {
//					    alert('提交失败');
                        /**
                         * 第一个模态框现实
                         */
                        $(".modal").fadeToggle("fast",function () {
                            // console.log('执行成功了！')
                        });
                        $("#info4").show();
                        $("#info1").hide();
                        $("#info3").hide();
                        $("#info2").hide();
					}
			});
		});

    })
</script>
";s:12:"compile_time";i:1519734981;}";