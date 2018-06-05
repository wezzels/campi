<?php

    if (isset($_POST['button']))
    {
	shell_exec("/home/pi/projects/campi/bin/take_pic.sh");
#shell_exec("/usr/bin/raspistill -t 0 -q 70 -w 1920 -h 1080 -o /var/www/html/pics/image.jpg 2>&1");
    }
?>

<html>
 <head>
  <title>picture taker</title>
<style>
body  {
    background-image: url("./pics/image.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
    background-color: #cccccc;
}
</style>
 </head>
 <body>
<form method="post">
<input name="button" style="width: 150px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="submit" value="Take Picture" onclick="" />
<input name="button" style="width: 150px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="submit" value="Start roll." onclick="" />
</form>

<img src="./ram/cam_text.jpg" id="reloader" onload="setTimeout('document.getElementById(\'reloader\').src=\'./ram/cam_text.jpg?\'+new Date().getMilliseconds()', 6000)" width="160" height="120" />

 </body>
</html>

