<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quanto vai pagar</title>
</head>
<body>
    <?php

     $dente = $_POST["dente"];
     $cabelo = $_POST["cabelo"];
     $nome = $_POST["nome"];
     $quantidade1 = $_POST["quantidade1"];
     $quantidade2 = $_POST["quantidade2"];

     $n1 = 12.00;
     $n2 = 8.00;
     $n3 = 5.00;
     $n4 = 16.00;
     $n5 = 5.00;
     $n6 = 8.00;
     $n7 = 20.00;
     $n8 = 13.00;
     $n9 = 13.00;
     $n10 = 9.00;
     $ql = 0;
     $qb = 0;
     $qt = 0;

     if ($dente == 1 && $cabelo == 1) {
        $ql = $n1 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 1 && $cabelo == 2) 
     {
        $ql = $n1 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 1 && $cabelo == 3) 
     {
        $ql = $n1 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 1 && $cabelo == 4) 
     {
        $ql = $n1 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 1 && $cabelo == 5) 
     {
        $ql = $n1 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 2 && $cabelo == 1) 
     {
        $ql = $n2 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 2 && $cabelo == 2) 
     {
        $ql = $n2 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb; 
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 2 && $cabelo == 3)
     {
        $ql = $n2 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 2 && $cabelo == 4) 
     {
        $ql = $n2 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 2 && $cabelo == 5) 
     {
        $ql = $n2 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 3 && $cabelo == 1) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 3 && $cabelo == 2) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 3 && $cabelo == 3) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 3 && $cabelo == 4) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 3 && $cabelo == 5) 
     {
        $ql = $n3 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 4 && $cabelo == 1) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 4 && $cabelo == 2) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 4 && $cabelo == 3) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 4 && $cabelo == 4) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 4 && $cabelo == 5) 
     {
        $ql = $n4 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 5 && $cabelo == 1) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n6 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 5 && $cabelo == 2) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n7 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 5 && $cabelo == 3) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n8 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 5 && $cabelo == 4) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n9 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }else if ($dente == 5 && $cabelo == 5) 
     {
        $ql = $n5 * $quantidade1;
        $qb = $n10 * $quantidade2;
        $qt = $ql + $qb;
        echo ("A sua conta deu "."". $qt .",00". ".");
     }

    ?>
    
</body>
</html>