<?php
// identificar para abrir o arquivo
// (w)escrita (r)leitura
$arquivo = fopen('cargos.csv','r');

// contador de registros
$contador = 0;

// laco de repeticao dos dados
while ($linha = fgetcsv($arquivo, 1000, ",")) {
//teste para verificar formato em array
/*
    echo '<pre>';
    print_r($linha);
    echo '</pre>';
*/    
if ($contador > 0){
    /*MODELO 
    INSERT INTO 'cargos' ('Codigo', 'Nome', 'Digitos', 'Suplente', 'vice')
    VALUES (1, 'PREFEITO', '3', 'S', 'N');<br>*/

    echo " INSERT INTO 'cargos' ('Codigo', 'Nome', 'Digitos', 'Suplente', 'Vice') VALUES (" .$linha[0].",'".$linha[1].")";

    //echo "CARGO: ".$linha[1]." NUM DE DIGITOS:" .$linha[2].'<hr>';
}    
    $contador++;


// parte sem formato de array      < ?php
// identificar para abrir o arquivo
// (w)escrita (r)leitura
//          $arquivo = fopen('cargos.csv','r');

// contador de registros
//          $contador = 0;

// laco de repeticao dos dados
//      while ($linha = fgetcsv($arquivo, 1000, ",")) {

//          echo '< pre>';
    //      print_r($linha);
    //      echo '</ pre>'; 

    //          echo "CARGO: ".$linha[1]." NUM DE DIGITOS:" .$linha[2].'< hr>';

    //          $contador++;
//      }
//      ? >
?>