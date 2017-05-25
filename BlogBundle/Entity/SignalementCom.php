<?php

namespace BlogBundle\Entity;

/**
 * SignalementCom
 */
class SignalementCom
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $creationdt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set creationdt
     *
     * @param \DateTime $creationdt
     *
     * @return SignalementCom
     */
    public function setCreationdt($creationdt)
    {
        $this->creationdt = $creationdt;

        return $this;
    }

    /**
     * Get creationdt
     *
     * @return \DateTime
     */
    public function getCreationdt()
    {
        return $this->creationdt;
    }
    /**
     * @var \BlogBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \BlogBundle\Entity\User $user
     *
     * @return SignalementCom
     */
    public function setUser(\BlogBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BlogBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
