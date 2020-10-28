<?php

class User
{

    private $_prenom;
    private $_nom;
    private $_age;
    private $_secu;
    private $_adress;
    private $_contact;
    
    public function __construct($prenom, $nom, $age,$secu,$adress,$contact){
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setAge($age);
        $this->setSecu($secu);
        $this->setAdress($adress);
        $this->setContact($contact);
    }
    //getter
    public function getPrenom(){
        return $this->_prenom;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getAge(){
        return $this->_age;
    }
    public function getSecu(){
        return $this->_secu;
    }

    public function getAdress(){
        return $this->_adress;
    }

    public function getContact(){
        return $this->_contact;
    }

    //setter
    private function setPrenom($prenom)
    {
        if (empty($prenom))
        {
            header('Location: index.php?erreurNom= True');
            exit();  
        }
        else
        {
        $this->_prenom = htmlspecialchars($prenom);
        }
    }

    private function setNom($nom)
    {
         if (empty($nom))
        {
            header('Location: index.php?erreurNom= True');
            exit();      
        }
        else
        {
        $this->_nom = htmlspecialchars($nom);
        }
        
    }

    private function setAge($age)
    {
        $this->_age = htmlspecialchars($age);
    }
    
    private function setSecu($secu)
    {
        $this->_secu = htmlspecialchars($secu);
    }

    private function setAdress($adress)
    {
        $this->_adress = htmlspecialchars($adress);
    }

    private function setContact($contact)
    {
        $this->_contact = htmlspecialchars($contact);
    }

    private function yatout()
    {

        

    }
};