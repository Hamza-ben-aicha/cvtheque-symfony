<?php

namespace App\Entity;

use App\Repository\SkillsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillsRepository::class)]
class Skills
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\ManyToMany(targetEntity: GeneratedCv::class, mappedBy: 'skills')]
    private $generatedCvs;

    public function __construct()
    {
        $this->generatedCvs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|GeneratedCv[]
     */
    public function getGeneratedCvs(): Collection
    {
        return $this->generatedCvs;
    }

    public function addGeneratedCv(GeneratedCv $generatedCv): self
    {
        if (!$this->generatedCvs->contains($generatedCv)) {
            $this->generatedCvs[] = $generatedCv;
            $generatedCv->addSkill($this);
        }

        return $this;
    }

    public function removeGeneratedCv(GeneratedCv $generatedCv): self
    {
        if ($this->generatedCvs->removeElement($generatedCv)) {
            $generatedCv->removeSkill($this);
        }

        return $this;
    }
}
