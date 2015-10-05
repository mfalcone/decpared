<!--<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.touchwipe.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.imgareaselect.pack.js"></script>
<link href="<?php echo base_url(); ?>css/imgareaselect-animated.css" type="text/css" rel="stylesheet">
<? $tamano = getimagesize(base_url().'imagenes/productos/'.$propiedad['archivo']['mini']);
/*print_r($tamano);*/




//defino el máximo
$maximo = $propiedad['max']; 
//defino la resolución en pulgadas (dpi)
$dpi = $propiedad['dpi'];
$pulgada = 2.54;
$dpc= $dpi/$pulgada;

//defino los valores de la imagen
$ancho_cm = round($tamano[0]/$dpc);
$alto_cm = round($tamano[1]/$dpc);
$ancho_px = $tamano[0];
$alto_px = $tamano[1];

//averiguo el lado mayor
if($ancho_px > $alto_px)
{
   $relacion = $ancho_px / $alto_px;
   $case = 1;
}
else
{
  $relacion =  $alto_px /$ancho_px;
  $case = 2;
}

?>
<script>
 $(document).ready(function () {
     
     $("#ancho").keyup(function () {
        
        //defino los valores de la imagen real en pixeles
     var ancho_real = <?php echo $tamano[0]; ?>;
     var alto_real = <?php echo $tamano[1]; ?>;
     var dpc = <?php echo $dpc; ?>;
     var case_r = <?php echo $case; ?>;
     
     if (case_r == 1) {
     var ancho_maximo = <?php echo $maximo; ?>;
     var alto_maximo = <?php echo round($maximo/$relacion); ?>;

     }
     if (case_r == 2) {
      var alto_maximo = <?php echo $maximo; ?>;
      var ancho_maximo = <?php echo round( $maximo/$relacion); ?>;
     }
     
    //valores en cm ingresados por el usuario
    var ancho = $("#ancho").val();
    var alto = $("#alto").val();
    
    if (ancho > ancho_maximo) {
     $( "#ancho" ).val( ancho_maximo );
     ancho = ancho_maximo;

    }
    
    //paso los valores ingresados por el usuario a pixeles
    var ancho_px = ancho*dpc;
    var alto_px = alto*dpc;
    
    if (ancho > alto) {
     var ancho_input = ancho_real;
     var rel_rel= ancho / alto;
     var alto_input = Math.round(ancho_real/rel_rel);
    }
    else
    {
      var alto_input = alto_real;
      var rel_rel = alto/ancho;
      var ancho_input=Math.round(alto_real/rel_rel);
    }
    
    var ias = $('#photo').imgAreaSelect({ instance: true,resizable: false,
                                        onSelectEnd: function (img, selection) {
         $('input[name="x1"]').val(selection.x1);
         $('input[name="y1"]').val(selection.y1);
         $('input[name="x2"]').val(selection.x2);
         $('input[name="y2"]').val(selection.y2);
         $('input[name="ancho_input"]').val(ancho_input);
         $('input[name="alto_input"]').val(alto_input);
    }});
    ias.setSelection(0, 0, ancho_input, alto_input, true);
    ias.setOptions({ show: true });
    ias.update();
    
   });
     
     
    $("#alto").keyup(function () {
     var ancho_real = <?php echo $tamano[0]; ?>;
     var alto_real = <?php echo $tamano[1]; ?>;
     var dpc = <?php echo $dpc; ?>;
     var case_r = <?php echo $case; ?>;
         
     if (case_r == 1) {
     var ancho_maximo = <?php echo $maximo; ?>;
     var alto_maximo = <?php echo round($maximo/$relacion); ?>;

     }
     if (case_r == 2) {
      var alto_maximo = <?php echo $maximo; ?>;
      var ancho_maximo = <?php echo round( $maximo/$relacion); ?>;

     }
     
    var ancho = $("#ancho").val();
    var alto = $("#alto").val();
    if (alto > alto_maximo) {
     $( "#alto" ).val( alto_maximo );
     alto = alto_maximo;
    }
    //paso los valores ingresados a pixeles
    var ancho_px = ancho*dpc;
    var alto_px = alto*dpc;
    
    if (ancho > alto) {
     var ancho_input = ancho_real;
     var rel_rel= ancho / alto;
     var alto_input = ancho_real/rel_rel;
    }
    else
    {
      var alto_input = alto_real;
      var rel_rel = alto/ancho;
      var ancho_input=alto_real/rel_rel;
    }
    //alert('alto_input: '+alto_input+' ancho_input: '+ancho_input);
    var ias = $('#photo').imgAreaSelect({ instance: true, resizable: false,
                                        onSelectEnd: function (img, selection) {
         $('input[name="x1"]').val(selection.x1);
         $('input[name="y1"]').val(selection.y1);
         $('input[name="x2"]').val(selection.x2);
         $('input[name="y2"]').val(selection.y2);
         $('input[name="ancho_input"]').val(ancho_input);
         $('input[name="alto_input"]').val(alto_input);
    }});
    ias.setSelection(0, 0, ancho_input, alto_input, true);
    ias.setOptions({ show: true });
    ias.update();
    
   });
 });
</script>

 <!--page_container-->

<div class="page_container">
    <!--MAIN CONTENT AREA-->
 <div>
  <div class="container">
  <div class="page_full white_bg drop-shadow">
   <div class="breadcrumb">
    <div class="container">
     <div class="breadcrumb_title">Proyecto <? echo $propiedad['titulo']; ?></div>
    <? echo $propiedad['titulo']; ?>
    </div>
   <div class="abs_points"></div>
   </div>
      <div class="container">
          <div class="page_in">
                  <div class="container">
                  <div class="row pad25">
                   
                   <div class="span8">
                    <img id="photo" src="<?php echo base_url(); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>"/>
                    <div class="pikachoose">
                    -------------------------------------------
                     <ul id="pikame" class="jcarousel-skin-pika">
                      <li>
                       <a href="<? echo base_url(); ?>">
                      <img src="<?php echo base_url(); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>" />
                       </a><span>Diseño real</span>
                      </li>
                       <? foreach($galeria as $foto){?>
                       <li>
                        <a href="<? echo base_url(); ?>">
                         <img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/galerias/<? echo $foto['archivo']; ?>"/>
                        </a><span>Ejemplo de trabajo terminado.</span>
                       </li>
                       <? } ?>
                     </ul>
                    </div>           
                      
                         <p>
                           <? echo $propiedad['desarrollo']; ?></p>
                        
                   </div>
                      <div class="span4">
                          <p>  <? echo $propiedad['resumen']; ?> </p>                        
                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#descripcion" data-toggle="tab">Descripción</a></li>
                              <!--<li><a href="#presupuesto" data-toggle="tab">Presupuesto</a></li>-->
                          </ul>
                          <div class="tab-content">
                              <div id="descripcion" class="tab-pane active">
                               <?php echo form_open_multipart('proyectos/carrito'); ?>
                               <fieldset>
                               <div class="form-group">
                                 <label class="col-sm-2 control-label">Ancho (cm)</label>
                                  <input type="text" id="ancho" class="form-control" name="ancho" value="">
                               </div>
                               <div class="form-group">
                                 <label class="col-sm-2 control-label">Alto (cm)</label>
                                  <input type="text" class="form-control" id="alto" name="alto" value="">
                               </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">An</label>
                                  <input type="text" class="form-control" name="x2" value="">
                               </div>
                               <div class="form-group">
                                 <label class="col-sm-2 control-label">Al</label>
                                  <input type="text" class="form-control" name="y2" value="">
                               </div>
                               <div class="form-group">
                                 <label class="col-sm-2 control-label">X</label>
                                  <input type="text" class="form-control" name="x1" value="">
                               </div>
                               <div class="form-group">
                                 <label class="col-sm-2 control-label">Y</label>
                                  <input type="text" class="form-control" name="y1" value="">
                               </div>
                               <div class="form-group">
                                 <label class="col-sm-2 control-label">ancho_input</label>
                                  <input type="text" class="form-control" name="ancho_input" value="">
                               </div>
                               <div class="form-group">
                                 <label class="col-sm-2 control-label">alto_input</label>
                                  <input type="text" class="form-control" name="alto_input" value="">
                               </div>
                               <!--<div class="form-group">
                                 <label class="col-sm-2 control-label">Restringir Proporción</label>
                                  <input type="checkbox" class="form-control" id="proporcion" name="proporcion" checked />
                               </div>-->
                               </fieldset>
                               
                                <table class="table table-striped table-bordered table-condensed">
                                      <thead>
                                      <tr>
                                          <th colspan="3">Precio</th>
                                       </tr>
                                      </thead>
                                   <tbody>
                                      <tr>
                                          <th>
                                              <img src="<?php echo base_url(); ?>imagenes/help.jpeg" style="float:left;" data-toggle="tooltip" data-placement="left" title="Son los planos de plantas del proyecto donde se pueden observar: las superficies totales y parciales de los espacios, las relaciones funcionales y las posibilidades de la implantación en la parcela. "></span>
                                      Precio por m2
                                          </th>
                                          <th>
                                              $<? echo $propiedad['precio_basico']; ?>
                                          </th>
                                          <th>
                                          </th>
                                      </tr>
                                       <tr>
                                          <th>
                                              <img src="<?php echo base_url(); ?>imagenes/help.jpeg" style="float:left;" data-toggle="tooltip" data-placement="left" title="Son planos detallados de Arquitectura anterior a la compra de los planos del PROYECTO EJECUTIVO"></span>
                                              PRECIO CALCULADO
                                          </th>
                                          <th id="precio_calculado">
                                              $<? echo $propiedad['precio_basico']; ?>
                                          </th>
                                          <th>
                                          </th>
                                       </tr>
                                        <tr>

                                    </tbody>
                                  </table>
                                  <div class="span8">
                                   <div class="form-actions">
                                    <input type="hidden" name="precio" id="precio" value="<? echo $propiedad['precio_basico']; ?>" />
                                    <input type="hidden" name="propiedad_id" value="<?php echo $propiedad['id']; ?>" />
                                    <button type="submit" class="btn btn-primary">comprar</button>
                                   </div>
                                  </div>                      
                                  <? form_close(); ?>
                              </div>
                              <div class="tab-pane" id="presupuesto">
                                      <table class="table table-striped table-bordered table-condensed">
                                          <thead>
                                          <tr>
                                              <th colspan="2">Presupuesto</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          
                                          
                                      </tbody>
                                      </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                   <a class="btn dark_btn marg20" href="javascript:history.back()">Volver a proyectos</a>
              </div>                        
          </div>
      </div>
  </div>
  </div>
</div>
<!--//MAIN CONTENT AREA-->    	

<!--//page_container-->

<script>
   $("#ancho").keyup(function() {actualizar_precio();});
   $("#alto").keyup(function() {actualizar_precio();});
   function actualizar_precio()
   {
    if(
       ($("#ancho").val() > 0 )
    && ($("#alto").val() > 0 )
      )
    {
     var superficie = $("input[name=ancho]").val()*$("input[name=alto]").val();
     var precio = (superficie * <? echo $propiedad['precio_basico']; ?>)/10000;
    $("#precio_calculado").text("$"+redondeo2decimales(precio));
    $("#precio").text(redondeo2decimales(precio));
    }
   }
   // redondeo
   function redondeo2decimales(numero) {
   var original = parseFloat(numero);
   var result = Math.round(original * 100) / 100;
   return result;
   }
   

</script>
<!--<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.js"></script>-->
<script src="<?php echo base_url(); ?>js/jquery.ui.totop.js" type="text/javascript"></script>

