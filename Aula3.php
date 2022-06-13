<html>
    <head>

        <title>Alunos Polo UAB </title>

        <center>

        <br><A>
            <font face="Arial"> <font color="white"> FORMULARIO DE INCRIÇÃO POLO UAB 
             </font></a>
            </font face>
           
            </center>
    </head>

    <body bgcolor="grey">

        <center>
        <form action="" method="POST">

        <br><label>
        <b style="color:White;" >  Informe o seu nome: </b>
     </label>
        <br><input type="text" name="Nome"><br>
        

        <br><label>
        <b style="color:white;" >  Informe o seu Sobrenome: </b>
     </label>
        <br><input type="text" name="Sobrenome"><br>

        <br><label>
        <b style="color:white;" >  Email cadastrado: </b>
     </label>
        <br><input type="text" name="Email"><br>

        <br><label>
        <b style="color:white;" > Data de nascimento: </b> 
    </label>
        <br><input type="date" name="Idade"><br>

        <br><label>
        <b style="color:white;" > Número R.A: </b>
     </label>
        <br><input type="text" name="Ra"><br>


        <br><button type="Submit">Salvar</button><br>

</form>

</center>
    </body>    
</html>

    <?php

        Print_r($_POST);


    Echo "<center>";
    
if (isset($_POST['Nome']) && isset($_POST['Sobrenome']) && isset($_POST['Email']) && isset($_POST['Idade']) && isset($_POST['Ra'])){
    
    if($_POST['Nome'] == ""){
        Echo "<H2 style='color:red;'>O nome não foi informado!</h2>";

        }else if($_POST['Sobrenome'] == ""){
            Echo "<H2 style='color:red;'>sobrenome não informado!</h2>";

        }else if($_POST['Email'] == ""){
            Echo "<H2 style='color:red;'>Email não informado!</h2>";

        }else if($_POST['Idade'] == ""){
            Echo "<H2 style='color:red;'>Idade não informada!</h2>";

        }else if($_POST['Ra'] == ""){
            Echo "<H2 style='color:red;'>Ra não informado!</h2>";

        } else{
            Echo "<H2 style='color:Green;'>Seja bem vindo !</h2>";

        }}
        Echo "</center>"


?>

    