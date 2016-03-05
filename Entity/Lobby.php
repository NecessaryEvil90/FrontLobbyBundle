<?php

namespace NEvil\FrontLobbyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="front_lobby")
 */
class Lobby
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isActive;

    /**
     * @ORM\Column(type="integer")
     */
    protected $playersMax;

    /**
     * @ORM\Column(type="integer")
     */
    protected $playersReady;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Lobby
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Lobby
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set playersMax
     *
     * @param integer $playersMax
     *
     * @return Lobby
     */
    public function setPlayersMax($playersMax)
    {
        $this->playersMax = $playersMax;

        return $this;
    }

    /**
     * Get playersMax
     *
     * @return integer
     */
    public function getPlayersMax()
    {
        return $this->playersMax;
    }

    /**
     * Set playersReady
     *
     * @param integer $playersReady
     *
     * @return Lobby
     */
    public function setPlayersReady($playersReady)
    {
        $this->playersReady = $playersReady;

        return $this;
    }

    /**
     * Get playersReady
     *
     * @return integer
     */
    public function getPlayersReady()
    {
        return $this->playersReady;
    }
}
