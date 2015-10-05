 <!-- Content Block
      ============================================-->
      <section class="content-block default-bg">
      
        <!-- Container -->
        <div class="container cont-pad-t-sm">

          <!-- Row -->
          <div class="row" style="margin-bottom: 20px;">
	    <div class="section-title line-pcolor">
	    <h2>Busqueda de motivos</h2>
	    <p>Con el objetivo de facilitarte la selección de imagenes te ofrecemos 3 maneras de buscar.</p>
	    </div>
	    </div>
	     <div class="row" style="margin-bottom: 20px;">
            <!-- Side Col -->
            <div class="side-col side-col-padded col-sm-4 col-md-4">

         
              <img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/index_categoria.jpg">
            </div>
            <!-- /Side Col -->
            <!-- Main Col -->
            <div class="main-col col-sm-8 col-md-8 mgb-30-xs">
            
             <h3 class="product-title">Por Tema</h3>
	     <h4 class="product-price">La manera clasica de categorizar imagenes</h4>
	     
	     <hr />
	     <? foreach ($categorias_menu['tema'] as $tema){ ?>
	    <a style="font-size: 20px;" href="<? echo base_url(); ?>index.php/proyectos/mural/<? echo 'tema/'.$tema['id']; ?>" >
	    <? echo $tema['nombre'].', '; ?>
	    </a>                                            
	    <? } ?>

	    </div>
            <!-- /Main Col -->
	    </div>
          <!-- /Row -->
	  <hr />
	  <!-- Row -->
          <div class="row" style="margin-bottom: 20px;">
	    <div class="side-col side-col-padded col-sm-4 col-md-4">
              <img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/index_color.jpg">
            </div>
            <!-- /Side Col -->
            <!-- Main Col -->
            <div class="main-col col-sm-8 col-md-8 mgb-30-xs">
            
             <h3 class="product-title">Por Color</h3>
	     <h4 class="product-price">Este método de busca te va a ser útil para una combinación presisa de colores con tu diseño preexistente</h4>
	     <hr />
	     <? foreach ($categorias_menu['color'] as $color){ ?>
				<a  style="font-size: 20px;" href="<? echo base_url(); ?>index.php/proyectos/mural/<? echo 'color/'.$color['id']; ?>" >
				<? echo $color['nombre'].', '; ?>
				</a>                                            
				<? } ?>
	    </div>
            <!-- /Main Col -->
	  </div>
          <!-- /Row -->
	  <hr />
	  <!-- Row -->
          <div class="row" style="margin-bottom: 20px;">
	    <div class="side-col side-col-padded col-sm-4 col-md-4">
	      <img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/index_ambiente.jpg">
            </div>
            <!-- /Side Col -->
            <!-- Main Col -->
            <div class="main-col col-sm-8 col-md-8 mgb-30-xs">
           
             <h3 class="product-title">Por Ambiente</h3>
	     <h4 class="product-price">Aquí podrás filtrar tu búsqueda cuando ya sabés cuál es el ambiente donde colocarás el mural</h4>
	     <hr /><? foreach ($categorias_menu['ambiente'] as $ambiente){ ?>
	      <a  style="font-size: 20px;" href="<? echo base_url(); ?>index.php/proyectos/mural/<? echo 'ambiente/'.$ambiente['id']; ?>" >
	      <? echo $ambiente['nombre'].', '; ?>
	      </a>                                            
	      <? } ?>
	      </div>
            <!-- /Main Col --> 
            </div>
          <!-- /Row -->
        
        </div>
        <!-- /Container -->
        
      </section>
      <!-- /Content Block
      ============================================-->