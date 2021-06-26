body{
	margin:0px;
	margin:0px auto;
	width: 100%;
	float:center;
	color: rgba(0,139,139, 0.5);
	font:normal 12px/20px "Arial", Arial, Helvetica, sans-serif;
}.form{
	margin:0px;
	margin:0px auto;
	width: 350px;
	float:center;
}
ul{
	width: 100%;
	float:left;
	list-style:none;
	margin:0px;margin-top:50px;
	margin-left:-25px;
	padding:30px 50px;
	border-top: solid 2px rgba(0,139,139, 0.4);
	border-bottom: solid 1px rgba(0,139,139, 0.4);
	background:#fff;
	box-shadow: 0px 0px 10px 0px  rgba(0,0,0, 0.1);
	position:relative;
	overflow:hidden;
}li{
	width: 100%;
	float:left;
	margin:7px -11px;
	padding:10px 10px;
	z-index:20;
	position:relative;
	border: solid 1px rgba(0,139,139, 0.4);
}input, textarea{
	width: 100%;
	float:left;
	border:0;
	color: rgba(0,0,0, 0.5);
	background:rgba(0,0,0, 0.0);
	font:normal 12px/20px "Arial", Arial, Helvetica, sans-serif;
}textarea{
	height: 140px; 
	resize:none;
}
li:before{
	content:""attr(title)"";
	float:left;margin-top:-16px;margin-left:-3px;	padding:0px 3px;
	font:bold 11px/10px "Arial", Arial, Helvetica, sans-serif;
	background:#fff;
	z-index:20;
	position:relative;
}ul:before{
	content:""attr(name)"";
	float:left;
	margin-top:-10px;
	margin-left:-10px;
	padding:0px 3px;
	font:normal 20px/35px "Arial", Arial, Helvetica, sans-serif;
	background:#fff;
}ul:after{
	content:""attr(foot)"";
	float:left;
	margin-top:0px;
	margin-left:-11px;	padding:0px 3px;
	font:normal 11px/18px "Arial", Arial, Helvetica, sans-serif;
}
.submit{
	height: 20px; 
	background:rgba(0,139,139, 0.6);
	border: solid 1px rgba(0,139,139, 0.1);
}.submit:before{
	content:"Send Now";
	width: 100%;
	float:left;
	margin:0px;
	padding:0px;
	font:bold 13px/20px "Arial", Arial, Helvetica, sans-serif;
	text-align:center;
	color: #fff;
	background:rgba(0,139,139, 0.0);
}.tbg{
	width: 200%;
	height: 200%; 
	position: absolute;top:0px;left:185px;
	margin:0px;
	padding:0px;
	background:rgba(0,0,0, 0.1);
	border:0;
	z-index:10;
	transform: rotate(45deg);
	opacity: 0.1;
}[type=submit]{
	height: 100%; 
	z-index:20;
	position: absolute;top:0px;left:0px;
}
#li<?=$ERROR;?>:before{
	color: rgba(255,0,0, 0.5);
}#msg{
	width: 100%;
	float:left;
	margin:0px -11px;
	padding:0px 10px;
	border:0;
}#msg:before{
	content:"<?=$Label[$ERROR];?>";
	width: 100%;
	float:left;margin-top:-0px;margin-left:0px;	padding:0px;
	font:bold 12px/20px "Arial", Arial, Helvetica, sans-serif;
	color: rgba(255,0,0, 0.5);
}