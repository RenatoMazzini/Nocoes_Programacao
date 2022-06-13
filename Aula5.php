<html>

    <head>
       
    <title> Aula 5; </title>

</head>

<body bgcolor="grey">

<center>
    <br><A>
            <font face="Arial"> <font color="white"> FORMULARIO TESTE
             </font></a>
            </font face>
</center>

     <center>
    <form action="" method="POST">
    
    <br><label>
        <b style="color:White;" > Nome de usuario </b>
     </label>
        <br><input type="text" name="Nome" required><br>
        <br><label>
        <b style="color:white;" >  Email cadastrado: </b>
     </label>
        <br><input type="text" name="Email" required><br>
        <br><label>
        <b style="color:White;" > Idade </b>
     </label>
        <br><input type="Number" name="Idade" required><br>
        

        <Br><button type="submit">enviar</button><br><br>
</center>
</form>

<center>
    
<?php
echo "<center>";
if(isset($_POST['Nome']) && isset($_POST['Idade']) && isset($_POST['Email'])){

    if($_POST['Email'] == ""){
        Echo "<H2 style='color:red;'>O Email não foi informado!</h2>";
  
    }else if($_POST['Idade'] == ""){
        Echo "<H2 style='color:red;'>Idade não informada!</h2>";

 }else if($_POST['Nome'] == ""){
       echo "<H2 style='color:red;'>O Nome está vazio !</h2>";

    }else {
        Echo "<H2 style='color:green;'>Seja bem vindo !</h2>";
    }}
    Echo "</center>";
 Echo "<center>";
class pessoa_obj{};

$pessoa = new pessoa_obj();
$pessoa ->name = "nick";
$pessoa ->surname ="Doe";
$pessoa ->age = 0.6;
$pessoa ->date ='01/01/2022';

$pessoa2 = new pessoa_obj();
$pessoa2 ->name = "Edson";
$pessoa2 ->surname ="Marangoni";
$pessoa2 ->age = 21;
$pessoa2 ->date ='09/06/2000';

$pessoa3 = new pessoa_obj();
$pessoa3 ->name = "Renato";
$pessoa3 ->surname ="Mazzini";
$pessoa3 ->age = 19;
$pessoa3 ->date ='20/04/2003';
 
 

print_r($pessoa);
echo "<br><br>";
print_r($pessoa2);
echo "<br><br>";
print_r($pessoa3);
echo "<br>";


$arrayPessoas = array();
echo "<br> Meu array de pessoas: <br>";
print_r($arrayPessoas);
array_push($arrayPessoas, $pessoa);
array_push($arrayPessoas, $pessoa2);
array_push($arrayPessoas, $pessoa3);

echo "<br><br><pre>";
print_r($arrayPessoas);
Echo "</pre><br><Br>";


echo "<Table border='1'>";

for ($posicao=0; $posicao <count($arrayPessoas); $posicao++){
    if($arrayPessoas[$posicao]->age > ""){
        Echo"<tr>";
        
         echo "<td>Oie".$arrayPessoas[$posicao]->name."</td>";
         echo "<td>".$arrayPessoas[$posicao]->surname."</td>";
         echo "<td>".$arrayPessoas[$posicao]->age."</td>";
         echo "<td>".$arrayPessoas[$posicao]->date."</td>";

         Echo"</tr>";
 }
}
Echo "</table>";

   //Echo "<center>";
   //Echo "<br>";
   //for ($posicao=count($arrayPessoas)-1; $posicao > -1 ; $posicao--){
    //echo "Oie".$arrayPessoas[$posicao] -> name;      // conta o número de pessoas na lista ao inverso
//}
echo "/<center>";
    ?>
<center>

        <br><table border="1"> <!-- iniciando a tabela -->
            <tr> <!-- iniciando a linha -->
            <td><font face="Arial">Tarumã</td></font> <!-- iniciando e fechando a coluna -->
            <td><font face="Arial">São paulo</font></td> <!-- iniciando e fechando a coluna -->
</tr> <!-- finalizando uma linha -->
<tr>
    <td> Tarumã</td>
    <Td>SP</td>
</tr>
<tr>
    <td> Assis</td>
    <Td>SP</td>

</tr>
<tr>
    <td>Pedrinhas Paulista</td>
    <Td>SP</td>
</tr>

</table> <!-- fechando a tabela -->

</center>

    </body>

</hmtl>