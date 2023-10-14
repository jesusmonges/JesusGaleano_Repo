<!DOCTYPE html>
<html lang="en">
<head>
    <title>JQUERY</title>
    <script src = "js/jquery.min.js"></script>
    
</head>
<body>
    <div class="container-md">
        <h1>Factorial de un numero</h1>
        <div class="formFactorial">
            <div class="input-group">
                <div class="input-group-text">#</div>
                <input class="form-control" type="number" name = "numero" id = "numero" placeholder="Numero menor a 10">
                <button class="btn btn-primary" id="calcular">
                    Calcular factorial
                </button>
            </div>
        </div>
        <div id="resultado"></div>
        <div class="gifCarga">
            <img src="img/loading.gif" alt="animacion" id="cargando">
        </div>
    </div>
</body>
    <script src=""></script>
    <script src="js/funciones.js"></script>
    <script>
        jQuery("#resultado").hide();
        jQuery("#cargando").hide();
    </script>
</html>