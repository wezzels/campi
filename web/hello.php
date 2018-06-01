<?php

    if (isset($_POST['button']))
    {
	shell_exec("/home/pi/take_pic.sh");
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
    background-size: cover;
    background-color: #cccccc;
}
</style>
 </head>
 <body>
<script>
var myImageElement = document.getElementById('myImage');
myImageElement.src = './pics/cam.jpg?rand=' + Math.random();

setInterval(function() {
    var myImageElement = document.getElementById('myImage');
    myImageElement.src = './pics/cam.jpg?rand=' + Math.random();
    console.log(myImageElement);
}, 10);
</script>

<form method="post">
<input name="button" style="width: 150px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #ffff00; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="submit" value="Take Picture" onclick="" />
</form>

<img src="./pics/cam.jpg" id="myImage" height="100" width="100" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script&gt;
<script language="javascript">
$(init)
function init() {
refresh();
}
function refresh() {
var strImageUrl = "./pics/cam.jpg"; + Date.now();
var img = new Image();
img.onload = function() {
$("#img").attr('src',strImageUrl);
refresh();
}
img.src = strImageUrl;
}
</script>
<img id="img">


 </body>
</html>

