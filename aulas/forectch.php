<?php 

$lista = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'];

foreach ($lista as $item ) {
    echo "<p> Hoje é:  " . $item . "</p>";
    
    if ($item == 'Sábado') {
        echo 'Você só trabalha até sábado';
        break;
    }
}


?>