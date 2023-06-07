<?php
///declare(strict_types=1);
///phpinfo();
$contador = 1;
$mensagem = "Olá";
$versao = array('1.1','2','3.4');
///print_r($versao);
$primeiro_nome = "Maria";
echo $primeiro_nome;
echo '<br />';
$ultimo_nome = "Lourdes";
echo $ultimo_nome;
///$time = array('Maria', 'José','Ana');
///echo $time[2];
echo '<br />';
///print_r($time);
echo 'a: [' . TRUE . ']<br />';
echo 'a: [' . FALSE . ']<br />';
echo 'a: [' . (20 > 9) . ']<br />';
echo 'b: [' . (5 == 6) . ']<br />';
echo 'c: [' . (1 == 0) . ']>br />';
echo 'd: [' . (1 === '1') . ']>br />';
$idade = 30;
echo 'e: [' . "$idade". ']<br />';
$saldo = 10;
if ($saldo<100){
    $deposito = 1000;
    $saldo += $deposito;
}

echo $saldo;

$vegetais = array(
    'jerimum'=>'https://fsm2009amazonia.org.br/wp-content/uploads/2020/04/abobora-jerimum-1068x601.jpg',
    'batata' =>'https://www.mundoboaforma.com.br/wp-content/uploads/2015/02/batata.jpg',
    'tomate'=>'https://pixnio.com/free-images/2017/09/19/2017-09-19-07-03-23.jpg');

$estoqueCarros = array(
    array('Palio',10,125),
    array('Gol',15,200),
    array('Civic',4,38)
);

echo 'Temos:' . $estoqueCarros[1] [1] . '' . $estoqueCarros[1] [0] . '<br />Vendidos:' . $estoqueCarros[1] [2];

///print_r ($GLOBALS);
///print_r ($_SERVER);
print_r ($_GET);


?>

<form method="get" action="index.php">
Nome: <input type="text" name="nome" />
<input type="submit">
</form>

<?php
if(empty($_GET['nome'])){
    echo 'Nome é um campo obrigatório.';
}else{
    echo $_GET['nome'] . ', obrigado por se escrever.';
}
?>

<?php
date_default_timezone_set('America/Los_Angeles');
$data = date('d/m/Y-');
$hora = date('H');
echo $data . $hora;
if($hora<12){
    $mensagem = "Bom dia!";
}elseif(date('H') > 11 && date ('H') < 18){
    $mensagem = "Boa Tarde!";
    $mensagem .=' Aceita uma chá gelado?'; 
}elseif(date('H') > 17){
    $mensagem = "Boa noite!";
}
///phpinfo();
?>
Olá! <?php echo $mensagem; ?>

<input type="hidden" name="">


