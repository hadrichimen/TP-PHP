<?php
class Fournisseur
{
    private $id;
    private $nom;

    public function __construct($id, $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function __get($name)
    {
        if (!isset($this->$name))
            return "erreur";
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __isset($name)
    {
        return isset($this->$name);
    }

    public function __toString()
    {
        return "<option value='{$this->id}'>{$this->nom}</option>";
    }
}
$fournisseur1 = new Fournisseur(1, "Fournisseur1");
$fournisseur2 = new Fournisseur(2, "Fournisseur2");
$fournisseur3 = new Fournisseur(3, "Fournisseur3");
