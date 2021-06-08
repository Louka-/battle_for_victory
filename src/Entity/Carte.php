<?php

namespace App\Entity;

use App\Repository\CarteRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarteRepository::class)
 */
class Carte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     * @Assert\NotBlank(message="Vous devez nommer votre carte.")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Votre carte doit avoir une image.")
     */
    private $image;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\NotBlank(message="Votre carte doit avoir un coût en or.")
     */
    private $gold;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Votre carte doit avoir un bonus.")
     */
    private $bonus;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $style;

    /**
     * @ORM\Column(type="string", length=45)
     * @Assert\NotBlank(message="Votre carte doit avoir un coût en ressource.")
     */
    private $cost;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $cost2;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $cost3;

    /**
     * @ORM\Column(type="string", length=45)
     * @Assert\NotBlank(message="Vous devez choisir un type de ressource.")
     */
    private $ressource;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $ressource2;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $ressource3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getGold(): ?int
    {
        return $this->gold;
    }

    public function setGold(int $gold): self
    {
        $this->gold = $gold;

        return $this;
    }

    public function getBonus(): ?int
    {
        return $this->bonus;
    }

    public function setBonus(int $bonus): self
    {
        $this->bonus = $bonus;

        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(string $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(string $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCost2(): ?string
    {
        return $this->cost2;
    }

    public function setCost2(?string $cost2): self
    {
        $this->cost2 = $cost2;

        return $this;
    }

    public function getCost3(): ?string
    {
        return $this->cost3;
    }

    public function setCost3(?string $cost3): self
    {
        $this->cost3 = $cost3;

        return $this;
    }

    public function getRessource(): ?string
    {
        return $this->ressource;
    }

    public function setRessource(string $ressource): self
    {
        $this->ressource = $ressource;

        return $this;
    }

    public function getRessource2(): ?string
    {
        return $this->ressource2;
    }

    public function setRessource2(?string $ressource2): self
    {
        $this->ressource2 = $ressource2;

        return $this;
    }

    public function getRessource3(): ?string
    {
        return $this->ressource3;
    }

    public function setRessource3(?string $ressource3): self
    {
        $this->ressource3 = $ressource3;

        return $this;
    }
}
