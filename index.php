<?php

require_once 'Models/Prodotto.php';
require_once 'Models/Categoria.php';
require_once 'Models/Cliente.php';
require_once 'Models/CartaDiCredito.php';
require_once 'Models/Carrello.php';

// Creazione di oggetti
$categoria = new Categoria('Cani');
$prodotto = new Prodotto('immagine.jpg', 'Titolo', 10.99, $categoria, 'cibo');
$cliente = new Cliente(false, 0);
$cartaDiCredito = new CartaDiCredito('1234567812345678', '12/24');
$carrello = new Carrello($cliente, $cartaDiCredito);

// Aggiunta di un prodotto al carrello
$carrello->aggiungiProdotto($prodotto);

// Visualizzazione dei dettagli del prodotto
echo $prodotto->getTitolo();
echo $prodotto->getImmagine();
echo $prodotto->getPrezzo();
echo $prodotto->getCategoria()->getNome();
echo $prodotto->getTipo();

?>
<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP 2</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>