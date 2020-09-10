<?php


namespace Entity;


use OCFram\Entity;
use OCFram\Utilitaires;

class ChapterEntity extends Entity
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
        if(Utilitaires::emptyMinusZero($title))
        {
            throw new \Exception('Le titre doit être du texte non vide');
        }
        else
        {
            $this->title = $title;
        }
    }

    public function title()
    {
        return $this->title;
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
        if(Utilitaires::emptyMinusZero($text))
        {
            throw new \Exception('Le contenu du chapitre doit contenir du texte uniquement');
        }
        else
        {
            $this->text = (string)$text;
        }
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

