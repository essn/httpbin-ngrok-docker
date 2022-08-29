<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<style type="text/css">
body {background-color: #fff; color: #222; font-family: sans-serif;}
pre {margin: 0; font-family: monospace;}
a:link {color: #009; text-decoration: none; background-color: #fff;}
a:hover {text-decoration: underline;}
table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
.center {text-align: center;}
.center table {margin: 1em auto; text-align: left;}
.center th {text-align: center !important;}
td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
th {position: sticky; top: 0; background: inherit;}
h1 {font-size: 150%;}
h2 {font-size: 125%;}
.p {text-align: left;}
.e {background-color: #ccf; width: 300px; font-weight: bold;}
.h {background-color: #99c; font-weight: bold;}
.v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
.v i {color: #999;}
img {float: right; border: 0;}
hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
</style>

<?php

$ngrok = json_decode(file_get_contents("http://ngrok:4040/api/tunnels"));
$public_url = $ngrok->tunnels[0]->public_url;
?>


<title>HTTPBIN LaunchPad</title><meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE" /></head>
<body><div class="center">
<h1>HTTPBIN + Ngrok</h1>
<h2><a name="module_cli_server">Servers</a></h2>
<table>
<tr><td class="e">HTTPBin</td><td class="v"><a href="<?=$public_url?>" target="_blank"><?=$public_url?></a></td></tr>
<tr><td class="e">Ngrok Request Inspector</td><td class="v"><a href="http://localhost:4040" target="_blank">http://localhost:4040</a></td></tr>
</table>
<h2><a name="module_cli_server">Example Webhooks</a></h2>
<table>
<tr><td class="e">Status 200 </td><td class="v"><a href="<?=$public_url?>/status/200"><?=$public_url?>/status/200</a></td></tr>
<tr><td class="e">Status 204 </td><td class="v"><a href="<?=$public_url?>/status/204"><?=$public_url?>/status/204</a></td></tr>
</table>
<hr />
</table>