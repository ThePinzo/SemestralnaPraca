<?php


class Jedly
{
    private $id_obr;

    /**
     * Jedly constructor.
     * @param $id_obr
     */
    public function __construct($id_obr)
    {
        $this->id_obr = $id_obr;
    }

    /**
     * @return mixed
     */
    public function getIdObr()
    {
        return $this->id_obr;
    }
}