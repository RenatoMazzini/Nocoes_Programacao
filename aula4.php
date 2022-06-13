<html>

    <head>
       
    <title> Formulário teste; </title>

</head>

<body bgcolor="Orange">

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
        <br><input type="text" name="Nome" require><br>
        <br><label>
        <b style="color:white;" >  Email cadastrado: </b>
     </label>
        <br><input type="text" name="Email" require><br>
        <br><label>
        <b style="color:White;" > Idade </b>
     </label>
        <br><input type="Number" name="Idade" require><br>
        

        <Br><button type="submit">enviar</button>

</center>

</form>
    </body>


</hmtl>

<?php
     Echo "<center>";

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

 
 ?>