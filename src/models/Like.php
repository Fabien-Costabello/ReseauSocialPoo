<?php

class Like extends LikeRepositories
{
    private $post_id;
   private $poster_id;

    public function __construct($post_id,$poster_id)
    {
        $this->setPostId($post_id);
        $this->setPosterId($poster_id);
  
    }

    public function setPostId($post_id)
    {
         $this->post_id =$post_id;
    }

    public function getPostId()
    {
        return $this->post_id;
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

   
}




