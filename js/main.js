function mostrar() {
  var x = document.getElementById("algo1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function mostrar2() {
  var x = document.getElementById("algo2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function mostrar3() {
  var x = document.getElementById("algo3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function mostrar4() {
  var x = document.getElementById("algo4");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function mostrar5() {
  var x = document.getElementById("algo5");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function algo1() {
  let v1 = document.getElementById("v1").value;
  let v2 = document.getElementById("v2").value;

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
  let n1 = document.getElementById("n1").value;
  let n2 = document.getElementById("n2").value;
  let n3 = document.getElementById("n3").value;

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
    alert(
      `El numero ${numero1} es mayor que el numero ${numero2} y ${numero3}`
    );
  } else if (numero2 > numero1 && numero2 > numero3) {
    alert(
      `El numero ${numero2} es mayor que el numero ${numero1} y ${numero3}`
    );
  } else if (numero3 > numero1 && numero3 > numero2) {
    alert(
      `El numero ${numero3} es mayor que el numero ${numero1} y ${numero2}`
    );
  }
}

function algo3() {
  let medida1 = document.getElementById("m1").value;
  let medida2 = document.getElementById("m2").value;
  let medida3 = document.getElementById("m3").value;
  let html = document.getElementById("respuestaImg");

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
    html.innerHTML =
      "<h3 class='text-center'>Tipo de triangulo</h3><hr><h4 class='text-center'>Triangulo Equilatero</h4> <div class='imgTriangle'><img src='./img/Triangle.Equilateral.svg.png' alt='' width='100%' height='200px'> </div><div class='descTriangle'><p class='text-center'>En geometría, un triángulo equilátero, es un polígono regular, es decir, tiene sus tres lados iguales.​ En la geometría euclídea tradicional, los triángulos equiláteros también son equiangulares, es decir, los tres ángulos internos son iguales.</p> </div>";
  } else if (
    medida1 == medida2 ||
    medida1 == medida3 ||
    medida2 == medida1 ||
    medida2 == medida3 ||
    medida3 == medida1 ||
    medida3 == medida2
  ) {
    alert("Segun las medidas que ingresaste tu triangulo es isosceles");
    html.innerHTML =
      "<h3 class='text-center'>Tipo de triangulo</h3><hr><h4 class='text-center'>Triangulo isosceles</h4> <div class='imgTriangle'> <img src='./img/Triangle.Isosceles.svg.png' alt='' width='100%' height='200px'> </div> <div class='descTriangle'> <p class='text-center'>En geometría, un triángulo isósceles es un tipo de triángulo que tiene, al menos, dos lados de igual longitud. Al ángulo formado por los lados de igual longitud se le denomina ángulo en el vértice y al lado opuesto a él, ángulo base</p> </div>";
  } else if (medida1 != medida2 && medida1 != medida3) {
    alert("Segun las medidas que ingresaste tu triangulo es escaleno");
    html.innerHTML =
      "<h3 class='text-center'>Tipo de triangulo</h3> <hr> <h4 class='text-center'>Triangulo Escaleno</h4> <div class='imgTriangle'><img src='./img/Triángulo_acutángulo_escaleno.svg.png' alt='' width='100%' height='200px'> </div> <div class='descTriangle'>   <p class='text-center'>El triángulo escaleno es un triángulo que tiene todos sus lados de longitudes diferentes (en un triángulo escaleno no hay dos ángulos que tengan la misma medida)</p> </div>";
  }
}

function algo4() {
  let numero = document.getElementById("numero").value;
  let html = document.getElementById("respuesta");
  if (numero == "") {
    alert("Por favor ingrese un numero");
    html.innerHTML = "";
  } else if (numero % 2 == 1) {
    html.innerHTML = "<h4 id='res' class='text-center'>Numero primo</h4>";
  } else {
    html.innerHTML = "<h4 id='res' class='text-center'>Numero no primo</h4>";
  }
}

function algo5() {
  let horas = document.getElementById("horas").value;
  let dias = document.getElementById("dias").value;
  let html = document.getElementById("response");

  if (dias == "" && horas == "") {
    alert("Por favor relleno los datos asignados");
  } else if (dias == "") {
    alert("Por favor ingrese los dias que trabajo");
  } else if (horas == "") {
    alert("Por favor ingrese cuantas horas trabajo");
  } else if (horas < 8.5 && dias < 30) {
    html.innerHTML =
      "<h4 id='res' class='text-center'>No has trabajado las horas ni los dias suficientes</h4>";
  } else if (horas < 8.5) {
    html.innerHTML =
      "<h4 id='res' class='text-center'>No has trabajado las horas suficientes</h4>";
  } else if (dias < 30) {
    html.innerHTML =
      "<h4 id='res' class='text-center'>No has trabajado los dias suficientes</h4>";
  } else if (horas == 8.5 && dias == 30) {
    html.innerHTML =
      "<h4 id='res' class='text-center'>Trabajaste las horas y dias suficientes tu salario es de 1.700.000</h4>";
  }
}
