<!DOCTYPE html>
<html>
<head>
    <title>SICIJ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"  href="/CIJ/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CIJ/static/css/jquery-ui.css">
    <link rel="stylesheet" href="/CIJ/formvalidation/dist/css/formValidation.min.css">

    <style type="text/css" media="screen">
        hr{border-color: black; }
        h2 {text-align:center;}
        #medicamento_ok {color:green; font-size: 50px;}
        #user_gly {font-size: 28px;}
        #medicamento_remove {color:red; font-size: 50px;}
        .error {color: red; text-align: center; font-size: 20px;}
        .glyphicon.glyphicon-home {font-size: 25px}
        .dropdown-toggle{font-size: 18px;}
        
        .nav.nav-tabs {font-size: 20px;}
    </style>

    <script src="/CIJ/static/js/jquery.js"></script>
    <script src="/CIJ/static/js/jquery-ui.js"></script>
    <script src="/CIJ/static/js/bootstrap.min.js"></script>

    <script src="/CIJ/formvalidation/dist/js/formValidation.min.js"></script>
    <script src="/CIJ/formvalidation/dist/js/framework/bootstrap.min.js"></script>

    <script type="text/javascript" src="/CIJ/formvalidation/dist/js/language/es_ES.js"></script>
   
    <script type="text/javascript" src="/CIJ/static/js/validar_medicina.js" ></script>
    <script type="text/javascript" src="/CIJ/static/js/validar_usuario.js" ></script>
    <script type="text/javascript" src="/CIJ/static/js/validar_curacion.js" ></script>
    <script type="text/javascript" src="/CIJ/static/js/validar_inventario.js" ></script>
    <script type="text/javascript" src="/CIJ/static/js/validar_pdf.js" ></script>
    

    <script type="text/javascript" src="/CIJ/static/js/jquery.uitablefilter.js"></script>
    <script type="text/javascript" src="/CIJ/static/js/buscar.js"></script>

    <script type="text/javascript">
    $(function() {
        $( "#fecha_caducidad" ).datepicker();
    });
    $(function() {
        $( "#fecha_inicio" ).datepicker();
    });
    $(function() {
        $( "#fecha_final" ).datepicker();
    });
  </script>

</head>
<body>
 <div class="container">
      <div class="masthead">
        <h3 class="text-muted"> 
            <img src="/CIJ/static/images/CIJ.png"> 
            <strong>
                Sistema de Información U.H. Punta Diamante
            </strong>
        </h3>
      </div>
<hr/>
<br/>

<!-- Contenido de la pagina -->