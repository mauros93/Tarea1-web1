<?php
    if(isset($_POST["masa"]) && isset($_POST["estatura"])){
        $imc = $_POST["masa"] / ($_POST["estatura"] * $_POST["estatura"]);        
    }else{
        $imc = null;
    }

    if($imc <= 18.4){
        $msg = "Tienes insuficiencia de peso";
    }
    else if(18.5 <= $imc  && $imc <= 24.9){
        $msg = "Tienes peso normal";
    }
    else if(25 <= $imc && $imc <= 29.9){
        $msg = "Tienes sobrepeso";
    }
    else if(30 <= $imc && $imc <= 34.9){
        $msg = "Tienes obesidad 1";
    }
    else if(35 <= $imc && $imc <= 39.9){
        $msg = "Tienes obesidad 2";
    }  
    else if($imc >= 39.9){
        $msg = "Tienes obesidad 3";
    }   

?>





<!DOCTYPE html>
<head>
    <?php include_once("enlaces.php") ?>
    <title>Calcular IMC</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-4">
                <form method="post">
                    <div class="form-group">
                        <label for="masa">Introduce tu peso en Kilogramos</label>
                        <input type="text" name="masa" class="form-control" id="masa">                        
                    </div>
                    <div class="form-group">
                        <label for="estatura">Introduce tu estatura en Metros</label>
                        <input type="text" name="estatura" class="form-control" id="estatura">
                    </div>                    
                    <button type="submit" class="btn btn-primary">Calcular IMC</button>
                </form>
            </div>
            <div class="col-3">
                <?php if(isset($imc)){
                    echo "<p> Tu IMC es $imc";
                    echo "<p> $msg </p>";                                                        
                }
                ?>
            </div>            
        </div>
    </div>
    
</body>
</html>