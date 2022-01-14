<?php

namespace App\Entity;

use App\Repository\AdressRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdressRepository::class)
 */
class Adresse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $vorname;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nachname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $strasse;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $hausnummer;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $plz;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ort;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $telefonnumer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email_adresse;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        return $this->id = $id;
    }

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(?string $vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }

    public function getNachname(): ?string
    {
        return $this->nachname;
    }

    public function setNachname(?string $nachname): self
    {
        $this->nachname = $nachname;

        return $this;
    }

    public function getStrasse(): ?string
    {
        return $this->strasse;
    }

    public function setStrasse(?string $strasse): self
    {
        $this->strasse = $strasse;

        return $this;
    }

    public function getHausnummer(): ?string
    {
        return $this->hausnummer;
    }

    public function setHausnummer(?string $hausnummer): self
    {
        $this->hausnummer = $hausnummer;

        return $this;
    }

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(?string $plz): self
    {
        $this->plz = $plz;

        return $this;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(?string $ort): self
    {
        $this->ort = $ort;

        return $this;
    }

    public function getTelefonnumer(): ?string
    {
        return $this->telefonnumer;
    }

    public function setTelefonnumer(?string $telefonnumer): self
    {
        $this->telefonnumer = $telefonnumer;

        return $this;
    }

    public function getEmailAdresse(): ?string
    {
        return $this->email_adresse;
    }

    public function setEmailAdresse(?string $email_adresse): self
    {
        $this->email_adresse = $email_adresse;

        return $this;
    }
}
