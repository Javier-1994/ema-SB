<?php 
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado']) &&($_SESSION['id_usuarios'])) { 

require_once("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("config/conexion.php");//Contiene funcion que conecta a la base de datos

 ?>

<?php 
include("principal.php");
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambio Pass</title>
  
    
  
</head>
<body>
    
    <div class="right_col" role="main"  ><!-- page content -->
 <div class="" >
            <div class="page-title" >
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

             </div>
         </div>         
    <h3> Cambiar Contraseña</h3>
<div class="x_panel" >
                        <div class="x_title" >
                        

                            <div  class="clearfix" ></div>
                        </div>
                        <div id="comprobarid"></div>
                        <form class="form-horizontal" method="post" id="actualizarDatos">
  <div id="datos_ajax"></div>
  <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre Usuario</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nombre" name="nombre" 
                  value="<?php  echo $_SESSION['nombre']; ?>" readonly>
                    <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php  echo $_SESSION['id_usuarios']; ?>">
                 
                </div>
              </div>

<div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Usuario</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nombre" name="nombre" 
                  value="<?php  echo $_SESSION['usuario']; ?>" readonly>
                    
                 
                </div>
              </div>


              <div class="form-group">
                <label for="user_password_new3" class="col-sm-3 control-label">Contraseña Actual</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="ant" name="ant" placeholder="Contraseña Actual" tabindex="1" required>

                   <input type="hidden" class="form-control" id="antigua" name="antigua" placeholder="Contraseña Anterios" value=" <?php  echo $_SESSION['pass']; ?>" >
                    
                </div>
              </div>


                   <div class="form-group">
                <label for="user_password_new3" class="col-sm-3 control-label">Nueva contraseña</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="cambio_pass" name="cambio_pass" placeholder="Nueva contraseña" pattern=".{6,}" title="Contraseña ( min . 6 caracteres)" tabindex="2" required>

                   
                    
                </div>
              </div>

             
            
         
          <div class="modal-footer">
           
            
          <button type="reset" class="btn btn-danger" >Limpiar</button>
            <button type="submit" class="btn btn-primary" id="cambio">Actualizar Datos</button>
          </div>
          </form>

        
        </div>
</div>
</div>

<script type="text/javascript" src="js/cambio_pass.js"></script>
 
<?php 
include("footer.php");
 ?>
 
</body>
</body>
</html>

<?php 
} else { 
    header("location: login.php");
} 

 ?>