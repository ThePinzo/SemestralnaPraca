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
                $clanky[] = new Clanok($data[0], $data[1]);

            }
            fclose($handle);
        }
        return $clanky;
    }

    function getJedle(): array
    {
        $jedle = [];
        if (($handle = fopen($this->path, "r")) !== FALSE) {

            while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {
                if ($data[2] == "jedla") {
                    $jedle[] = new Clanok($data[0], $data[1]);
                }
            }
            fclose($handle);
        }
        return $jedle;
    }

    function getJedovate(): array
    {
        $jedovate = [];
        if (($handle = fopen($this->path, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {
                if ($data[2] == "jedovata") {
                    $jedovate[] = new Clanok($data[0], $data[1]);
                }
            }
            fclose($handle);
        }
        return $jedovate;
    }

    function vytvorPrispevok( $title,  $text, $jedla): void
    {
        if (($handle = fopen($this->path, "a")) !== FALSE) {
            fputcsv($handle, [$title, $text, $jedla], ";");
            fclose($handle);
        }
    }
}