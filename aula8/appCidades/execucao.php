<?php 

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$pr = new Estado();
$pr->setNome("Paraná");
$pr->setSigla("PR");

$sc = new Estado();
$sc->setNome("Santa Catarina");
$sc->setSigla("SC");

$fozDoIguaçu = new Cidade();
$fozDoIguaçu->setNome("Foz do Iguaçu")
            ->setEstado($pr)
            ->setQtdHabitantes(223252)
            ->setAltitude(192);

$florianopolis = new Cidade();
$florianopolis->setNome("Florianópolis")
              ->setEstado($sc)
              ->setQtdHabitantes(999123)
              ->setAltitude(3);

$blumenau = new Cidade();
$blumenau->setNome("Blumenau")
         ->setEstado($sc)
         ->setQtdHabitantes(212151)
         ->setAltitude(453);

$cascavel = new Cidade();
$cascavel->setNome("Cascavel")
         ->setEstado($pr)
         ->setQtdHabitantes(348051)
         ->setAltitude(781);

$cidades = [$fozDoIguaçu, $cascavel, $blumenau, $florianopolis];

foreach($cidades as $cidade){
    echo $cidade;
}