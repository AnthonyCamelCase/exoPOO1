<?php 
//step one savoir creer un moule d'objet (class)
//comprendre le role d'un constructeur
// que represente $This 


class Voiture //je creer ma class voiture qui me permettra d'instancier des objets 
{

    public $_marque;
    public $_couleur;
    public $_vitesse_max;

    public function __construct($marque, $couleur, $vitesse){
        $this->_marque = $marque;
        $this->_couleur = $couleur;
        $this->_vitesse_max = $vitesse;
    }

    public function demarer()
    {

        echo "vroom la ".$this->_marque." démarre";

    }
};

$stephanie = new Voiture("bmw","noir",220);// j'instancie la class en crée l'objet $stephanie

 echo ($stephanie->demarer());//execute and watch

// $stephanie->demarer(); //execute cette ligne de code (execute and watch)