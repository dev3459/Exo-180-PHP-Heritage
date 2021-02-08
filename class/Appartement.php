<?php

class Appartement extends Habitation{
    private bool $garage;

    public function __construct(string $pays, string $ville, int $codePostal, int $chambres, int $pieces, bool $garage)
    {
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);
        $this->setGarage($garage);
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