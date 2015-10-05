
      <!-- Intro Block
      ============================================-->
      <section class="intro-block intro-page boxed-section page-bg overlay-dark-m">
      
        <!-- Container -->
        <div class="container">     
          <!-- Section Title -->
          <div class="section-title invert-colors no-margin-b">
            <h2><strong><? echo $tipo; ?></strong>: <? echo $nombre; ?></h2>
            <p class="hidden-xs">Navega por las diferentes categorías hasta encontrar la imagen deseada.</p>
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
            <li><a href="<? echo base_url(); ?>"><i class="ti ti-home"></i></a></li>
            <li>Papel Mural</li>
            <li><? echo $tipo; ?></li>
	    <li class="active"><? echo $nombre; ?></li>
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
      ============================================ -->
      <section class="content-block default-bg">
      
        <!-- Container -->
        <div class="container cont-main no-pad-t">
        
          <!-- Row -->
          <div class="row">
            <!-- Side Col -->
            <div class="side-col col-sm-3 col-md-3">

              <!-- Side Widget -->
              <div class="side-widget no-margin-l">
              
                <h5 class="boxed-title"><? echo $tipo; ?></h5>
                
                <!-- ul-toggle -->
                <ul class="ul-toggle font-size-sm">
                  <? foreach ($categorias as $categoria){ ?>
                  <li><a href="<? echo base_url(); ?>index.php/proyectos/mural/<? echo $tipo.'/'.$categoria['id']; ?>" >
                  <? echo $categoria['nombre']; ?>
                  </a></li>                                            
                  <? } ?>
                </ul>
                <!-- /ul-toggle -->
          
              </div>
              <!-- /Side Widget -->
              

            </div>
            <!-- /Side Col -->
            <!-- Main Col -->
            <div class="main-col col-sm-9 col-md-9">
            

            
              <!-- Row -->
              <div class="product-grid row grid-20 mgb-20">
              <? foreach ($propiedades as $propiedad){ ?>
                <!-- Col -->
                <div class="col-sm-6 col-md-4">
                
                  <!-- product -->
                  <div class="product clearfix">
                  
                    <!-- Image -->
                    <div class="image"> 
                      <a href="<? echo base_url(); ?>index.php/proyectos/id/<?php if(isset($propiedad['prod']['id'])) echo $propiedad['prod']['id']; ?>" class="main">
		       <img style="height: 180px; width: 270px;" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $propiedad['prod']['archivo']['mini']; ?>" />
		      </a>

                    </div>
                    <!-- Image -->
                    
                    <!-- Details -->
                    <div class="details">
                    
                      <a class="title" href="<? echo base_url(); ?>index.php/proyectos/id/<?php if(isset($propiedad['prod']['id'])) echo $propiedad['prod']['id']; ?>">
		      <?php if(isset($propiedad['prod']['titulo'])) echo $propiedad['prod']['titulo']; ?>
		      </a>
                      
                      <!-- rating -->

                      
                      <p class="desc"><?php if(isset($propiedad['prod']['resumen'])) echo $propiedad['prod']['resumen']; ?></p>
                      

                      
                      <!-- buttons -->
                      <div class="btn-group">
                        <a class="btn btn-outline btn-base-hover" href="<? echo base_url(); ?>index.php/proyectos/id/<?php if(isset($propiedad['prod']['id'])) echo $propiedad['prod']['id']; ?>">Ver</a>	
                      </div> 
                      <!-- /buttons -->
                      
                    </div>
                    <!-- /Details -->
                    
                  </div>
                  <!-- /product -->
                
                </div>
                <!-- /Col -->

              <? } ?>
              </div>
              <!-- /Row -->
              
              <!-- Pagination -->

                <?php echo (isset($pagination)) ? $pagination : ''; ?>

              <!-- /Pagination -->
              
            </div>
            <!-- /Main Col -->
            
           

          </div>
          <!-- /Row -->
        
        </div>
        <!-- /Container -->
        
      </section>
      <!-- /Content Block
      ============================================ -->
      
      <!-- Content Block
      ============================================ -->
      <? $this->load->view('newsletter_block.php'); ?>	
      
      <!-- /Content Block
      ============================================ -->
