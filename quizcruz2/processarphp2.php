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
error_reporting(0);
$host = "localhost"; 
$db   = "u700215052_QuizCruz";  
$user = "u700215052_QuizCruz";
$pass = "quizCruzeiro35";
$connection = mysqli_connect($host, $user, $pass, $db); 

if (mysqli_connect_errno()) {
  echo "Não foi possível a conexão com o BD MySQL ". mysqli_connect_error();
}

$cod  = $_POST['codigoEnquete'];
$text = $_POST['textoQuestao'];
$qtda = $_POST['qtdeAlternativas'];
$at1 = $_POST['textoAlternativa1'];
$at2 = $_POST['textoAlternativa2'];
$at3 = $_POST['textoAlternativa3'];
$at4 = $_POST['textoAlternativa4'];
$at5 = $_POST['textoAlternativa5'];
    
 $txt = json_encode($text);
    
$_sqlqueryIdQuestao = "select (max(codigoQuestao) + 1) as cq from tblquestoes";
$_idQuestao = mysqli_query($connection, $_sqlqueryIdQuestao);
$_row = mysqli_fetch_assoc($_idQuestao);
$_numQuestao = $_row['cq'];    
$b =array(1,$_numQuestao);
    
 $sql = mysqli_query($connection, "insert into tblquestoes(codigoEnquete, codigoQuestao, textoQuestao, qtdeAlternativas, textoAlternativa1, textoAlternativa2, textoAlternativa3, textoAlternativa4, textoAlternativa5) values ('$cod','$b','$txt','$qtda','$at1','$at2','$at3','$at4','$at5')"); 
    
$mens = "Questão inserida com sucesso!";
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
<input type="button" value="Adicionar mais" onclick="window.location.href='form2.php'">
</body>
</html>









        






