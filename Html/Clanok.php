<?php


class Clanok
{
    private $titul;
    private $text;
    private $id;


    /**
     * Clanok constructor.
     * @param $titul
     * @param $text
     * @param $id
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

    /**
     * @return mixed
     */
    function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


}