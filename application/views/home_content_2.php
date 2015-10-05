<link href="<? echo base_url(); ?>css/blue.monday/css/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
   <script src="<?php echo $this->config->item('base_url_2'); ?>js/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('base_url_2'); ?>js/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	var myPlaylist = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_N",
                
		cssSelectorAncestor: "#jp_container_N"
	}, [
		{
			title:"Video de presentación 1",
			artist:"SPC red Gráfica",
			free:true,
			m4v: "<? echo base_url(); ?>/videos/video.mp4",

			//poster:"<?php echo $this->config->item('base_url_2'); ?>imagenes/logo_spc.png"
		},
                {
			title:"Video de presentación 2",
			artist:"SPC red Gráfica",
			free:true,
			m4v: "<? echo base_url(); ?>/videos/video1.m4v",

			poster:"<?php echo $this->config->item('base_url_2'); ?>imagenes/logo_spc.png"
		},
		{
			title:"Instructivo de colocación",
			artist:"SPC red Gráfica",
			m4v: "<? echo base_url(); ?>/videos/video3.mp4",

			poster: "<?php echo $this->config->item('base_url_2'); ?>imagenes/logo_spc.png"
		}
	], {
		playlistOptions: {
			enableRemoveControls: true
		},
		swfPath: "<?php echo $this->config->item('base_url_2'); ?>js/jplayer",
                size: {width: "569px", height:"351px"},
		supplied: "webmv, ogv, m4v, oga, mp4, flv",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		audioFullScreen: true
	});

});
</script>

<section id="banner-holder" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                <div id="jp_container_N" class="jp-video jp-video-270p" role="application" aria-label="media player">
                  <div class="jp-type-playlist">
                          <div id="jquery_jplayer_N" class="jp-jplayer"></div>
                          <div class="jp-gui">
                                  <div class="jp-video-play">
                                          <button tabindex="0" role="button" class="jp-video-play-icon">Reproducir</button>
                                  </div>
                                  <div class="jp-interface">
                                          <div class="jp-progress">
                                                  <div class="jp-seek-bar">
                                                          <div class="jp-play-bar"></div>
                                                  </div>
                                          </div>
                                          <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                          <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                          <div class="jp-controls-holder">
                                                  <div class="jp-controls">
                                                          <button class="jp-previous" role="button" tabindex="0">Anterior</button>
                                                          <button class="jp-play" role="button" tabindex="0">Reproducir</button>
                                                          <button class="jp-next" role="button" tabindex="0">Próximo</button>
                                                          <button class="jp-stop" role="button" tabindex="0">Detener</button>
                                                  </div>
                                                  <div class="jp-volume-controls">
                                                          <button class="jp-mute" role="button" tabindex="0">silenciar</button>
                                                          <button class="jp-volume-max" role="button" tabindex="0">volumen máximo</button>
                                                          <div class="jp-volume-bar">
                                                                  <div class="jp-volume-bar-value"></div>
                                                          </div>
                                                  </div>
                                                  <div class="jp-toggles">
                                                          <button class="jp-repeat" role="button" tabindex="0">reptir</button>
                                                          <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
                                                          <button class="jp-full-screen" role="button" tabindex="0">Pantalla completa</button>
                                                  </div>
                                          </div>
                                          <div class="jp-details">
                                                  <div class="jp-title" aria-label="title">&nbsp;</div>
                                          </div>
                                  </div>
                          </div>
                          <div class="jp-playlist">
                                  <ul>
                                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                                          <li>&nbsp;</li>
                                  </ul>
                          </div>
                          <div class="jp-no-solution">
                                  <span>Update Required</span>
                                  To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                          </div>
                  </div>
          </div>
      
            </div>
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-">
                 <!-- Section Title -->
          <div class="section-title line-pcolor">
            <h2>TRABAJAMOS CON LAS MEJORES MARCAS Y MATERIA PRIMA</h2>
            <p>En <strong>Decora tu casa</strong> apostamos a la compra de la impresora ecológica que fue la estrella de las últimas exhibiciones internacionales.
            La HP Scitex 820 es la más grande del mercado en impresiones en Calidad Premium en 1200 dpi en Gran Formato.
            Nuestro Papel Mural pre-encolado junto a las tintas HP Látex cumplen con las más altas exigencias ecológicas mundiales.</p>
          

          <h2 style="margin-top: 60px;">NUESTRAS CERTIFICACIONES</h2>
                    <!-- Slider Wrapper -->
          <div class="brand-slider">
          
            <!-- BxSlider -->
            <div class="bxslider" data-call="bxslider" data-options="{pager:false, slideMargin:20}" data-breaks="[{screen:0, slides:2}, {screen:460, slides:3}, {screen:768, slides:5}]">
              
              <!-- Slide -->
              <!--<div class="slide">
                <img class="img-main" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/cards/logo_1.png" alt=""/>
              </div>-->
              <!-- /Slide -->

              <!-- Slide -->
              <!--<div class="slide">
                <img class="img-main" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/cards/logo_2.jpg" alt=""/>
              </div>-->
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/cards/logo_3.png" alt=""/>
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/cards/logo_4.png" alt=""/>
              </div>
              <!-- /Slide -->
              
              <!-- Slide -->
              <div class="slide">
                <img class="img-main" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/cards/logo_5.png" alt=""/>
              </div>
              <!-- /Slide -->
              

            </div>
            <!-- /BxSlider -->
            </div>
          </div>
          <!-- Slider Wrapper -->
          <!-- /Section Title -->
            </div>
        </div>
    </div><!-- /.container -->
</section>

