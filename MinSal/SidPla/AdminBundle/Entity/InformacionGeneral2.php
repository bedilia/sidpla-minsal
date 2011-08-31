<?php

namespace MinSal\SidPla\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MinSal\SidPla\AdminBundle\Entity\InformacionGeneral2
 *
 * @ORM\Table(name="sidpla_informaciongeneral")
 * @ORM\Entity
 */
class InformacionGeneral2
{
    /**
     * @var integer $codInfo
     *
     * @ORM\Column(name="infgen_codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codInfo;

    /**
     * @var string $TelInf
     *
     * @ORM\Column(name="infgen_telefono", type="string", length=10)
     */
    private $TelInf;

    /**
     * @var string $Fax
     *
     * @ORM\Column(name="infgen_fax", type="string", length=10)
     */
    private $Fax;

    /**
     * @var Date $FechaAct
     *
     * @ORM\Column(name="infgen_fechaactualizacion", type="Date")
     */
    private $FechaAct;

    /**
     * @var string $Direccion
     *
     * @ORM\Column(name="infgen_direccion", type="string", length=100)
     */
    private $Direccion;

    /**
     * @var integer $CodUni
     *
     * @ORM\Column(name="uniorg_codigo", type="integer")
     */
    private $CodUni;

    /**
     * Get codInfo
     *
     * @return integer 
     */
    public function getCodInfo()
    {
        return $this->codInfo;
    }

    /**
     * Set TelInf
     *
     * @param string $telInf
     */
    public function setTelInf($telInf)
    {
        $this->TelInf = $telInf;
    }

    /**
     * Get TelInf
     *
     * @return string 
     */
    public function getTelInf()
    {
        return $this->TelInf;
    }

    /**
     * Set Fax
     *
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->Fax = $fax;
    }

    /**
     * Get Fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * Set FechaAct
     *
     * @param Date $fechaAct
     */
    public function setFechaAct(\Date $fechaAct)
    {
        $this->FechaAct = $fechaAct;
    }

    /**
     * Get FechaAct
     *
     * @return Date 
     */
    public function getFechaAct()
    {
        return $this->FechaAct;
    }

    /**
     * Set Direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->Direccion = $direccion;
    }

    /**
     * Get Direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * Set CodUni
     *
     * @param integer $codUni
     */
    public function setCodUni($codUni)
    {
        $this->CodUni = $codUni;
    }

    /**
     * Get CodUni
     *
     * @return integer 
     */
    public function getCodUni()
    {
        return $this->CodUni;
    }
}