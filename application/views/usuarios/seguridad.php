      <div class="empty-block abs-filler">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="container">
            <!-- Form Panel -->
            <div class="form-panel width-40pc width-100pc-xs hcenter">
              <header>Cambio de contraseña</header>
	      

              <fieldset>
	      <?php
		if (validation_errors())
		{
		  echo '<div class="registro_titulo">Se produjeron los siguientes errores</div><div style="margin-left:50px;">';
		  echo validation_errors();
		  echo '</div>';
		}
		
		?>
              <?php echo form_open_multipart('login/seguridad');?>

	      
		<h4>Datos de Acceso</h4>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="clave" type="password" class="form-control" placeholder="Clave" value="<?php echo set_value('clave'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input type="password" name="clave_repetir" class="form-control" placeholder="repetir_clave" value="<?php echo set_value('clave_repetir'); ?>">
                  </div>
                </div>
		
                <button class="btn btn-default btn-lg btn-block">Cambiar contraseña</button>
              <?php echo form_close();?>
              </fieldset>
            </div>
	    <div class="align-center"><? echo anchor('/','VOLVER SIN GUARDAR'); ?></div>
            <!-- /Form Panel -->
          </div>
          <!-- /Container -->
        </div>
        <!-- /Vcenter this -->
      </div>
      <!-- /Vcenter -->
    </div>
    <!-- /Empty Block
    ================================================== -->
 