<?php
function up($m){
	//prawa gasienica
	shell_exec(' echo "1" > /sys/class/gpio/gpio22/value');
	shell_exec(' echo "0" > /sys/class/gpio/gpio23/value');
	//lewa gasienica
	shell_exec(' echo "1" > /sys/class/gpio/gpio24/value');
	shell_exec(' echo "0" > /sys/class/gpio/gpio25/value');
	//jedziemy
    shell_exec(' pigs p 17 '.$m.'');
	shell_exec(' pigs p 21 '.$m.'');
}
function stop($m){
	//prawa gasienica
	shell_exec(' echo "0" > /sys/class/gpio/gpio22/value');
	shell_exec(' echo "0" > /sys/class/gpio/gpio23/value');
	//lewa gasienica
	shell_exec(' echo "0" > /sys/class/gpio/gpio24/value');
	shell_exec(' echo "0" > /sys/class/gpio/gpio25/value');
	//jedziemy
    shell_exec(' pigs p 17 '.$m.'');
	shell_exec(' pigs p 21 '.$m.'');
}
function down($m){
	//prawa gasienica
	shell_exec(' echo "0" > /sys/class/gpio/gpio22/value');
	shell_exec(' echo "1" > /sys/class/gpio/gpio23/value');
	//lewa gasienica
	shell_exec(' echo "0" > /sys/class/gpio/gpio24/value');
	shell_exec(' echo "1" > /sys/class/gpio/gpio25/value');
	//jedziemy
    shell_exec(' pigs p 17 '.$m.'');
	shell_exec(' pigs p 21 '.$m.'');
}

function left($m){
	//prawa gasienica
	shell_exec(' echo "1" > /sys/class/gpio/gpio22/value');
	shell_exec(' echo "0" > /sys/class/gpio/gpio23/value');
	//lewa gasienica
	shell_exec(' echo "0" > /sys/class/gpio/gpio24/value');
	shell_exec(' echo "1" > /sys/class/gpio/gpio25/value');
	//jedziemy
    shell_exec(' pigs p 17 '.$m.'');
	shell_exec(' pigs p 21 '.$m.'');
}
function right($m){
	//prawa gasienica
	shell_exec(' echo "0" > /sys/class/gpio/gpio22/value');
	shell_exec(' echo "1" > /sys/class/gpio/gpio23/value');
	//lewa gasienica
	shell_exec(' echo "1" > /sys/class/gpio/gpio24/value');
	shell_exec(' echo "0" > /sys/class/gpio/gpio25/value');
	//jedziemy
    shell_exec(' pigs p 17 '.$m.'');
	shell_exec(' pigs p 21 '.$m.'');
}

?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset='utf-8'>
    <title>SpyPiBot - sterowanie</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <script src="joy/virtualjoystick.js"></script>
    	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    
  </head>
  <body>


<div class="container">

<span id="result"></span>
<br />
<center>
<div class="jumbotron">  
<video controls="controls" width="640" height="480" autoplay="autoplay" >
      <source src="http://192.168.1.19:8090" type="application/x-mpegURL" />
    </video>
<p><h5>SpyPiBot</h5></p>
</div>
 
</center>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
console.log("touchscreen is", VirtualJoystick.touchScreenAvailable() ? "available" : "not available");
var joystick	= new VirtualJoystick({
container	: document.getElementById('container'),
mouseSupport	: true
});
setInterval(function(){
var outputEl	= document.getElementById('result');
outputEl.innerHTML	= '<b>Result:</b> '
+ ' dx:'+joystick.deltaX()
+ ' dy:'+joystick.deltaY()
+ (joystick.right()	? ' prawo'	: '')
+ (joystick.up()	? ' przód'	: '')
+ (joystick.left()	? ' lewo'	: '')
+ (joystick.down()	? ' tył' : '');	

}, 1/30 * 1000);
</script>
  </body>
</html>

