<?php
class pelicula
{

    public $nombre;
    public $Genero;
    public $Duración;
    public $Clasificación;
    public $Protagonista;

    //constructor
    public function __construct(string $nom, string $gen, string $dur, string $cla, string
    $pro)
    {
        $this->nombre = $nom;
        $this->Genero = $gen;
        $this->Duración = $dur;
        $this->Clasificación = $cla;
        $this->Protagonista = $pro;

    }
}
