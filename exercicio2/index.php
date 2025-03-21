<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de produtos de limpeza</title>
</head>
<body>
    <fieldset>
    <form method ="post" action ="calcular.php"> </br>

<h1>Qual o seu nome ?</br></br>
<input type="text" name="nome" size = 25> </br></br>
</h1>

     <h1>
      1 – Escova de dentes (R$12,00)</br></br>
      2 – Pasta de dentes (R$8,00)</br></br>
      3 – Fio dental (R$5,00)</br></br>
      4 – Enxagunte bucal (R$16,00)</br></br>
      5 – Palito de dente (R$5,00)</br></br>
      </h1>

    <h2>
     Qual você quer comprar ?</br></br>
     <input type="text" name="dente" size = 25> </br></br>
     Quantos você quer comprar ?</br></br>
     <input type="text" name="quantidade1" size = 25> </br></br>
    </h2>
     
     <h1>
     1 – Escova de cabelo (R$8,00)</br></br>
     2 – Secador (R$20,00)</br></br>
     3 – Shampoo (R$13,00)</br></br>
     4 – Condicionador (R$13,00)</br></br>
     5 – Gel (R$9,00)</br></br>
     </h1>
     
     <h2>
     Qual você quer comprar ?</br></br>
     <input type="text" name="cabelo" size = 25> </br></br>
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
    background-color:	#00FFFF;
    color: #FF00FF	;
    font-family: Arial;
    display: block;

}

</style>
</html>