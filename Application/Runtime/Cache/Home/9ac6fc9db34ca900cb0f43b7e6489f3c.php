<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html  style="font-size: 124.2px;">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="format-detection" content="telephone=no, email=no" />
  <meta name="description" content="" />
  <meta name="apple-mobile-web-app-title" content="" />
  <meta name="theme-color" content="#0096ff" />
  <meta http-equiv="x-dns-prefetch-control" content="on" />
  <title>E-corner</title>

  <link rel="stylesheet" href="/wechat/Public/css/vue-swipe.css" />
  <meta name="viewport" content="initial-scale=0.3333333333333333, maximum-scale=0.3333333333333333, minimum-scale=0.3333333333333333, user-scalable=no" />
  
  <link rel="stylesheet" type="text/css" href="/wechat/Public/css/search.css">

  <link href="/wechat/Public/css/msite.096c721.css" rel="stylesheet" />

  <script type="text/javascript" src="/wechat/Public/js/jquery-1.7.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/wechat/Public/Olive/css/bootstrap.min.css">

 

  <link href="http://www.jq22.com/jquery/bootstrap-3.3.4.css" rel="stylesheet">


  <script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>

  <link href="/wechat/Public/bootstrap-star-rating-master/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>

  <script src="/wechat/Public/bootstrap-star-rating-master/js/star-rating.js" type="text/javascript"></script>
  
  <script type="text/javascript" src="/wechat/Public/Olive/js/bootstrap.min.js"></script>
<style type="text/css">
.caption{
  display: none !important;
}
.glyphicon {
 display: none !important; 
}
.rating-gly-star{
  margin-left: 60px !important;
  margin-top:-60px !important;
  letter-spacing: 60px;
  font-size: 50px;
}
.rating-gly {
  font-size: 40px !important;
  margin-top: -25px !important;
  margin-left: -200px;
}
</style>
 </head>

 <body style="font-size: 36px;">

  

   
    <header class="index-3O8rT">
     <div class="index-MAORp">
        <div class="index-3vsmj">
           <div><a href="<?php echo U('Person')?>"><img style="width:150px;" src="/wechat/Public/resouce/img/20170522200815.png" /></a></div>
           &nbsp;&nbsp;&nbsp;&nbsp;<span class="index-1cnKa" style="font-size:50px;">湖南科技大学逸夫楼</span>
           <svg class="index-9eIfV">
            <use xlink:href="#arrow"></use>
           </svg>
        </div>
        <aside class="index-2LvmP">
           <div>
            <h2 class="index-17uRU">18&deg;</h2>
            <p class="index-3-P-K">多云夜</p>
            </div>
            <img alt="天气图标" class="index-wRPUE" src="./饿了么网上订餐_files/442ec3a18ba42c024cc3e14d1998bpng.png" />
        </aside>
     </div>
     <form action="https://h5.ele.me/msite/">
      <input type="text" placeholder="搜索活动、主题、名字" aria-label="搜索活动、主题、名字" class="index-20Oji" />
     </form>
     <div class="index-6hVEQ">


     </div>
    </header>


   
    <div class="foodentry-wrapper"  id="selectContent" style="overflow: hidden; ">
    <div style="overflow:hidden;">
        <div id="sort" style="width: 45%;float: left;text-align: center;border-right: 1px solid #E6E6E6;font-size:50px;height: 130px;line-height: 130px;">排序</div>

        <div id="selectItem" style="width: 45%;float: left;text-align: center;font-size:50px;height: 130px;line-height: 130px;">筛选</div>
        
        <div id="addContent"  style="display:none;width:100%;">
          
          <div style=" padding-left: 80px;line-height:150px;font-size:40px;color:#333;font-family: 'Helvetica Neue',Tahoma,Arial,PingFangSC-Regular,'Hiragino Sans GB','Microsoft Yahei',sans-serif;border-bottom:  1px solid #ddd;border-top:  1px solid #ddd;width:100%;clear:both;"> 距离</div>
          
          <div style=" padding-left: 80px;line-height:150px;font-size:40px;color:#333;font-family: 'Helvetica Neue',Tahoma,Arial,PingFangSC-Regular,'Hiragino Sans GB','Microsoft Yahei',sans-serif;border-bottom:  1px solid #ddd;border-top:  1px solid #ddd;width:100%;clear:both;"> 人数</div>
          
          <div style=" padding-left: 80px;line-height:150px;font-size:40px;color:#333;font-family: 'Helvetica Neue',Tahoma,Arial,PingFangSC-Regular,'Hiragino Sans GB','Microsoft Yahei',sans-serif;border-bottom:  1px solid #ddd;border-top:  1px solid #ddd;width:100%;clear:both;"> 时间</div>
          
          <div style=" padding-left: 80px;line-height:150px;font-size:40px;color:#333;font-family: 'Helvetica Neue',Tahoma,Arial,PingFangSC-Regular,'Hiragino Sans GB','Microsoft Yahei',sans-serif;border-bottom:  1px solid #ddd;border-top:  1px solid #ddd;width:100%;clear:both;"> 评分</div>
          
          
          <div style=" padding-left: 80px;line-height:150px;font-size:40px;color:#333;font-family: 'Helvetica Neue',Tahoma,Arial,PingFangSC-Regular,'Hiragino Sans GB','Microsoft Yahei',sans-serif;border-bottom:  1px solid #ddd;border-top:  1px solid #ddd;width:100%;clear:both;"> 价格</div>

        </div>
</div>
        <div id="addselectContent" style="display:none">
            <form class="bs-example bs-example-form" role="form">
              <div class="row">
                  <div class="col-lg-12"><center>
                      <div class="input-group" style="width:90%;">
                          
                               <input type="text" class="form-control" style="height:100px;font-size:38px;width:100%;" placeholder="地址" />
                          
                      </div><!-- /input-group --></center>
                  </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              
              <div class="row">          
                  <div class="col-lg-12">
                      <div class="input-group" style="margin-top: 40px;margin-left:30px; ">
                      
                          <span   style="font-size:40px;position: absolute;margin-left:30px;margin-top:0px;" id="timeselect">时间选择</span>
                         
                           <input type="datetime-local" value="0000-0000-04T13:00:00" style=" right;color:#72D0EB;background:#ffffff;width:800px;border: 0px solid  #ffffff;margin-left:70px;font-size:40px;-webkit-appearance: none;padding-left: 250px;" id="time"/>

                      <script type="text/javascript">
                        $("#time").click(function(){
                            
                             //  $("#timeselect").css("display","none");

                        })
                      </script>

      
                      </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                  <br>
              </div>

              <div class="row">
                  <div class="col-lg-12">

                      <span ><span style="font-family: 'Helvetica Neue',Tahoma,Arial,PingFangSC-Regular,'Hiragino Sans GB','Microsoft Yahei',sans-serif;margin-top:0px; margin-left: 60px;font-size:40px;float:left;">中文水平</span><input id="input-21b" value="4" type="number" class="rating" min=0 max=5 step=1 data-size="xs" ></span>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">

                      <span ><span style="margin-top:0px; margin-left: 60px;font-size:40px;float:left;">英语水平</span><input id="input-21b" value="4" type="number" class="rating" min=0 max=5 step=1 data-size="xs" ></span>
                  </div>
              </div>
          </form>

        </div>

    </div>
<script type="text/javascript">
  $("#selectItem").click(function(){
   
    $("#addContent").fadeOut()
    $("#addselectContent").slideToggle();

     
  })
</script>

<script type="text/javascript">
  
$("#sort").click(function(){

$("#addselectContent").fadeOut()
    $("#addContent").slideToggle();
     
})

</script>


    <h3 class="index-title"></h3>

    <!---->
    <section infinite-scroll-disabled="busy" infinite-scroll-distance="60" infinite-scroll-immediate-check="false" class="shoplist" style="clear:both;">
    
     <section class="index-container_2XMzI shop-0">
        <div class="logo-container_1XLJl_0">
         <div class="logo-main_1kulr_0">
          <a href="<?php echo U('ChineseStudent/Activity')?>">
          <img alt="上海麦当劳仙乐斯餐厅" class="logo-logo_2XR1m_0" src="/wechat/Public/touxiang/avatar1.jpg" /> 
          <!---->
          </a>
         </div> 
         <!---->
        </div> 
      <div class="index-main_2HHPe">
         <section class="index-line_1Zyr1">
          <h3 class="index-shopname_3_J4F index-premium_eGB7C"> 主题内容 </h3> 
          <div class="index-supportWrap_VWrQG">
           <div class="activity-container_2EaDo_0 activity-containerNoWrap_2zBBg_0">
            <i class="activity-activityIcon_1iJyG_0 activity-icononly_3QM3P_0" style="color: rgb(153, 153, 153); border-color: rgb(221, 221, 221);"> 5月9日 22:30---5月9日 23:00</i> 
            <!---->
           </div>
          </div>
         </section> 
       <section class="index-line_1Zyr1">
          <div class="index-rateWrap_3sCb3">
           <div class="rating-wrapper_36aX1_0">
            <div class="rating-max_1MKzt_0">
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
            </div> 
            <div class="rating-rating_1ZAfX_0" style="width: 88%;">
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
             <svg>
              <use xlink:href="#rating-star"></use>
             </svg>
            </div>
           </div> 
           <span class="index-rate_2O_yP"></span> 
           <input id="input-2ba" type="number" class="rating" min="0" max="5" step="0.1" data-stars=5

    data-symbol="&#xe005;" data-default-caption="{rating} hearts" data-star-captions="{}" > &nbsp;&nbsp;0.4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <span>1499场</span>
          </div> 
          <div class="index-deliveryWrap_1Q_ky">
           <!----> 
           <!---->
          </div>
       </section> 
       <section class="index-line_1Zyr1">
          <div class="index-moneylimit_1xDf3">
           <span>咖域咖啡</span> 
           
           <span>&yen;47/人</span>
          </div> 
          <div class="index-timedistanceWrap_2RmAM">
           <span class="index-distanceWrap_HYwgP">469m</span> 
           <span class="index-timeWrap_1pa5y"> 29分钟 </span>
          </div>
       </section> 
       <!---->
      </div> 
     </section>


    </section>

    <p class="index-loadmore" style="display: none;"><span>正在载入更多商家...</span></p>


    <div class="BackTop-wrapper_3XDbcaq" style="display: none;">
       <svg class="BackTop-icon_2Js4K94">
          <use xlink:href="#back-top.7a234e5"></use>
       </svg>
    </div>

 </body>
</html>