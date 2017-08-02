<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" >
  <head>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Olive Enterprise">
    <!-- END META -->
    
    <!-- BEGIN SHORTCUT ICON -->
    <link rel="shortcut icon" href="/wechat/Public/resouce/img/logo.ico">
    <!-- END SHORTCUT ICON -->
    <title>
        Person
    </title>
    
    <!-- BEGIN STYLESHEET -->
    <link href="/wechat/Public/Olive/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/wechat/Public/Olive/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
    <link href="/wechat/Public/Olive/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON STYLESHEET -->
    <link href="/wechat/Public/Olive/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
    <link href="/wechat/Public/Olive/css/style-responsive.css" rel="stylesheet"><!-- THEME BASIC RESPONSIVE  CSS -->
    <!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
     <!-- END STYLESHEET -->
     





<!-- 模态框（Modal） -->
<div class="modal fade" id="personinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:20%;font-size:15px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                  <h4 class="modal-title" id="myModalLabel" style="font-size:18px;">Info</h4>
                </center>
            </div>
            <div class="modal-body" style="height: 250px;">
            

            
              <form role="form">
            <div class="form-group">
            <div>
               
                <textarea type="text" name="Nation" id="password" placeholder="individual resume"  style="width:100%;height:200px;"></textarea> 
              </div>


            
          </div>




         </form>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:18px;">Close</button>
                <a href="<?php echo U('Activity')?>"></a><button type="button" class="btn btn-primary" style="font-size:18px;">Confirm</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--modal-->
<!--模态框-->

     <style type="text/css">
       .lookmore{

        width: 100%;
        height: 50px;
       }
     </style>
  </head>
  <body>
    <!-- BEGIN SECTION -->
    <section id="container" class="">
      <!-- BEGIN HEADER -->
      <header class="header white-bg">
	  <!-- SIDEBAR TOGGLE BUTTON -->
        <div class="sidebar-toggle-box">
          <div  data-placement="right" class="fa fa-bars tooltips">
          </div>
        </div>
		<!-- SIDEBAR TOGGLE BUTTON  END-->
        <a  class="logo">
          Personal
          <span>
            center
          </span>
        </a>
        <a href="<?php echo U('message')?>">
          
            <span class="badge bg-important" style="float:right;color:#ffffff;margin-top: 15px;">3</span>
            <li class="fa fa-comments" style="float:right;font-size: 35px;color:#ffffff;margin-top: 15px;"></li>
        </a>


		<!-- END USER LOGIN DROPDOWN  -->
      </header>
      <!-- END  HEADER -->
	         <!-- BEGIN SIDEBAR -->
      <aside >
        <div id="sidebar" class="nav-collapse" style="width:70%;background:#ffffff;">
          <ul class="sidebar-menu" >
            
            <li class="">
              <a href="<?php echo U('set')?>">
                <i class="fa  fa-cog">
                </i>
                <span>
                  Setting
                </span>
              </a>
            </li>
            <li class="<?php echo U('StudentAbroad/ShareToForeiger')?>">
              <a href="<?php echo U('StudentAbroad/ShareToForeiger')?>">
                <i class="fa fa-share-square-o">
                </i>
                <span>
                  Share
                </span>
              </a>
            </li>
            <li class="<?php echo U('StudentAbroad/ShareToForeiger')?>">
              <a href="<?php echo U('StudentAbroad/ShareToForeiger')?>">
                <i class="fa fa-bullhorn">
                </i>
                <span>
                  recruit
                </span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="<?php echo U('feedback')?>">
                <i class="fa fa-user">
                </i>
                <span>
                  service
                </span>
              </a>
          </ul>
        </div>
      </aside>
      <!-- END SIDEBAR -->

	  
      <!-- BEGIN MAIN CONTENT -->
      <section id="main-content">
	  <!-- START WRAPPER -->
        <section class="wrapper">
          
          <!-- START ROW -->
          <div class="row">

            <div class="col-lg-4">
              <section class="panel">
                <div class="twt-feed blue-bg">
                  <h1>
                   <?php echo ($person["EnglishName"]); ?>
                  </h1>
                  <a href="" style="border: 0px;color:#ffffff;" data-toggle="modal" data-target="#personinfo">
                  </a>
                  <a href="#">
                    <img src="/wechat/Public/Olive/img/profile-avatar.jpg" alt="">
                  </a>
                </div>
                <div class="wid-category twt-category">
                  <ul>
                    <li class="active">
                      <h5>
                        320
                      </h5>
                      Friends
                    </li>
                    <li>
                      <h5>
                        1245
                      </h5>
                      Total score
                    </li>
                    <li>
                      <h5>
                        <a href="<?php echo U('StudentAbroad/money') ?>">5.0</a>
                      </h5>
                      Money
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
          <!-- END ROW -->
		  
		  <!-- START ROW -->
		  <div class="row">
            <div class="col-lg-6">
              <section class="panel">
                <header class="panel-heading">
                  TimeLine:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<?php echo ($person["activitysum"]); ?>
                  <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down">
                    </a>
                  </span>
                </header>
                <div class="panel-body profile-activity" >

                  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if( strtotime($vo['EndTime']) < time()): echo ($vo["id"]); ?>:<?php echo ($vo["name"]); ?><br/>
                        <div class="activity blue">
                        <span>
                          <i class="fa fa-bolt">
                          </i>
                        </span>
                        <div class="activity-desk">
                          <div class="panel">
                            <div class="panel-body">
                              <div class="arrow">
                              </div>
                              <i class=" fa fa-time">
                              </i>
                              <h4>
                                 <?php echo ($vo["StartTime"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  score:<?php echo ($vo["Rate"]); ?>
                              </h4>
                              <p>
                                    Topic:<?php echo ($vo["Subject"]); ?><br>
                                    Content: <?php echo ($vo["Content"]); ?><br>
                                    address:<?php echo ($vo["address"]); ?><br>
                                    peopel:&nbsp;<?php echo ($vo["peopleNum"]); ?>
                              </p>
                              <img style="width:60px;float:right;" src="/wechat/Public/resouce/img/Screenshot_2017-05-22-21-31-02-551_com.tencent.mo.png">
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php else: ?>
                        <?php echo ($vo["id"]); ?>:<?php echo ($vo["name"]); ?><br/>
                        <a href="<?php echo U('Activity') ?>">
                          <div class="activity terques">
                        <span>
                          <i class="fa fa-shopping-cart">
                          </i>
                        </span>
                            <div class="activity-desk">
                              <div class="panel">
                                <div class="panel-body">
                                  <div class="arrow">
                                  </div>
                                  <i class=" fa fa-time">
                                  </i>
                                  <h4>
                                    <?php echo ($vo["StartTime"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Score:<?php echo ($vo["Rate"]); ?>
                                  </h4>
                                  <p>
                                    Topic:<?php echo ($vo["Subject"]); ?><br>
                                    Content: <?php echo ($vo["Content"]); ?><br>
                                    address:<?php echo ($vo["address"]); ?><br>

                                    peopel:&nbsp;<?php echo ($vo["peopleNum"]); ?>

                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                  <div class="activity alt green">
                    <span>
                        <a href="<?php  echo U('LaunchActivity')?>" style="color:white;"><i class="fa fa-plus">
                      </i></a>
                    </span>
                  </div>
                  <button class="btn btn-info lookmore" >查看更多</button>
                </div>
                
              </section>

            </div>
            <div class="col-lg-6">

				<!-- START PANEL -->
              <section class="panel">
                <header class="panel-heading">
                  Evaluate
                  <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;">
                    </a>
                  
                  </span>
                </header>
                <div class="panel-body" style="display: none">
                  <div class="timeline-messages">
                    <div class="msg-time-chat">
                      <a href="#" class="message-img">
                        <img class="avatar" src="/wechat/Public/Olive/img/chat-avatar.jpg" alt="">
                      </a>
                      <div class="message-body msg-in">
                        <div class="text">
                          <p class="attribution">
                            <a href="#">
                              Chintan
                            </a>
                            at 1:55pm, 13th April 2013
                          </p>
                          <p>
                            Hello, How are you brother?
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="msg-time-chat">
                      <a href="#" class="message-img">
                        <img class="avatar" src="/wechat/Public/Olive/img/chat-avatar2.jpg" alt="">
                      </a>
                      <div class="message-body msg-out">
                        <div class="text">
                          <p class="attribution">
                            
                            <a href="#">
                              Pruthvi
                            </a>
                            at 2:01pm, 13th April 2013
                          </p>
                          <p>
                            I'm Fine, Thank you. What about you? How is going on?
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="msg-time-chat">
                      <a href="#" class="message-img">
                        <img class="avatar" src="/wechat/Public/Olive/img/chat-avatar.jpg" alt="">
                      </a>
                      <div class="message-body msg-in">
                        <div class="text">
                          <p class="attribution">
                            <a href="#">
                              Chintan
                            </a>
                            at 2:03pm, 13th April 2013
                          </p>
                          <p>
                            Yeah I'm fine too. Everything is going fine here.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="msg-time-chat">
                      <a href="#" class="message-img">
                        <img class="avatar" src="/wechat/Public/Olive/img/chat-avatar2.jpg" alt="">
                      </a>
                      <div class="message-body msg-out">
                        <span class="arrow">
                        </span>
                        <div class="text">
                          <p class="attribution">
                            <a href="#">
                              Pruthvi
                            </a>
                            at 2:05pm, 13th April 2013
                          </p>
                          <p>
                            well good to know that. anyway how much time you need to done your task?
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="msg-time-chat">
                      <a href="#" class="message-img">
                        <img class="avatar" src="/wechat/Public/Olive/img/chat-avatar.jpg" alt="">
                      </a>
                      <div class="message-body msg-in">
                        <span class="arrow">
                        </span>
                        <div class="text">
                          <p class="attribution">
                            <a href="#">
                              Chintan
                            </a>
                            at 1:55pm, 13th April 2013
                          </p>
                          <p>
                            Hello, How are you brother?
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-info lookmore" >查看更多</button>
                </div>
              </section>
            <!-- END PANEL -->
			</div>
          </div>
          <!-- END ROW -->
		  

		</section>
      </section>
      <!-- END MAIN CONTENT -->

      <!-- BEGIN FOOTER -->
      <footer class="site-footer">
        <div class="text-center">
          2017 &copy; 湘潭小白网络科技有限公司
          <a href="" target="_blank">
            
          </a>
          .
          <a href="http://www.mycodes.net" class="go-top">
            <i class="fa fa-angle-up">
            </i>
          </a>
        </div>
      </footer>
      <!-- END FOOTER -->
      
    </section>
    <!-- END SECTION -->
    
    
    <!-- BEGIN JS -->
    <script src="/wechat/Public/Olive/js/jquery.js" ></script><!-- BASIC JS LIABRARY -->
    <script src="/wechat/Public/Olive/js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS  -->
    <script src="/wechat/Public/Olive/js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDING JS -->
    <script src="/wechat/Public/Olive/js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS  -->
    <script src="/wechat/Public/Olive/js/jquery.nicescroll.js" > </script><!-- NICESCROLL JS  -->
    <script src="/wechat/Public/Olive/assets/jquery-knob/js/jquery.knob.js" ></script><!-- KNOB JS  -->
    <script src="/wechat/Public/Olive/js/respond.min.js" ></script><!-- RESPOND JS  -->
    <script src="/wechat/Public/Olive/js/common-scripts.js" ></script><!-- BASIC COMMON JS  -->
    <script >
      $(".knob").knob();
    </script>
    <!-- END  JQUERY -->
  </body>
</html>