<?php

require_once "src/Elf.php";
require_once "src/Soldier.php";
require_once "src/Unit.php";

$soldier = new Soldier();
var_dump($soldier); 

$elf = new Elf();
$elf->walk("right");
echo $elf;
var_dump($elf);