<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array lacos</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

<h2>Array definição explicita(sem chave)</h2>

<pre>
<?php
$var = array(1, 2, 3, 4);

echo $var[0];
echo $var[1];
echo $var[2];
echo $var[3];
?>
</pre>

<h2>impressao com for</h2>

<pre>
<?php
  for($a=0; $a<4; $a++){
    echo "$var[$a]";
  }
?>
</pre>

<h2>impressao com foreach</h2>

<pre>
<?php
  foreach($var as $dados){
    echo $dados;
  }
?>
</pre>

<h2>impressao de foreach com chave e valor</h2>

<pre>
<?php
$alunos = [" liz" =>11 , " luna"=> 18, "livia"=>5,"hubert"=>3, "eloa"=>4, "leo"=>10, "pedro"=>6 ];
  foreach($alunos as $chave => $valor ){
    echo "a idade de $chave é : $valor <br>" ;
  }
?>
</pre>

<h2>print_r imprimir o array</h2>

<pre>
<?php
  print_r($alunos);
  echo "o meu tem: ";
  echo (count($alunos));
?>
</pre>

<h2>array multidimensional: definicao explicita</h2>

<pre>
<?php
  $alunos= array("maria"=> array("endereco"=>"rua cruzeiro do sul",
                                 "bairo"=> "cruzeiro"),

                                 "juliana"=> array("endereco"=>"rua cruzeiro do sul",
                                 "bairo"=> "cruzeiro"));
print_r($alunos);

print_r ($alunos['maria']);

echo "<br>";
echo $alunos["maria"] ["endereco"] ."  ".$alunos["maria"] ["bairo"];
echo "<br>";
echo $alunos["juliana"] ["endereco"] ."  ". $alunos["juliana"] ["bairo"];
echo "<br>";
foreach($alunos as $chave => $valr){
  echo $chave.": <br>";
  foreach($valr as $chave => $valor){
    echo "  - $valor <br>";
  }
}
?>
</pre>
</body>
</html>