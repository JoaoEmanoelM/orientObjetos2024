<?php

require_once("modelo/Time.php");
require_once("modelo/Jogador.php");

$time = new Time();
$time->setNome("Grêmio");
$time->setCidade("Porto Alegre");


$geromel = new Jogador();
$geromel->setNome("Luiz Suarez");
$geromel->setNumero("9");
$geromel->setTime($time);

$suarez = new Jogador();
$suarez->setNome("Pedro Geromel");
$suarez->setNumero("14");
$suarez->setTime($time);

$time->setJogadores(array());

$jogadores = array();

array_push($jogadores, $suarez);
array_push($jogadores, $geromel);

$time->setJogadores($jogadores);

print_r($jogadores);
