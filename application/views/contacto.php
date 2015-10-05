
      
      <!-- Page Info Block
      ============================================-->
      <section class="page-info-block boxed-section">
      
        <!-- Container -->
        <div class="container cont-pad-x-15"> 

          <!-- Breadcrumb -->
          <ol class="breadcrumb pull-left">
            <li><a href="#"><i class="ti ti-home"></i></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contacto</a></li>
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
            <div id="main-col" class="col-sm-8 col-md-8 mgb-30-xs">
 
                <h4 class="case-c">Formulario de Contacto</h4>
                <? if(isset($exito)){echo $exito;}else{ ?>
                <p>Llená todos los campos del formulario y te respomderemos a la brevedad</p>
                <?php
		if (validation_errors())
		{
		  echo '<div class="registro_titulo">Se produjeron los siguientes errores</div><div style="margin-left:50px;">';
		  echo validation_errors();
		  echo '</div>';
		}
		
		?>
                <!-- Comment Form -->
                <div class="contact-form">
                  <?php echo form_open('contacto/enviar');?>
                    <!-- Row -->
                    <div class="row">
                      <!-- Col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <input name="nombre" type="text" placeholder="Tu nombre" class="form-control">
                        </div>
                      </div>
                      <!-- /Col -->
                      <!-- Col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <input name="email" type="text" placeholder="Tu email" class="form-control">
                        </div>
                      </div>
                      <!-- /Col -->
                    </div>
                    <!-- /Row -->
                    
                    <div class="form-group">
                     <textarea name="comentario" placeholder="Tu mensaje..." class="form-control" rows="8"></textarea>
                    </div>
                   
                   <button class="btn btn-default" type="submit">Enviar comentario</button>
                  <?php echo form_close();?>
                </div>
                <!-- /Contact Form -->
                <? } ?>
            </div>
            <!-- /Main Col -->
            
            <!-- Side Col -->
            <div class="col-sm-4 col-md-4">

              <!-- Side Widget -->
              <div class="side-widget">
              
                <h5 class="boxed-title"><? echo $contacto['razon_social']; ?></h5>
                

                
                <!-- vlinks -->
                <ul class="vlinks vlinks-iconed vlinks-ruled-dots">
                  <li><i class="icon fa fa-home"></i><? echo $contacto['calle']; ?> <br/> <? echo $contacto['ciudad']; ?>, <? echo $contacto['provincia']; ?></li>
                  <li class="centered"><i class="icon fa fa-laptop"></i><? echo $contacto['email']; ?></li>
                  <li><i class="icon fa fa-user"></i><? echo $contacto['telefono']; ?></li>
                </ul>
                <!-- /vlinks -->
                
              </div>
              <!-- /Side Widget -->
              
            </div>
            <!-- /Side Col -->

          </div>
          <!-- /Row -->
        
        </div>
        <!-- /Container -->
    </section>
    <!-- /Content Block
    ============================================-->
    
    <!-- Map Modal -->
    <div id="map-modal" class="modal fade map-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <!-- Modal Dialog -->
      <div class="modal-dialog">
      
        <div class="modal-content">
        
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Nuestra Ubicación</h4>
          </div>
          
          <div class="modal-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.4208063393107!2d-60.63278069999998!3d-32.96629800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab0ef7fc7429%3A0x9d690552ba938c59!2sSpc+Identificacion+Grafica!5e0!3m2!1ses-419!2sar!4v1436456052613" width="450" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            <script type="text/javascript">
              // Delay loading iframe for better performance
              var iframe = document.getElementById('gmap');
              var src = iframe.src;
              iframe.src = '';
              window.onload =  function(){ iframe.src = src; }
            </script>
          </div>
        </div>
        
      </div>
      <!-- /Modal Dialog -->
    </div>
    <!-- /Map Modal -->

