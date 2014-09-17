<?php
$conf = array('name' => $_GET['name'],
              'extra' => $_GET['id'],
              'password' => $_GET['password'],
              'report' => $_GET['report']);
$json_base64 = base64_encode(json_encode($conf, JSON_UNESCAPED_SLASHES));

$url_format = "pvpnet://lol/customgame/joinorcreate/%s/%s/%s/%s/%s";
$url = sprintf($url_format, $_GET['map'], $_GET['type'], $_GET['teamsize'], $_GET['spectators'], $json_base64);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css"> 
    <title>Denewb TCode</title>
	<script type="text/javascript" src="jquery-1.8.0.min.js"></script> 
	<script src="jquery.zclip.js"></script>
    <style>
        pre {
            width: 400px;
            white-space: pre-wrap;
            word-break: break-all;
            word-wrap: break-word;
        }
    </style>
	<script>
		$(document).ready(function(){
			$("a#copy-link").zclip({
				path:"ZeroClipboard.swf",
				copy:function(){return $("input#copy-box").val();}
			});
		});
	</script>
  </head>
  <body>
    <center><img src="banner.jpg" alt="image description" width="500"></center>
    <p>
    <h1 class="form" align="center">Tournament code generated</h1>
    <pre class="form"><?php echo $url ?></pre>
	<input type="text" id="copy-box" value="testtext" />
	<a href="#copy" id="copy-link">Copy Now</a>
  </body>
</html>
