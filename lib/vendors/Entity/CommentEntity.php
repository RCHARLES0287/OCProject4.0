<?php


namespace Entity;


use OCFram\Entity;

class CommentEntity extends Entity
{
    private $chapter_id;
    private $content;
    private $number_of_warnings;
    private $visitor_pseudo;
    private $release_date;


    public function __construct(array $donnees = [])
    {
        parent::__construct($donnees);
    }


    public function setChapter_id($chapter_id)
    {

        $this->chapter_id = (int)$chapter_id;
    }

    public function chapter_id()
    {
        return $this->chapter_id;
    }


    public function setContent($text)
    {
        if(empty($text))
        {
            throw new \Exception('Le contenu du commentaire doit contenir du texte uniquement');
        }
        else
        {
            $this->content = (string)$text;
        }
    }

    public function content()
    {
        return $this->content;
    }

    public function setNumber_of_warnings ($number_of_warnings)
    {
        $this->number_of_warnings = (int)$number_of_warnings;
    }

    public function number_of_warnings()
    {
        return $this->number_of_warnings;
    }

    public function SetVisitor_pseudo ($visitor_pseudo)
    {
        $this->visitor_pseudo = (string)$visitor_pseudo;
    }

    public function visitor_pseudo()
    {
        return $this->visitor_pseudo;
    }

    public function setRelease_date($release_date)
    {
        $this->release_date = (string)$release_date;
    }

    public function release_date()
    {
        return $this->release_date;
    }


}

