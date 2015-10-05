      <!-- Content Block
      ============================================ -->
      <div class="content-block">
      
        <!-- Container -->
        <div class="container no-pad-t">

          <!-- Product Tabs -->
          <div class="product-tabs">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-line-bottom line-pcolor nav-tabs-center case-u" role="tablist">
              <li class="active"><a href="#tab-latest" data-toggle="tab">Ultimas imagenes</a></li>
              <li><a href="#tab-featured" data-toggle="tab">Imagenes destacadas</a></li>
              <li><a href="#tab-trending" data-toggle="tab">Más vistas</a></li>
            </ul>
            <!-- /Nav Tabs -->

            <!-- Tab panes -->
            <div class="tab-content tab-no-borders">
            
              <!-- Tab Latest -->
              <div class="tab-pane active" id="tab-latest">
              
                <!-- Row -->
                <div class="row">
                <? foreach($destacados as $destacado){?>
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="<?php echo base_url(); ?>index.php/proyectos/id/<? echo $destacado['id']; ?>" class="main"><img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $destacado['archivo']['mini']; ?>" alt=""></a>
<!--                        <ul class="additional">
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                        </ul>-->
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-sale">Novedad</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="<?php echo base_url(); ?>index.php/proyectos/id/<? echo $destacado['id']; ?>"><?php if(isset($destacado['titulo'])) echo $destacado['titulo']; ?></a>
                        
                        <!-- rating -->
<!--                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>-->
                        <!-- /rating -->
                        
                        <p class="desc"><?php if(isset($destacado['resumen'])) echo $destacado['resumen']; ?> </p>
                        
                        <!-- Price Box -->
<!--                        <div class="price-box">
                          <span class="price price-old">$2350</span><span class="price">$1500</span>
                        </div>-->
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="<?php echo base_url(); ?>index.php/proyectos/id/<? echo $destacado['id']; ?>">Ordenar ahora</a>	
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
              
              </div>
              <!-- /Tab Latest -->
              
              <!-- Tab Featured -->
              <div class="tab-pane" id="tab-featured">
              
                <!-- Row -->
                <div class="row">
                
                <? foreach($destacados as $destacado){?>
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="<?php echo base_url(); ?>index.php/proyectos/id/<? echo $destacado['id']; ?>" class="main"><img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $destacado['archivo']['mini']; ?>" alt=""></a>
<!--                        <ul class="additional">
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                        </ul>-->
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-sale">Novedad</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="<?php echo base_url(); ?>index.php/proyectos/id/<? echo $destacado['id']; ?>"><?php if(isset($destacado['titulo'])) echo $destacado['titulo']; ?></a>
                        
                        <!-- rating -->
<!--                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>-->
                        <!-- /rating -->
                        
                        <p class="desc"><?php if(isset($destacado['resumen'])) echo $destacado['resumen']; ?> </p>
                        
                        <!-- Price Box -->
<!--                        <div class="price-box">
                          <span class="price price-old">$2350</span><span class="price">$1500</span>
                        </div>-->
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">Ordenar ahora</a>	
                          <a class="btn btn-outline btn-default-hover" href="<?php echo base_url(); ?>index.php/proyectos/id/<? echo $destacado['id']; ?>"><i class="icon fa fa-heart"></i></a>
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
              
              </div>
              <!-- /Tab Featured -->
            
              <!-- Tab Trending -->
              <div class="tab-pane" id="tab-trending">
              
                <!-- Row -->
                <div class="row">
                
                <? foreach($destacados as $destacado){?>
                  <!-- Col -->
                  <div class="col-sm-6 col-md-3">
                  
                    <!-- product -->
                    <div class="product clearfix">
                    
                      <!-- Image -->
                      <div class="image"> 
                        <a href="<?php echo base_url(); ?>index.php/proyectos/id/<? echo $destacado['id']; ?>" class="main"><img src="<?php echo $this->config->item('base_url_2'); ?>imagenes/productos/<? echo $destacado['archivo']['mini']; ?>" alt=""></a>
<!--                        <ul class="additional">
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                          <li><a href="images/products/product1.jpg" data-gal="prettyPhoto[gallery 1]" title="Product Name"><img src="images/products/product1.jpg" alt=""></a></li>
                        </ul>-->
                      </div>
                      <!-- Image -->
                      
                      <span class="label label-sale">Novedad</span>
                      
                      <!-- Details -->
                      <div class="details">
                      
                        <a class="title" href="<?php echo base_url(); ?>index.php/proyectos/id/<? echo $destacado['id']; ?>"><?php if(isset($destacado['titulo'])) echo $destacado['titulo']; ?></a>
                        
                        <!-- rating -->
<!--                        <ul class="hlinks hlinks-rating">
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li class="active"><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                          <li><a href="#"><i class="icon fa fa-star"></i></a></li>
                        </ul>-->
                        <!-- /rating -->
                        
                        <p class="desc"><?php if(isset($destacado['resumen'])) echo $destacado['resumen']; ?> </p>
                        
                        <!-- Price Box -->
<!--                        <div class="price-box">
                          <span class="price price-old">$2350</span><span class="price">$1500</span>
                        </div>-->
                        <!-- /Price Box -->
                        
                        <!-- buttons -->
                        <div class="btn-group">
                          <a class="btn btn-outline btn-base-hover" href="cart.html">Ordenar ahora</a>	
                          <a class="btn btn-outline btn-default-hover" href="<?php echo base_url(); ?>index.php/proyectos/id/<? echo $destacado['id']; ?>"><i class="icon fa fa-heart"></i></a>
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
              
              </div>
              <!-- /Tab Trending -->
            </div>
            <!-- /Tab Panes -->
            
          </div>
          <!-- /Product Tabs -->
          
        </div>
        <!-- /Container -->
        
      </div>
      <!-- /Content Block
      ============================================ -->