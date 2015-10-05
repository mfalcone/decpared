    <base href="<?php echo base_url(); ?>">
    <script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/modernizr.custom.24232.js"></script>
    <script type="text/javascript">
        var pw = {};zz
        pw.meta = {
          path: 'index.php/proyectos/id/'+<? echo $propiedad['id']; ?>,
          locale: 'en-EU',
        };
    </script>

    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" media="screen, print, projection">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/product.css" media="screen, projection">
 <!--page_container-->

 <!-- Page Info Block
      ============================================-->
      <section class="page-info-block boxed-section">
      
        <!-- Container -->
        <div class="container cont-pad-x-15"> 

          <!-- Breadcrumb -->
          <ol class="breadcrumb pull-left">
            <li><a href="#"><i class="ti ti-home"></i></a></li>
            <li><a href="#">Producto</a></li>
            <li><a href="#">Pedido</a></li>
          </ol>
          <!-- /Breadcrumb --> 

          <!-- hlinks -->
          <ul class="page-links pull-right hlinks hlinks-icons color-icons-borders color-icons-bg-hovered">
            <li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="icon fa fa-rss"></i></a></li>
          </ul>
          <!-- /hlinks -->

        </div>
        <!-- /Container -->
      
      </section>
      <!-- /Page Info  Block
      ============================================-->
      
      <!-- Content Block
      ============================================-->
      <section class="content-block default-bg">
       <div class="container cont-pad-t-sm">
        <div class="row">
           <section class="product">
            
           <div class="main-col col-sm-8 col-md-8 mgb-30-xs">
            <h4 class="case-c"><?php if(isset($propiedad['titulo'])) echo $propiedad['titulo']; ?></h4>
                <p><?php if(isset($propiedad['codigo'])) echo '<strong>Código</strong> #'.$propiedad['codigo']; ?></p>
              <div id="image_wrapper" class="image_wrapper">
                
                  <img class="photo" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>">
                  
                  <div id="dragcontainer" class="dragcontainer">
                    <img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>"
                         data-src="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>"
                         data-mirrored="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>?w=620&mirror"
                         data-src-zoom="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>?w=800&h=600"
                         data-mirrored-zoom="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>?w=800&h=600&mirror"
                         data-src-big="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>?w=1280"
                         data-src-zoom-big="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>?w=1280" data-mirrored-big="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>?w=1280&mirror">
                  <div class="dragblock"></div>
                  </div>
              </div>
              <div class="showroom-wrapper" id="showroom-wrapper"><button class="slide-button slide-left" id="showroom-slide-left">&lt;</button>
                <div id="showroom" class="showroom is__scroll">
                  <ul id="showroom-images">
                   <li><a href="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>"
                          data-mirror-src="http://images.photowall.com/products/45087/above-manhattan-sepia.jpg?w=620&amp;mirror"
                          class="product-image">
                   <img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>"></a></li>
                    <? foreach($galeria as $foto){?>
                   <li><a href="<?php echo $this->config->item('base_url_2'); ?>imagenes/galerias/<? echo $foto['archivo']; ?>"><img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/galerias/<? echo $foto['archivo']; ?>"></a></li>
                    <? } ?>
                  </ul>
                </div>
                <button class="slide-button slide-right" id="showroom-slide-right">&gt;</button>
              </div>

           </div>
           <div class="col-sm-4 col-md-4">
            <div class="product-tools">
              <div id="setting-tabs" class="tabs">
                <button class="active" data-tab="settings">Orden</button>
                <button class="inactive" data-tab="adapt-product"></button>
               </div>
              <div id="settings" class="settings">
                <form action="<? echo base_url(); ?>index.php/proyectos/post_proyecto" method="get" id="form_setCustomDimensions" autocomplete="off">
                  <ul>
                    <li><span class="number">1</span><h3>Las Dimensiones</h3>
                      <button class="hint smallbtn" id="hint-measurements" data-on-label="Ayuda" data-off-label="Ocultar">Ayuda</button>
                      <div class="content">
                        <div class="block">
                          <div class="front side">
                            <div id="setsize" class="size_manage">
                              <fieldset class="setsize_width setsize_left" id="setsize_width">
                                <label for="setwidth">Ancho  (cm) </label>
                                <input type="number" step="1" name="width" id="width_textfield" class="output error" value="" tabindex="1">
                                  <div class="size-limits">
                                    <span class="dimension-helper"></span>
                                  </div>
                              </fieldset>
                              <fieldset class="setsize_height setsize_right" id="setsize_height"><label for="setheight">Alto (cm)</label>
                                <input type="number" step="1" name="height" id="height_textfield" class="output error" value="" tabindex="2">
                                  <div class="size-limits"><span class="dimension-helper"></span></div>
                              </fieldset>
                            </div>
                            <div id="out-of-stock-message"></div>
                            <!--<div id="sync_slides_wrap">
                              <input type="checkbox" name="sync_slides" id="sync_slides">
                                <label for="sync_slides">Keep original proportions</label>
                            </div>-->
                                  <!--<div id="mirror_image_wrap">
                                    <input type="checkbox" name="mirror_image" id="mirror_image">
                                      <label for="mirror_image">Mirror image</label>
                                  </div>-->
                                  <div id="proportions-warning" class="closed">
                                    <a href="#" class="close">x</a>
                                  </div>
                                  <noscript>
                                    <button type="submit" class="smallbtn">Calcular nuevo precio</button>
                                  </noscript>
                          </div>
                          <div class="help side">
                            <p>Ingrese el ancho y el alto deseado en centímetros, luego posicione el recorte sobre la imagen para continuar con el paso 2</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="crop-option disabled" id="crop-option">
                      <span class="number">2</span><h3>Recorte de la imagen</h3>
                      <button class="hint smallbtn" id="hint-cropping" data-on-label="Ayuda" data-off-label="Ocultar">Ayuda</button>
                      <div class="content">
                        <div class="block">
                          <div class="front side">
                            A continuación reencuadre la imagen según las medidas ingresadas
                            <!--<button class="crop_button disabled" id="crop_button">Recorte la imagen para ordenar</button>-->
                          </div>
                          <div class="help side"></div>
                        </div>
                      </div>
                    </li>
                    <li><span class="number">3</span><h3>Material </h3>
                      <button class="hint smallbtn" id="hint-material" data-on-label="Ayuda" data-off-label="Ocultar">Ayuda</button>
                      <div class="content" id="product-material">
                        <div class="block">
                          <div class="front side">
                            <p>
                              <input type="radio" name="materialId" id="input_material_1" value="1" checked>
                                <label for="input_material_1" class="inline price">Papel Mural Permiun  <em><!--$500/m--><sup>2</sup></em></label>
                            </p>
                            <p>
                              <input type="radio" name="materialId" id="input_material_4" value="4">
                                <label for="input_material_4" class="inline price">Papel Mural(Standard)   <em><!--$600/m--><sup>2</sup></em></label>
                            </p>
                            <noscript><button type="submit" class="smallbtn">Calcular nuevo Precio</button>
                            </noscript>
                          </div>
                          <div class="help side">
                            <p></p>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </form>
                <form action="<? echo base_url(); ?>index.php/proyectos/agregar_carrito" id="form_addToCart" method="post">
                  <input type="hidden" name="printId" value="<? echo $propiedad['id']; ?>">
                    <input type="hidden" name="materialId" id="input_material" value="1">
                      <input type="hidden" name="width" id="input_width" value="">
                        <input type="hidden" name="height" id="input_height" value="">
                          <input type="hidden" name="x" id="input_x" value="0">
                            <input type="hidden" name="y" id="input_y" value="0">
                              <input type="hidden" name="mirrored" id="input_mirrored" value="0">
                                <div>
                                  <div class="order">
                                    <p class="toshowprice">Ingrese las dimensiones de la imagen para poder ver lla superficie en m2</p>
                                    <p class="yourprice">El importe para Decoratucasa.com es:</p>
                                    <div>
                                     <strong class="price notcalculated" id="price">1/m<sup>2</sup></strong> <strong class="price notcalculated">/m<sup>2</sup></strong>
                                      <button type="submit" class="btn" id="btn_addToCart">
                                        <span class="shoppingcart">Agregar al carrito</span>
                                      </button>
                                    </div>
                                    <div class="cart-confirm" id="cart-confirm"><p>Agregada</p>
                                      <a class="btn" href="<? base_url(); ?>index.php/proyectos/carrito">Ver el pedido</a>
                                    </div>
                                  </div>
                                  <p class="payment"></p>
                                </div>
                </form>
              </div>
              <div class="adapt-product" id="adapt-product"><h3>Desea modificar esta imagen?</h3>
                <p></p>
<!--                <form method="post" id="form-adapt-product" class="form-adapt-product" action="adapt/photo-wallpaper/above-manhattan-sepia">
                  <div class="field">
                    <label for="input_firstName">First Name<strong class="important">*</strong></label>
                    <input type="text" name="firstname" id="input_firstName" value="">
                  </div>
                  <div class="field">
                  <label for="input_lastName">Last Name<strong class="important">*</strong></label>
                  <input type="text" name="lastname" id="input_lastName" value="">
                  </div>
                  <div class="field">
                    <label for="input_telephone">Telephone</label>
                    <input type="text" name="phone" id="input_telephone" value="">
                  </div>
                  <div class="field">
                    <label for="input_email">E-mail<strong class="important">*</strong></label>
                    <input type="text" name="email" id="input_email" value="">
                  </div>
                  <div class="field"><label for="special_wallWidth">Width (cm)<strong class="important">*</strong></label>
                    <span><input type="text" class="slideable" id="special_wallWidth" name="width" value=""></span>
                  </div>
                  <div class="field"><span><label for="special_wallHeight">Height (cm)<strong class="important">*</strong></label>
                  <input type="text" class="slideable" id="special_wallHeight" name="height" value=""></span>
                  </div>
                  <div class="field"><label for="input_message">Message<strong class="important">*</strong></label>
                    <textarea name="input_msg_effect" id="input_message"></textarea>
                  </div>
                  <input type="hidden" name="designerId" value="">
                    <input type="hidden" name="artNo" value="e19887">
                    <input type="hidden" name="productId" value="45087">
                    <input type="hidden" name="product_group" value="photo-wallpaper">
                    <input type="hidden" name="collection" value="classic">
                    <input type="hidden" name="timer" value="0" id="timer">
                    <input type="hidden" name="effect" value="0">
                    <button id="adapt-product-button" type="submit" class="btn"><span>Send free enquiry</span></button>
                </form>-->
              </div>
            </div>
           </div>
      
           </section>
        </div>
           <div class="overlay"></div>
           <div class="popup material-popup" id="material-fancybox">
            <span class="close">Cerrar</span>
            <div class="wrap">
              <div class="gw">
                <!--<div class="column-holder">
                  <div class="column">
                    <div class="top-area"><h2>Standard</h2><span class="price">$500/m2</span>
                    </div>
                  </div>
                </div>
                <div class="column-holder">
                 <div class="column">
                <div class="top-area"><h2>Premium</h2><span class="price">$600/m2</span>
                </div>
                </div>
                </div>-->
              </div><a href="/help/photo-wallpaper" class="more"></a>
            </div>
           </div>
       </div>

      </section>
      <!-- /Content Block
      ============================================-->
    <div id="aviary_feather" class="aviary_feather"></div>
    


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/decora.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/jquery.transit.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/cooquery-3.3.0.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/litebox.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/plugins.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/main.js"></script>
<div id="discountContainer"></div>
<!--<script type="text/html" id="tpl-cartlink">
<span class="bag"></span><a href="#" class="btn alt close">Cerrar</a>
<a href="<? base_url(); ?>index.php/proyectos/carrito" class="btn">Ir al carrito</a>
</script>-->

<script type="text/html" id="tpl-product-pagination">
  <nav class="product-pagination" id="product-pagination">
  <a href="#?=previousLink?#" class="prev"><span>Previous</span></a><a href="#?=nextLink?#" class="next"><span>Next</span></a>
  </nav></script>
<script type="text/html" id="tpl-materialprice-1">$500/m2<sup>2</sup>
</script>
<script type="text/html" id="tpl-materialprice-4">
$600/m2<sup>2</sup>
</script>
<?
$tamano = getimagesize($this->config->item('base_url_2').'imagenes/productos/'.$propiedad['archivo']['mini']);
$dpi = $propiedad['dpi'];
$pulgada = 2.54;
$dpc= $dpi/$pulgada;
$ancho_cm = round($tamano[0]/$dpc);
$alto_cm = round($tamano[1]/$dpc);
$ancho_px = $tamano[0];
$alto_px = $tamano[1];
?>
<script type="text/javascript">
    pw.product={limitations:{maxWidth:360,maxHeight:360,keepAspect:0,outOfStock:{check: 0, sizes: [40]}},
    printId:<? echo $propiedad['id']; ?>,
    group:'photo-wallpaper',
    type:'scaling',
    path:'index.php/proyectos/id/'+<? echo $propiedad['id']; ?>,
    widthsWidth:45,
    width:<? echo $ancho_px; ?>,
    height:<? echo $alto_px; ?>,
    ratio:<? echo ($ancho_px / $ancho_px); ?>,
    artNo:'e19887',
    name:'Above Manhattan - Sepia'}
      
</script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/template.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/touchtimerworkaround.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/iscroll.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/islider.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/touchdraggable.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/touchslider.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/litebox.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/croplib.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/breadcrumbs.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/main-product.js"></script>

