<?php

class Chat {
    private $_name;     // Le prénom du chat
    private $_age;      // L'âge du chat
    private $_color;    // La couleur du chat
    private $_sexe;     // Le sexe du chat
    private $_race;     // La race du chata


function __construct($name, $age, $color, $sexe, $race)
    // Je définie mes functions qui seront en publique
{
    $this->_name = $name;
    $this->_age = $age;
    $this->_color = $color;
    $this->_sexe = $sexe;
    $this->_race = $race;
}
public function Name($value = "")
    // Je vais mettre en publique la function "Name" qui sera le prénom des chats
{
    if ($value == "")
    {
        // Je retourne les données du prénom du chat spécifié
        return $this->_name;
    }
    $this->_name = $value;
}

public function Age($value = "")
    // Je vais mettre en publique la function "Age" qui sera l'âge des chats
{
    if ($value == "")
    {
        // Je retourne les données de l'âge du chat spécifié
        return $this->_age;
    }
    $this->_age = $value;
}
public function Color($value = "")
    // Je vais mettre en publique la Couleur des chats
{
    if ($value == "")
    {
        // Je retourne les données de la couleur du chat spécifié
        return $this->_color;
    }
    $this->_color = $value;
}

public function Sexe($value = "")
    // Je vais mettre en publique le Sexe des chats
{
    if ($value == "")
    {
        // Je retourne les données du sexe du chat spécifié
        return $this->_sexe;
    }
    $this->_sexe = $value;
}
public function Race($value = "")
    // Je vais mettre en publique la race des chats
{
    if ($value == "")
    {
        // Je retourne les données de la race du chat spécifié
        return $this->_race;
    }
    $this->_race = $value;
}
}


?>