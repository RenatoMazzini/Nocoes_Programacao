<?php

echo "<center>";
 echo "<br> Formulario HTML; <br>";
echo "</center>";

//echo "Olá a todos!";

echo "<br>";
Echo "<b>";
Echo "<center>";
Print_r($_POST);
Echo "</center>";
echo "</b>";
echo "<br>";

if(isset($_POST ['nome'])){

}
?>

<center>

    <button><a href="aula3.php">Voltar></a></button><Br>

    <br><form action="" method="POST">

        <label>
             <b style="color:grey;" > Informe o seu nome: </b> 
        </label>
        <input type="text" name="Nome"><br>

        <br> <label> <b> Informe o seu sobrenome: </b> 
        </label>
        <input type="text" name="Sobrenome"><br>

        <br><label> <b> Informe sua idade: </b>
         </label>
        <input type="number" name="Idade"><br>

        <br><label> <b> Informe sua data de nascimento: </b> 
        </label>
        <input type="date" name="nascimento"><br>
        
        <br> <button type="submit">Salvar</button>

</form>
<!-- 
<img src="imagens/carro.png" widt = "220px" height="220"px> -->
<img src="imagens/LogoGoogle.png" widt = "200px" height= "200"px>

</center>