<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_post", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPost;

    /**
     * @var string
      * @Assert\NotBlank(message=" titre doit etre non vide")
     * @Assert\Length(
     *      min = 4,
     *      minMessage=" Entrer un titre au mini de 5 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @var string
      * @Assert\NotBlank(message=" auteur doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un auteur au mini de 5 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    private $auteur;

    /**
     * @var int
      * @Assert\NotBlank(message=" rate doit etre non vide")
     * @Assert\Length(
     *      min = 1,
     *      minMessage=" Entrer un rate au mini de 5 caracteres"
     *
     *     )
     * @ORM\Column( type="integer", nullable=false)
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="imgpost", type="string", length=255, nullable=false)
     */
    private $imgpost;

    /**
     * @var string
     *
     * @ORM\Column(name="datepost", type="string", length=255, nullable=false)
     */
    private $datepost;

    public function getIdPost(): ?int
    {
        return $this->idPost;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getImgpost(): ?string
    {
        return $this->imgpost;
    }

    public function setImgpost(string $imgpost): self
    {
        $this->imgpost = $imgpost;

        return $this;
    }

    public function getDatepost(): ?string
    {
        return $this->datepost;
    }

    public function setDatepost(string $datepost): self
    {
        $this->datepost = $datepost;

        return $this;
    }


}
