<?php	session_start();
	$SCHM	=	$_SERVER['REQUEST_SCHEME'];
	$HTTP	=	$_SERVER['HTTP_HOST'];
	$GETS	=	$_SERVER['REQUEST_URI'];
	$CURL	=	$SCHM . '://' . $HTTP . $GETS;
	$HOST	=	$SCHM . '://' . $HTTP;
	$ERROR = 0;
	$Fname	=	$Email	=	$Qtext	=	'';
	$Label = array('', 
	'Enter Full Name', 
	'Enter Your Email', 
	'Enter Your Question',
	'Enter Valed Email Address'
	);
	if(isset($_POST['ASKQ'])){
	$Fname = $_POST['Fname'];
	$Email = $_POST['Email'];
	$Qtext = $_POST['Qtext'];
	if(empty($Fname)){$ERROR = 1;}
	else{
	if(empty($Email)){$ERROR = 2;}
	else{
	if(empty($Qtext)){$ERROR = 3;}
	else{
	$Email = filter_var($Email, FILTER_SANITIZE_EMAIL);
	if (strpos($Email, "@") !== false) {
	if (strpos($Email, ".") !== false) {

	}}else{$Email = '';$ERROR = 4;}
	}}}
	if($Fname AND $Email AND $Qtext){

	$MSG = '<h2>'.$Fname.'</h2><br><h3>'.$Email.'</h3><br>'.$Qtext;

	require_once "phpmailer/class.phpmailer.php";
	$mail = new PHPMailer(true);
	$mail->IsSMTP();
	$mail->SMTPDebug = 0;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	// Your Gmail Address
	$mail->Username = 'YourGmail@gmail.com';
	// Your Gmail Password 
	$mail->Password = 'YourGmail_Password';
	$mail->SetFrom('YourGmail@gmail.com', $Fname);
	$mail->AddAddress('YourGmail@gmail.com');
	$mail->Subject = 'Nexample ASK Question ';
	$mail->WordWrap   = 80;
	$mail->MsgHTML($MSG);
	$mail->IsHTML(true);
if($mail->Send()){

}else{

}
	unset($_SESSION['ASKQ']);
	}else{
	$_SESSION['ASKQ'] = array($Fname, $Email, $Qtext, $ERROR);
	}
	header("location: $CURL");
	}
	if(isset($_SESSION['ASKQ'])){
	$ASKQ = $_SESSION['ASKQ'];
	$Fname = $ASKQ[0];
	$Email = $ASKQ[1];
	$Qtext = $ASKQ[2];
	$ERROR = $ASKQ[3];
	}
	if(isset($_GET['STYLE'])){
	header("Content-type: text/css");
	require_once 'STYLE.php';
	exit();	}else{?>
<!DOCTYPE html>
<html lang="en">
<head>		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Ask Your Question ? This Form Create By Nexample">
		<meta name="author" content="">
		<title>Nexample</title>
		<style>@import url("?STYLE");</style>
</head><body>
	<div class="form">
	<ul name="Ask Your Question ?" foot="This Form Create By Nexample ">
		<li class='tbg'></li>
	<form method="post" action="" >
		<li id="msg"></li>
		<li id="li1" title="Full Name *">	<input type="text" name="Fname" value="<?=$Fname;?>">	</li>
		<li id="li2" title="Your Email *">	<input type="text" name="Email" value="<?=$Email;?>">	</li>
		<li id="li3" title="Your Question ? *">	<textarea name="Qtext"><?=$Qtext;?></textarea>		</li>
		<li class='submit'>		<input type="submit" name="ASKQ" value="">		</li>
	</form>
	</ul>
	</div>
</body></html>
<?php }?>