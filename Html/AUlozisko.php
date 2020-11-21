<?php

require "Clanok.php";

abstract class AUlozisko
{
    abstract function getVsetko(): array;

    abstract function ulozPrispevok(Clanok $clanok, $jedla): void;

    function vytvorPrispevok($title, $text, $jedla): void
    {
        $clanok = new Clanok($title, $text);
        $this->ulozPrispevok($clanok, $jedla);
    }
}