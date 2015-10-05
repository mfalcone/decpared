      <!-- Intro Block
      ============================================-->
      <section class="intro-block intro-page boxed-section page-bg overlay-dark-m">
      
        <!-- Container -->
        <div class="container">     
          <!-- Section Title -->
          <div class="section-title invert-colors no-margin-b">
            <h2>Servicio de atención al consumidor</h2>
            <p class="hidden-xs">Estas son las respuestas a las preguntas más frecuentes. Póngase en contacto con nuestro servicio de atención al cliente si tiene más dudas</p>
          </div>
          <!-- /Section Title -->
        </div>
        <!-- /Container -->
      
      </section>
      <!-- /Intro Block
      ============================================-->
      
      <!-- Page Info Block
      ============================================-->
      <section class="page-info-block boxed-section">
      
        <!-- Container -->
        <div class="container cont-pad-x-15"> 

          <!-- Breadcrumb -->
          <ol class="breadcrumb pull-left">
            <li><a href="#"><i class="ti ti-home"></i></a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Atención al Cliente</a></li>

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
      
        <!-- Container -->
        <div class="container no-pad-t">

          <!-- Row -->
          <div class="row">

            <!-- Main Col -->
            <div class="main-col col-sm-8 col-md-8 mgb-30-xs">
            
              <? echo $this->load->view('atencion/'.$this->uri->segment(3)); ?>
              
            </div>
            <!-- /Main Col -->
            
            <!-- Side Col -->
            <? echo $this->load->view('atencion/menu'); ?>
            <!-- /Side Col -->

          </div>
          <!-- /Row -->
        
        </div>
        <!-- /Container -->
        
      </section>
      <!-- /Content Block
      ============================================-->
