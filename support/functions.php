<?php 

function Dumpp($Val) {
    echo"<pre>" ;
    var_dump($Val);
    echo "</pre";
}


function valIs($Val) {
   return $_SERVER['REQUEST_URI'] === $Val;
}
