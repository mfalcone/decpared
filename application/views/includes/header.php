<? $usuario = $this->session->userdata('usuario'); ?>
      <header class="header-block line-top">
      
        <!-- Main Header
        ............................................ -->
        <div class="main-header container">
        
          <!-- Header Cols -->
          <div class="header-cols"> 
          
            <!-- Brand Col -->
            <div class="brand-col hidden-xs">
            
              <!-- vcenter -->
              <div class="vcenter">
                
                <!-- v-centered -->               
                <div class="vcenter-this">
                  
                  <h1><? echo $usuario['razon_social']; ?></h1>

                </div>
                <!-- v-centered -->
                
              </div>
              <!-- vcenter -->
            </div>
            <!-- /Brand Col -->

            <!-- Right Col -->
            <div class="right-col">
            
              <!-- vcenter -->
              <div class="vcenter">
              
                <!-- v-centered -->
                <div class="vcenter-this">

                  <!-- Nav Side -->
                  <nav class="nav-side navbar hnav hnav-sm hnav-borderless" role="navigation">
                  
                    <!-- Dont Collapse -->
                    <div class="navbar-dont-collapse no-toggle">
                    
                      <!-- Nav Right -->
                      <ul class="nav navbar-nav navbar-right case-u active-bcolor navbar-center-xs">
                        <li >
                          <a aria-expanded="false" href="<? echo base_url(); ?>index.php/login/logout" ><i class="icon-left ti ti-user"></i><span class="hidden-sm">Salir</span><i class="fa fa-angle-down toggler hidden-xs"></i></a>
                        </li>

                      </ul>
                      <!-- /Nav Right-->

                    </div>
                    <!-- /Dont Collapse -->
                    
                  </nav>
                  <!-- /Nav Side -->
                
                </div>
                <!-- /v-centered -->
              </div>
              <!-- /vcenter -->
              
            </div>
            <!-- /Right Col -->
            
            <!-- Left Col -->
            <div class="left-col">
            
	                  <!-- vcenter -->
              <div class="vcenter">
                <!-- v-centered -->               
                <div class="vcenter-this">
		    <? if ($usuario['logo'] != "") {?>
                  <a href="<? echo base_url(); ?>">
                    <img style="width:150px;" src="<?php echo base_url(); ?>imagenes/logo_cliente/<? echo $usuario['logo']; ?>" alt="<? echo $usuario['razon_social']; ?>">
                  </a>
		  <? } ?>
                </div>
                <!-- v-centered -->
              </div>
              <!-- vcenter -->


            
            </div>
            <!-- /Left Col -->
          </div>
          <!-- Header Cols -->
        
        </div>
        <!-- /Main Header
        .............................................. -->
        
        <!-- Nav Bottom
        .............................................. -->
        <nav class="nav-bottom hnav hnav-ruled white-bg boxed-section">
        
          <!-- Container -->
          <div class="container">
          
            <!-- Header-->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle no-border" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Cambio Navegación</span>
                <i class="fa fa-navicon"></i>
              </button>
              <a class="navbar-brand visible-xs" href="#"><img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/logo_cliente/<? echo $usuario['logo']; ?>" alt="H"></a>
            </div>
            <!-- /Header-->
          
            <!-- Collapse -->
            <div class="collapse navbar-collapse navbar-absolute">
            
              <!-- Navbar Center -->
              <ul class="nav navbar-nav navbar-center line-top line-pcolor case-c">
                <li class="active"><a href="<? echo base_url(); ?>">home</a></li>
                <li class="dropdown dropdown-mega"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Papel Mural<i class="fa fa-angle-down toggler"></i></a>
                  <!-- Mega Menu -->
                  <div class="mega-menu dropdown-menu">
                    <!-- Row -->
                    <div class="row">
                    
                      <!-- col -->
                      <div class="col-md-3">
                        <img class="featured-img hidden-xs hidden-sm" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/galerias/c397fbf076bee62ad0811df6c11363f2_thumb.jpg" alt="">
                      </div>
                      <!-- /col -->
                      
                      <!-- col -->
                      <div class="col-md-9">
                        <h5>Buscar por:</h5>
                        <ul class="links">
                          <li>Tema <i>(
			  <? foreach ($categorias_menu['tema'] as $tema){ ?>
				<a href="<? echo base_url(); ?>index.php/proyectos/mural/<? echo 'tema/'.$tema['id']; ?>" >
				<? echo $tema['nombre'].', '; ?>
				</a>                                            
				<? } ?>
			  )</i>
			  <hr /></li>
                          <li>Color <i>(
			  <? foreach ($categorias_menu['color'] as $color){ ?>
				<a href="<? echo base_url(); ?>index.php/proyectos/mural/<? echo 'color/'.$color['id']; ?>" >
				<? echo $color['nombre'].', '; ?>
				</a>                                            
				<? } ?>)</i><hr /></li>
                          <li>Ambiente <i>(
			  
			  <? foreach ($categorias_menu['ambiente'] as $ambiente){ ?>
				<a href="<? echo base_url(); ?>index.php/proyectos/mural/<? echo 'ambiente/'.$ambiente['id']; ?>" >
				<? echo $ambiente['nombre'].', '; ?>
				</a>                                            
				<? } ?>
				
				)</i></li>
                          <!--<li><a href="<? echo base_url(); ?>">Mi imagen <i>(Sube tu propia imagen para imprimir)</i></a></li>-->
                        </ul>
                      </div>
                      <!-- /col -->
                    </div>
                    <!-- /Row -->
                  </div>
                  <!-- /Mega Menu -->
                </li>
		<li class="dropdown dropdown-mega"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Lienzo<i class="fa fa-angle-down toggler"></i></a>
                  <!-- Mega Menu -->
                  <div class="mega-menu dropdown-menu">
                    <!-- Row -->
                    <div class="row">
                    
                      <!-- col -->
                      <div class="col-md-3">
                        <img class="featured-img hidden-xs hidden-sm" src="<?php echo $this->config->item('base_url_2'); ?>imagenes/galerias/2bc759ef044d8eae07ddee5beae4a64a_thumb.jpg" alt="">
                      </div>
                      <!-- /col -->
                      
                      <!-- col -->
                      <div class="col-md-3">
                        <h5>Proximamente</h5>
                        <ul class="links">
                          <!--<li><a href="<? echo base_url(); ?>">Categorías</a></li>
                          <li><a href="<? echo base_url(); ?>">Color</a></li>
                          <li><a href="<? echo base_url(); ?>">Ambiente</a></li>-->
                          <!--<li><a href="<? echo base_url(); ?>">Mi imagen</a></li>-->
                        </ul>
                      </div>
                      <!-- /col -->
                    </div>
                    <!-- /Row -->
                  </div>
                  <!-- /Mega Menu -->
                </li>
                <!--<li><a href="<? echo base_url(); ?>index.php/contacto/servicio/servicio">Servicio al cliente</a></li>-->
		<li><a href="<? echo base_url(); ?>index.php/login/perfil">Mi Perfil</a></li>
              </ul>
              <!-- /Navbar Center -->
              
            </div>
            <!-- /Collapse -->
            
            <!-- Dont Collapse -->
            <div class="navbar-dont-collapse">

              <!-- Navbar btn-group -->
              <div class="navbar-btn-group btn-group navbar-right no-margin-r-xs">
              
                <!-- Btn Wrapper -->
                <div class="btn-wrapper dropdown">
                
                 <!-- <a class="btn btn-outline" data-toggle="dropdown"><i class="ti-plus"></i></a>-->
                  
                  <!-- Dropdown Menu -->
<!--                  <ul class="dropdown-menu">
                    <li><a href="#">account home</a></li>
                    <li><a href="#">order history</a></li>
                     <li><a href="#">profile</a></li>
                  </ul>-->
                  <!-- /Dropdown Menu -->
                  
                </div>
                <!-- /Btn Wrapper -->

                <!-- Btn Wrapper -->
                <div class="btn-wrapper dropdown">
                <? if($this->cart->total_items() > 0)
		          { ?>
                  <a aria-expanded="false" class="btn btn-outline" data-toggle="dropdown"><b class="count count-scolor count-round">
		  <? echo  $this->cart->total_items(); ?>
		  </b><i class="ti ti-bag"></i></a>
                  
                    <!-- Dropdown Panel -->
                    <div class="dropdown-menu dropdown-panel dropdown-right" data-keep-open="true">
                      <section>
                        <!-- Mini Cart -->
                        <ul class="mini-cart">
			    <?php foreach ($this->cart->contents() as $items):
		$array[]=array(
			       "title" => $items['name'],
			       "quantity" => intval($items['qty']),
			       "currency_id" => "ARS",
			       "unit_price" => intval($items['price']),
			   );
		?>
		
                          <!-- Item -->
                          <li class="clearfix">
                            <img src="<?php echo base_url(); ?>imagenes/productos/<? echo $items['options']['img']; ?>" alt="">
                            <div class="text">
                              <a class="title" href="#"><?php echo $items['name']; ?></a>
                              <div class="details"><? echo $items['qty']; ?> x <?php echo $this->cart->format_number($items['price']); ?>m2
                              </div>
                            </div>
                          </li>
                          <!-- /Item -->

		<?php endforeach ;?>
                        </ul>
                        <!-- /Mini Cart -->
                      </section>
                      
                      <section>
                        <div class="row grid-10">
                          <div class="col-md-6">
                            <a class="btn btn-base btn-block margin-y-5" href="<? echo base_url(); ?>index.php/proyectos/carrito">ver carrito</a>
                          </div>
                          <!--<div class="col-md-6">
                            <a class="btn btn-primary btn-block margin-y-5" href="<? echo base_url(); ?>index.php/proyectos/carrito">Pagar</a>
                          </div>-->
                        </div>
                      </section>
                    </div>
                    <!-- /Dropdown Panel -->
                  <? } ?>
                </div>
                <!-- /Btn Wrapper -->

              </div>
              <!-- /Navbar btn-group -->
              
              
            </div>
            <!-- /Dont Collapse -->

          </div>
          <!-- /Container -->
          
        </nav>
        <!-- /Nav Bottom
        .............................................. -->
        
      </header>

 