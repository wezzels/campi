<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Switch Images</title>
    <script type="text/javascript">
      var aImages  =  [ "http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/108.gif",
                        "http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/106.gif",
                        "http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/102.gif",
                        "http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/101.gif",
                        "http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/103.gif"];
      var oImage   =  null;
      var iIdx     =  0;
      function play(){
        try{
          //look only once in DOM and cache it
          if(oImage===null){
            oImage  =  window.document.getElementById("imgHolder");
          }
          oImage.src  =  aImages[(++iIdx)%(aImages.length)];
          setTimeout('play()',5000);
        }catch(oEx){
          //some error handling here
        }
      }    
    </script>
  </head>
  <body onload="play()">
    <img id="imgHolder" />
  </body>
</html>
