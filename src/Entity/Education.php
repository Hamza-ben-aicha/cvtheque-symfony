<?php

namespace App\Entity;

use App\Repository\EducationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EducationRepository::class)]
class Education
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $university;

    #[ORM\Column(type: 'string', length: 255)]
    private $dateFrom;

    #[ORM\Column(type: 'string', length: 255)]
    private $dateUntil;

    #[ORM\ManyToOne(targetEntity: GeneratedCv::class, inversedBy: 'educations')]
    private $generatedCv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUniversity(): ?string
    {
        return $this->university;
    }

    public function setUniversity(string $university): self
    {
        $this->university = $university;

        return $this;
    }

    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }

    public function setDateFrom(string $dateFrom): self
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    public function getDateUntil(): ?string
    {
        return $this->dateUntil;
    }

    public function setDateUntil(string $dateUntil): self
    {
        $this->dateUntil = $dateUntil;

        return $this;
    }

    public function getGeneratedCv(): ?GeneratedCv
    {
        return $this->generatedCv;
    }

    public function setGeneratedCv(?GeneratedCv $generatedCv): self
    {
        $this->generatedCv = $generatedCv;

        return $this;
    }
}
