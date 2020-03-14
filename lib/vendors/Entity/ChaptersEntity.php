<?php


namespace Entity;


use OCFram\Entity;

class ChaptersEntity extends Entity
{
    private $title;
    private $chapter_number;
    private $text;
    private $release_date;
    private $released;


    public function __construct(array $donnees = [])
    {
        parent::__construct($donnees);
    }


    public function setTitle($title)
    {
        $this->title = (string)$title;
    }

    public function title()
    {
        return $this->title;
    }


    public function setChapter_number($chapter_number)
    {
        $this->chapter_number = (string)$chapter_number;
    }

    public function chapter_number()
    {
        return $this->chapter_number;
    }


    public function setText($text)
    {
        $this->text = (string)$text;
    }

    public function text()
    {
        return $this->text;
    }


    public function setRelease_date($release_date)
    {
        $this->release_date = (string)$release_date;
    }

    public function release_date()
    {
        return $this->release_date;
    }


    public function setReleased($released)
    {
        $this->released = (string)$released;
    }

    public function released()
    {
        return $this->released;
    }

}

