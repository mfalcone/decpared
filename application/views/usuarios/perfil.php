 <style>
  dd {margin-bottom: 10px;}
 </style>
      <div class="empty-block abs-filler">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="container">
            <!-- Form Panel -->
            <div class="form-panel width-40pc width-100pc-xs hcenter">
              <header>Perfil de Usuario</header>
	      <div style="padding: 20px;">
              <h4><? echo $usuario['nombre']; ?>, Bienvenido a tu perfil de usuario</h4>
	      <dl  class="dl-horizontal">
		<dt><? echo anchor('login/seguridad','Seguridad');?></dt>
		<dd>Desde aquí podrás <strong>modificar su contraseña</strong></dd>
		<dt><? echo anchor('login/editar','Datos');?></dt>
		<dd>Sección para <strong>modificar los datos</strong> de contacto y administrativos que completaste en tu registro</dd>
		<dt><? echo anchor('login/pedidos','Pedidos solicitados');?></dt>
		<dd>Si solicitaste <strong>pedidos en nuestra web</strong> desde esta sección podrás ver toda la información de los mismos</dd>
		<dt><? echo anchor('/','VOLVER');?></dt>
		<dd>Volver a la navegación de decoratupared.com.ar</dd>
	      </dl>
	      </div>
            </div>
            <!-- /Form Panel -->
	    <div class="align-center"><? echo anchor('/','VOLVER'); ?></div>
          </div>
          <!-- /Container -->
        </div>
        <!-- /Vcenter this -->
      </div>
      <!-- /Vcenter -->
    </div>
    <!-- /Empty Block
    ================================================== -->
 