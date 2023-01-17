<?php

namespace App\Entity;

use App\Entity\Image;

use App\Repository\PropertyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity(repositoryClass: PropertyRepository::class)]

class Property
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

   

    #[ORM\Column(length: 255)]
    private ?string $sells = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column]
    private ?float $area = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column]
    private ?int $room_number = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $details = null;

    
    // #[ORM\OneToOne(targetEntity: Image::class ,cascade: ["persist"])]
    // private $image;

    #[ORM\OneToMany(targetEntity :"App\Entity\Image", mappedBy : "property",cascade :["persist"])]
    private $image;

    public function __construct()
    {
        $this->image = new ArrayCollection();
    }


    #[ORM\Column(length: 255)]
    private ?string $city = null;

    

    public function __toString()
    {
        return $this->getCategory();
    }

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

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

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

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): self
    {
        $this->details = $details;

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




   
     /**
     * @return Collection|Image[]
     */
    
    public function getImage(): Collection
    {
        return $this->image;
    }

    public function addImage(Image $image): self
    {
        if (!$this->image->contains($image)) {
            $this->image[] = $image;
            $image->setProperty($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->image->contains($image)) {
            $this->image->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getProperty() === $this) {
                $image->setProperty(null);
            }
        }

        return $this;
    }



    // public function getImage(): ?Image
    // {
    //     return $this->image;
    // }

    // public function setImage($image ): void
    // {
    //     $this->image = $image;
    
    
}
