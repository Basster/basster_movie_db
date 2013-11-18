<?php

namespace Basster\MovieDbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Movie
 *
 * @ORM\Table(name="movie_db_movies")
 * @ORM\Entity(repositoryClass="Basster\MovieDbBundle\Repository\MovieRepository")
 */
class Movie {
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="StorageLocation", inversedBy="movies")
     * @ORM\JoinColumn(name="storage_location_id", referencedColumnName="id")
     */
    private $storageLocation;

    /**
     * @var string $movieDbLink
     *
     * @ORM\Column(name="movie_db_link", type="string", length=255, nullable=true)
     */
    private $movieDbLink;


    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(length=128, type="string", unique=true)
     */
    private $slug;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set MovieDbLink
     *
     * @param $link
     */
    public function setMovieDbLink($link) {
        $this->movieDbLink = $link;
    }

    /**
     * Get MovieDbLink
     *
     * @return string
     */
    public function getMovieDbLink() {
        return $this->movieDbLink;
    }


    /**
     * Set storageLocation
     *
     * @param StorageLocation $storageLocation
     */
    public function setStorageLocation(StorageLocation $storageLocation) {
        $this->storageLocation = $storageLocation;
    }

    /**
     * Get storageLocation
     *
     * @return StorageLocation
     */
    public function getStorageLocation() {
        return $this->storageLocation;
    }

    public function getSlug() {
        return $this->slug;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug) {
        $this->slug = $slug;
    }
}