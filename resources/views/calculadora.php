<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Laravel</title>
</head>
<body>
    <h1>Calculadora básica Laravel </h1> <a>(ainda não funcional)</a>
    <br></br>
    <form method="POST" action="/calculadora">
        <b>Número X</b> <b>&nbsp&nbsp&nbsp&nbsp Número Y</b> 
        <br>
        <input type="text" name="numero1" style="width:60px;"> &nbsp&nbsp&nbsp&nbsp  <input type="text" name="numero2" style="width:60px;">   
        <br></br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button>SOMAR</button>
        <b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Resultado:</b>
        <input class="form-control" type="text" style="width:60px;" disabled="">
        <br></br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button>SUBTRAIR</button>
        
        <br></br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button>DIVIDIR</button>
        <br></br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button>MULTIPLICAR</button>
    </form>
</body>
</html>