

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel=icon href='img/logo1.png' sizes="32x32" type="image/jpg">
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


      <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <meta charset="UTF-8">
   
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php
  
      if ($_SESSION['tipo']=='1') {
        menuadmin();
      }
      if ($_SESSION['tipo']=='2') {
        menudocente();          
      }
     
?>
<style>
.letra{
  color: #F4113C;
}
</style>



 
<body class="nav-md"  >
    
   <?php
   function menuadmin(){

    ?>
  
     <div class="container body" >
     
      <div class="main_container" >
        <div class="col-md-3 left_col" style="background: black;">
          <div class="left_col scroll-view" style="background: black;">
            <div class="navbar nav_title" style="border: 0; background: black;">
 
          <a href="index.php" class="site_title">
        <div class="pull-left image">
           <img src="img/loguito2.png"  alt="User Image">
        </div> <span></span> </a>
         
            </div>


            <div class="clearfix"></div>


            <!-- menu profile quick info -->
            <div class="profile clearfix">
             
              <!--
              <div class="profile_info">-->
              <CENTER>  <span style="color:#286D71; font-size: 18px;">Esc. Modelo Adventista</span> </CENTER>
                      <CENTER>  <span style="color:#FFFFFF; font-size: 18px;">Módulo Administativo</span> </CENTER>
               
                      
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu color items -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
              <div class="menu_section">
               
                <ul class="nav side-menu">
 <li><a href="index.php"><i class="fa fa-home" ></i>Home</a>
                  </li>

                  <li><a href="encargados.php"><i class="fa fa-group" ></i>Encargados</a>
                  </li>

 <li><a href="alumnos.php"><i class="fa fa-user"></i>Alumnos</a>
                      </li>
 <li><a href="maestros.php"><i class="fa fa-user"></i>Maestros</a>
                      </li>
 <li><a href="matricula.php"><i class="fa fa-user"></i>Matrícula</a>

    <li><a><i class="fa   fa-money"></i>Pagos<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="pagos.php">Pagos Mensualidad</a></li>
                        <li><a href="pago_varios.php">Pagos Varios</a></li>
                        <li><a href="descripcion_pago.php">Nuevo Pago</a></li> 
                     </ul>
                     </li>  

               <li><a><i class="fa fa-file-text-o"></i>Generales<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="periodos.php">Periodos</a></li>
                        <li><a href="cursos.php">Cursos</a></li>
                          <li><a href="asignaturas.php">Asignaturas</a></li>
                           <li><a href="asignacionesm.php">Asignaciones</a></li>  
                                    <li><a href="actas.php">Actas</a></li>
                     </ul>
                     </li>            

                        <li><a><i class="fa  fa-list-alt"></i>Reportes<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                    
                      <li><a href="historial_notas.php">Historial Notas</a></li>
                      <li><a href="historial_pagomeses.php">Historial Mensualidades</a></li>
                       <li><a href="historial_pagos.php">Historial Pagos Varios</a></li>
                        <li><a href="historial_actas.php">Historial actas</a></li>
 </ul>
    </li>

                        <li><a><i class="fa fa-unlock-alt"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                         <ul class="nav child_menu">
                          <li><a href="usuarios.php"><i class="fa fa-users pull-right"></i>Usuarios</a></li>
                          <li><a  href="Cambiarpass.php"><i class="fa fa-refresh pull-right"></i> Cambiar Contraseña </a></li>

 </ul>
    </li>

   
    <li ><a href="logout.php" style="color: #286D71; border-top: 1px solid #B5B2B2; "><i class="fa fa-sign-out pull-right letra" ></i> Cerrar Sesion</a></li>
    </li>
    
    
                                     
              </div>

            </div>
            <!-- /sidebar menu -->         <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" style="background:#5E171A;">
            <nav>
              <div class="nav toggle" >
                <a id="menu_toggle"><i class="fa fa-bars"style="color:#286D71;"></i></a>
              </div>
              

              <ul class="nav navbar-nav navbar-right">
 <div style="font-size: 15px; color:#286D71;"> 
                <script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(" "+ diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
</div>    

   
              
              </ul>
            </nav>
          </div>
        </div>
 

<!-- generales-->
        </div>
         

   
<!---------------------------------------------------------------------------------------->

<?php
    }

    


 
function menudocente(){
  //session_start();
  $docente=$_SESSION['usuario'];
  $nombreadmin=$_SESSION['nombre'];

require("config/conec.php");//Contiene las variables de configuracion para conectar a la base de datos

$query_docente=mysqli_query($db,"SELECT * FROM maestros WHERE identidad_m='$docente'");
  while ($row=mysqli_fetch_array($query_docente)){
    $nombre=$row['nombre_m'];
    $apellido=$row['apellido_m'];
  }
  ?>
    
        <div class="container body" >
     
      <div class="main_container" >
        <div class="col-md-3 left_col" style="background: black;">
          <div class="left_col scroll-view" style="background: black;">
            <div class="navbar nav_title" style="border: 0; background: black;">
 
          <a href="index.php" class="site_title">
        <div class="pull-left image">
           <img src="img/loguito2.png"  alt="User Image">
        </div> <span></span> </a>
         
            </div>


            <div class="clearfix"></div>


            <!-- menu profile quick info -->
            <div class="profile clearfix">
             
              <!--
              <div class="profile_info">-->
              <CENTER>  <span style="color:#286D71; font-size: 18px;">Esc. Modelo Adventista</span> </CENTER>
              <CENTER>  <span style="color:#FFFFFF; font-size: 18px;">Módulo Educación</span> </CENTER>
              <br>
              <CENTER>  <span style="color:#FFFFFF; font-size: 14px;">Bienvenido Docente:</span> </CENTER>
              <CENTER>  <span style="color:#FFFFFF; font-size: 14px;"><?php echo $nombre." ".$apellido; ?></span> </CENTER>
                      
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu color items -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
              <div class="menu_section">
               
                <ul class="nav side-menu">
 <li><a href="index.php"><i class="fa fa-home" ></i>Home</a>
                  </li>              
          
                  <li><a><i class="fa  fa-file-text-o"></i>Control Alumnos<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="notas.php">Alumnos</a></li>
                        <li><a href="asistencia.php">Reporte Asistencia</a></li>
                   
                     </ul>
                     </li>            

                        

                        <li><a><i class="fa fa-unlock-alt"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                         <ul class="nav child_menu">
                         <li><a  href="Cambiarpass.php"><i class="fa fa-refresh pull-right"></i> Cambiar Contraseña </a></li>
                         
 </ul>
    </li>

   <li><a href="ManualMaestros1.pdf"><i class="fa fa-file-pdf-o"></i>Manual de Usuario</a>
                      </li>
    <li ><a href="logout.php" style="color: #F23636; border-top: 1px solid #B5B2B2; "><i class="fa fa-sign-out pull-right letra" ></i> Cerrar Sesion</a></li>
    </li>
                                     
              </div>

            </div>
            <!-- /sidebar menu -->         <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" style="background:#782226;">
            <nav>
              <div class="nav toggle" >
                <a id="menu_toggle"><i class="fa fa-bars"style="color:#286D71;"></i></a>
              </div>
              

              <ul class="nav navbar-nav navbar-right">
 <div style="font-size: 15px; color:#286D71;"> 
                <script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(" "+ diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
</div>    

   
              
              </ul>
            </nav>
          </div>
        </div>
 

<!-- generales-->
        </div>
         

   
<!---------------------------------------------------------------------------------------->

      <?php
    }
function compras(){
  ?>
  
          <div class="container body" >
     
      <div class="main_container" >
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
 
          <a href="index.php" class="site_title"><i class="fa fa-university"></i> <span>Inversiones!</span></a>
         
            </div>


            <div class="clearfix"></div>


            <!-- menu profile quick info -->
            <div class="profile clearfix">
             

             <span style="color:#FFFFFF; font-size: 15px;">Compras</span>
              <!--
              <div class="profile_info">
                <span style="font-size: 20px;">Bienvenido</span>
               
              </div>
            -->
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu color items -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
              <div class="menu_section">
               
                <ul class="nav side-menu">
 <li><a href="index.php"><i class="fa fa-home" ></i>Home</a>
                  </li>

 <li><a href="Proveedores.php"><i class="fa fa-file-o"></i>Proveedores</a>
                      </li>


  <li><a><i class="fa fa-tags"></i>Compras<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="pedidos.php">Nueva Orden de Pedido</a></li>
                        <li><a href="verificar_pedido.php">Compras Pendientes</a></li>
                     </ul>
                     </li>

                        <li><a><i class="fa fa-file"></i>Reportes<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="compras_realizadas.php">Compras Realizadas</a></li>
                         <li><a href="#">Inventario</a></li>

 </ul>
    </li>

    <li><a><i class="fa fa-file"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                         <li><a  href="Cambiarpass.php"><i class="fa fa-refresh pull-right"></i> Cambiar Contraseña </a></li>

                         

 </ul>
    </li>

    <li ><a href="logout.php" style="color: #F23636; border-top: 1px solid #B5B2B2; "><i class="fa fa-sign-out pull-right letra" ></i> Cerrar Sesion</a></li>
    </li>
                      
                  
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" style="background:black;">
            <nav>
              <div class="nav toggle" >
                <a id="menu_toggle"><i class="fa fa-bars"style="color:#FFFFFF;"></i></a>
              </div>
              

              <ul class="nav navbar-nav navbar-right">
 <div style="font-size: 15px; color:#5E171A;"> 
                <script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(" "+ diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
</div>    

   
              
              </ul>
            </nav>
          </div>
        </div>
 

<!-- generales-->
        </div>

<!---------------------------------------------------------------------------------------->

<?php
    }
  ?>




</body>
</html>
