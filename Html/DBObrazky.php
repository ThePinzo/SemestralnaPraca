<?php

require "Obrazok.php";

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

    public function getJedle($jedly): array
    {
        $res = [];
        $r = $this->pdo->query("SELECT * from semestralna_praca.obrazky");
        while ($row = $r->fetch()) {
            if ($row['jedly'] == $jedly) {
                $obrazok = new Obrazok($row['filename']);
                $res[] = $obrazok;
            }
        }
        return $res;
    }

    public function vytvorObrazok($cestaKObrazku, $jedla): void
    {
        $obrazok = new Obrazok($cestaKObrazku);
        $this->Uloz($obrazok, $jedla);

    }

    function Uloz(Obrazok $obrazok, $jedla)
    {
        $stmt = $this->pdo->prepare("insert into semestralna_praca.obrazky(filename, jedly) VALUES (?,?)");
        $stmt->execute([$obrazok->getCestaKObr(),$jedla]);
    }
}