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
    <style>
        pre {
            width: 400px;
            white-space: pre-wrap;
            word-break: break-all;
            word-wrap: break-word;
        }
    </style>
  <SCRIPT LANGUAGE="JavaScript">


function copyit(theField) {
var tempval=eval("document."+theField)
tempval.focus()
tempval.select()
therange=tempval.createTextRange()
therange.execCommand("Copy")
}
</script>
  </head>
  <body>
    <center><img src="banner.jpg" alt="image description" width="500"></center>
    <p>
    <form name="tcode">
    <pre class="form">
    <h1 align="center">Tournament Code generated</h1>
<textarea class="codebox-sm" name="select1">
<?php echo $url ?>
</textarea>
<input onclick="copyit('tcode.select1')" type="button" value="Select All" name="cpy">
</pre>
</form>
  </body>
</html>
