
  <!-- Empty Block (use .abs-filler to fill page)
    ================================================== -->
    <div class="empty-block abs-filler">
      <!-- Vcenter -->
      <div class="vcenter">
        <div class="vcenter-this">
          <!-- Container -->
          <div class="container">
            <!-- Form Panel -->
            <div class="form-panel width-80pc width-100pc-xs hcenter">
              <header>Listado de Pedidos</header>
              <fieldset>
<? if(isset($pedidos))
{?>
<table class="table table-striped">
  <thead>
    <tr>
      <td>ID</td>
      <td>Fecha</td>
      <td>Cantidad Items</td>
      <td>Superficie</td>
      <td>Total</td>
      <td></td>
    </tr>
  </thead>
  <tbody>
<? foreach($pedidos as $pedido){?>
<tr>
      <td><? echo $pedido['general']['id']; ?></td>
      <td><? echo $pedido['general']['fecha']; ?></td>
      <td><? echo $pedido['items']; ?></td>
      <td><? echo $pedido['superficie']; ?> m2</td>
      <td>$<? echo $pedido['total']; ?>.-</td>
      <td><a id="glyphicon_<? echo $pedido['general']['id']; ?>" >Mostrar ITEMS</a></td>
    </tr>
<tr>
  <td colspan="6">
    <table  class="table table-striped" style="background-color: #EBEBEB; font-size: 12px; font-weight: 100; display: none" id="table_<? echo $pedido['general']['id']; ?>">
      <thead>
	<tr>
	  <td><strong>Código</strong></td>
	  <td><strong>imagen</strong></td>
	  <td><strong>nombre</strong></td>
	  <td><strong>superficie</strong></td>
	  <td><strong>Ancho</strong></td>
	  <td><strong>Alto</strong></td>
	  <td><strong>Cantidad</strong></td>
	  <td><strong>Material</strong></td>
	  <td><strong>Precio</strong></td>
	</tr>
      </thead>
      <tbody>
	<? foreach($pedido['detalle'] as $detalle){ ?>
	<tr>
	  <td><? echo $detalle['codigo']; ?></td>
	  <td> <img style=" width: 50px;" src="<? echo $this->config->item('base_url_2').'imagenes/productos/'.$detalle['imagen']['mini']; ?>" /></td>
	  <td><? echo $detalle['nombre']; ?></td>
	  <td><? echo $detalle['superficie']; ?> m2</td>
	  <td><? echo $detalle['ancho']; ?> cm</td>
	  <td><? echo $detalle['alto']; ?> cm</td>
	  <td><? echo $detalle['cantidad']; ?></td>
	  <td><? echo $detalle['material']; ?></td>
	  <td>$<? echo $detalle['precio']; ?></td>
	</tr>
	<? } ?>
      </tbody>
    </table>
  </td>
</tr>
<? } ?></tbody>
</table>
<? }else{?><h3>No se registran pedidos en su cuenta</h3><? } ?>
              </fieldset>
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
    
    <script src="<?php echo $this->config->item('base_url_2'); ?>js/jquery-latest.min.js"></script>

<script>
  <? foreach($pedidos as $pedido){?>
$( "#glyphicon_<? echo $pedido['general']['id']; ?>" ).click(function() {
  $("#table_<? echo $pedido['general']['id']; ?>" ).toggle( "slow", function() {
    // Animation complete.
    var texto=$( "#glyphicon_<? echo $pedido['general']['id']; ?>" ).text();
    if (texto == "Mostrar ITEMS") {
      //code
      $( "#glyphicon_<? echo $pedido['general']['id']; ?>" ).text("Ocultar ITEMS");
    }
    else
    {
      $( "#glyphicon_<? echo $pedido['general']['id']; ?>" ).text("Mostrar ITEMS");
    }
  });
});

<? } ?>
</script>