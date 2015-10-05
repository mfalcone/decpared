    <!--page_container-->
    <div class="page_container">
    	<div>
        	<div class="container">
                <div class="page_full white_bg drop-shadow">
                    <div class="breadcrumb">
                        <div class="container">
                            <div class="breadcrumb_title"><? echo $this->uri->segment(1); ?></div>
                            <a href="index.php">Home</a><span>/</span><? echo $this->uri->segment(1); ?>
                        </div>
                        <div class="abs_points"></div>
                    </div>
                    <div class="container">
                        <div class="page_in">
                        	<div class="container">
                                <section>
                                    <div class="row">
                                        <div class="span8">
						<?php foreach($noticias as $noticia) { ?>
						
                                            <div class="post">
                                                <h2 class="title"><span><?php echo $noticia['es']['titulo']; ?></span></h2>
                                                
						<?php echo $noticia['es']['resumen']; ?>
						<div class="box_shadow" style="margin-top: 15px; margin-bottom: 15px;">
							<? if (isset($noticia['imagenes'])){?>
                                                	<img src="<?php echo base_url(); ?>imagenes/funcionamiento/<?php echo $noticia['imagenes']['campo_1']['archivo']; ?>" alt="" />
							<? } ?>
                                                </div>
						<?php echo $noticia['es']['desarrollo']; ?>
                                             </div>
					    <? } ?>

                                        </div>
                                        <div class="span4">
                                            <div class="sidebar">

                                                <div class="widget">
                                                    <h2 class="title"><span>Aclaración</span></h2>
                                                    <p>Aquí encontrará las diferentes opciones según cada necesidad</p>
						    <p>Si se le genera alguna duda al respecto, por favor no dude en consultarnos.</p>
                                                </div>
                                                <div class="widget">
                                                   <div class="box_shadow">
                                                	<img src="<?php echo base_url(); ?>imagenes/logo.png" alt="" />
                                                </div>
                                                </div>
                           
                                            </div>                             
                                        </div>                	
                                    </div>
                                </section>
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--//page_container-->

   

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>    
    <script src="js/application.js"></script>
    <script src="js/jquery.ui.totop.js" type="text/javascript"></script>
</body>
</html>
