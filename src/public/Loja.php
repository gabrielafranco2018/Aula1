<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cupom = trim($_GET['cupom']);
    $cupons_validos = array('NIVER10','PROMO15');
    $cupomAceito = in_array($cupom,$cupons_validos);
    ?>
    <h1><a href="index.php">
        Shopping virtual</h1>
        <ul>
            <li><a> href="p1.php echo ($cupomAceito)?'?cupom=' .$cupom:''; ?>">produto 1</a><li>
                <li><a href="p2.php echo ($cupomAceito)?'?cupom=' .$cupom:''; ?>">Produto 2</a></li>
</uk>
<form action="index.php" method="GET">
    cupom de desconto:
    <?php
    if($cupomAceito){
    ?>
    <strong> <?php echo $cupom; ?> </strong>
    
    }
</body>
</html>