<?php

namespace Wearplay\BrandBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="brand")
 */
class Brand {
	
	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id;

	/**
	 * @ORM\Column(type="string", unique=true)
	 */
	private $name;

	/**
	 * @ORM\Column(type="string")
	 */
	private $country;

	/**
	 * @ORM\Column(type="string")
	 */
	private $city;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $address;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $updated;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $created;

	/**
     * @ORM\PrePersist
     */
    public function createCreatedTimestamps() {
        $this->created = \time();
        $this->updated = \time();
    }

    /**
     * @ORM\PreUpdate
     */
    public function createUpdateTimestamps() {
        $this->updated = \time();
    }
}