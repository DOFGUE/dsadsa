<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo con Formularios</title>
    <link rel="stylesheet" href="libreria/bootstrap/css/bootstrap.css">
    <script src = "libreria/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="libreria/styles.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">FORMULARIO</h1>
    <div class="col-12">
        <form action="" class="contenedor">
            <div class="col-4">
                <label for="Rectangulo" class="Rectangulo"><strong>Rectangulo</strong></label>
                <br>
                <label for="BaseR">base</label>
                <input type="text" class="form-control" name="BaseR" id="BaseR" required>
                <label for="AlturaR">altura</label>
                <input type="text" class="form-control" name="AlturaR" id="AlturaR" required>

                <label for="Triangulo" class="Triangulo"><strong>Triangulo</strong></label>
                <br>
                <label for="BaseT">base</label>
                <input type="text" class="form-control" name="BaseT" id="BaseT" required>
                <label for="AlturaT">altura</label>
                <input type="text" class="form-control" name="AlturaT" id="AlturaT" required>

                <label for="Circulo" class="Circulo"><strong>Circulo</strong></label>
                <br>
                <label for="Radio">Radio</label>
                <input type="text" class="form-control" name="Radio" id="Radio" required>
            </div>
            <div class = "col-4" id="titulo">
                
                </div>
            
            <div class = "col-4" id="text-calcularR">
                
                </div>
                <div class = "col-4" id="text-calcularT">
                
                </div>
                <div class = "col-4" id="text-calcularC">
                
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary" onClick="calcular();">Calcular</button>
                </div>
            </div>
        </form>
    </div>
<script>
    function calcular (){
        let baseR;
        let alturaR;
        let baseT;
        let alturaT;
        let radio;
        let operacionR;
        let operacionT;
        let operacionC;

        let titulo="<div class='col-4 resultados titulo'><strong>RESULTADOS:</strong></div>";
        document.getElementById('titulo').innerHTML=titulo;

        //Rectangulo
        baseR=parseInt(document.getElementById('BaseR').value);
        alturaR=parseInt(document.getElementById('AlturaR').value);

        operacionR = baseR * alturaR;

        let mostrarResultadoR="<div class='col-4 resultados'><strong>Area del rectangulo= "+operacionR+"</strong></div>";
        document.getElementById('text-calcularR').innerHTML=mostrarResultadoR;

        //Triangulo
        baseT=parseInt(document.getElementById('BaseT').value);
        alturaT=parseInt(document.getElementById('AlturaT').value);

        operacionT = (baseT * alturaT)/2;

        let mostrarResultadoT="<div class='col-4 resultados'><strong>Area del triangulo= "+operacionT+"</strong></div>";
        document.getElementById('text-calcularT').innerHTML=mostrarResultadoT;

        //Circulo
        radio=parseInt(document.getElementById('Radio').value);

        operacionC = (radio*radio*3.1416);

        let mostrarResultadoC="<div class='col-4 resultados'><strong>Area del circulo= "+operacionC+"</strong></div>";
        document.getElementById('text-calcularC').innerHTML=mostrarResultadoC;

    }
</script>

</body>
</html>