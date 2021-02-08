<?php
class Maison extends Habitation{
    private bool $jardin;
    private int $etages;
    private bool $garage;

    public function __construct(string $pays, string $ville, int $codePostal, int $chambres, int $pieces, bool $jardin, int $etages, bool $garage){
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);
        $this->setJardin($jardin);
        $this->setEtages($etages);
        $this->setGarage($garage);
    }

    /**
     * @return bool
     */
    public function hasJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return int
     */
    public function hasEtages(): int
    {
        return $this->etages;
    }

    /**
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
    }

    /**
     * @return bool
     */
    public function hasGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }
}