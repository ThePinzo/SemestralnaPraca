<?php


class Clanok
{
    private $titul;
    private $text;
    private $thumbnail;

    /**
     * Clanok constructor.
     * @param $thumbnail
     * @param $titul
     * @param $text
     */
    public function __construct($thumbnail,$titul, $text)
    {
        $this->thumbnail = $thumbnail;
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
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param mixed $thumbnail
     */
    public function setThumbnail($thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }



}