<?php
    /*A utilização de arrays como coleções de dados é algo praticamente presente em todas as aplicações de PHP. Existem funções de strings também relacionadas com arrays, e estas duas são um exemplo disso. 
    
    Explode: permite transformar uma string num array de strings, recorrendo um caracter de separação.
    */

    $str_nomes= 'joao,carlos,ana,antonio';
    $nomes = explode(',', $str_nomes);
    //$nomes = ['joao','carlos,'ana','antonio'];

    //Existe um terceiro parâmetro que, sendo usado, define a quantidade máxima de elementos que o array $nomes vai ter.Não sendo especificado, $nomes vai conter o máximo de valores possível.

    /*Implode: Permite "colar" numa string um conjunto de elementos de um array. Para isso usa um caracter de "colagem".Vejamos o exemplo:  */


?>