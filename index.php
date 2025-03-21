<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de compra</title>
</head>
<body>
      <fieldset>
      <form method="POST" action="calcular.php"> </br> </br>
      <h1>
      Qual o valor da compra ? </br> </br>
      </h1>
      <input type="text" name="valor" size = 25> </br> </br>
      <h4>
      <input type="radio" name="calculo" value="avista">A vista</br></br>
      <input type="radio" name="calculo" value="aprazo">A prazo</br></br>
      </h4>
   
      <h2>
      1 - Até 3x: Sem juros </br></br>
      2 - De 4 a 6x: 10% de juros </br></br>
      3 - Acima de 6x: 20% de juros </br></br>
      </h2>

      <h1>
      Quantas parcelas vai pagar ? </br></br>
      <input type="text" name="parcela" size = 25> </br> </br>
      <input type="submit" name="resultado" value="Calcular"> </br></br>
      </h1>


      </fieldset>
</body>

<style>

body {
   text-align: center;
   color: rgb(59, 49, 34);
   background-color: rgb(155, 136, 136);
   font-family: Arial,sans-serif;
}

</style>
</html>