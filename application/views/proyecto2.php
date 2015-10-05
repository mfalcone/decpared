    <link href="<? echo base_url(); ?>cropper-master/dist/cropper.css" rel="stylesheet">
  <link href="<? echo base_url(); ?>cropper-master/demos/css/main.css" rel="stylesheet">
   <!-- Content -->
    <!--page_container-->

<div class="page_container">
    <!--MAIN CONTENT AREA-->
 <div>
  <div class="container">
  <div class="page_full white_bg drop-shadow">
   <div class="breadcrumb">
    <div class="container">
     <div class="breadcrumb_title">Proyecto <? echo $propiedad['titulo']; ?></div>
     <a href="<?php echo base_url(); ?>">Home</a><span>/</span><a href="<?php echo base_url(); ?>index.php/proyecto">Proyectos</a><span>/</span><? echo $propiedad['titulo']; ?>
    </div>
   <div class="abs_points"></div>
   </div>
  <div class="container">
          <div class="page_in">
                  <div class="container">
                  <div class="row pad25">
      <div class="span9">
        <!-- <h3 class="page-header">Demo:</h3> -->
        <div class="img-container">
          <img src="<?php echo base_url(); ?>imagenes/productos/<? echo $propiedad['archivo']['mini']; ?>" alt="Picture"
        </div>
      </div>
      <div class="span3">
        <!-- <h3 class="page-header">Preview:</h3> -->
        <div class="docs-preview clearfix">
          <div class="img-preview preview-lg"></div>
          <div class="img-preview preview-md"></div>
          <div class="img-preview preview-sm"></div>
          <div class="img-preview preview-xs"></div>
        </div>

        <!-- <h3 class="page-header">Data:</h3> -->
        <div class="docs-data">
          <div class="input-group">
            <label class="input-group-addon" for="dataX">X</label>
            <input class="form-control" id="dataX" type="text" placeholder="x">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group">
            <label class="input-group-addon" for="dataY">Y</label>
            <input class="form-control" id="dataY" type="text" placeholder="y">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group">
            <label class="input-group-addon" for="dataWidth">Ancho</label>
            <input class="form-control" id="dataWidth" type="text" placeholder="width">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group">
            <label class="input-group-addon" for="dataHeight">Alto</label>
            <input class="form-control" id="dataHeight" type="text" placeholder="height">
            <span class="input-group-addon">px</span>
          </div>
          <div class="input-group">
            <label class="input-group-addon" for="dataRotate">Rotar</label>
            <input class="form-control" id="dataRotate" type="text" placeholder="rotate">
            <span class="input-group-addon">grados</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span9 docs-buttons">
        <!-- <h3 class="page-header">Toolbar:</h3> -->
        <div class="btn-group">
          <button class="btn btn-primary" data-method="setDragMode" data-option="move" type="button" title="mover">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
              <span class="icon icon-move"></span>
            </span>
          </button>
          <button class="btn btn-primary" data-method="setDragMode" data-option="crop" type="button" title="Recortar">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
              <span class="icon icon-crop"></span>
            </span>
          </button>
          <button class="btn btn-primary" data-method="zoom" data-option="0.1" type="button" title="Zoom In">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
              <span class="icon icon-zoom-in"></span>
            </span>
          </button>
          <button class="btn btn-primary" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
              <span class="icon icon-zoom-out"></span>
            </span>
          </button>
          <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button" title="Rotar izquierda">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
              <span class="icon icon-rotate-left"></span>
            </span>
          </button>
          <button class="btn btn-primary" data-method="rotate" data-option="45" type="button" title="Rotar derecha">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
              <span class="icon icon-rotate-right"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button class="btn btn-primary" data-method="disable" type="button" title="Deshabilitar">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
              <span class="icon icon-lock"></span>
            </span>
          </button>
          <button class="btn btn-primary" data-method="enable" type="button" title="Habilitar">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
              <span class="icon icon-unlock"></span>
            </span>
          </button>
          <button class="btn btn-primary" data-method="clear" type="button" title="Limpiar">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
              <span class="icon icon-remove"></span>
            </span>
          </button>
          <button class="btn btn-primary" data-method="reset" type="button" title="Reset">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
              <span class="icon icon-refresh"></span>
            </span>
          </button>
          <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
            <input class="sr-only" id="inputImage" name="file" type="file" accept="image/*">
            <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
              <span class="icon icon-upload"></span>
            </span>
          </label>
          <button class="btn btn-primary" data-method="destroy" type="button" title="Eliminar">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
              <span class="icon icon-off"></span>
            </span>
          </button>
        </div>

        <div class="btn-group btn-group-crop">
          <button class="btn btn-primary" data-method="getDataURL" type="button">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;)">
              Obtener data  URL
            </span>
          </button>
          <button class="btn btn-primary" data-method="getDataURL" data-option="image/jpeg" type="button">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;, &quot;image/jpeg&quot;)">
              JPG
            </span>
          </button>
          <!-- <button class="btn btn-primary" data-method="getDataURL" data-option="image/webp" type="button">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;, &quot;image/webp&quot;)">
              WEBP
            </span>
          </button> -->
          <button class="btn btn-primary" data-method="getDataURL" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }" type="button">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;, { &quot;width&quot;: 160, &quot;height&quot;: 90 })">
              160 &times; 90
            </span>
          </button>
          <button class="btn btn-primary" data-method="getDataURL" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }" type="button">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;, { &quot;width&quot;: 320, &quot;height&quot;: 180 })">
              320 &times; 180
            </span>
          </button>
        </div>

        <!-- Show the cropped image in modal -->
        <div class="modal fade docs-cropped" id="getDataURLModal" aria-hidden="true" aria-labelledby="getDataURLTitle" role="dialog" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal" type="button" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="getDataURLTitle">Recortado</h4>
              </div>
              <div class="modal-body"></div>
              <!-- <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" type="button">Close</button>
              </div> -->
            </div>
          </div>
        </div><!-- /.modal -->

        <div class="btn-group">
          <button class="btn btn-primary" data-method="getData" data-option="" data-target="#putData" type="button">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
              Obtener data
            </span>
          </button>
          <button class="btn btn-primary" data-method="getData" data-option="true" data-target="#putData" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;, true)">
              Redondeada
            </span>
          </button>
        </div>
        <div class="btn-group">
          <button class="btn btn-primary" data-method="getImageData" data-option="" data-target="#putData" type="button">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
              Obtener información de la imagen
            </span>
          </button>
          <button class="btn btn-primary" data-method="getImageData" data-option="true" data-target="#putData" type="button">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;, true)">
              todo
            </span>
          </button>
        </div>
        <button class="btn btn-primary" data-method="setImageData" data-target="#putData" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setImageData&quot;, data)">
            Introducir datos de la imagen
          </span>
        </button>
        <button class="btn btn-primary" data-method="getCropBoxData" data-option="" data-target="#putData" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
            Obtener datos del recorte
          </span>
        </button>
        <button class="btn btn-primary" data-method="setCropBoxData" data-target="#putData" type="button">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
            introducir datos del recorte
          </span>
        </button>
        <input class="form-control" id="putData" type="text" placeholder="Obtener o introducir datos">

      </div><!-- /.docs-buttons -->

      <div class="span3 docs-toggles">
        <!-- <h3 class="page-header">Toggles:</h3> -->
        <div class="btn-group btn-group-justified" data-toggle="buttons">
          <label class="btn btn-primary active" data-method="setAspectRatio" data-option="1.7777777777777777" title="Set Aspect Ratio">
            <input class="sr-only" id="aspestRatio1" name="aspestRatio" value="1.7777777777777777" type="radio">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 16 / 9)">
              16:9
            </span>
          </label>
          <label class="btn btn-primary" data-method="setAspectRatio" data-option="1.3333333333333333" title="Set Aspect Ratio">
            <input class="sr-only" id="aspestRatio2" name="aspestRatio" value="1.3333333333333333" type="radio">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 4 / 3)">
              4:3
            </span>
          </label>
          <label class="btn btn-primary" data-method="setAspectRatio" data-option="1" title="Set Aspect Ratio">
            <input class="sr-only" id="aspestRatio3" name="aspestRatio" value="1" type="radio">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 1 / 1)">
              1:1
            </span>
          </label>
          <label class="btn btn-primary" data-method="setAspectRatio" data-option="0.6666666666666666" title="Set Aspect Ratio">
            <input class="sr-only" id="aspestRatio4" name="aspestRatio" value="0.6666666666666666" type="radio">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 2 / 3)">
              2:3
            </span>
          </label>
          <label class="btn btn-primary" data-method="setAspectRatio" data-option="NaN" title="Set Aspect Ratio">
            <input class="sr-only" id="aspestRatio5" name="aspestRatio" value="NaN" type="radio">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, NaN)">
              Libre
            </span>
          </label>
        </div>
</div><!-- /.docs-toggles -->
    </div>
  </div>
  </div>
 </div>
  </div>

  <!-- Alert -->
  <div class="docs-alert"><span class="warning message"></span></div>
  
    <script src="<?php echo $this->config->item('base_url_2'); ?>cropper-master/dist/cropper.js"></script>
  <script src="<?php echo $this->config->item('base_url_2'); ?>cropper-master/demos/js/main.js"></script>