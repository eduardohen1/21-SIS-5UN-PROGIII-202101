<?php

 	$dados = [
      ['Aluno 1', 'Materia 1'],
      ['Aluno 2', 'Materia 1'],
      ['Aluno 3', 'Materia 3'],
      ['Aluno 4', 'Materia 3'],
      ['Aluno 5', 'Materia 2']
    ];
	
	/*
    	Tabela em html:
	<table>
      <tr>
      	<td>celula 1</td>
        <td>celula 2</td>
      </tr>
     </table>
	*/
	
	echo "<table border='1'>";
	echo "<tr>";
		echo "<td>ID</td>";
		echo "<td>Nome do aluno</td>";
		echo "<td>Materia</td>";
	echo "</tr>";
	foreach($dados as $dado => $nome){
      	echo "<tr>";
      		echo "<td>$dado</td>";
      		echo "<td>$nome[0]</td>";
      		echo "<td>$nome[1]</td>";
      	echo "</tr>";
   		//echo "<li>$dado | $nome[0] | $nome[1]</li>";
    }//foreach
	echo "</table>";

?>