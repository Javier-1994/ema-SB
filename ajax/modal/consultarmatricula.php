  <?php
    //if (isset($con))
    //{
  
  ?>
  <!-- Modal -->
  <div class="modal fade" id="dataConsult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Consultar</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal">
    <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="id_matriculac" name="id_matriculac" placeholder="ID Matricula">

  
   <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre Alumno</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="nombrea" name="nombrea" placeholder="Nombre Alumno"  autocomplete="off" required tabindex="1" disabled>
                </div>
              </div>

   <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Curso Matriculado</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="cursoa" name="cursoa" placeholder="Fecha"  autocomplete="off" required tabindex="2" disabled>
                </div>
              </div>
  

           <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Año</label>
               <div class="controls col-md-8 ">
     <input type="text" class="form-control" name="activop" id="activop" value="<?php echo $fecha;?>"disabled>
   </div>
 </div>

                           <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Tipo de Matricula</label>
                <div class="col-sm-8">
        <input class="form-control inp" id="tipom" name="tipom" placeholder="Descripción"  autocomplete="off" required tabindex="3" disabled>   

                </div>
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

    //}
  ?>

  
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
</script>