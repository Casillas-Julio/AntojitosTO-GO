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
        <title>Antojitos TO-GO</title>
    </head>

    <body>

        <header>
            <table>
                <tr>
                    <td><img src="images/Logo ATG 1.png" /></td>
                    <td><a href=""></a><h2>Quienes somos</h2></td>
                    <td><a href=""></a><h2>Contactanos</h2></td>
                    <td><a href=""></a><h2>Preguntas Frecuentes</h2></td>
                </tr>
            </table>
        </header>
        <div id="logo">
            <img src="images/botones/bcerca.png" onmouseover="this.src='images/images/bhcerca'" onmouseout="this.src='images/botones/bcerca'"/>
        </div>
        <div>
            <form action="query.php" method="post">
                <input type="text" name="search" placeholder="Que quieres comer?">
                <input type="submit" value="buscar" />
            </form>  
            <?php print ("$output");?>
        </div>
        
        <div>
            <table style="width:100%">
                <tr>
                    <td><a href=""><img src="images/botones/btacos.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/bcarnitas.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/belotes.png" alt=""/></a></td>
                </tr>
                <tr>
                    <td><a href=""><img src="images/botones/bfrituras.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/bcarne.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/bgorditas.png" alt=""/></a></td>
                </tr>
                <tr>
                    <td><a href=""><img src="images/botones/bhamburguesas.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/bhelados.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/bhotdogs.png" alt=""/></a></td>
                </tr>
                <tr>
                    <td><a href=""><img src="images/botones/bmenudo.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/bpapas.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/bpollo.png" alt=""/></a></td>           
                </tr>
                <tr>
                    <td><a href=""><img src="images/botones/bpostres.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/bpozole.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/bquesadillas.png" alt=""/></a></td>
                </tr>
                <tr>
                    <td><a href=""><img src="images/botones/btamales.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/btortas.png" alt=""/></a></td>
                    <td><a href=""><img src="images/botones/binternacional.png" alt=""/></a></td>
                </tr>
            </table>
        </div>
        <footer>

        </footer>

    </body>
</html>