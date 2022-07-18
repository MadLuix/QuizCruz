<!DOCTYPE html>
<html>
<title>QuizCruz</title>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=0.7">
    <style>
        
        body {
        background-color: #bebebe;
        font-family: arial;
            height: 100%;
        }
        .q{
    width: 90%;
    height: 40%;
    background-color: #ffffff;
    margin-top: 2%;
    border-radius: 9px;
    text-align: left;
    padding: 2%;
    box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
}
        label{
    color: #767676;
}

        h2{
    margin-top: 3px;
}
        input[type=submit]{
            padding: 10px;
            margin: 20px;
            margin-top: 30px; 
            width: 100px;
            background-color: #19108e;
            color: #fff;
            font-family: arial;
            border-radius: 6px;
}
        input[type=submit]:hover{
            background-color: #c6ac21;
}
        .n{
    font-weight:800;
    height: 24px;
    color: #ffeaea;
    background-color: #1190bf;
    border: #000000;
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
    font-family: cursive;
    box-shadow: 10px 10px 13px 0px rgba(0,0,0,0.75);
}
        
        .central{
            width: 90%;
            height: 100%;
            margin: 0 auto;
            background-color: #e8e6ed;
            font-family: arial;
            box-shadow: 0px 0px 27px 0px rgba(0,0,0,0.75);
            border-radius: 10px;
            padding-bottom: 1px;
        }
        

        h1{
            text-align: center;
            padding: 1%;
        }
        
        form{
            background-color: #d1d6e6;
            max-width: 70%;
            margin: auto;
            margin-top: 30px;
            border-radius: 5px;
            padding: 1%;
            border: solid 1px #363535;
            box-shadow: 0px 0px 31px 0px rgba(0,0,0,0.75);
            margin-bottom: 100px;
            
        }

        .ib{
            height: 50px;
            margin: 7px;
            width: 60%;
    
        }
        .am{
            width: 80px;
            height: 30px;
        }
        .im{
            height: 25px;
            margin: 5px;
            width: 20%;
        }
    
    </style>
</head>

<body>

    <div class="header">       
        <h1>QuizCruz</h1>
    </div> 
    <div class="central">
        <h1>Criar Quiz</h1>
    <form action="processarphp2.php" method="post">
        ID da enquete : 
        <input type="number" name="codigoEnquete" class="im"><br>
        Codigo da Questoes : 
        <input type="number" name="codigoQuestao" class="im"><br>
        Quantidade de alternativas : 
        <input class="am" name="qtdeAlternativas" list="range"><br>
        Questão : 
        <input type="text" name="textoQuestao" class="ib"><br>
        Texto da alternativa 1 : 
        <input type="text" name="textoAlternativa1" class="ib"><br>
        Texto da alternativa 2 : 
        <input type="text" name="textoAlternativa2" class="ib"><br>
        Texto da alternativa 3 : 
        <input type="text" name="textoAlternativa3" class="ib" placeholder="Deixe vazio caso não haja alternativa"><br>
        Texto da alternativa 4 : 
        <input type="text" name="textoAlternativa4" class="ib" placeholder="Deixe vazio caso não haja alternativa"><br>
        Texto da alternativa 5 : 
        <input type="text" name="textoAlternativa5" class="ib" placeholder="Deixe vazio caso não haja alternativa"><br>
        <datalist id="range">
        <option value="2">
        <option value="3">
        <option value="4">
        <option value="5">
        </datalist>
        
        
        <input type="submit" value="Enviar">
    </form>
      

   
    </div>
</body>

</html>