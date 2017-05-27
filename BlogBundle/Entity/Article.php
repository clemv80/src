<?php

namespace BlogBundle\Entity;

/**
 * Article
 */
class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $contenu;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Article
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
     * Set creationdt
     *
     * @param \DateTime $creationdt
     *
     * @return Article
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
     * @return Article
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
     * @var \BlogBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \BlogBundle\Entity\User $user
     *
     * @return Article
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commentaires;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $themes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->themes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commentaire
     *
     * @param \BlogBundle\Entity\Commentaire $commentaire
     *
     * @return Article
     */
    public function addCommentaire(\BlogBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \BlogBundle\Entity\Commentaire $commentaire
     */
    public function removeCommentaire(\BlogBundle\Entity\Commentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Add theme
     *
     * @param \BlogBundle\Entity\Theme $theme
     *
     * @return Article
     */
    public function addTheme(\BlogBundle\Entity\Theme $theme)
    {
        $this->themes[] = $theme;

        return $this;
    }

    /**
     * Remove theme
     *
     * @param \BlogBundle\Entity\Theme $theme
     */
    public function removeTheme(\BlogBundle\Entity\Theme $theme)
    {
        $this->themes->removeElement($theme);
    }

    /**
     * Get themes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getThemes()
    {
        return $this->themes;
    }
    /**
     * @var string
     */
    private $soustitre;


    /**
     * Set soustitre
     *
     * @param string $soustitre
     *
     * @return Article
     */
    public function setSoustitre($soustitre)
    {
        $this->soustitre = $soustitre;

        return $this;
    }

    /**
     * Get soustitre
     *
     * @return string
     */
    public function getSoustitre()
    {
        return $this->soustitre;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $signalements;


    /**
     * Add signalement
     *
     * @param \BlogBundle\Entity\SignalementArt $signalement
     *
     * @return Article
     */
    public function addSignalement(\BlogBundle\Entity\SignalementArt $signalement)
    {
        $this->signalements[] = $signalement;

        return $this;
    }

    /**
     * Remove signalement
     *
     * @param \BlogBundle\Entity\SignalementArt $signalement
     */
    public function removeSignalement(\BlogBundle\Entity\SignalementArt $signalement)
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
}
