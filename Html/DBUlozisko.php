<?php


class DBUlozisko extends AUlozisko
{
    private $user = "root";
    private $pass = "dtb456";
    private $db = "semestralna_praca";
    private $host = "localhost";

    private PDO $pdo;

    /**
     * DBUlozisko constructor.
     * @param PDO $pdo
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname={$this->db};host={$this->host}", $this->user, $this->pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    }

    function getVsetko(): array
    {
        $res = [];
        $r = $this->pdo->query("SELECT * FROM clanky");
        while ($row = $r->fetch()) {
            $clanok = new Clanok($row['title'], $row['text']);
            $clanok->setId($row['id']);
            $res[] = $clanok;
        }
        return $res;
    }

    function ulozPrispevok(Clanok $clanok, $jedla): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO clanky (title, text, jedla) VALUES (?, ?, ?)");
        $stmt->execute([$clanok->getTitul(), $clanok->getText(), $jedla]);
    }

    function vymazPrispevok($id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM clanky where id = ?");
        $stmt->execute([$id]);

    }

    public function getJedle($jedly): array
    {

        $res = [];
        $r = $this->pdo->query("SELECT * FROM clanky");
        while ($row = $r->fetch()) {
            if ($row['jedla'] == $jedly) {
                $clanok = new Clanok($row['title'], $row['text']);
                $res[] = $clanok;
            }
        }
        return $res;
    }

    public function upravClanok($id): void
    {



    }
}