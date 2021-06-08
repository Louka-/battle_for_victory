<?php

namespace App\Entity;

use App\Repository\PlateauDeJoueurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlateauDeJoueurRepository::class)
 */
class PlateauDeJoueur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $race;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $forBase;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $defBase;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $goldBase;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getForBase(): ?int
    {
        return $this->forBase;
    }

    public function setForBase(?int $forBase): self
    {
        $this->forBase = $forBase;

        return $this;
    }

    public function getDefBase(): ?int
    {
        return $this->defBase;
    }

    public function setDefBase(?int $defBase): self
    {
        $this->defBase = $defBase;

        return $this;
    }

    public function getGoldBase(): ?int
    {
        return $this->goldBase;
    }

    public function setGoldBase(?int $goldBase): self
    {
        $this->goldBase = $goldBase;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
