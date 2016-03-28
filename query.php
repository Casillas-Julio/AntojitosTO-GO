<?php
mysql("localhost","root" ,"test123") or die("No se puede conectar");
mysql_select_db("search_test") or die("No puede encontrar Restaurantes");

//collect
if(isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","", $searchq);
    
    $query = mysql_query("SELECT * FROM ClienteMenu WHERE menu LIKE '%$searchq%'  OR ClienteNombre LIKE '%$searchq%' ") or die("no se encontraron clientes");
    $count = mysql_num_rows($query);
    if($count == 0) {
        $output = 'No hay resultados para tu busqueda':
    }
    else{
        while($row = mysql_fetch_array($query)) {
            $menu = $row['ClienteMenu'];
            $nombre = $row['ClienteNombre'];
            $link = $row['ClientePage'];
            
            $output .= '<div>'.$nombre.'</div>';
        }
    }
    
}


?>
