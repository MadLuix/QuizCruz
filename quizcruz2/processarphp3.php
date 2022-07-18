<html>
<head>
    <meta charset="utf-8"/>
    <style type="text/css">
        body {
            font-family: Arial;
            font-size: 24px;
            background-color: #bebebe;
        }
        .box{
            font-weight:800;
            height: 200px;
            color: #ffffff;
            background-color: #2f4371;
            text-align: center;
            line-height: 200px;
        }        
        input[type=button]{
            width: 200px;
            height: 60px;
            background-color: #5a77d4;
            border: solid 1px #000000;
            float: right;
        }
        input[type=button]:hover{
            background-color: #d0b93c;
        }
    </style>
</head>
<?php

$host = "localhost"; 
$db   = "u700215052_QuizCruz";  
$user = "u700215052_QuizCruz";
$pass = "quizCruzeiro35";
$connection = mysqli_connect($host, $user, $pass, $db); 

if (mysqli_connect_errno()) {
  echo "Não foi possível a conexão com o BD MySQL ". mysqli_connect_error();
}

$codEnquete  = $_POST['codigoEnquete'];
$codQuestao = $_POST['codigoQuestao'];
$qt1 = $_POST['a1'];
$qt2 = $_POST['opcao2'];
$qt3 = $_POST['opcao3'];
$qt4 = $_POST['opcao4'];
$qt5 = $_POST['opcao5'];
    
echo "<script>alert($qt1)</script>"
    
$_sqlqueryIdQuestao = "select (max(codigoQuestao) + 1) as cq from tblquestoes";
$_idQuestao = mysqli_query($connection, $_sqlqueryIdQuestao);
$_row = mysqli_fetch_assoc($_idQuestao);
$_numQuestao = $_row['cq'];    
$b =array(1,$_numQuestao);
    
$sql = mysqli_query($connection, "insert into tblrespostas(codigoEnquete, codigoQuestao,qt1, qt2, qt3, qt4, qt5) values ('$codEnquete','$codQuestao','$qt1','$qt2','$qt3','$qt4','$qt5')"); 
    
$mens = "Respostas salvas!";
 ?>
<body>
    <?php
    if($sql){
    echo "<div class='box'>".$mens."</div>";
} else{
    echo "<div class='box'>Erro ao inserir questão, tente novamente</div>";
}
mysqli_close($connection);

?>
<input type="button" value="Finalizar" onclick="window.location.href='index.php'">

</body>
</html>









        






