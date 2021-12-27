<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .algo {
            width: 1120px;
            height: 450px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px grey;
            padding: 10px;
        }

        .algo2 {
            width: 1120px;
            height: 550px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px grey;
            padding: 10px;
        }

        .algo3 {
            width: 1120px;
            height: 600px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px grey;
            padding: 10px;
        }

        .content {
            margin: auto;
            width: 1000px;
            height: 480px;
            border-radius: 10px;
            /* box-shadow: 5px 5px 5px 5px grey; */
            padding: 10px;
            display: flex;
            justify-content: space-evenly;
        }

        .formAlgo3 {
            width: 40%;
            padding: 10px;
            box-shadow: 3px 3px 3px 3px grey;
            border-radius: 5px;
        }

        .formAlgo3 input[type=number] {
            width: 100%;
        }

        .imgBox {
            width: 40%;
            padding: 10px;
            box-shadow: 3px 3px 3px 3px grey;
            border-radius: 5px;
        }

        /* .imgBox img{
            margin: auto;
        } */

        .algo4 {
            width: 1120px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px grey;
            padding: 10px;
        }

        .algo5 {
            width: 1120px;
            height: 520px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px grey;
            padding: 10px;
        }

        .imgTriangle {
            width: 50%;
            margin: auto;
            /* border: 3px solid black; */
        }

        .descTriangle {
            width: 100%;
            margin: auto;
            /* border: 3px solid black; */
        }

        .boxAlgo1 {
            margin: auto;
            width: 50%;
            padding: 10px;
            box-shadow: 3px 3px 3px 3px grey;
            border-radius: 5px;
        }

        .boxAlgo1 input[type=number] {
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- INICIO MENU DE NAVEGACION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.invamer.com.co/es/" target="_blank">Invamer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#inicio">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Algoritmos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#a1">Ejercio 1</a></li>
                            <li><a class="dropdown-item" href="#a2">Ejercio 2</a></li>
                            <li><a class="dropdown-item" href="#a3">Ejercio 3</a></li>
                            <li><a class="dropdown-item" href="#a4">Ejercio 4</a></li>
                            <li><a class="dropdown-item" href="#a5">Ejercio 5</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br><br>
    <!-- FIN MENU DE NAVEGACION -->

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container" id="inicio">
        <h1 class="text-center">Algoritmos desarrollados por Juan Pablo Galeano Restrepo</h1>
        <br><br>
        <div id="algo1" class="algo">
            <h2 class="text-center" id="a1">Algoritmo 1</h2>
            <p class="text-center">En 2 inputs ingrese valores y cuyos valores calculen el área de un triangulo</p>
            <div class="boxAlgo1">
                <form action="index.php">
                    <h3 class="text-center">Area de un triangulo</h3>
                    <hr>
                    <label for="v1">Valor 1:</label><br>
                    <input type="number" id="v1" name="v1" required="true"><br><br>
                    <label for="v1">Valor 2:</label><br>
                    <input type="number" id="v2" name="v2" required="true"><br><br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" value="Calcular" onclick="algo1()" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <br><br>

        <div id="algo2" class="algo2">
            <h2 class="text-center" id="a2">Algoritmo 2</h2>
            <p class="text-center">Dado 3 inputs calcule el numero mayor ingresado en cualquiera de los inputs, y en caso de que los 2 números sean iguales o algún input este vacío, este notifique </p>
            <div class="boxAlgo1">
                <form action="index.php">
                    <h3 class="text-center">Calcular el numero mayor de 3 datos de entrada</h3>
                    <hr>
                    <label for="v1">Numero 1:</label><br>
                    <input type="number" id="n1" name="n1" required><br><br>
                    <label for="v1">Numero 2:</label><br>
                    <input type="number" id="n2" name="n2" required><br><br>
                    <label for="v1">Numero 3:</label><br>
                    <input type="number" id="n3" name="n3" required><br><br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" value="Calcular" onclick="algo2()" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <br><br>

        <div id="algo3" class="algo3">
            <h2 class="text-center" id="a3">Algoritmo 3</h2>
            <p class="text-center">Dado 3 inputs muestre en pantalla que tipo de triangulo corresponde a los valores ingresados (Equilátero, isósceles o escaleno) </p>
            <div class="content">
                <div class="formAlgo3">
                    <form action="index.php">
                        <h3 class="text-center">Tipos de triangulo segun las medidas</h3>
                        <hr>
                        <label for="v1">Medida 1:</label><br>
                        <input type="number" id="m1" name="m1" required><br><br>
                        <label for="v1">Medida 2:</label><br>
                        <input type="number" id="m2" name="m2" required><br><br>
                        <label for="v1">Medida 3:</label><br>
                        <input type="number" id="m3" name="m3" required><br><br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="submit" value="Calcular" onclick="algo3()" class="btn btn-primary">
                        </div>
                </div>
                <div class="imgBox" id="respuestaImg">
                    <h3 class="text-center">Tipo de triangulo</h3>
                    <hr>

                </div>
            </div>

        </div>

        <br><br>

        <div id="algo2" class="algo4">
            <h2 class="text-center" id="a4">Algoritmo 4</h2>
            <p class="text-center">En un input y un botón ingrese un numero y que identifique si es un numero primo o no. </p>
            <div class="boxAlgo1">
                <form action="index.php">
                    <h3 class="text-center">Numeros primos</h3>
                    <hr>
                    <label for="numero">Numero:</label><br>
                    <input type="number" id="numero" name="numero" required><br><br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input type="button" value="Calcular" onclick="algo4()" class="btn btn-primary">
                    </div>
                    <br>
                    <div id="respuesta">

                    </div>
                </form>
            </div>
        </div>

        <br><br>

        <div id="algo2" class="algo5">
            <h2 class="text-center" id="a5">Algoritmo 5</h2>
            <p class="text-center">Calcule el valor de las horas extras de un empleado que trabaja 8,5h al día trabajando 30 dias al mes y ganado un salario de 1.700.000 si sobrepasa las 8,5h contaran como horas extras con un valor del 25% al valor de la hora del trabajador </p>
            <div class="boxAlgo1">
                <form action="index.php">
                    <h3 class="text-center">Horas trabajadas</h3>
                    <hr>
                    <label for="numero">Horas:</label><br>
                    <input type="number" id="horas" name="horas" required><br><br>
                    <label for="numero">Dias:</label><br>
                    <input type="number" id="dias" name="dias" required><br><br>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input type="button" value="Calcular" onclick="algo5()" class="btn btn-primary">
                    </div>
                    <br>
                    <div id="response">

                    
                    </div>
                </form>
            </div>
        </div>

    </div>








    <!-- FOOTER -->
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="https://github.com/galeanorpo/algoritmos" class="nav-link px-2 text-muted" target="_blank">GitHub</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2021 Juan Pablo Galeano, Aprendiz</p>
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function algo1() {
            let v1 = document.getElementById('v1').value;
            let v2 = document.getElementById('v2').value;

            let calculo = (parseInt(v1) * parseInt(v2)) / 2;

            if (v1 == "" && v2 == "") {
                alert("Por favor rellene los campos necesarios");
            } else if (v1 == "") {
                alert("Por favor rellene el campo del valor 1");
            } else if (v2 == "") {
                alert("Por favor rellene el campo del valor 2");
            } else {
                alert("El area del triangulo es de: " + calculo);
            }
        }

        function algo2() {
            let n1 = document.getElementById('n1').value;
            let n2 = document.getElementById('n2').value;
            let n3 = document.getElementById('n3').value;

            let numero1 = parseInt(n1);
            let numero2 = parseInt(n2);
            let numero3 = parseInt(n3);

            if (n1 == "" && n2 == "" && n3 == "") {
                alert("Por favor rellene los campos necesarios");
            } else if (n1 == "") {
                alert("Por favor rellene el campo del numero 1");
            } else if (n2 == "") {
                alert("Por favor rellene el campo del numero 2");
            } else if (n3 == "") {
                alert("Por favor rellene el campo el numero 3");
            } else if (numero1 == numero2) {
                alert("El numero 1 y el numero 2 son iguales");
            } else if (numero1 == numero3) {
                alert("El numero 1 y el numero 3 son iguales");
            } else if (numero2 == numero1) {
                alert("El numero 2 y el numero 1 son iguales");
            } else if (numero2 == numero3) {
                alert("El numero 2 y el numero 3 son iguales");
            } else if (numero3 == numero1) {
                alert("El numero 3 y el numero 1 son iguales");
            } else if (numero3 == numero2) {
                alert("El numero 3 y el numero 2 son iguales");
            } else if (numero1 > numero2 && numero1 > numero3) {
                alert(`El numero ${numero1} es mayor que el numero ${numero2} y ${numero3}`);
            } else if (numero2 > numero1 && numero2 > numero3) {
                alert(`El numero ${numero2} es mayor que el numero ${numero1} y ${numero3}`);
            } else if (numero3 > numero1 && numero3 > numero2) {
                alert(`El numero ${numero3} es mayor que el numero ${numero1} y ${numero2}`);
            }


        }

        function algo3() {
            let medida1 = document.getElementById('m1').value;
            let medida2 = document.getElementById('m2').value;
            let medida3 = document.getElementById('m3').value;
            let html = document.getElementById('respuestaImg');

            if (medida1 == "" && medida2 == "" && medida3 == "") {
                alert("Ingresa las medidas por favor");
            } else if (medida1 == "") {
                alert("Ingresa la medida 1 por favor");
            } else if (medida2 == "") {
                alert("Ingresa la medida 2 por favor");
            } else if (medida3 == "") {
                alert("Ingresa la medida 3 por favor");
            } else if (medida1 == medida2 && medida1 == medida3) {
                alert("Segun las medidas que ingresaste tu triangulo es equilatero");
                html.innerHTML = "<h3 class='text-center'>Tipo de triangulo</h3><hr><h4 class='text-center'>Triangulo Equilatero</h4> <div class='imgTriangle'><img src='./img/Triangle.Equilateral.svg.png' alt='' width='100%' height='200px'> </div><div class='descTriangle'><p class='text-center'>En geometría, un triángulo equilátero, es un polígono regular, es decir, tiene sus tres lados iguales.​ En la geometría euclídea tradicional, los triángulos equiláteros también son equiangulares, es decir, los tres ángulos internos son iguales.</p> </div>"
            } else if ((medida1 == medida2) || (medida1 == medida3) || (medida2 == medida1) || (medida2 == medida3) || (medida3 == medida1) || (medida3 == medida2)) {
                alert("Segun las medidas que ingresaste tu triangulo es isosceles");
                html.innerHTML = "<h3 class='text-center'>Tipo de triangulo</h3><hr><h4 class='text-center'>Triangulo isosceles</h4> <div class='imgTriangle'> <img src='./img/Triangle.Isosceles.svg.png' alt='' width='100%' height='200px'> </div> <div class='descTriangle'> <p class='text-center'>En geometría, un triángulo isósceles es un tipo de triángulo que tiene, al menos, dos lados de igual longitud. Al ángulo formado por los lados de igual longitud se le denomina ángulo en el vértice y al lado opuesto a él, ángulo base</p> </div>"
            } else if (medida1 != medida2 && medida1 != medida3) {
                alert("Segun las medidas que ingresaste tu triangulo es escaleno");
                html.innerHTML = "<h3 class='text-center'>Tipo de triangulo</h3> <hr> <h4 class='text-center'>Triangulo Escaleno</h4> <div class='imgTriangle'><img src='./img/Triángulo_acutángulo_escaleno.svg.png' alt='' width='100%' height='200px'> </div> <div class='descTriangle'>   <p class='text-center'>El triángulo escaleno es un triángulo que tiene todos sus lados de longitudes diferentes (en un triángulo escaleno no hay dos ángulos que tengan la misma medida)</p> </div>"
            }

        }

        function algo4() {
            let numero = document.getElementById('numero').value;
            let html = document.getElementById('respuesta');
            if (numero == "") {
                alert("Por favor ingrese un numero");
            } else if (numero % 2 == 0) {
                html.innerHTML = "<h4 id='res' class='text-center'>Numero Par</h4>";
            } else {
                html.innerHTML = "<h4 id='res' class='text-center'>Numero Impar</h4>";
            }
        }

        function algo5() {
            let horas = document.getElementById('horas').value;
            let dias = document.getElementById('dias').value;
            let html = document.getElementById('response');

            if (dias == "" && horas == "") {
                alert("Por favor relleno los datos asignados");
            } else if (dias == "") {
                alert("Por favor ingrese los dias que trabajo");
            } else if (horas == "") {
                alert("Por favor ingrese cuantas horas trabajo");
            } else if (horas < 8.5 && dias < 30) {
                html.innerHTML = "<h4 id='res' class='text-center'>No has trabajado las horas ni los dias suficientes</h4>"
            } else if(horas < 8.5){
                html.innerHTML = "<h4 id='res' class='text-center'>No has trabajado las horas suficientes</h4>"
            }else if(dias < 30){
                html.innerHTML = "<h4 id='res' class='text-center'>No has trabajado los dias suficientes</h4>"
            }
            
            
            else if(horas == 8.5 && dias == 30){
                html.innerHTML = "<h4 id='res' class='text-center'>Trabajaste las horas y dias suficientes tu salario es de 1.700.00</h4>"
            }else if(horas > 8.5 && dias == 30){
                html.innerHTML = "<h4 id='res' class='text-center'>Trabajaste horas extras tu salario es de 2.150.00</h4>"
            }
        }
    </script>
</body>

</html>