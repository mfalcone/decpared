<? $usuario = $this->session->userdata('usuario'); ?>
<footer class="footer-block">

  <!-- Container -->
  <div class="container cont-top clearfix">
  
    <!-- Row -->
    <div class="row">
    
      <!-- Brand -->
      <div class="col-md-3 brand-col brand-center">
        <div class="vcenter">

          <? if ($usuario['logo'] != "") {?>
                  <a href="<? echo base_url(); ?>" class="vcenter-this">
                    <img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/logo_cliente/<? echo $usuario['logo']; ?>" alt="<? echo $usuario['razon_social']; ?>">
                  </a>
		  <? } ?>
        </div>
      </div>
      <!-- /Brand -->
      
      <!-- Links -->
      <div class="col-md-9 links-col">
      
        <!-- Row -->
        <div class="row-fluid">
        
          <!-- Col -->
          <div class="col-xs-6 col-sm-6 col-md-6">
            <h5>Sobre nosotros</h5>
            <p>Decoratucasa.com.ar es un emprendimiento desarrollado por SPC Identificación Gráfica SRL, una empresa con más de 23 años brindando a sus clientes un servicio de excelencia en Impresión Digital de Gran Formato.</p>
              <!-- hlinks -->
              <ul class="hlinks hlinks-icons color-icons-borders color-icons-bg color-icons-hovered">
                <li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="icon fa fa-rss"></i></a></li>
                <li><a href="#"><i class="icon fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="icon fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="icon fa fa-youtube"></i></a></li>
              </ul>
              <!-- /hlinks -->              
          </div>
          <!-- /Col -->
          
          <!-- Col -->
          <!--<div class="col-xs-6 col-sm-3 col-md-3">
            <h5>miembro</h5>
            <ul class="vlinks">
              <li><a href="#">Account</a></li>
              <li><a href="#">Wishlist and Favourites</a></li>
              <li><a href="#">Purchase History</a></li>
              <li><a href="#">View Cart</a></li>
            </ul>
          </div>-->
          <!-- /Col -->
          
          <div class="col-xs-6 col-sm-6 col-md-6">
                  <h5>Nuestro respaldo</h5>
                  <div class="vcenter">
          <a class="vcenter-this" href="#">
            <img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/logo_spc.png" alt="logo"/>
          </a>
        </div>
                </div>
          
       </div>
       <!-- /Row -->
       
      </div>
      <!-- /Links -->
      
    </div>
    <!-- /Row -->
    
  </div>
  <!-- /Container -->
  
  <!-- Bottom -->
  <div class="footer-bottom invert-colors bcolor-bg">
  
    <!-- Container -->
    <div class="container">
    
      <span class="copy-text">&copy; 2015 Decoratucasa.com.ar</span>
      <!-- hlinks -->
      <ul class="hlinks pull-right">
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Registro</a></li>
        <li><a href="#">Servicio al consumidor</a></li>
      </ul>
      <!-- /hlinks -->
      
    </div>
    <!-- /Container -->
    
  </div>
  <!-- /Bottom -->
  
</footer>
