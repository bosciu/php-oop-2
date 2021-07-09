<?php 
    require_once __DIR__ . "/classes/Product.php";
    require_once __DIR__ . "/classes/User.php";
    require_once __DIR__ . "/classes/CreditCard.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programazzione ad oggetti</title>
</head>
<body>
    <?php
        echo "<h1>Prodotto</h1>";
        $product = new Product("Elettronica", "Lampadina", 7,"prova", "alimentari");
        $product->setPrice(10);
        echo $product->getPrice();
        var_dump($product);

        echo "<h1>Utente</h1>";
        $user = new User("Gianni", "Bertolini", 25, "prova@email.it");
        $user->setOrdersHistory(["ordine1", "ordine2", "ordine3", "ordine4"]);
        $obj = new CreditCard("0000", "10/10/10", "555");
        $user->insertCreditCard($obj->getCreditCard());
        var_dump($user);


    ?>
</body>
</html>