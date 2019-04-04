<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">  
        <?php include('./lib/constantes.php'); ?>        
        <title><?=sitename;?></title>        
        <?php include('./frame.php');?>
        
    </head>
    <body>
        <?php
        
        ?>
 
        <div id="img">
            <img src="img/Logo_DuocUC.jpg" alt="" height="100px" width="135px"/>
        </div>
        <div id="titulo">            
            <center><h2><?=sitename?></h2></center>
        </div>

        <div id="menu">
            <?php include('./menu.php'); ?>
        </div>
        
 
        <div id="titcontenido">
            <center><h3>cuerpo de Pagina</h3></center>
        </div>
        <div id="contenido">
            <p>cuerpo de la pagina !</p>
        </div>
    </body>
<script>
        $("#prisolicitudA").on( "click", function( event ) {
            if(($("[id*=subsolicitudA]").css("display")!="none")){
                 $("[id*=subsolicitudA]").css("display","none");
            }
            else{
                $("[id*=subsolicitudA]").show();
                $("[id*=subsolicitudA]").css("display","block");
            }
                
                
            });
        
        $('[data-toggle="tooltip"]').tooltip(); 
    </script>
    
        <script>
        $("#prisolicitudB").on( "click", function( event ) {
            if(($("[id*=subsolicitudB]").css("display")!="none")){
                 $("[id*=subsolicitudB]").css("display","none");
            }
            else{
                $("[id*=subsolicitudB]").show();
                $("[id*=subsolicitudB]").css("display","block");
            }
                
                
            });
        
        $('[data-toggle="tooltip"]').tooltip(); 
    </script>
    
        <script>
        $("#prisolicitudC").on( "click", function( event ) {
            if(($("[id*=subsolicitudC]").css("display")!="none")){
                 $("[id*=subsolicitudC]").css("display","none");
            }
            else{
                $("[id*=subsolicitudC]").show();
                $("[id*=subsolicitudC]").css("display","block");
            }
                
                
            });
        
        $('[data-toggle="tooltip"]').tooltip(); 
    </script>
</html>
