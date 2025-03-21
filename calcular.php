<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da conta</title>
</head>
<body>
    <?php
    $valor = $_POST["valor"];
    $vista = $_POST["calculo"];
    $prazo = $_POST["calculo"];
    $juros;
    $tempo = 1;
    $resultado = $_POST["resultado"];
    $parcela = $_POST["parcela"];


    if ($vista == "avista") {
        $resultado = $valor - ($valor * 0.10);
        echo "O valor da compra é " ."". $resultado."". ".00";

    }else if ($prazo == "aprazo")
    {
        if ($parcela == 3) {
            $resultado = $valor;
            echo "O valor da compra é " ."". $resultado."". ".00";
        }else if($parcela == 4 || $parcela == 5 || $parcela == 6)
        {
           $juros = $valor * 0.10 * $tempo;
           $resultado = $valor + $juros;
            echo "O valor da compra é " ."". $resultado."". ".00";
        }else if ($parcela > 6)
        {
           $juros = $valor * 0.20 * $tempo;
           $resultado = $valor + $juros;
           echo "O valor da compra é " ."". $resultado."". ".00";
        }
    }
?>
</body>

<style>

body {
   color: rgb(172, 0, 252);
   background-color: rgb(0, 0, 0);
   font-family: Arial,sans-serif;
}
</style>
</html>