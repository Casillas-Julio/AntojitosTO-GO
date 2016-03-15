<!DOCTYPE html> 
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title>Nombre del cliente</title>
    </head>

    <body>
    
        <header>
            <img src="images/Logo ATG 1.png" alt=""/>
            <ul>
           
                <li><a href="../index.php"></a><h2>Regresa al Inicio</h2></li>
                
            </ul>
        </header>
        <!--<img src="images/botones/bcerca.png" alt=""/>-->
        <!-- Imagen del logo del cliente o fotografia y servicios-->
        <div>
            <!-- Menu del Cliente
            <ul>
                <li><a href=""><img src="images/botones/btacos.png" alt=""/> </a></li>
                <li><a href=""><img src="images/botones/bcarnitas.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/belotes.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bfrituras.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bcarne.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bgorditas.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bhamburguesas.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bhelados.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bhotdogs.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bmenudo.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bpapas.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bpollo.png" alt=""/></a></li>           
                <li><a href=""><img src="images/botones/bpostres.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bpozole.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/bquesadillas.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/btamales.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/btortas.png" alt=""/></a></li>
                <li><a href=""><img src="images/botones/binternacional.png" alt=""/></a></li>

            </ul> -->
        </div>
        <div id="map"></div>
        <script>
            function initMap() {
                var mapDiv = document.getElementById('map');
                var map = new google.maps.Map(mapDiv, {
                    center: {lat: 22.133689, lng: -100.942481},
                    zoom: 15
                });
                
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
        <!-- Mapa de como llegar (google maps) -->
        <footer>
            <ul>
                <li><a href=""></a><h2>Quienes somos</h2></li>
                <li><a href=""></a><h2>Contactanos</h2></li>
                <li><a href=""></a><h2>Preguntas Frecuentes</h2></li>
                <li><a href=""></a><h2>Aviso de privacidad</h2></li>
            </ul>
        </footer>
        
    </body>
</html>
