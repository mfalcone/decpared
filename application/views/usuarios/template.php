
<!DOCTYPE html>
<html lang="es">
 <?php $this->load->view('includes/head');?>
 <body class="tile-1-bg">
  
  <!-- Preloader 
  ============================================ -->
<!--  <div class="page-preloader">
    <div class="vcenter"> <div class="vcenter-this"><img class="anim" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/loader.gif" alt="cargando..." /></div></div>
  </div>-->
  <!-- /Preloader 
  ============================================ --> 
  
  <!-- Page Wrapper
  ++++++++++++++++++++++++++++++++++++++++++++ -->
  <div class="page-wrapper boxed-wrapper shadow">
  
  <!-- Header Block
  ============================================== -->
  <?php // $this->load->view('includes/header');?>
  <!-- /Header Block
  ============================================== --> 

  <!--page_container-->
  <?php $this->load->view($content);?>
  <!--//page_container-->
  
  <!-- Footer
  =================================================== -->
  <?php // $this->load->view('includes/footer');?>
  <!-- /Footer
  =================================================== -->
  </div>
  <!-- /Page Wrapper
  ++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- Javascript
    ================================================== -->
    <script src="<?php echo $this->config->item('base_url_2'); ?>js/jquery-latest.min.js"></script>
    <script src="<?php echo $this->config->item('base_url_2'); ?>js/bootstrap.min.js"></script>
      <script src="<?php echo $this->config->item('base_url_2'); ?>js/jquery.bxslider-rahisified.js"></script>
  <script src="<?php echo $this->config->item('base_url_2'); ?>js/jquery-ui.min.js"></script>
  <script src="<?php echo $this->config->item('base_url_2'); ?>js/highlight.pack.js"></script>
  
  <script src="<?php echo $this->config->item('base_url_2'); ?>js/jquery-scrollto.js"></script>
  <script src="<?php echo $this->config->item('base_url_2'); ?>js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo $this->config->item('base_url_2'); ?>js/wow.min.js"></script>
  <script src="<?php echo $this->config->item('base_url_2'); ?>js/theme.js"></script>
    
    <script src="<?php echo $this->config->item('base_url_2'); ?>js/uikit.js"></script>
    <script src="<?php echo $this->config->item('base_url_2'); ?>js/wow.min.js"></script>
     <script src="<?php echo $this->config->item('base_url_2'); ?>js/uikit-utils.js"></script>
    <!-- /JavaScript
    ================================================== -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67208114-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>

