<?php


class DBObrazky
{
    private $pdo;

    /**
     * DBObrazky constructor.
     * @param $pdo
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname:obrazky", "root", "dtb456");
    }

    function NacitajJedle()
    {
        $vysledok = [];
        $prem = $this->pdo->query("SELECT * FROM obrazky WHERE jedly == true");
        foreach ($prem as $item) {
            $vysledok[] = new Jedly($item['id_obr']);
        }
        return $vysledok;
    }

    function NacitajJedovate()
    {
        $jedovate = [];
        $prem = $this->pdo->query("SELECT * FROM obrazky WHERE jedly == false");
        foreach ($prem as $item) {
            $jedovate[] = new Jedovaty($item['id_obr']);
        }
        return $jedovate;

    }

    function Uloz()
    {

    }
}