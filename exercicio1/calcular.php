<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quanto vai pagar</title>
</head>
<body>
    <?php

     $lanche = $_POST["lanche"];
     $bebida = $_POST["bebida"];
     $nome = $_POST["nome"];
     $quantidade1 = $_POST["quantidade1"];
     $quantidade2 = $_POST["quantidade2"];

     $n1 = 6.00;
     $n2 = 8.00;
     $n3 = 10.00;
     $n4 = 12.00;
     $n5 = 15.00;
     $n6 = 2.00;
     $n7 = 5.00;
     $n8 = 3.00;
     $n9 = 5.00;
     $n10 = 8.00;
     $ql = 0;
     $qb = 0;
     $qt = 0;

     if ($lanche == 1 && $bebida == 1) {
        $ql = $n1 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 1 && $bebida == 2) 
     {
        $ql = $n1 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 1 && $bebida == 3) 
     {
        $ql = $n1 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 1 && $bebida == 4) 
     {
        $ql = $n1 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 1 && $bebida == 5) 
     {
        $ql = $n1 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 2 && $bebida == 1) 
     {
        $ql = $n2 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 2 && $bebida == 2) 
     {
        $ql = $n2 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb; 
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 2 && $bebida == 3)
     {
        $ql = $n2 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 2 && $bebida == 4) 
     {
        $ql = $n2 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 2 && $bebida == 5) 
     {
        $ql = $n2 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 3 && $bebida == 1) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 3 && $bebida == 2) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 3 && $bebida == 3) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 3 && $bebida == 4) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 3 && $bebida == 5) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 4 && $bebida == 1) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 4 && $bebida == 2) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 4 && $bebida == 3) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 4 && $bebida == 4) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 4 && $bebida == 5) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 5 && $bebida == 1) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 5 && $bebida == 2) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 5 && $bebida == 3) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 5 && $bebida == 4) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($lanche == 5 && $bebida == 5) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }

    ?>
    
</body>
</html>