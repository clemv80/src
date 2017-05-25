<?php

namespace BlogBundle\Entity;

/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var int
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $creationdt;

    /**
     * @var \DateTime
     */
    private $modifdt;


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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Commentaire
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set creationdt
     *
     * @param \DateTime $creationdt
     *
     * @return Commentaire
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
     * Set modifdt
     *
     * @param \DateTime $modifdt
     *
     * @return Commentaire
     */
    public function setModifdt($modifdt)
    {
        $this->modifdt = $modifdt;

        return $this;
    }

    /**
     * Get modifdt
     *
     * @return \DateTime
     */
    public function getModifdt()
    {
        return $this->modifdt;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $signalements;

    /**
     * @var \BlogBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->signalements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add signalement
     *
     * @param \BlogBundle\Entity\SignalementCom $signalement
     *
     * @return Commentaire
     */
    public function addSignalement(\BlogBundle\Entity\SignalementCom $signalement)
    {
        $this->signalements[] = $signalement;

        return $this;
    }

    /**
     * Remove signalement
     *
     * @param \BlogBundle\Entity\SignalementCom $signalement
     */
    public function removeSignalement(\BlogBundle\Entity\SignalementCom $signalement)
    {
        $this->signalements->removeElement($signalement);
    }

    /**
     * Get signalements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSignalements()
    {
        return $this->signalements;
    }

    /**
     * Set user
     *
     * @param \BlogBundle\Entity\User $user
     *
     * @return Commentaire
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
