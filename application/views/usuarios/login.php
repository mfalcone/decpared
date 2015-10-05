  <!-- Empty Block (use .abs-filler to fill page)
    ================================================== -->
    <div class="empty-block abs-filler">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="container">
            <!-- Form Panel -->
            <div class="form-panel width-33pc width-100pc-xs hcenter">
              <header>Ingreso al sistema</header>
              <fieldset>
              <?php echo form_open('login');?>
              <?php
              if(isset($mensaje))
              {
                echo $mensaje.'<br />';
              }
		if (validation_errors())
		{
		  echo '<div class="registro_titulo">Se produjeron los siguientes errores</div><div style="margin-left:50px;">';
		  echo validation_errors();
		  echo '</div>';
		}
		
		?>
              
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                    <input type="password" name="clave" class="form-control" placeholder="Clave">
                  </div>
                </div>
                <div class="form-group">

                  <a class="pull-right" href="<? echo base_url(); ?>index.php/usuarios/recuperar_clave">Olvidaste tu clave?</a>
                </div>
                <button class="btn btn-default btn-lg btn-block">Ingresar</button>
              <?php echo form_close();?>
              </fieldset>
            </div>
            <!-- /Form Panel -->
            <div class="align-center">Si no estás registrado ingresá <a href="<? echo base_url(); ?>index.php/login/agregar">aquí</a></div>
          </div>
          <!-- /Container -->
        </div>
        <!-- /Vcenter this -->
      </div>
      <!-- /Vcenter -->
    </div>
    <!-- /Empty Block
    ================================================== -->
    