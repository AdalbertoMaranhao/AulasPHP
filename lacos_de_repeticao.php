<?php 

//For => for(variavel = 0; condicional; incremento){}
//While => while(condicional){
// encerramento
// }
//Do While 
/** 
 * DO{
 * execução
 * } while(condicional);
 * */ 

for($i=0; $i<1000; $i+=1){
    echo("$i\n");
}

$i = 0;

do {
    echo("$i\n");
    $i++;
} while($i < 0);