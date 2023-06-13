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
    $usuarios = array();
    $usuarios['Maria']['nome'] = 'Maria da Silva';
    $usuarios['Maria']['id'] = 5974;
    $usuarios['Joao']['nome'] = 'Joao alfredo';
    $usuarios['Joao']['id'] = 36618;
    $userLogin = $_POST['login'];
    $userId = $usuarios[$userLogin]['id'];
    ?>
    <h1>Olá! <?php echo $usuarios[$userLogin]['nome']; ?>! </h1>
    <form action="apagar.php" method="POST">
      <ul>
        <li> E-mail 1 </li>
        <li> E-mail 2 </li>
</ul>
<input type="hidden" nome="id" value="<?php echo $userId; ?>" />
</form>
</body>
</html>