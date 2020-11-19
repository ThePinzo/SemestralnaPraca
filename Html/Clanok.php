<?php


class Clanok
{
    private $titul;
    private $text;



    /**
     * Clanok constructor.

     * @param $titul
     * @param $text
     */
    public function __construct($titul, $text)
    {
        $this->titul = $titul;
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getTitul()
    {
        return $this->titul;
    }

    /**
     * @param mixed $titul
     */
    public function setTitul($titul): void
    {
        $this->titul = $titul;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }




}