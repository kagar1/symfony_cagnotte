<?php

namespace Core\CagnotteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="Core\CagnotteBundle\Repository\FournisseurRepository")
 */
class Fournisseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_Fournisseur", type="integer")
     */
    private $idFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_Fournisseur", type="string", length=255, nullable=true)
     */
    private $nomFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_Fournisseur", type="string", length=255, nullable=true)
     */
    private $contactFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_Fournisseur", type="string", length=255, nullable=true)
     */
    private $villeFournisseur;


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
     * Set idFournisseur
     *
     * @param integer $idFournisseur
     *
     * @return Fournisseur
     */
    public function setIdFournisseur($idFournisseur)
    {
        $this->idFournisseur = $idFournisseur;
    
        return $this;
    }

    /**
     * Get idFournisseur
     *
     * @return integer
     */
    public function getIdFournisseur()
    {
        return $this->idFournisseur;
    }

    /**
     * Set nomFournisseur
     *
     * @param string $nomFournisseur
     *
     * @return Fournisseur
     */
    public function setNomFournisseur($nomFournisseur)
    {
        $this->nomFournisseur = $nomFournisseur;
    
        return $this;
    }

    /**
     * Get nomFournisseur
     *
     * @return string
     */
    public function getNomFournisseur()
    {
        return $this->nomFournisseur;
    }

    /**
     * Set contactFournisseur
     *
     * @param string $contactFournisseur
     *
     * @return Fournisseur
     */
    public function setContactFournisseur($contactFournisseur)
    {
        $this->contactFournisseur = $contactFournisseur;
    
        return $this;
    }

    /**
     * Get contactFournisseur
     *
     * @return string
     */
    public function getContactFournisseur()
    {
        return $this->contactFournisseur;
    }

    /**
     * Set villeFournisseur
     *
     * @param string $villeFournisseur
     *
     * @return Fournisseur
     */
    public function setVilleFournisseur($villeFournisseur)
    {
        $this->villeFournisseur = $villeFournisseur;
    
        return $this;
    }

    /**
     * Get villeFournisseur
     *
     * @return string
     */
    public function getVilleFournisseur()
    {
        return $this->villeFournisseur;
    }
}

