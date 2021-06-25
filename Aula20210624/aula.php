<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste PHP</title>
</head>
<body>
  <h1>Exemplo de PHP</h1>
  <?php
  	//Comentário aqui!
	$a = 10;
  	$a = $a * 2;
  	echo "O nome do filme é: O código dá ".$a;
  	/* comentário longo
       onde posso escrever 
       um bom pedaço de texto
    */
  	//Variáveis:
  	$A = "variavel A";
  	echo "<br>";
  	echo "valor da variavel a: ".$A;
  	$nome = "Meu nome é";
  	$Nome = "Eduardo";
  	echo "<br>";
  	echo $nome." ".$Nome;
  	//boolean:
  	$bool1 = true;
  	$bool2 = false;
  	echo "<br>";
  	echo "Boolean:<br>*1: ".$bool1."<br>*2: ".$bool2;
  	//float:
  	$double1 = 0.1;
  	$double2 = .654;
  	$double3 = 4e+6;
  	$double4 = 2/1000;
  	echo "<table border='1'>";
  	echo "	<tr>";
  	echo "		<td>Double 1</td><td>Double 2</td><td>Double 3</td><td>Double 4</td>";
  	echo "	</tr>";
  	echo "	<tr>";
  	echo "		<td>".$double1."</td>";
  	echo "		<td>".$double2."</td>";
  	echo "		<td>".$double3."</td>";
  	echo "		<td>".$double4."</td>";
  	echo "	</tr>";
  	echo "</table>";
  	//Vetores:
  	$vetor = array();
  	$vetor[0] = "123";
  	$vetor[1] = 4567;
  	$vetor[2] = true;
  	echo "<br>";
  	echo "Vetor:<br>".$vetor[0]." | ".$vetor[1]." | ".$vetor[2]."<hr>";
  	
  	$vetor[1] -= 10;
  	echo $vetor[1];
  	echo "<br>";
  	$nome = "O nome é: ";
  	$nome .= "Fulano!";
  	echo $nome;
  	
  	echo "<hr>";
  	echo "<h2>Comandos If:</h2>";
  	$condicao1 = true;
  	$condicao2 = false;
  	if($condicao1)
      echo "Entrou na condição 1<br>";
 	
  	//if/else
  	if($condicao2)
      echo "verdadeiro<br>";
  	else
      echo "falso<br>";
  	$condicao2 = true;
  	
  	if(!$condicao2){
      echo "condição 2 é false<br>";
    }else{
      echo "condição 2 é true<br>";
      $a += 15;
      echo "variável a: ".$a."<br>";
    }
  	//condição ternária:
  	$a = 1;
  	$b = ($a > 2) ? $a+10 : $a-5;
  	echo $b;
  	
  	echo "<hr>";
  	echo "<h2>Switch case:</h2>";
  	$variavel = 10;
  	switch($variavel){
      case 1:
        echo "1<br>";
        break;
      case 2:
        echo "2<br>";
        break;
      case 3:
      case 4:
        echo "3 ou 4<br>";
        break;
      case 5:
        echo "5<br>";
        break;
      default:
        echo "Nenhuma das alternativas!<br>";
        break;
    }
  	echo "<hr>";
  	echo "<h2>Comandos de laços:</h2>";
  	//vetor de matérias:
  	$materias = array("PROGIII","IA","GESTÃO DA INF","IHC","TCC",2225);
  	//echo $materias[0].", ".$materias[1].", ".$materias[2];
  	foreach($materias as $materia => $nome){
      echo "<li>Metéria $materia : $nome </li>";
    }
  	
  	$carros = [
      	['VW', 'Polo'],
        ['Fiat', 'Toro'],
      	['Chevrolet', 'Spin'],
      	['Chery', 'Tigo']
      ];
  	echo "Carros:";
  	echo "<ul>";
  	foreach($carros as $carro => $nome){
      echo "<li>$carro | $nome[0] | $nome[1]</li>";
    }
  	echo "</ul>";
  
  
  ?>
</body>
</html>