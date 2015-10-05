      <div class="empty-block abs-filler">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="container">
            <!-- Form Panel -->
            <div class="form-panel width-40pc width-100pc-xs hcenter">
              <header>Editar Perfil de Usuario</header>
	      

              <fieldset>
	      <?php
		if (validation_errors())
		{
		  echo '<div class="registro_titulo">Se produjeron los siguientes errores</div><div style="margin-left:50px;">';
		  echo validation_errors();
		  echo '</div>';
		}
		
		?>
              <?php echo form_open_multipart('login/editar');?>

	      <hr />
                <div class="form-group"><label>Nombre o Razón Social</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="razon_social" class="form-control" placeholder="Nombre o Razón Social" value="<?php echo $usuario['razon_social']; ?>">
                  </div>
                </div>
		<div class="form-group"><label>Email</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $usuario['email']; ?>">
                  </div>
                </div>
		<div class="form-group"><label>Teléfono</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="telefono" type="text" class="form-control" placeholder="Teléfono" value="<?php echo $usuario['telefono']; ?>">
                  </div>
                </div>
                <div class="form-group"><label>Domicilio</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="calle" class="form-control" placeholder="Domicilio" value="<?php echo $usuario['calle']; ?>">
                  </div>
                </div>
                <div class="form-group"><label>Localidad</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="ciudad" class="form-control" placeholder="Localidad" value="<?php echo $usuario['ciudad']; ?>">
                  </div>
                </div>
                <div class="form-group"><label>CP</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="codPostal" class="form-control" placeholder="CP" value="<?php echo $usuario['codPostal']; ?>">
                  </div>
                </div>
		<div class="form-group"><label>Provincia</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="provincia" class="form-control" placeholder="Provincia" value="<?php echo $usuario['provincia']; ?>">
                  </div>
                </div>
		<div class="form-group"><label>Actividad Principal</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input name="actividadAfip" class="form-control" placeholder="Actividad Principal" value="<?php echo $usuario['actividadAfip']; ?>">
                  </div>
                </div>
		<div class="form-group"><label>Web</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input name="web" class="form-control" placeholder="Web" value="<?php echo $usuario['web']; ?>">
                  </div>
                </div>
		<div class="form-group"><label>CUIT</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="cuit" class="form-control" placeholder="CUIT" value="<?php echo $usuario['cuit']; ?>">
                  </div>
                </div>
		<div class="form-group"><label>Domicilio Fiscal</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="domicilio_fiscal" class="form-control" placeholder="Domicilio Fiscal" value="<?php echo $usuario['domicilio_fiscal']; ?>">
                  </div>
                </div>
		<div class="form-group">
                  <label class="checkbox-inline">
		    <input type="radio" value="responsable" name="tipoIva" <? if($usuario['tipoIva']=="responsable"){echo " checked";}?>>Responsable Inscripto
		  </label>
                </div>
		<div class="form-group">
                  <label class="checkbox-inline"><input type="radio" value="monotributo" name="tipoIva"<? if($usuario['tipoIva']=="monotributo"){echo " checked";}?>>Monotributo</label>
                </div>
		<h4>Tus datos de contacto</h4>
		<div class="form-group"><label>Nombre</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $usuario['nombre']; ?>">
                  </div>
                </div>
		<div class="form-group"><label>Celular</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input name="celular" class="form-control" placeholder="Celular" value="<?php echo $usuario['celular']; ?>">
                  </div>
                </div>
		<div class="form-group"><label>Email</label><br />
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="email_contacto" class="form-control" placeholder="Email" value="<?php echo $usuario['email_contacto']; ?>">
                  </div>
                </div>
		<h4>Logo del comercio</h4>
		<p>En el caso de no subir un logo, en la web personalizada se visualizará únicamente su nombre o razón social. Se admiten jpg o png hasta 2mb</p>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input type="file" name="logo" class="form-control" />
                  </div>
                </div>
                <button class="btn btn-default btn-lg btn-block">Guardar Cambios</button>
              <?php echo form_close();?>
              </fieldset>
            </div>
            <!-- /Form Panel -->
	    <div class="align-center"><? echo anchor('/','VOLVER SIN GUARDAR'); ?></div>
          </div>
          <!-- /Container -->
        </div>
        <!-- /Vcenter this -->
      </div>
      <!-- /Vcenter -->
    </div>
    <!-- /Empty Block
    ================================================== -->
 