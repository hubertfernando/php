<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>

<tr>
    <th>NOME</th>
    <th>ENDERECO</th>
    <th>IDADE</th>
    <th>CIDADE</th>
  </tr>

  <tr>
    <?php
    $var = [
        'alunos'=>[
            [
                'nome'=> 'hubert',
                'endereco'=>'rua cruzeiro do sul',
                'idade'=> 17,
                'cidade'=>'guirapa'
            ],
            [
                'nome'=> 'juliana',
                'endereco'=>'rua cruzeiro do sul',
                'idade'=> 17,
                'cidade'=>'pindai'
            ]
        ]
    ]
 ?>   
    <td>
        <?php
        echo $var['alunos'] [0] ['nome'];
        ?>
    </td>
    <td>
        <?php
        echo $var['alunos'] [0] ['endereco'];
        ?></td>
    <td><?php
        echo $var['alunos'] [0] ['idade'];
        ?></td>
    <td><?php
        echo $var['alunos'] [0] ['cidade'];
        ?></td>
  </tr>
  <td>
        <?php
        echo $var['alunos'] [1] ['nome'];
        ?>
    </td>


    <td>
        <?php
        echo $var['alunos'] [1] ['endereco'];
        ?></td>
    <td><?php
        echo $var['alunos'] [1] ['idade'];
        ?></td>
    <td><?php
        echo $var['alunos'] [1] ['cidade'];
        ?></td>
  </tr>



</table>

<table>

<tr>
    <th>NOME</th>
    <th>ENDERECO</th>
    <th>IDADE</th>
    <th>CIDADE</th>
  </tr>

  <>
    <?php
    $var = [
        'alunos'=>[
            [
                'nome'=> 'hubert',
                'endereco'=>'rua cruzeiro do sul',
                'idade'=> 17,
                'cidade'=>'guirapa'
            ],
            [
                'nome'=> 'juliana',
                'endereco'=>'rua cruzeiro do sul',
                'idade'=> 17,
                'cidade'=>'pindai'
            ],
            [
                'nome'=> 'juliana',
                'endereco'=>'rua cruzeiro do sul',
                'idade'=> 17,
                'cidade'=>'pindai'
            ]      
          ]
    ]
 ?>   
        <?php
       for($a=0; $a<count($var['alunos']); $a++){
        ?>
        <tr>
            <td> <?php print_r($var['alunos'][$a]['nome']) ?></td>
            <td> <?php print_r($var['alunos'][$a]['endereco']) ?></td>
            <td> <?php print_r($var['alunos'][$a]['idade']) ?></td>
            <td> <?php print_r($var['alunos'][$a]['cidade']) ?></td>

    </tr>
     <?php  }?>
</table>

<h1>arrays- lista ordenadas</h1>

<?php 
$listaordenada = array(
    'fabio', 'antonio', 'joao'
);
?>
<pre>
    <?php print_r($listaordenada);?>
</pre>

<?php
echo '<h2> 1.1- adicionar dados ao array </h2>';
$listaordenada []='pedro';
$listaordenada []= 'hubert';

echo'<pre>';

print_r($listaordenada);
echo'</pre>';
?>

<?php 

echo  '<h2> 2 - array associativa </h2>';
$var = [
    'nome'=> 'Hubert',
    'endereco'=>'rua cruzeiro',
    'idade'=> 15,
];
?>

<pre>
<?php echo print_r($var) ?>;
</pre>

<?php 
echo  '<h2> 2.1 - adicionar dados ao array associativa </h2>';

$var['cidade'] = 'guirapa';
$var['estado'] = 'parana';
?>
<pre>
<?php echo print_r($var) ?>;
</pre>

<?php
echo  '<h2> 2.2 - substitui os dados ao array associativa </h2>';

$var['cidade'] = 'pindai';
?>
<pre>
<?php echo print_r($var) ?>;
</pre>

</body>
</html>