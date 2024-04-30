<?php 

 //exemplo1
echo "exemplo1";
 $var = array(1, 2, 3, 4);
 echo "<br>";
 echo $var[0];
 echo "<br>";
 echo $var[1];
 echo "<br>";
 echo $var[2];
 echo "<br>";
 echo $var[3];
 echo "<br>";

//exemplo 2
echo "<br>";
echo "exemplo2";
 $var = array("antonio", "joao", "zeca");
 echo "<br>";
 echo $var[0];
 echo "<br>";
 echo $var[1];
 echo "<br>";
 echo $var[2];
 echo "<br>";

//exemplo 3
echo "<br>";
echo "exemplo3";
 $var = array("window", "10", "2024", "v1.2021");
 echo "<br>";
 echo $var[0];
 echo "<br>";
 echo $var[1];
 echo "<br>";
 echo $var[2];
 echo "<br>"; 
 echo $var[3];
 echo "<br>";
//exemplo 4
echo "<br>";
echo "exemplo4";
 $var = array("italo"=>30, "huber"=>20, "joao"=>18);
 echo "<br>";
 echo "o idade é ".$var['italo'] ;
 echo "<br>";
 echo "o idade é ".$var['huber'] ;
 echo "<br>";
 echo "o idade é ".$var['joao'] ;
 echo "<br>";

//exemplo 5
echo "<br>";
echo "exemplo5";
 $num = array(2=>7, 3=>8, 9=>5);
 echo "<br>";
 $num [8]=40;
 echo $num[8];
 echo "<br>";
 $num [1]=23;
 $num [3]=9;
 echo  $num[3];
 echo "<br>";
 echo $num[1];
 echo "<br>";
 echo $num[2] ;
 echo "<br>";
 echo $num[3] ;
 echo "<br>";
 echo $num[9] ;

 //exemplo 6
 echo "exemplo função count";
 $num = array("x",7, 3, 5 "hubert");
 $qnt= count($num);
 echo "a quantidade é: .$qnt";
 ?> 