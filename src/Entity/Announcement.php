<?php

namespace App\Entity;

use App\Repository\AnnouncementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

 #[ORM\Entity(repositoryClass: AnnouncementRepository::class)]

/**
 * @Vich\Uploadable
 */

class Announcement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    #[ORM\Column(length: 255)]
    private ?string $sells = null;  
    
    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $aera = null;


    
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private ?string $city = null;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
     private ?string $picture = null;


    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="picture")
     * @var File
     */
    private ?File $pictureFile  = null;


    // #[ORM\Column]
    // private ?int $room_number = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detail = null;

    #[ORM\Column]
    private ?int $room_number = null;

    // #[ORM\OneToMany(mappedBy: 'announcement', targetEntity: Picture::class)]
    // private Collection $pictures;
    // private ?string $picture = null;

    // public function __construct()
    // {
    //     $this->pictures = new ArrayCollection();
    // }

    


    public function __toString()
    {
        return $this->getCategory();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSells(): ?string
    {
        return $this->sells;
    }

    public function setSells(string $sells): self
    {
        $this->sells = $sells;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAera(): ?int
    {
        return $this->aera;
    }

    public function setAera(int $aera): self
    {
        $this->aera = $aera;

        return $this;
    }

    

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }


    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function setPictureFile(File $picture = null)
    {
        $this->pictureFile = $picture;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($picture) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getPictureFile()
    {
        return $this->pictureFile;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): self
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * @return Collection<int, Picture>
     */
    public function getPictures(): Collection
    {
        return $this->pictures;
    }

    public function addPicture(Picture $picture): self
    {
        if (!$this->pictures->contains($picture)) {
            $this->pictures->add($picture);
            $picture->setAnnouncement($this);
        }

        return $this;
    }

    public function removePicture(Picture $picture): self
    {
        if ($this->pictures->removeElement($picture)) {
            // set the owning side to null (unless already changed)
            if ($file->getAnnouncement() === $this) {
                $file->setAnnouncement(null);
            }
        }

        return $this;
    }

    public function getRoomNumber(): ?int
    {
        return $this->room_number;
    }

    public function setRoomNumber(int $room_number): self
    {
        $this->room_number = $room_number;

        return $this;
    }

    
}
