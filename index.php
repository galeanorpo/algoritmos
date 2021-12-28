<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- HEADER -->
    <h1 class="text-center">Algoritmos</h1>
    <hr>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="menu container">
        <button class="btn btn-primary" onclick="mostrar()">Algoritmo 1</button>
        <button class="btn btn-primary" onclick="mostrar2()">Algoritmo 2</button>
        <button class="btn btn-primary" onclick="mostrar3()">Algoritmo 3</button>
        <button class="btn btn-primary" onclick="mostrar4()">Algoritmo 4</button>
        <button class="btn btn-primary" onclick="mostrar5()">Algoritmo 5</button>
    </div>

    <div class="container">
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
            <p class="text-center">Dado 3 inputs calcule el numero mayor ingresado en cualquiera de los inputs, y en
                caso de que los 2 números sean iguales o algún input este vacío, este notifique </p>
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
            <p class="text-center">Dado 3 inputs muestre en pantalla que tipo de triangulo corresponde a los valores
                ingresados (Equilátero, isósceles o escaleno) </p>
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

        <div id="algo4" class="algo4">
            <h2 class="text-center" id="a4">Algoritmo 4</h2>
            <p class="text-center">En un input y un botón ingrese un numero y que identifique si es un numero primo o
                no. </p>
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

        <div id="algo5" class="algo5">
            <h2 class="text-center" id="a5">Algoritmo 5</h2>
            <p class="text-center">Calcule el valor de las horas extras de un empleado que trabaja 8,5h al día
                trabajando 30 dias al mes y ganado un salario de 1.700.000 si sobrepasa las 8,5h contaran como horas
                extras con un valor del 25% al valor de la hora del trabajador </p>
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

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>

</html>