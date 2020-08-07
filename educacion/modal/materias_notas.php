
  <!-- Modal -->
  <div class="modal fade" id="dataConsult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Consultar</h4>
      </div>
      <div class="modal-body">
      <form >
    <div id="actualizaDatos"></div>
  
<input type="hidden" class="input-md textinput textInput form-control inp"  id="id_asignaciones" name="id_asignaciones"   placeholder="codigo"  >

               
                <div class="table-responsive">
                <table class="table table-hover text-center" id="tabla_materias">
                  <thead>
                    <tr style="background-color: #2A6968;color: #FFFFFF;">

                      <th class="text-center">Docente a Cargo</th>
                      <th class="text-center">Curso</th>
                      <th class="text-center">Materia</th>
                      <th class="text-center">Acciones</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                
                    <tr>
                      <td id="docente"></td>
                      <td id="curso1"></td>
                      <td id="materia1"></td>

                        <td>
                        <a class="btn btn-default" href='ingreso_notas.php?numasignacion=<?php echo '1';?>'><i class="zmdi zmdi-floppy"></i>Ingresar Notas</a>
                        </td> 
                    </tr>

                    <tr>
                      <td id="docente2"></td>
                      <td id="curso2"></td>
                      <td id="materia2"></td>

                        <td>
                        <a class="btn btn-default" href='ingreso_notas.php?numasignacion=<?php echo '1';?>'><i class="zmdi zmdi-floppy"></i>Ingresar Notas</a>
                        </td> 
                    </tr>

                    <tr>
                      <td id="docente3"></td>
                      <td id="curso3"></td>
                      <td id="materia3"></td>

                        <td>
                        <a class="btn btn-default" href='ingreso_notas.php?numasignacion=<?php echo '1';?>'><i class="zmdi zmdi-floppy"></i>Ingresar Notas</a>
                        </td> 
                    </tr>
                </tbody>
                </table>
              </div>
           
                  
            
          

              
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
      </div>

      </form>
    </div>
    </div>
  </div>


 
<?php 

function obtenerNuevoId(){
        include ('config/conexion.php');
        $sql = "SELECT MAX(num_factura)+1 AS Nuevo FROM factura_venta";
        $queryNuevo=mysqli_query($con, $sql) or die(mysqli_error());
        $rowNuevo=mysqli_fetch_array($queryNuevo);
        if (is_null($rowNuevo['Nuevo'])) {
            $rowNuevo['Nuevo'] = 1;
        }
        return $rowNuevo['Nuevo'];
    }

 
 ?>
<!--   
  <script type="text/javascript" >
  
  
   $('#telefon').mask("0000-0000", {placeholder: "---- ----"});

$('#ip-field').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
        'Z': {
            pattern: /[0-9]/, optional: true
        }
    },
    placeholder: "___.___.___.___"
});
</script> -->





