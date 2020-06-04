<!DOCTYPE html>
<!-- saved from url=(0048)https://getbootstrap.com/docs/3.3/examples/blog/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">    
    <title>Últimas noticias</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/blog.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">/* Copyright 2014-present Evernote Corporation. All rights reserved. */
#text-tool-caret {
    animation-name: caretBlink;  
    animation-iteration-count: infinite;  
    animation-timing-function: cubic-bezier(1.0,0,0,1.0);
    animation-duration: 1s; 
}

#en-markup-loading-spinner {
    position: absolute;
    top: calc(50% - 16px);
    left: calc(50% - 16px);
    width: 32px;
    height: 32px;
}

#en-markup-loading-spinner img {
    position: relative;
    top: 0px;
    left: 0px;
    animation-name: rotateSpinner;
    animation-duration: 0.6s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}
</style>

<style type="text/css">/* Copyright 2014-present Evernote Corporation. All rights reserved. */
.skitchToastBoxContainer {
    position: absolute;
    width: 100%;
    text-align: center;
    top: 30px;
    -webkit-user-select: none;
    -moz-user-select: none;
    pointer-events: none;
}

.skitchToastBox {
    width: 200px;
    height: 16px;
    padding: 12px;
    background-color: rgba(47, 55, 61, 0.95);
    border-radius: 4px;
    color: white;
    cursor: default;
    font-size: 10pt;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.32);
    font-family: 'Soleil', Helvetica, Arial, sans-serif;
    border: 2px rgba(255, 255, 255, 0.38) solid;
}



.skitchToast {
    padding-left: 20px;
    padding-right: 20px;
    display: inline-block;
    height: 10px;
    color: #f1f5f8;
    text-align: center;
}

.skitchVisible {
    /* Don't remove this class it's a hack used by the Evernote Clipper */
}
</style>
<style>

#en-markup-disabled {
    position: fixed;
    z-index: 9999;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    cursor: default;
    -webkit-user-select: none;
}

#en-markup-alert-container {
    position: absolute;
    z-index: 9999;
    width: 450px;
    left: calc(50% - 225px);
    top: calc(50% - 85px);
    background-color: white;
    box-shadow: 0 2px 7px 1px rgba(0,0,0,0.35);
    -webkit-user-select: none;
}

#en-markup-alert-container .cell-1 {
    position: relative;
    height: 110px;
    width: 105px;
    float: left;
    text-align: center;    
    background-position: 65% 50%;
    background-repeat: no-repeat;
}

#en-markup-alert-container .cell-2 {
    position: relative;
    float: left;
    width: 345px;
    margin-top: 29px;
    margin-bottom: 20px;
}

#en-markup-alert-container .cell-2 .cell-2-title {
    margin-bottom: 5px;
    padding-right: 30px;
    font-size: 12pt;
    font-family: Tahoma, Arial;
}

#en-markup-alert-container .cell-2 .cell-2-message {
    padding-right: 30px;
    font-size: 9.5pt;
    font-family: Tahoma, Arial;
}

#en-markup-alert-container .cell-3 {
    position: relative;
    width: 450px;
    height: 60px;
    float: left;
    background-color: rgb(240,240,240);
}

#en-markup-alert-container .cell-3 button {
    position: absolute;
    top: 12px;
    right: 15px;
    width: 110px;
    height: 36px;
}

#en-markup-alert-container .cell-3 button.alt-button {
    position: absolute;
    top: 12px;
    right: 140px;
    width: 110px;
    height: 36px;
}
</style>
</head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Inicio</a>
          <a class="blog-nav-item" href="#">Lo mas nuevo</a>          
          <a class="blog-nav-item" href="#">Sobre mi</a>
        </nav>
      </div>
    </div>

    <div class="container">
      <a name="up"></a>
      <div class="blog-header"  >
        <h1 class="blog-title">Últimas noticias</h1>
        <p class="lead blog-description"></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
          <div id="news">
            <!-- /.blog-post -->
            <?php echo $posts ?>
          </div>        
          <!-- Paginado-->
          <div>
            <?php echo $paginado ?>
          </div>

        </div><!-- /.blog-main -->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>Sobre</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archivos</h4>
            <ol class="list-unstyled">
              <li><a href="#">Febrero</a></li>
              <li><a href="#">Marzo</a></li>
              
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Estilo tomado de <a href="https://getbootstrap.com/">Bootstrap</a> creado por <a href="https://twitter.com/mdo">@mdo</a>. Personalizado por Luis G</p>
      <p>
        <a href="#">Regresar</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./assets/js/jquery.min.js"></script>    
    <script>
      var baseurl = "<?php echo base_url() ?>";

      $(document).ready(function(){
        // cuando ya esta todo cargado, actualizamos el usuario
        // igual podria funcionar desde php
        setRamdonUser();
      });
    </script>
    <script src="./assets/js/events.js"></script>    
    <script src="./assets/js/random-user.js"></script>    

    
    
    <script src="./assets/js/bootstrap.min.js"></script>    
  

</body>
</html>