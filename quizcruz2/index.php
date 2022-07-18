<!DOCTYPE html>
<html>
<title>QuizCruz</title>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=0.75">
    <style type="text/css">
        
        body {
        background-color: #bebebe;
        font-family: arial;
            height: 100%;
            
        }

        label{
    color: #767676;
}

        *{
            margin: 0;
	       padding: 0;
            }

        .header{
            width: 100%;
            height: 70px;
            background-color: #004489;
            color: #fff;
            font-family: arial;
            box-shadow: 10px 10px 13px 0px rgba(0, 0, 0, 0.75);
}
        
        .central{
            width: 90%;
            height: 100%;
            margin: 0 auto;
            background-color: #e8e6ed;
            font-family: arial;
            box-shadow: 0px 0px 27px 0px rgba(0,0,0,0.75);
            border-radius: 10px;
            padding-bottom: 50px;
        }
        

        h1{
           font-size: 2vw;
            text-align: center;
            padding: 1%;
        }
        a{
           text-align: center;
            line-height: 70px;
            margin-left: 20%;
            color: #fff;
            text-decoration: none;
            font-family: Courier;
        }
        .bot{
            
            width: 40%;
            background-color: #3c428d;
            height: 70px;
            border: solid 1px #000;
            display: block;
            margin: 0 auto;
            border-radius: 10px;
            margin-bottom: 10px;
            
        }
        .bot:hover{
            
            background-color: #c7be49;
        }

    </style>
</head>

<body>
<?php
$host = "localhost"; 
$db   = "u700215052_QuizCruz";  
$user = "u700215052_QuizCruz";
$pass = "quizCruzeiro35";
$connection = mysqli_connect($host, $user, $pass, $db); 
if (mysqli_connect_errno()) {
  echo "Não foi possível a conexão com o BD MySQL: " . mysqli_connect_error();
}
mysqli_select_db($connection, $db);
$dados = mysqli_query($connection,"SELECT tblquestoes.textoAlternativa1 as a1, tblquestoes.textoAlternativa2 as a2, tblquestoes.textoAlternativa3 as a3, tblquestoes.textoAlternativa4 as a4, tblquestoes.textoAlternativa5 as a5, tblquestoes.textoQuestao as questao FROM tblquestoes");
$linha = mysqli_fetch_assoc($dados);
$qts = mysqli_query($connection,"SELECT tblquestoes.qtdeAlternativas as qtda  FROM tblquestoes")
?>  
    <div class="header">       
        <h1>Página Principal</h1>
    </div> 
        <div class="central">
            
        <h1>Selecione uma das opções</h1>
            
        <div class="bot">
            <a href="form.php">Criar Quiz </a>
        </div>            
        <div class="bot">
            <a href="form2.php">Criar Questao </a>
        </div>
        <div class="bot">
            <a href="quiz.php">Responder Quiz</a>
        </div>

             
        

        

    </div>
</body>

</html>