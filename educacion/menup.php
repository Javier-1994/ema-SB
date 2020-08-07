
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel=icon href='imagenes/login.jpg' sizes="32x32" type="image/jpg">
  <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <meta charset="UTF-8">
   
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
.letra{
  color: #F4113C;
}
</style>



 
<body class="nav-md"  >
    
   <?php
   function menumad(){

    ?>
  
     <div class="container body" >
     
      <div class="main_container" >
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
 
          <a href="index.html" class="site_title"><i class="fa fa-university"></i> <span>Módulo Educación</span></a>
         
            </div>


            <div class="clearfix"></div>


            <!-- menu profile quick info -->
            <div class="profile clearfix">
             
              <!--
              <div class="profile_info">-->
                <span style="color:#FFFFFF; font-size: 15px;">Administrador</span>
               
                      
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu color items -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
              <div class="menu_section">
               
                <ul class="nav side-menu">
 <li><a href="panel.php"><i class="fa fa-home" ></i>Home</a>
                  </li>

                  <li><a href="clientes.php"><i class="fa fa-group" ></i>Clientes</a>
                  </li>

 <li><a href="Proveedores.php"><i class="fa fa-file-o"></i>Proveedores</a>
                      </li>

               <li><a><i class="fa fa-file-text"></i>Inventario<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="existencias.php">Existencias</a></li>
                        <li><a href="producto.php">Ingreso Productos</a></li>
                          <li><a href="linea.php">Lineas</a></li>
                     </ul>
                     </li>

                     <li><a><i class="fa fa-tags"></i>Compras<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="pedidos.php">Nueva Orden de Pedido</a></li>
                        <li><a href="verificar_pedido.php">Compras Pendientes</a></li>
                          <li><a href="compras_realizadas.php">Compras Realizadas</a></li>
                     </ul>
                     </li>

                 
                      <li><a><i class="fa fa-shopping-cart"></i>Ventas<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="ventas.php">Nueva Venta</a></li>
                          <li><a href="ventas_realizadas.php">Ventas Realizadas</a></li>
                     </ul>
                     </li>

                     

                      
                       <li><a><i class="fa fa-file"></i>Reportes<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="#">Ventas</a></li>
                        <li><a href="compras_realizadas.php">Compras Realizadas</a></li>
                        <li><a href="compras_por_u.php">Compras por Usuario</a></li>
                         <li><a href="#">Inventario</a></li>
 </ul>
    </li>

    <li><a><i class="fa fa-file"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                          <li><a href="usuarios.php"><i class="fa fa-users pull-right"></i>Usuarios</a></li>
              
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
          <div class="nav_menu" style="background:#268A82;">
            <nav>
              <div class="nav toggle" >
                <a id="menu_toggle"><i class="fa fa-bars"style="color:#B0A3F3;"></i></a>
              </div>
              

              <ul class="nav navbar-nav navbar-right">
 <div style="font-size: 15px; color:#FFFFFF;"> 
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

   <?php
    }
function venta(){
  ?>
    
        <div class="container body" >
     
      <div class="main_container" >
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
 
          <a href="index.html" class="site_title"><i class="fa fa-university"></i> <span>Inversiones!</span></a>
         
            </div>


            <div class="clearfix"></div>


            <!-- menu profile quick info -->
            <div class="profile clearfix">
             

             <span style="color:#FFFFFF; font-size: 15px;">Ventas</span>
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
 <li><a href="panel.php"><i class="fa fa-home" ></i>Home</a>
                  </li>


                      <li><a><i class="fa fa-shopping-cart"></i>Ventas<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="ventas.php">Nueva Venta</a></li>
                          <li><a href="ventas_realizadas.php">Ventas Realizadas</a></li>
                     </ul>
                     </li>

                                    

                      
                       <li><a><i class="fa fa-file"></i>Reportes<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                      

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
          <div class="nav_menu" style="background:#B0A3F3;">
            <nav>
              <div class="nav toggle" >
                <a id="menu_toggle"><i class="fa fa-bars"style="color:#111111;"></i></a>
              </div>
              

              <ul class="nav navbar-nav navbar-right">
 <div style="font-size: 15px; color:#FFFFFF;"> 
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
function inventario(){
  ?>
    
      <div class="container body" >
     
      <div class="main_container" >
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
 
          <a href="index.html" class="site_title"><i class="fa fa-university"></i> <span>Inversiones!</span></a>
         
            </div>


            <div class="clearfix"></div>


            <!-- menu profile quick info -->
            <div class="profile clearfix">
             
             <span style="color:#FFFFFF; font-size: 15px;">Inventario</span>
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
 <li><a href="panel.php"><i class="fa fa-home" ></i>Home</a>
                  </li>

 <li><a href="Proveedores.php"><i class="fa fa-file-o"></i>Proveedores</a>
                      </li>

               <li><a><i class="fa fa-file-text"></i>Inventario<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="existencias.php">Existencias</a></li>
                        <li><a href="producto.php">Ingreso Productos</a></li>
                          <li><a href="linea.php">Lineas</a></li>
                     </ul>
                     </li>

                     
                      <li><a><i class="fa fa-tags"></i>Compras<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="pedidos.php">Nueva Orden de Pedido</a></li>
                        <li><a href="verificar_pedido.php">Compras Pendientes</a></li>
                          <li><a href="compras_realizadas.php">Compras Realizadas</a></li>
                     </ul>
                     </li>
                      
                       <li><a><i class="fa fa-file"></i>Reportes<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="compras_realizadas.php">Compras Realizadas</a></li>
                        <li><a href="compras_por_u.php">Compras por Usuario</a></li>
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
          <div class="nav_menu" style="background:#268A82;">
            <nav>
              <div class="nav toggle" >
                <a id="menu_toggle"><i class="fa fa-bars"style="color:#111111;"></i></a>
              </div>
              

              <ul class="nav navbar-nav navbar-right">
 <div style="font-size: 15px; color:#FFFFFF;"> 
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
 
          <a href="index.html" class="site_title"><i class="fa fa-university"></i> <span>Inversiones!</span></a>
         
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
 <li><a href="panel.php"><i class="fa fa-home" ></i>Home</a>
                  </li>

 <li><a href="Proveedores.php"><i class="fa fa-file-o"></i>Proveedores</a>
                      </li>


  <li><a><i class="fa fa-tags"></i>Compras<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="pedidos.php">Nueva Orden de Pedido</a></li>
                        <li><a href="verificar_pedido.php">Compras Pendientes</a></li>
                          <li><a href="compras_realizadas.php">Compras Realizadas</a></li>
                     </ul>
                     </li>

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
          <div class="nav_menu" style="background:#268A82;">
            <nav>
              <div class="nav toggle" >
                <a id="menu_toggle"><i class="fa fa-bars"style="color:#111111;"></i></a>
              </div>
              

              <ul class="nav navbar-nav navbar-right">
 <div style="font-size: 15px; color:#FFFFFF;"> 
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
