<?php


require_once "Clanok.php";

class Ulozisko
{

    private $path = "clanky.csv";

    /**
     * @return Clanok[]
     */

    function getVsetko(): array
    {
        $clanky = [];
        if (($handle = fopen($this->path, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                $clanky[] = new Clanok($data[0], $data[1],$data[2]);

            }
            fclose($handle);
        }
        return $clanky;
    }
}