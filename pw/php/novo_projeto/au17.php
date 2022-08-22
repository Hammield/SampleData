<?php
/*SUPERGLOBAIS

Algumas variáveis predefinidas no php são "superglobais", o que significa que elas são sempre acessíveis, independentemente do escopo - e você pode acessá-las a partir de qualquer função, classe ou arquivo sem ter que fazer nada de especial.

Basta invocar essas variáveis. São elas:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION


$a = 18;
$b = 20;

function soma(){
    //$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b']; Define o escopo de variavel para global
    global $a, $b, $c; faz o mesmo que $GLOBALS, mas para funções
    $c = $a +$b;
}

soma();
echo $c;*/

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

foreach ($_SERVER as $chave => $valor) {
    echo "<strong>$chave</strong> : $valor <br>";
};
?>

