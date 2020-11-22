<?php


class Obrazok
{
    private $cestaKObr;
    private $id;

    /**
     * Obrazok constructor.
     * @param $cestaKObr
     * @param $id
     */
    public function __construct($cestaKObr)
    {
        $this->cestaKObr = $cestaKObr;

    }

    /**
     * @return mixed
     */
    public function getCestaKObr()
    {
        return $this->cestaKObr;
    }

    /**
     * @param mixed $cestaKObr
     */
    public function setCestaKObr($cestaKObr): void
    {
        $this->cestaKObr = $cestaKObr;
    }

    /**
     * @return mixed
     */
    public function getId()
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