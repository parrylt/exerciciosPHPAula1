<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercícios PHP</title>
</head>
<body>

<h1>Exercício 1</h1>
<p> 1)	Crie um programa PHP que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos. </P>
<form method="get">
  <div>
    <label>Diga a sua idade e o seu nome, seu verme</label>
	<br><br>
    <input type="text" name="nome" size='7' placeholder='nome'/> <input type="text" name="idade" size='2' placeholder='idade'/><br><br>
	<button name="botao" type="submit">Avalie a minha idade, por favor!</button>
  </div>
</form>

<hr>

<h1>Exercício 2</h1>
<p>2)	 Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.</p>
<form method="get">
  <div>
    <label>Escreve um número aí, seu lixo</label><br><br>
    <input name="mes" type="text" size='2' /><br><br>
	<button name="botaoEx2" type="submit">Me fale o mês, por favor!</button>
  </div>
</form>
<hr>

<h1>Exercício 3</h1>
<p> 3)	Faça um programa que peça uma nota, entre zero e dez. Mostre uma mensagem caso o valor seja inválido e continue pedindo até que o usuário informe um valor válido.</P>
<form method="get">
	<button name="botaoEx3" type="submit">Bora ver as notas!</button>
  </div>
</form>
<hr>

<h1>Exercício 4</h1>
<p>4)	Faça um programa que imprima na tela os números de 1 a 20, um abaixo do outro. Depois modifique o programa para que ele mostre os números um ao lado do outro.</p>
<form method="get">
	<button name="botaoEx4" type="submit">Manda uns numerozinhos pra mim!</button>
	<button name="botaoEx4-2" type="submit">Manda uns numerozinhos diferentes pra mim!</button>
  </div>
</form>
<hr>

<h1>Exercício 5</h1>
<p>5)	Faça um programa que imprima na tela apenas os números ímpares entre 1 e 50.</p>
<form method="get">
	<button name="botaoEx5" type="submit">Bora ver apenas os números ímpares entre 1 e 50!</button>
  </div>
</form>
<hr>

<h1>Exercício 6</h1>
<p>6)	Faça um programa que receba dois números inteiros e gere os números inteiros que estão no intervalo compreendido por eles.</p>
<form method="get">
  <div>
    <label>Coloque aí dois números</label>
	<br><br>
    <input type="text" name="num1" size='2' /> <input type="text" name="num2" size='2' /><br><br>
	<button name="botaoEx6" type="submit">Me diga os números que estão entre eles!</button>
  </div>
</form>

<hr>

<h1>Exercício 7</h1>
<p>7)	Faça um programa que mostre 100 vezes o nome PHP, um debaixo do outro</p>
<form method="get">
	<button name="botaoEx7" type="submit">Quero ver PHP 100 vezes aqui!</button>
  </div>
</form>
<hr>


<h1>Exercício 8</h1>
<p>8)	Faça um programa PHP que em o usuário tenta adivinhar o número sorteado pelo computador entre 1 e 50</p>
<form method="get">
  <div>
    <label>Adivinhe o número entre 1 e 50</label>
	<br><br>
    <input type="text" name="qual" size='2' /><br><br>
	<button name="botaoEx8" type="submit">É esse o número?</button>
  </div>
</form>


<h1>Respostas:</h1>

<?php

if ($_GET) {
	if (isset($_GET['botao'])) {
		veridade();

}}

function veridade(){

	$idade = $_GET['idade'];
	$nome = $_GET['nome'];

	if ( $idade <18)
	{
		echo $nome . ', Você tem ', $idade, ' anos e é menor de idade, seu pirralho';
	}
	else if ( $idade >= 18) {
		echo $nome . ', Você tem ', $idade, ' anos e é maior de idade, seu babaca';
	}
}


if ($_GET) {
	if (isset($_GET['botaoEx2'])) {
		verMes();

}}

function verMes(){

	$mes = $_GET['mes'];

	if ( $mes == 1 )
	{
		echo 'O mês ', $mes, ' é o mês de Janeiro, seu canalha';
	}
	else if ( $mes == 2 ) {
		echo 'O mês ', $mes, ' é o mês de Fevereiro, seu canalha';
	}
	else if ( $mes == 3 ) {
		echo 'O mês ', $mes, ' é o mês de Março, seu canalha';
	}
	else if ( $mes == 4 ) {
		echo 'O mês ', $mes, ' é o mês de Abril, seu canalha';
	}
	else if ( $mes == 5 ) {
		echo 'O mês ', $mes, ' é o mês de Maio, seu canalha';
	}
	else if ( $mes == 6 ) {
		echo 'O mês ', $mes, ' é o mês de Junho, seu canalha';
	}
	else if ( $mes == 7 ) {
		echo 'O mês ', $mes, ' é o mês de Julho, seu canalha';
	}
	else if ( $mes == 8 ) {
		echo 'O mês ', $mes, ' é o mês de Agosto, seu canalha';
	}
	else if ( $mes == 9 ) {
		echo 'O mês ', $mes, ' é o mês de Setembro, seu canalha';
	}
	else if ( $mes == 10 ) {
		echo 'O mês ', $mes, ' é o mês de Outubro, seu canalha';
	}
	else if ( $mes == 11 ) {
		echo 'O mês ', $mes, ' é o mês de Novembro, seu canalha';
	}
	else if ( $mes == 12 ) {
		echo 'O mês ', $mes, ' é o mês de Dezembro, seu canalha';
	}
}

if ($_GET) {
	if (isset($_GET['botaoEx3'])) {
		verNotinha();

}}


function verNotinha(){
echo '<script>
var nota = parseInt (prompt('Escreve a nota aí'));
	while (nota >10 || nota <0){
		var nota = parseInt (prompt('Nota inválida. Escreve de novo.'));

  	if (nota <=10 && nota >=0 ){
		alert ('nota válida');
	}
	}

	if (nota <=10 && nota >=0 ){
		alert ('nota válida');
	}</script>'
}


if ($_GET) {
	if (isset($_GET['botaoEx4'])) {
		verNumeros();

}}

function verNumeros(){

	$numero = 0;

	while ($numero <21){
		echo $numero . ' ';
		$numero++;
	}
}

if ($_GET) {
	if (isset($_GET['botaoEx4-2'])) {
		verNumeros2();

}}

function verNumeros2(){

	$numero = 0;

	while ($numero <21){
		echo $numero . '<br>';
		$numero++;
	}
}


if ($_GET) {
	if (isset($_GET['botaoEx5'])) {
		verImpares();

}}

function verImpares(){

	$numero = 1;

	while ($numero <51){
		echo $numero . '<br>';
		$numero +=2;
	}
}


if ($_GET) {
	if (isset($_GET['botaoEx6'])) {
		verIntervalo();

}}

function verIntervalo(){

	$numerao = $_GET['num1'];
	$num1 = $numerao + 1;
	$num2 = $_GET['num2'];

	if ($numerao == $num2){
		echo 'não é pra digitar números iguais';
	}
	elseif ($numerao > $num2){
		echo 'não me quebra as perna. o primeiro número tem que ser menor que o segundo.';
	}
	else {
		while ($num1 < $num2){
		echo $num1 . '<br>';
		$num1++;
		}
	}
}


if ($_GET) {
	if (isset($_GET['botaoEx7'])) {
		verPHP();

}}

function verPHP(){

	$numero = 1;

	while ($numero <101){
		echo $numero. ' :PHP<br>';
		$numero++;
	}
}





if ($_GET) {
	if (isset($_GET['botaoEx8'])) {
		verAdiv();

}}

function verAdiv(){


$rand = rand(1, 50);



	$adivinha = $_GET['qual'];

if ($rand == $adivinha){
	echo 'acerto mizerávi';
}
else{
	echo 'erroooo';
}

echo ' o número certo é '. $rand;

}




?>


<script>
function verNota() {
  var nota = parseInt (prompt("Escreve a nota aí"));
	while (nota >10 || nota <0){
		var nota = parseInt (prompt("Nota inválida. Escreve de novo."));
	}

	if (nota <=10 && nota >=0 ){
		alert ("nota válida");
	}

}
</script>



</body>
</html>
