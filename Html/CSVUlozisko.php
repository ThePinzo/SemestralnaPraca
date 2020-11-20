<?php


require_once "Clanok.php";

class CSVUlozisko extends AUlozisko
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

    function getJedle($jedla): array
    {
        $jedle = [];
        $jedovate = [];
        if ($jedla == "jedla") {
            if (($handle = fopen($this->path, "r")) !== FALSE) {

                while (($data = fgetcsv($handle, 10000, ";")) !== FALSE) {
                    if ($data[2] == "jedla") {
                        $jedle[] = new Clanok($data[0], $data[1]);
                    }
                }
                fclose($handle);
            }
            return $jedle;
        } else {
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

    }


    function ulozPrispevok(Clanok $clanok, $jedla):void  {
        if (($handle = fopen($this->path, "a")) !== FALSE) {
            fputcsv($handle, [$clanok->getTitul(), $clanok->getText(), $jedla],";");
            fclose($handle);
        }
    }
}