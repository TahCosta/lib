<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="Style.css">
<title>Gráfico Css</title>
<style>
.chart{
	width: 200px;
	height: 200px;
	background-color:#eee;
	border: solid 2px #fff;
	display: block;
	border-radius:50%;
}

.slice{

	background-color:#333;
	position: absolute;
	display: block;
	border-radius:50%;

}

#slice1{
	width: 200px;
	height: 200px;
	background-color:#289bd2;
	border: solid 2px #fff;
	position: absolute;
	display: block;
	
	border-radius:50%;
	clip: rect(0px,200px,100px,0px);
	transform: rotate(-90deg);
	
}
#slice2{
	width: 200px;
	height: 200px;
	background-color:#289bd2;
	border: solid 2px #fff;
	position: absolute;
	display: block;
	border-radius:50%;
	clip: rect(0px,200px,100px,0px);
	transform: rotate(140deg);
}
#slicebg{
	width: 200px;
	height: 200px;
	background-color:#ff0000;
	border: solid 2px #fff;
	position: absolute;
	display: block;
	border-radius:50%;
	clip: rect(0px,200px,100px,0px);
	transform: rotate(90deg);
}
#slicebg:hover{
    background-color: #d30106;
}

.slice:hover #slice1{
background-color:#999;
}
.slice:hover #slice2{
background-color:#999;
}

</style>

</head>
    <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand logo" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/lib/index.php">Inicio</a></li>
      <li><a href="/lib/css/index.php">Voltar</a></li>
    </ul>
  </div>
</nav>
    
    <div class="container-fluid">
    <div class="jumbotron">
    <h2 class="text-center">Gráfico Css</h2>
    <div class="chart">
    <div id="slicebg"></div>
    <div class="slice">
    <div id="slice1"></div>
    <div id="slice2"></div>
    
    </div></div>
    </div>
    </div>
    </body>
  
</html>