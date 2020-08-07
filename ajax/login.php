
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<link rel=icon href='imagenes/login.jpg' sizes="32x32" type="image/jpg">
  <title>Login</title>
  <link rel="stylesheet" href="css/log.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="css/login/bootstrap.min.css">
   <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<script src="css/login/jquery.min.js"></script>
  <script src="css/login/bootstrap.min.js"></script>
<script src="css/principal/jquery.mask.js"></script>   

</head>
<body>


<div class="container-fluid" >
 <h2 style="text-align: center; background:#151414;color:#FFFFFF ; font-family: Times New Roman, Times, serif; ">Iniciar Sesi&oacute;n</h2>
 
  <div class="row">
    <div class="col-sm-6"  style="height:auto;">
<img  src="img/logoca.png" style="width: 88.3%;height: 72%;"  class="img-fluid" />

    </div>


    <div class="col-sm-6 dos" style=" background:; height: 625px;">

    	<div class="login">


<form method="post" accept-charset="utf-8" action="login.php" name="loginform" autocomplete="off" role="form" class="form-signin">
<div id="resultado" align="center"></div>

						
    		<div class="table-responsive">
<table class="table">
	
			

	
	<tr>
		<th style="text-align: center;">Usuario</th>

	</tr>
	<tr>
	<td> 
			<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<input type="text" name="usuario" id="usuario" placeholder="Usuario" class="form-control" autocomplete="off">
</div>
</td>
</tr>

<tr>
		<th style="text-align: center;"	> Contrase&ntilde;a</th>

	</tr>
	<tr>
	<td> 
			<div class="input-group">
<span class="input-group-addon"><i class="fa fa-lock"></i></span>
			<input type="password" name="pass" id="pass"  class="form-control"  autocomplete="off">
</div>
</td>
</tr>



<tr> 
	<td>
			  <div class="form-group">
			 <button type="submit" name="login" id="ingresar" name="ingresar" class="btn btn-success ">Ingresar</button>
			  <button type="reset" name="limpiar" class="btn btn-danger  "> Limpiar</button>

			 </td>
			</tr>
</div>
</div>
    </div>
 </table>
</div>
</form>

  </div>
</div>
<!--<script src="js/jquery.min.js"></script>-->
	<script src="js/login.js"></script>
</body>
</html>


<script type="text/javascript" >
   $('#usuario').mask("0000-0000-00000", {placeholder: ""});
</script>