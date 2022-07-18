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
$desc = $_POST['descrGeral'];
$prop = $_POST['proprietario'];
$aut = $_POST['autorizad'];;
    
$_sqlqueryIdEnquete = "select (max(codigoenquete) + 1) as id from tblenquetes";
$_idEnquete = mysqli_query($connection, $_sqlqueryIdEnquete);
$_row = mysqli_fetch_assoc($_idEnquete);
$_numEnquete = $_row['id'];    
$a =array(0,$_numEnquete);
    
 $sql = mysqli_query($connection, "insert into tblenquetes(codigoEnquete, descrGeral, proprietario, autorizada) values ('$_numEnquete','$desc','$prop','$aut')"); 
    
$mens = "Quiz inserido com sucesso! ID do seu quiz : ".array_sum($a)."";
 ?>
<body>
    <?php
    if($sql){
    echo "<div class='box'>".$mens."</div>";
} else{
    echo "<div class='box'>Erro ao inserir dados, tente novamente</div>";
}
mysqli_close($connection);

?>
<input type="button" value="Prosseguir" onclick="window.location.href='form2.php'">
</body>
</html>









        






