<head>

<script type="text/JavaScript">

var timeoutPeriod = 100;
var imageURI = './ram/cam_text.jpg';
var x=0, y=0;
var img = new Image();
img.onload = function() {
    var canvas = document.getElementById("x");
    var context = canvas.getContext("2d");

    context.drawImage(img, x, y);
//    x+=20; y+=20;
    setTimeout(timedRefresh,timeoutPeriod);
};

function timedRefresh() {
    // just change src attribute, will always trigger the onload callback
    img.src = imageURI + '?d=' + Date.now();
}


</script>

<title>JavaScript Refresh Example</title>

</head>

<body onload="JavaScript:timedRefresh(1000);">

<canvas id="x" width="600" height="600" />

</body>
</html>
