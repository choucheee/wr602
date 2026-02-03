<?php

namespace App\Entity;

use App\Repository\GenerationUserContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenerationUserContactRepository::class)]
#[ORM\Table(name: 'generation_user_contact')]
#[ORM\UniqueConstraint(name: 'generation_user_contact_unique', columns: ['generation_id', 'user_contact_id'])]
class GenerationUserContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'generationUserContacts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Generation $generation = null;

    #[ORM\ManyToOne(inversedBy: 'generationUserContacts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?UserContact $userContact = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGeneration(): ?Generation
    {
        return $this->generation;
    }

    public function setGeneration(?Generation $generation): static
    {
        $this->generation = $generation;

        return $this;
    }

    public function getUserContact(): ?UserContact
    {
        return $this->userContact;
    }

    public function setUserContact(?UserContact $userContact): static
    {
        $this->userContact = $userContact;

        return $this;
    }
}
