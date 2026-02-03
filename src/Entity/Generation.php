<?php

namespace App\Entity;

use App\Repository\GenerationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenerationRepository::class)]
class Generation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'generations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $file = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\OneToMany(mappedBy: 'generation', targetEntity: GenerationUserContact::class, orphanRemoval: true)]
    private Collection $generationUserContacts;

    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->generationUserContacts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): static
    {
        $this->file = $file;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return Collection<int, GenerationUserContact>
     */
    public function getGenerationUserContacts(): Collection
    {
        return $this->generationUserContacts;
    }

    public function addGenerationUserContact(GenerationUserContact $generationUserContact): static
    {
        if (!$this->generationUserContacts->contains($generationUserContact)) {
            $this->generationUserContacts->add($generationUserContact);
            $generationUserContact->setGeneration($this);
        }

        return $this;
    }

    public function removeGenerationUserContact(GenerationUserContact $generationUserContact): static
    {
        if ($this->generationUserContacts->removeElement($generationUserContact)) {
            // set the owning side to null (unless already changed)
            if ($generationUserContact->getGeneration() === $this) {
                $generationUserContact->setGeneration(null);
            }
        }

        return $this;
    }
}
