<?php

class Post extends PostRepositories
{
    private $id;
    private $poster_id;
    private $titre;
    private $contenu;
    private $auteur;
    private $likes;
    private $dislikes;

    public function __construct($id,$poster_id, $titre, $contenu, $auteur, $likes, $dislikes)
    {
        $this->setId($id);
        $this->setPosterId($poster_id);
        $this->setTitre($titre);
        $this->setContenu($contenu);
        $this->setAuteur($auteur);
        $this->setLikes($likes);
        $this->setDislikes($dislikes);
    }

    
    public function setId($id)
    {
         $this->id = $id;
    }


    public function getId()
    {
        return $this->id;
    }


    // Getter et Setter pour poster_id
    public function getPosterId()
    {
        return $this->poster_id;
    }

    public function setPosterId($poster_id)
    {
        $this->poster_id = $poster_id;
    }

    // Getter et Setter pour titre
    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    // Getter et Setter pour contenu
    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    // Getter et Setter pour auteur
    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    // Getter et Setter pour likes
    public function getLikes()
    {
        return $this->likes;
    }

    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    // Getter et Setter pour dislikes
    public function getDislikes()
    {
        return $this->dislikes;
    }

    public function setDislikes($dislikes)
    {
        $this->dislikes = $dislikes;
    }
}




