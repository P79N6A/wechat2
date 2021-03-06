<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no, width=device-width" name="viewport">
	<title>E-corner Login</title>
	<link  href="/wechat/Public/css/style.css" rel="stylesheet"/>
	<link href='https://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<link href="/wechat/Public/css/bootstrap3.css" rel="stylesheet">

    <link href="/wechat/Public/Olive/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->
	<link href="/wechat/Public/Olive/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->
    <link href="/wechat/Public/Olive/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME CSS  -->
    <link href="/wechat/Public/Olive/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS  -->
    <link href="/wechat/Public/Olive/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS  -->
	<link href="/wechat/Public/css/ChineseStudent/register.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS  -->

	<script src="/wechat/Public/js/jquery-1.8.2.min.js"></script>
	<script src="/wechat/Public/js/bootstrap3.js"></script>
	<script src="/wechat/Public/js/ChineseStudent/register.js"></script>
</head>

<script type="text/javascript">
	/*用于标记是否完成手机的验证和接受条款*/
	AcceptSign = 0;
	Phone = 0;
	MODULE="/wechat/index.php/Home";
	CONTROLLER ="/wechat/index.php/Home/ChineseStudent";
	login="<?php echo U('ChineseStudent/Find')?>";
</script>
<body>
<!--modal-->


<!-- 模态框（Modal） -->
<div class="modal fade" id="direction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:5px;font-size:38px;">
    <div class="modal-dialog" style="width:95%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                	<h4 class="modal-title" id="myModalLabel" >Direction</h4>
                </center>
            </div>
            <div class="modal-body" >
            
			<div class="list-group">
			    <a href="#" class="list-group-item active title-color">
			        <h4 class="list-group-item-heading  head">
			            5 星
			        </h4>
			    </a>
			    <a href="#" class="list-group-item ">
			        <p class="list-group-item-text ">
			            母语使用者
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading ">
			            4 星
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			           流利，准确，偶有错误
						能有效运用英语,虽然偶尔出现不准确、不适当和误解。大致可将复杂的英语掌握的不错，也能理解详细的推理。
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading">
			            3 星
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			            能够较流利使用英语 
						大致能有效运用英语，虽然有不准确、不适当和误解发生但能使用并理解比较复杂的英语，特别是在熟悉的语境下。
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading">
			            2 星
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			            能够较流利使用英语 
						大致能有效运用英语，虽然有不准确、不适当和误解发生但能使用并理解比较复杂的英语，特别是在熟悉的语境下。
				
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading">
			            1 星
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			            掌握简单词组 
						除非在熟悉的语境下，几乎只能使用孤立单词或短句表达最基本的信息，不能达成有效沟通。难以听懂或者看懂英语。
			        </p>
			    </a>
			</div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close" data-dismiss="modal" >Close</button>
               
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--modal-->

<img    style="width:100%;"  >


<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50%;font-size:38px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                	<h4 class="modal-title" id="myModalLabel" >验证</h4>
                </center>
            </div>
            <div class="modal-body" style="height: 150px;">
            	<form role="form">
				  <div class="form-group">
				    <span>
				    	<input type="text" class="form-control tel" id="phone" placeholder="电话号码" >
				    	
				    </span>



				  </div>


				  <div class="form-group">
				    <input type="text" id="pin" class="form-control verify" placeholder="验证码" >

				    <button type="button" class="btn btn-info getverify" id="getpit" >获取验证码</button>
				  
				  </div>

				 </form>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:18px;">关闭</button>
                <button type="submit" class="btn btn-primary" id="messagebtn" style="font-size:18px;" data-dismiss="modal">确认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--modal-->


	<div class="lg-container" style="width:95%;" >
		<h1  class="BaseColor register" > 注册 </h1>
		<form action="" id="lg-form" name="lg-form" method="post">
			
			<div>

				<input  class="input" type="text" name="ChineseName" id="ChineseName" placeholder="中文名"/>
			</div>

			<div>

				<input  class="input" type="text" name="EnglishName" id="EnglishName" placeholder="英文名"/>
			</div>
			<div>
				<!--语言的添加-->
				<div id="content">
					
				</div>
				<!--语言的添加-->
				<button class="btn  btn-default BaseColor Language" id="more" type='button'>+language</button>
				<img src="/wechat/Public/resouce/img/u=5599099874283859303&fm=21&gp=0.png" class="Limg" data-toggle="modal"
					 data-target="#direction" style="cursor:pointer" />
			</div>
			<div>
				<label for="Interest">兴趣:</label>
				<input  class="input"type="text" name="Interest" id="Interest" placeholder="兴趣" />
			</div>
			<div>
				<label for="Major">专业:</label>
				<input class="input" type="text" name="Major" id="Major" placeholder="专业" />
			</div>

			<div>
				<label for="resume">Intruduction:</label>
				<textarea type="text" name="resume" id="resume" placeholder=" 个人简介"></textarea>
			</div>

			<div>
				
				<button   data-toggle="modal" data-target="#myModal" class="btn btn-default msgbtn" >短信验证</button>
			</div>





			
			
			<script type="text/javascript">

			     $("#getpit").click(function(){
			    	$(this).attr("disable");
			    	var i=60;
			    	var s=setInterval(function(){

						$("#getpit").text(i);
						i=i-1;
						if(i==0){
							$("#getpit").text("获取验证码");
							clearInterval(s);
						}
			    	},1000)
			    })
			</script>

			<div style="overflow: auto; ">				
				<button type="button"  class="btn btn-default BaseColor" id="login" style="width:100%;"  >完成</button>

					<input class="checkbox" type="checkbox"  id="accept"  />
						<div class="conditionfont">接受 <a href="#">《Student in terms of Service》</a></div>


			</div>
			


		</form>
		<div id="message"></div>
	</div>
</body>
</html>