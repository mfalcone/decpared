      <!-- Intro Block
      ============================================-->
      <section class="intro-block intro-page boxed-section page-bg overlay-dark-m">
      
        <!-- Container -->
        <div class="container">     
          <!-- Section Title -->
          <div class="section-title invert-colors no-margin-b">
            <h2>Ingreso</h2>
            <p class="hidden-xs">Bienvenidos a una nueva manera de ver la decoración de interiores</p>
          </div>
          <!-- /Section Title -->
        </div>
        <!-- /Container -->
      
      </section>
      <!-- /Intro Block
      ============================================-->
      

      
      <!-- Content Block
      ============================================-->
      <section class="content-block default-bg">
        <!-- Container -->
        <div class="container no-pad-t">

          <!-- Row -->
          <div class="row">

            <!-- Main Col -->
            <div id="main-col" class="col-sm-8 col-md-8 mgb-30-xs">
 
                <h4 class="case-c">Recuperar contraseña</h4>
                
                <p><?php echo validation_errors(); ?></p>
                <p><?php echo $mensaje; ?></p>
                <p>Si no estás registrado en nuestro sistema ingresá <a href="<? echo base_url(); ?>index.php/login/agregar">aquí</a></p>
                
                <!-- Comment Form -->
                <div class="contact-form">
                  <?php echo form_open('usuarios/recuperar_clave');?>
                    <!-- Row -->
                    <div class="row">
                      <!-- Col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" class="form-control">
                        </div>
                      </div>
                      <!-- /Col -->
                    </div>
                    <!-- /Row -->
                    

                   
                   <button class="btn btn-default" type="submit">Ingresar</button>
                  <?php echo form_close();?>
                </div>
                <!-- /Contact Form -->
                
            </div>
            <!-- /Main Col -->
            
            <!-- Side Col -->
            <div class="col-sm-4 col-md-4">


              
            </div>
            <!-- /Side Col -->

          </div>
          <!-- /Row -->
        
        </div>
        <!-- /Container -->
    </section>
    <!-- /Content Block
    ============================================-->


