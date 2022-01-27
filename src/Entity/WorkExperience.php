<?php

namespace App\Entity;

use App\Repository\WorkExperienceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WorkExperienceRepository::class)]
class WorkExperience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $companyName;

    #[ORM\Column(type: 'date')]
    private $dateFrom;

    #[ORM\Column(type: 'string', length: 255)]
    private $dateUntil;

    #[ORM\ManyToOne(targetEntity: GeneratedCv::class, inversedBy: 'workExperiences')]
    private $generatedCv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getDateFrom(): ?\DateTimeInterface
    {
        return $this->dateFrom;
    }

    public function setDateFrom(\DateTimeInterface $dateFrom): self
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
