<?php 

class User extends UserRepositories 
{
    private $id;
    private $pseudo;
    private $mail;
    private $password;

public function __construct( $pseudo, $mail,$password){
    $this->setPseudo( $pseudo );
    $this->setMail( $mail );
    $this->setPassword( $password );
}



public function setPseudo($pseudo){
    $this->pseudo = $pseudo;

}

public function getPseudo(){
    return $this->pseudo;

}

public function getMail(){
    return $this->mail;

}

public function setMail($mail){
    $this->mail = $mail;

}

public function setPassword($password){
    $this->password = $password;

}

public function getPassword(){
  return $this->password;

}

public function getId()
{
    return $this->id;
}



}