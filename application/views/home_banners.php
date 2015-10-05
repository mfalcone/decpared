<style>
.banner > a {
  display: inline-block;
  position: relative;
  overflow: hidden;
}
.banner img {
  position: relative;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  background-color: #000;
}
.banner:hover img {
  -webkit-transform: rotate(-1deg) scale(1.1);
  -moz-transform: rotate(-1deg) scale(1.1);
  -ms-transform: rotate(-1deg) scale(1.1);
  -o-transform: rotate(-1deg) scale(1.1);
  background-color: #000;
  opacity: 0.9;
}
.banner .banner-text {
  position: absolute;
  color: #fff;
  top: 30%;
  left: 4%;
  z-index: 200;
}
.banner .banner-text.theblue h1,
.banner .banner-text.theblue .tagline {
  color: #fff;
}
.banner .banner-text.right {
  right: 4%;
  left: auto;
}
.banner .banner-text h1 {
    color: #fff;
  font-size: 36px;
  font-weight: 800!important;
  text-transform: capitalize;
  line-height: 38px;
  margin: 0px;
}
.banner .banner-text .tagline {
  text-transform: capitalize;
  font-weight: 100;
  font-size: 20px;
  line-height: 33px;
}
#banner-holder {
  margin: 23px 0;
}
</style><!-- ========================================= HOME BANNERS ========================================= -->
<section id="banner-holder" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <h4>Seleccione su producto</h4>
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 banner">
                <a href="<? echo base_url(); ?>index.php/proyectos">
                    <div class="banner-text theblue">
                        <h1>Murales de pared</h1>
                        <span class="tagline">Explorá nuestro banco de imagenes</span>
                    </div>
                    <img class="banner-image img-responsive" alt=""
                         src="<?php echo $this->config->item('base_url_2'); ?>imagenes/banner_home_1.jpg" />
                </a>
            </div>
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6 text-right banner">
                <a href="<? echo base_url(); ?>">
                    <div class="banner-text right">
                        <h1>Impresiones sobre lienzo</h1>
                        <span class="tagline">Proximamente </span>
                    </div>
                    <img class="banner-image img-responsive" alt="" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/banner_home_2.jpg" />
                </a>
            </div>
        </div>
    </div><!-- /.container -->
</section>
