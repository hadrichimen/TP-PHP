<?php
class Article
{
    private $ref;
    private $lib;
    private $prix;
    private $qte;
    private $fournisseur;
    private $pv;

    public function __construct($ref, $lib, $prix, $qte, $fournisseur, $pv)
    {
        $this->ref = $ref;
        $this->lib = $lib;
        $this->prix = $prix;
        $this->qte = $qte;
        $this->fournisseur = $fournisseur;
        $this->pv = $pv;
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
        $s = "<tr><td>$this->ref</td><td>$this->lib</td><td><ul>";

        foreach ($this->fournisseur as $f) {
            $s = $s . "<li>" . $f . "</li>";
        }

        $s = $s . "</ul></td><td>$this->prix</td><td>$this->qte</td><td><ul>";

        foreach ($this->pv as $p) {
            $s = $s . "<li>" . $p . "</li>";
        }

        return $s . "</ul></td></tr>";
    }
}
