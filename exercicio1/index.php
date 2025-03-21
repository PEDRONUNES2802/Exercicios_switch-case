<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de alimentos</title>
</head>
<body>
    <fieldset>
    <form method ="post" action ="calcular.php"> </br>

<h1>Qual o seu nome ?</br></br>
<input type="text" name="nome" size = 25> </br></br>
</h1>

     <h1>
      1 – X Burguer (R$6,00)</br></br>
      2 – X Salada (R$8,00)</br></br>
      3 – X Bacon (R$10,00)</br></br>
      4 – X Tudo (R$12,00)</br></br>
      5 – X Duplo (R$15,00)</br></br>
      </h1>

    <h2>
     Qual você quer comprar ?</br></br>
     <input type="text" name="lanche" size = 25> </br></br>
     Quantos você quer comprar ?</br></br>
     <input type="text" name="quantidade1" size = 25> </br></br>
    </h2>
     
     <h1>
     1 – Água (R$2,00)</br></br>
     2 – Suco (R$5,00)</br></br>
     3 – Lata (R$3,00)</br></br>
     4 – 600 ml (R$5,00)</br></br>
     5 – 2 Litros (R$8,00)</br></br>
     </h1>
     
     <h2>
     Qual você quer comprar ?</br></br>
     <input type="text" name="bebida" size = 25> </br></br>
     Quantos você quer comprar ?</br></br>
     <input type="text" name="quantidade2" size = 25> </br></br>
     <input type="submit" name="Resultado" value="Calcular"/> </br></br>
     </h2>
    </form>
    </fieldset>
</body>

<style>

body{
    text-align: center;
    background-color: #fff000;
    color: #ff0000;
    font-family: Arial;
    display: block;

}

</style>
</html>