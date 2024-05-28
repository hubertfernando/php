<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula28-05</title>
</head>
<body>
    <?php 
     echo "<h1>Função </h1>";
    function soma(){
        echo 500+505;
    }

    soma();
/*parametro*/
echo "<h1>Função com parametro</h1>";
echo "<br>";
    function somaparametro($p1, $p2){
        $ps= $p1+$p2;
        echo $ps;
    }

    somaparametro(6, 78);

    /*parametro 2*/
echo "<h1>Função com parametro</h1>";
echo "<br>";
    function somaR($p1, $p2){
        $ps= $p1+$p2;
        return $ps;
    }

    echo somaR(6, 78);
    echo "<br>";
    echo somaR(5, 8);
    
    echo "<h1>Função com parametro multiplicação</h1>";
    function multiplica3($x1, $x2, $x3){
        $xm= $x1* $x2* $x3;
        return $xm;
    }

    echo multiplica3(3, 5, 6);

    echo "<h1>Função com parametro divisao</h1>";
    function divide($t1, $t2, $t3){
        $td= $t1/ $t2/ $t3;
        return $td;
    }

    echo divide(3, 5, 6);

    echo "<h1>Função com parametro subritrair</h1>";
    function subit($t1, $t2, $t3){
        $td= $t1- $t2- $t3;
        return $td;
    }

    echo subit(3, 5, 6);

    echo "<h1>Função com parametro elevação</h1>";
    function equ2($x){
        $td= $x*$x;
        return $td;
    }

    echo equ2(3);

    echo "<h1>Função com parametro soma divide multiplica subitrai </h1>";
    function e1($a1, $a2 , $a3){
        $ttt= ($a1+$a2)/$a3*($a1-$a3);
        return $ttt;
    }

    echo e1(3 , 5 ,7);

    echo "<h1>Função com parametro soma elevação </h1>";
    function somarr($r1, $r2){
        $soma1= $r1 +$r2;
        return $soma1;
        
    
    }
    
    function eleva($a1){
        $elev= $a1 *$a1;
        return $elev;
        
    
    }

    echo somarr(2 ,eleva(5));

function criar_array($inicio, $fim) {
    $array_resultante = range($inicio, $fim);
    return $array_resultante;
}

// Exemplo de uso:
$meu_array = criar_array(10, 1000);



    ?>
</body>
</html>