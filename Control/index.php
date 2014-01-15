<?php
//jazda do przodu
function up($m){
	//prawa gasienica
	shell_exec('pigs w 21 1');
	shell_exec('pigs w 22 0');
	//lewa gasienica
	shell_exec('pigs w 23 0');
	shell_exec('pigs w 24 1');
	//jedziemy
    shell_exec('pigs p 17 '.$m.'');
	shell_exec('pigs p 18 '.$m.'');
}
//jazda w lewo do przodu
function upleft($m){
	//prawa gasienica
	shell_exec('pigs w 21 1');
	shell_exec('pigs w 22 0');
	//lewa gasienica
	shell_exec('pigs w 23 0');
	shell_exec('pigs w 24 1');
	//jedziemy
    shell_exec('pigs p 17 '.$m.'');
	shell_exec('pigs p 18 115');
}
//jazda w prawo do przodu
function upright($m){
	//prawa gasienica
	shell_exec('pigs w 21 1');
	shell_exec('pigs w 22 0');
	//lewa gasienica
	shell_exec('pigs w 23 0');
	shell_exec('pigs w 24 1');
	//jedziemy
    shell_exec('pigs p 17 115');
	shell_exec('pigs p 18 '.$m.'');
}
//Zatrzymywanie pojazdu
function stop($m){
	//prawa gasienica
	shell_exec('pigs w 21 0');
	shell_exec('pigs w 22 0');
	//lewa gasienica
	shell_exec('pigs w 23 0');
	shell_exec('pigs w 24 0');
	//jedziemy
    shell_exec('pigs p 17 '.$m.'');
	shell_exec('pigs p 18 '.$m.'');
}
//jazda do tyłu
function down($m){
	//prawa gasienica
	shell_exec('pigs w 21 0');
	shell_exec('pigs w 22 1');
	//lewa gasienica
	shell_exec('pigs w 23 1');
	shell_exec('pigs w 24 0');
	//jedziemy
    shell_exec('pigs p 17 '.$m.'');
	shell_exec('pigs p 18 '.$m.'');
}
//funkcja cofania w lewo
function downleft($m){
	//prawa gasienica
	shell_exec('pigs w 21 0');
	shell_exec('pigs w 22 1');
	//lewa gasienica
	shell_exec('pigs w 23 1');
	shell_exec('pigs w 24 0');
	//jedziemy
    shell_exec('pigs p 17 '.$m.'');
	shell_exec('pigs p 18 '.$m.'');
}
//cofanie w prawo
function downright($m){
	//prawa gasienica
	shell_exec('pigs w 21 0');
	shell_exec('pigs w 22 1');
	//lewa gasienica
	shell_exec('pigs w 23 1');
	shell_exec('pigs w 24 0');
	//jedziemy
    shell_exec('pigs p 17 115');
	shell_exec('pigs p 18 '.$m.'');
}
//skręt w lewo
function left($m){
	//prawa gasienica
	shell_exec('pigs w 21 0');
	shell_exec('pigs w 22 1');
	//lewa gasienica
	shell_exec('pigs w 23 0');
	shell_exec('pigs w 24 1');
	//jedziemy
    shell_exec('pigs p 17 '.$m.'');
	shell_exec('pigs p 18 '.$m.'');
}
//skręt w prawo
function right($m){
	//prawa gasienica
	shell_exec('pigs w 21 1');
	shell_exec('pigs w 22 0');
	//lewa gasienica
	shell_exec('pigs w 23 1');
	shell_exec('pigs w 24 0');
	//jedziemy
    shell_exec('pigs p 17 '.$m.'');
	shell_exec('pigs p 18 '.$m.'');
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
  <style>
  	#rotatep    {  
    -webkit-transform:rotate(45deg);
    -moz-transform:rotate(45deg);
    -o-transform:rotate(45deg);
    /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
    -ms-transform:rotate(45deg);
   }
   #rotatel    {  
    -webkit-transform:rotate(315deg);
    -moz-transform:rotate(315deg);
    -o-transform:rotate(315deg);
    /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
    -ms-transform:rotate(315deg);
   }
  </style> 
  </head>
  <body>


<div class="container">

<span id="result"></span>
<br />
<center>
<?php
if ($_GET['up']) {
  up(150);
}
if ($_GET['left']) {
  left(60);
}
if ($_GET['stop']) {
  stop(0);
}
if ($_GET['right']) {
  right(60);
}
if ($_GET['down']) {
  down(150);
}
if ($_GET['downleft']) {
  downleft(150);
}
if ($_GET['downright']) {
  downright(150);
}
if ($_GET['upleft']) {
  upleft(150);
}
if ($_GET['upright']) {
  upright(150);
}
?>

<!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
	
  <p>
  <a href="?upleft=true"><button type="button" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-arrow-up" id="rotatel"></span></button></a> 	
  <a href="?up=true"><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-up"></span></button></a> 
  <a href="?upright=true"><button type="button" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-arrow-up" id="rotatep"></span></button></a> 
  </p>
  <p>
  <a href="?left=true"><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-left"></span></button></a> 
  <a href="?stop=true"><button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-ban-circle"></span></button></a> 
  <a href="?right=true"><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-right"></span></button></a> 
  </p>
  <p>
  <a href="?downleft=true"><button type="button" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-arrow-down" id="rotatep"></span></button></a>
  <a href="?down=true"><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-down"></span></button></a>
  <a href="?downright=true"><button type="button" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-arrow-down" id="rotatel"></span></button></a>
  </p> 
  <hr />
  <p>
  	<div class="btn-group btn-group-lg">
  	<button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-picture"></span></button>
  	<button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-film"></span></button>
  	</div>
  </p>
 <hr />   
<p><h5>SpyPiBot</h5></p>


</center>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>

