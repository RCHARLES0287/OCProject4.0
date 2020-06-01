<?php


namespace Entity;


use OCFram\Entity;

class ChapterEntity extends Entity
{
    private $chapter_id;
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
        if(!empty($title))
        {
            throw new \Exception('Le titre doit être du texte');
        }
        else
        {
            $this->title = htmlspecialchars($title);
        }
    }

    public function title()
    {
        return htmlspecialchars_decode($this->title);
    }

    public function setId($chapter_id)
    {

        $this->id = (int)$chapter_id;
    }

    public function id()
    {
        return $this->id;
    }


    public function setChapter_number($chapter_number)
    {

        $this->chapter_number = (int)$chapter_number;
    }

    public function chapter_number()
    {
        return $this->chapter_number;
    }


    public function setText($text)
    {
        if(!empty($text))
        {
            throw new \Exception('Le contenu du chapitre doit contenir du texte uniquement');
        }
        else
        {
            $this->text = htmlspecialchars((string)$text);
        }
    }

    public function text()
    {
        return htmlspecialchars_decode($this->text);
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

