<!DOCTYPE html>
<html>
<title>QuizCruz</title>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        *{
	       margin: 0;
	       padding: 0;
        }

        .header{
            width: 100%;
            height: 70px;
            background-color: #007FFF;
        }
        
        #central{
            width: 90%;
            margin: 0 auto;
            background-color: #ece5ff;
        }
        
        .container{
            
            border-radius: 3%;
            background-color: white;
            width: 100%;
            max-width: 600px;
            height: 0;
            max-height: 400px;
            padding-bottom: 93%;
            margin: 0 auto;
            margin-bottom: 4%;
            
            
                    
        }
        h1{
            text-align: center;
            padding: 1%;
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
$qts = mysqli_query($connection,"SELECT tblquestoes.qtdeAlternativas as qtda  FROM tblquestoes");
$total = mysqli_num_rows($dados)
?>  
    
    <div class="header">       
        <h1>QuizCruz</h1>
    </div> 
    <div id="central">
<?php
    if($total > 0) {
        do {
?>          <form action="processarphp3.php" method="post">
             <div class="q">
            <h2><?=$linha['questao']?></h2>
            <input type="radio" id="op1" name="opcao1">
            <label for="op1"><?=$linha['a1']?></label><br>
            <input type="radio" id="op2" name="opcao2">
            <label for="op2"><?=$linha['a2']?></label><br>
            <input type="radio" id="op3" name="opcao3">
            <label for="op3"><?=$linha['a3']?></label><br>
            <input type="radio" id="op4" name="opcao4">
            <label for="op4"><?=$linha['a4']?></label><br>
            <input type="radio" id="op5" name="opcao5">
            <label for="op5"><?=$linha['a5']?></label><br>
            </div>
        </form>
        
<?php
        } while($linha = mysqli_fetch_assoc($dados));
    }
?>

    
    
    


      

   <input type="button" value="Enviar">
    </div>


</body>

</html>
