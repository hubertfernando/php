<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula-07-05</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2> ARRAY: Definição implicita</h2>
    <pre>
        <?php
        $var = array(" liz", " luna", " beatriz", " felix", " juliana", " dudu", " leo", " eduardo");
        for($a=0; $a<8; $a++){
        echo "$var[$a]";
    }
     
        ?>
    </pre>
    <h2> ARRAY: Definição Explicita(sem chave)</h2>
    <pre>
    <?php

     $alunos = array(" liz", " luna", " beatriz", " felix", " juliana", " dudu", " leo", " eduardo");
     for($i=0; $i<(count ($alunos)); $i++){
        echo"$i = <br>";
        echo "o indice é $i o nome do aluno é $alunos[$i] <br>";
     }
     
        ?>
    </pre>
    <pre>
    <?php

$var = [" liz" =>11, " luna"=> 1.8, "livia"=>-5,"hubert"=>3, "eloa"=>4, "leo"=>10, "pedro"=>6 ];

    foreach($var as $chave => $valor){
        if($valor>=6 && $valor<=10){
        echo "alunos aprovados <br>";
        echo "o aluno: $chave <br> ";
        echo "observe a nota: $valor <br>";
    }
    else if($valor<6 && $valor>=4){
        echo "alunos recuperação: <br> ";
        echo "o aluno: $chave <br>";
        echo "obteve: $valor <br>";
}  
 else if ($valor<4 && $valor>=0){
    echo"alunos reprovados: <br> ";
    echo"o aluno: $chave <br>";
    echo"obteve: $valor <br>";
}
else if($valor>10 || $valor<0){
    echo "nao possui essa nota <br>";
    echo"o aluno: $chave <br>";
    echo"obteve: $valor <br>";
}
}
 ?>

    </pre>
</body>
</html>