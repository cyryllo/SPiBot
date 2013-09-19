<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset='utf-8'>
    <title>SpyPiBot - sterowanie</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="joy/virtualjoystick.js"></script>
  </head>
  <body>
<div class="container">
    <h1>SpyPiBot - budujemy sterowanie do robota</h1>

<div class="row">
  <div class="col-xs-1 col-sm-4 col-md-4"><span id="result"></span>
  
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
+ (joystick.right()	? ' right'	: '')
+ (joystick.up()	? ' up'	: '')
+ (joystick.left()	? ' left'	: '')
+ (joystick.down()	? ' down' : '');	

}, 1/30 * 1000);
</script>

</div>
  <div class="col-xs-6 col-sm-4 col-md-4">Kamera
   


</div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs"></div>
  <div class="col-xs-1 col-sm-4 col-md-4">Prawa gąsienica

</div>
</div>
<div class="row">
  <div class="col-xs-6  col-xs-offset-3">
Slider obrotu kamery
</div>
</div>

</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

