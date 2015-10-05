<? function thumb($archivo)
{
        $primero = explode('.',$archivo);
        $thumb="_thumb.";
        echo $primero[0].$thumb.$primero[1];
}
?>

      <!-- Intro Block
      ============================================ -->
      <div class="intro-block mgb-20">
      
        <!-- Container -->
        <div class="container">

          <!-- Slider Wrapper -->
          <div class="intro-slider">
          
            <!-- BxSlider -->
            <div class="bxslider" data-call="bxslider" data-options="{mode:'fade', autoReload:true, pager:true, controls:true, auto:true, speed:300}">
            <? foreach ($adela_c as $adela){
                        if($adela['archivo'] != ""){?>
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/carruseles/<? thumb($adela['archivo']); ?>" alt=""/>
                <!-- slider image + background -->
                <!-- Text -->
                <div class="text">
                  <div class="vcenter">
                    <div class="vcenter-this text-block">
                      <h5 class="bx-layer" data-anim="bounceInLeft" data-dur="1000" data-delay="700"><? echo $adela['titulo']; ?></h5>
                      <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100"><? echo $adela['link']; ?></h1><br/>
                      <p class="bx-layer" data-anim="bounceInRight" data-dur="1000" data-delay="500"><? echo $adela['resumen']; ?></p>
                      <!--<a class="btn btn-base bx-layer" data-anim="bounceInUp" data-dur="1000" data-delay="1000">Ordenar ahora</a>-->
                    </div>
                  </div>
                </div>
                <!-- /Text -->
              </div>
              <!-- /Slide -->

            <?} } ?>
            </div>
            <!-- /BxSlider -->
            
          </div>
          <!-- Slider Wrapper -->

        </div>
        <!-- /Container -->

      <!-- /Intro Block
      ============================================ -->