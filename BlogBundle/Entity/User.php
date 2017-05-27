<?php

namespace BlogBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $mail;


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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $roles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add role
     *
     * @param \BlogBundle\Entity\Role $role
     *
     * @return User
     */
    public function addRole(\BlogBundle\Entity\Role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \BlogBundle\Entity\Role $role
     */
    public function removeRole(\BlogBundle\Entity\Role $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles;
    }


    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials(){}

        /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articles;


    /**
     * Add article
     *
     * @param \BlogBundle\Entity\Article $article
     *
     * @return User
     */
    public function addArticle(\BlogBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \BlogBundle\Entity\Article $article
     */
    public function removeArticle(\BlogBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commentaires;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $signalements_com;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $signalements_art;


    /**
     * Add commentaire
     *
     * @param \BlogBundle\Entity\Commentaire $commentaire
     *
     * @return User
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
     * Add signalementsCom
     *
     * @param \BlogBundle\Entity\SignalementCom $signalementsCom
     *
     * @return User
     */
    public function addSignalementsCom(\BlogBundle\Entity\SignalementCom $signalementsCom)
    {
        $this->signalements_com[] = $signalementsCom;

        return $this;
    }

    /**
     * Remove signalementsCom
     *
     * @param \BlogBundle\Entity\SignalementCom $signalementsCom
     */
    public function removeSignalementsCom(\BlogBundle\Entity\SignalementCom $signalementsCom)
    {
        $this->signalements_com->removeElement($signalementsCom);
    }

    /**
     * Get signalementsCom
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSignalementsCom()
    {
        return $this->signalements_com;
    }

    /**
     * Add signalementsArt
     *
     * @param \BlogBundle\Entity\SignalementArt $signalementsArt
     *
     * @return User
     */
    public function addSignalementsArt(\BlogBundle\Entity\SignalementArt $signalementsArt)
    {
        $this->signalements_art[] = $signalementsArt;

        return $this;
    }

    /**
     * Remove signalementsArt
     *
     * @param \BlogBundle\Entity\SignalementArt $signalementsArt
     */
    public function removeSignalementsArt(\BlogBundle\Entity\SignalementArt $signalementsArt)
    {
        $this->signalements_art->removeElement($signalementsArt);
    }

    /**
     * Get signalementsArt
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSignalementsArt()
    {
        return $this->signalements_art;
    }
}
