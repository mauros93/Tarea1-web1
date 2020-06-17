<?php
    if(isset($_POST["n1"] ) && isset($_POST["n2"]) && isset($_POST["sumar"])){
        $resultado = (int)$_POST["n1"] + (int)$_POST["n2"];
    }
    elseif(isset($_POST["n1"] ) && isset($_POST["n2"]) && isset($_POST["restar"])){
        $resultado = (int)$_POST["n1"] - (int)$_POST["n2"];
    }
    elseif(isset($_POST["n1"] ) && isset($_POST["n2"]) && isset($_POST["multiplicar"])){
        $resultado = (int)$_POST["n1"] * (int)$_POST["n2"];
    }
    elseif(isset($_POST["n1"] ) && isset($_POST["n2"]) && isset($_POST["dividir"])){
        $resultado = (int)$_POST["n1"] / (int)$_POST["n2"];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("enlaces.php") ?>
    <title>Suma</title>
</head>
<body>
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-8">
            <form method="post">
                <div class="form-group">
                    <label for="n1">Ingresa el numero 1</label>
                    <input type="number" class="form-control" id="n1" name="n1">                    
                </div>
                <div class="form-group">
                    <label for="n2">Ingresa el numero 2</label>
                    <input type="number" class="form-control" id="n2" name="n2">
                </div>                
                <button type="submit" class="btn btn-primary" name="sumar">Sumar</button>  
                <button type="submit" class="btn btn-primary" name="restar">Restar</button> 
                <button type="submit" class="btn btn-primary" name="dividir">Dividir</button> 
                <button type="submit" class="btn btn-primary" name="multiplicar">Multiplicar</button>               
            </form>
            <br>
            
            <?php
                if(isset($resultado)){
                    echo "<h3>La suma es</h3>"  . "<p>$resultado</p>";                    
                } 
            ?>       
            
            </div>
        </div>
    </div>   
</body>
</html>

