<?php

    if (isset($_POST['button']))
    {
	shell_exec("/home/pi/projects/campi/bin/take_pic.sh");
    }
?>

<html>
 <head>
  <title>picture taker</title>
  <meta http-equiv="refresh" content="4000">
<style>
body  {
    background-image: url("./ram/cam.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: #cccccc;
}
</style>
 </head>
 <body>
<form method="post">
<input name="button" style="width: 120px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="submit" value="Take Picture" onclick="" />
<input name="button" style="width: 120px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="submit" value="Start roll." onclick="" />
</form>

<img src="./ram/cam_text.jpg" id="reloader" onload="setTimeout('document.getElementById(\'reloader\').src=\'./ram/cam_text.jpg?\'+new Date().getMilliseconds()', 5000)" width="160" height="120" />

 </body>
</html>

