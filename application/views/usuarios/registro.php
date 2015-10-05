      <div class="empty-block abs-filler">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="container">
            <!-- Form Panel -->
            <div class="form-panel width-40pc width-100pc-xs hcenter">
              <header>Solicitud de registro</header>
	      

              <fieldset>
	      <?php
		if (validation_errors())
		{
		  echo '<div class="registro_titulo">Se produjeron los siguientes errores</div><div style="margin-left:50px;">';
		  echo validation_errors();
		  echo '</div>';
		}
		
		?>
              <?php echo form_open_multipart('login/agregar');?>
	      <div class="form-group">
                  <div class="input-group">
			Complete el formulario, luego de evaluar los datos nos contactaremos a la brevedad.<br />
			los campos marcados con <i class="fa fa-circle"></i> son obligatorios
		  </div>
	      </div>
	      <hr />
	      <div class="form-group">
		<label>Seleccione el código del Coordinador Regional que lo invitó a decoratupared.com.ar</label>
                  <div class="input-group">
                    <select name="organizador_id">
		      <? foreach ($organizadores as $organizador){ ?>
		      <option value="<? echo $organizador['id']; ?>"><? echo $organizador['id']; ?></option>
		      <? } ?>
		    </select>
                  </div>
                </div>
	      <hr />
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="razon_social" class="form-control" placeholder="Nombre o Razón Social" value="<?php echo set_value('razon_social'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="telefono" type="text" class="form-control" placeholder="Teléfono" value="<?php echo set_value('telefono'); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="calle" class="form-control" placeholder="Domicilio" value="<?php echo set_value('calle'); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="ciudad" class="form-control" placeholder="Localidad" value="<?php echo set_value('ciudad'); ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="codPostal" class="form-control" placeholder="CP" value="<?php echo set_value('codPostal'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="provincia" class="form-control" placeholder="Provincia" value="<?php echo set_value('provincia'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input name="actividadAfip" class="form-control" placeholder="Actividad Principal" value="<?php echo set_value('actividadAfip'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input name="web" class="form-control" placeholder="Web" value="<?php echo set_value('web'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="cuit" class="form-control" placeholder="CUIT" value="<?php echo set_value('cuit'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="domicilio_fiscal" class="form-control" placeholder="Domicilio Fiscal" value="<?php echo set_value('domicilio_fiscal'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <label class="checkbox-inline"><input type="radio" value="responsable" name="tipoIva">Responsable Inscripto</label>
                </div>
		<div class="form-group">
                  <label class="checkbox-inline"><input type="radio" value="monotributo" name="tipoIva">Monotributo</label>
                </div>
		<h4>Tus datos de contacto</h4>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="nombre" class="form-control" placeholder="Nombre" value="<?php echo set_value('nombre'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"></div>
                    <input name="celular" class="form-control" placeholder="Celular" value="<?php echo set_value('celular'); ?>">
                  </div>
                </div>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="email_contacto" class="form-control" placeholder="Email" value="<?php echo set_value('email_contacto'); ?>">
                  </div>
                </div>
		<h4>Datos de Acceso</h4>
		<div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input name="usuario" class="form-control" placeholder="usuario" value="<?php echo set_value('usuario'); ?>">
                  </div>
                </div>
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
		<h4>Logo del comercio</h4>
		<p>En el caso de no subir un logo, en la web personalizada se visualizará únicamente su nombre o razón social. Se admiten jpg o png hasta 2mb</p>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                    <input type="file" name="logo" class="form-control" />
                  </div>
                </div>
                <button class="btn btn-default btn-lg btn-block">Registrarse</button>
              <?php echo form_close();?>
              </fieldset>
            </div>
            <!-- /Form Panel -->
            <div class="align-center">Ya está registrado? <a href="<? echo base_url(); ?>index.php/login">Ingrese aquí</a></div>
          </div>
          <!-- /Container -->
        </div>
        <!-- /Vcenter this -->
      </div>
      <!-- /Vcenter -->
    </div>
    <!-- /Empty Block
    ================================================== -->
 