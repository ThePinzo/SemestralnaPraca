<?php


class DBObrazkyJedle
{
    private $pdo;

    /**
     * DBObrazkyJedle constructor.
     * @param $pdo
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname:obrazky","root", "dtb456");
    }

    function Nacitaj() {
        $vysledok = [];
        $prem = $this->pdo->query("SELECT * FROM obrazky WHERE jedly == true");
        foreach ($prem as $item) {
            $vysledok[] = new Jedly($item['id_obr']);

        }
        return $vysledok;

    }
}