<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Actualite $actualite = null;

    /**
     * @var Collection<int, SignalerCommentaire>
     */
    #[ORM\OneToMany(targetEntity: SignalerCommentaire::class, mappedBy: 'commentaire')]
    private Collection $signalerCommentaires;

    public function __construct()
    {
        $this->signalerCommentaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getActualite(): ?Actualite
    {
        return $this->actualite;
    }

    public function setActualite(?Actualite $actualite): static
    {
        $this->actualite = $actualite;

        return $this;
    }

    /**
     * @return Collection<int, SignalerCommentaire>
     */
    public function getSignalerCommentaires(): Collection
    {
        return $this->signalerCommentaires;
    }

    public function addSignalerCommentaire(SignalerCommentaire $signalerCommentaire): static
    {
        if (!$this->signalerCommentaires->contains($signalerCommentaire)) {
            $this->signalerCommentaires->add($signalerCommentaire);
            $signalerCommentaire->setCommentaire($this);
        }

        return $this;
    }

    public function removeSignalerCommentaire(SignalerCommentaire $signalerCommentaire): static
    {
        if ($this->signalerCommentaires->removeElement($signalerCommentaire)) {
            // set the owning side to null (unless already changed)
            if ($signalerCommentaire->getCommentaire() === $this) {
                $signalerCommentaire->setCommentaire(null);
            }
        }

        return $this;
    }
}
