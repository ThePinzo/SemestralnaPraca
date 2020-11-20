<?php


class DBObrazky
{
    private $user = "root";
    private $pass = "dtb456";
    private $db = "semestralna_praca";
    private $host = "localhost";

    private PDO $pdo;

    /**
     * DBObrazky constructor.
     * @param $pdo
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname={$this->db};host={$this->host}", $this->user, $this->pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    }

    function NacitajJedle()
    {
        $vysledok = [];
        $prem = $this->pdo->query("SELECT * FROM semestralna_praca.obrazky WHERE jedly is 'jedla'");
        foreach ($prem as $item) {
            $vysledok[] = new Jedly($item['id_obr']);
        }
        return $vysledok;
    }

    function NacitajJedovate()
    {
        $jedovate = [];
        $prem = $this->pdo->query("SELECT * FROM semestralna_praca.obrazky WHERE jedly is 'jedovata'");
        foreach ($prem as $item) {
            $jedovate[] = new Jedovaty($item['id_obr']);
        }
        return $jedovate;

    }

    function Uloz()
    {

    }
}