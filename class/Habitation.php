<?php

class Habitation{
    private string $pays;
    private string $ville;
    private int $codePostal;
    private int $chambres;
    private int $pieces;

    /**
     * Habitation constructor.
     * @param string $pays
     * @param string $ville
     * @param int $codePostal
     * @param int $chambres
     * @param int $pieces
     */
    public function __construct(string $pays, string $ville, int $codePostal, int $chambres, int $pieces)
    {
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setCodePostal($codePostal);
        $this->setChambres($chambres);
        $this->setPieces($pieces);
    }

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getCodePostal(): int
    {
        return $this->codePostal;
    }

    /**
     * @param int $codePostal
     */
    public function setCodePostal(int $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return int
     */
    public function getChambres(): int
    {
        return $this->chambres;
    }

    /**
     * @param int $chambres
     */
    public function setChambres(int $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @return int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }

    /**
     * @param int $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }
}