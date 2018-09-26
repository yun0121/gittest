<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/sui-append.min.css">
	<link rel="stylesheet" href="css/sui-append.min.css">
	<style>
		*{
			margin:0;
			padding:0;
		}
		#box{
			width:1300px;
			height: 600px;
			margin:0 auto;
			border:1px solid;
			background-color: rgb(242,242,242);
		}
		.topnav{
			height: 55px;
			background-color: blue;
		}
		.text{
			width: 270px;
			height: 55px;
			margin:0 auto;
		}
		h1{
			color:#fff;
			font-family:宋体;
			line-height: 55px;
		}4
		.sui-layout .content{
			width: 800px;
			margin-left: 404px;
		}
		.sui-container{
			margin-top: 50px;
		}
		.sui-layout{
			width: 1300px;
		}
		#box1{
			width: 200px;
			height: 20px;
			position: absolute;
			left: 510px;
			bottom: 49px;
			border:1px solid red;
			color:red;
		}
		.content .inner li{
			display: inline-block;
			width: 270px;
			/*background-color: rgb(255,255,255);*/
			height: 262px;
			margin: 47px;
			float: left;
		}
		.content .inner li .block{
			font-size: 100%;
			margin-bottom: 5px;
		}
		.content .inner li .block .img{
			width: 244px;
			height: 147px;
		}
		.content .inner li .dat{
			height: 15px;
			font-size: 100%;
			color: #f7931e;
		}
		.content .inner li .tit a{
			color: #3e3a39;
			overflow: hidden;
		}
		.content .inner li .tit h2{
			font-size: 1em;
			font-weight: normal;
			cursor:pointer;
		}
		.content .inner li .dig{
			color: #b3b3b3;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;

		}
		#oo{
			display: inline-block;
			width: 367px;
			height: 50px;
			position: absolute;
			top: 60px;
			right: 850px;
			text-align: center;
			font-size: 25px;
			line-height: 50px;
			font-weight: 700;
		}
	</style>
</head>
<body>
<div id="box">
		<div class="topnav">
			<div class="text">
				<h1>增加候选人</h1>
			</div>
		</div>
	<div class="sui-container">
		<div class="sui-layout">
  		<div class="content">
  			<p class="sui-text-xxlarge" ></p>
  			<form id="form1" action="save.php" method="post" class="sui-form form-horizontal sui-validate" enctype="multipart/form-data" >
  			<div class="control-group">
          		<label class="control-label" for="inputEmail">活动名称:</label>
          	 <div class="controls">
           		<input type="text" readonly= "true" name="hd" class="input-large input-fat" value="拉姆.查兰管理实践将之最受关注将">
           	</div>
      		</div>
  			<div class="control-group">
    			<label class="control-label" for="inputEmail">姓名:</label>
   				 <div class="controls">
     				 <input id="xm" name="xm" class="input-large input-fat" type="text" placeholder="请输入" data-rules="required|minlength=5|maxlength=50">
   				 </div>
 			</div>
      <div class="control-group">
          <label class="control-label" for="inputEmail">照片:</label>
           <div class="controls">
             <input type="file" name="file">
           </div>
      </div>
      <div class="control-group">
          <label class="control-label" for="inputEmail">职位:</label>
           <div class="controls">
             <input id="zw" name="zw" class="input-large input-fat" type="text" placeholder="请输入">
           </div>
      </div>
       <div class="control-group">
          <label class="control-label" for="inputEmail">个人简介:</label>
           <div class="controls">
            <textarea rows="7" cols="100" name="grjj"></textarea>
           </div>
      </div>
       <div class="control-group">
          <label class="control-label" for="inputEmail">案例简介:</label>
           <div class="controls">
            <textarea rows="7" cols="100" name="aljj"></textarea>
           </div>
      </div>
      <div class="control-group">
          <label class="control-label" for="inputEmail">案例链接:</label>
           <div class="controls">
            <textarea rows="7" cols="100" name="allj"></textarea>
           </div>
      </div>
      <div class="control-group">
          <label class="control-label" for="inputEmail">票数:</label>
           <div class="controls">
            <textarea rows="1" cols="10" name="piaoshu"></textarea>
           </div>
      </div>
      <div class="controls">
           <select id="status1" name="status1">
   			<option value='1'>正常</option>
   			<option value='0'>禁用</option>
          </select>
       </div>
 			<div class="control-group">
 				<label class="control-label"></label>
 				<div class="controls">
 					<input type="submit" value="提交" name="" class="sui-btn btn-large btn-primary">
 				</div>
 			</div>
  			</form>
  		</div>
</div>
	</div>