
      <!-- Intro Block
      ============================================-->
      <section class="intro-block intro-page boxed-section page-bg overlay-dark-m">
      
        <!-- Container -->
        <div class="container">     
          <!-- Section Title -->
          <div class="section-title invert-colors no-margin-b">
            <h2>Carrito de compras</h2>
            <p class="hidden-xs">A continuación podrá ver el listados de ítems agregados al carrito</p>
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
            <li><a href="#">Productos</a></li>
            <li><a href="#">Carrito</a></li>
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
        <div class="container cont-pad-t-sm">
        
          <!-- Cart -->
          <div class="cart">

		<? if($this->cart->total_items() > 0)
		{ ?>

	    <?php echo form_open('proyectos/actualizar'); ?>

		<table class="cart-contents">
		<thead>
		    <tr>
		      <th class="hidden-xs">Imagen</th>
		      <th>Descripcion</th>
		      <th>Cantidad</th>
		    </tr>
		  </thead>
		<tbody>
		<?php $i = 1; ?>
		
		<?php foreach ($this->cart->contents() as $items):
		$array[]=array(
			       "title" => $items['name'],
			       "quantity" => intval($items['qty']),
			       "currency_id" => "ARS",
			       "unit_price" => intval($items['price']),
			   );
		?>
		
		    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
		<tr>
                  <td class="image hidden-xs"><img src="<?php echo base_url(); ?>imagenes/pedidos/<? echo $items['rowid']; ?>.jpeg" alt="producto"/></td>
                  <td class="details">
                    <div class="clearfix">
                      <div class="pull-left no-float-xs">
                        <a href="#" class="title"><?php echo $items['name']; ?></a>
                        <span>Codigo: <? echo $items['options']['codigo']; ?></span>
			<p>
			    <strong>Ancho (cm)</strong>: <? echo $items['options']['ancho']; ?><br />
			    <strong>Alto (cm)</strong>: <? echo $items['options']['alto']; ?><br />
			    <strong>Superficie (m2)</strong>: <? echo $items['price']; ?><br />
			    <strong>Material</strong>: <? if($items['options']['material_id']==4){echo 'Papel Mural(Standard)';} else {echo 'Papel Mural(Premiun)';}?><br />
			</p>
                      </div>
                    </div>
                  </td>
                  <td class="qty">
                      <?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                  </td>

                </tr>
		<?php $i++; ?>
		<?php endforeach;
		$preference_data = array("items" => $array);?>
		</tbody>
            </table>
            <!-- /Cart Contents -->
	    
	     <!-- Cart Summary -->
            <table class="cart-summary">
              <tr>
                <td class="terms">  
                  <h5><i class="fa fa-info-circle"></i><?php echo form_submit('', 'Actualizar'); ?></h5>
                  <p>Para eliminar un producto cambie la cantidad a 0 y presione el botón Actualizar</p>
               </td>
                <td class="totals"> 
                </td>
              </tr>
            </table>  
            <!-- /Cart Summary -->


	    <!-- Cart Buttons -->
	    <div class="cart-buttons clearfix"> 
	      <a class="btn btn-base checkout" href="<?php echo base_url(); ?>index.php/contacto/pedido"><i class="icon-left fa fa-shopping-cart"></i>Enviar pedido a SPC</a>
	      <a class="btn btn-primary checkout" href="<? echo base_url(); ?>"><i class="icon-left fa fa-arrow-left"></i>Seguir navegando</a>
	    </div>
	    <!-- /Cart Buttons -->
	    <? 
	    }
	    else{?>
		    <div class="post">
	    <h2 class="title"><span>No tiene ningún Item en el carrito</span></h2>
	 </div>
	    <? } ?>
	  </div>
         
        </div>
        <!-- /Container -->
        
      </section>
      <!-- /Content Block
      ============================================-->