<?php

namespace App\Entity;

use App\Repository\PersonaRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @ORM\Entity(repositoryClass=PersonaRepository::class)
 */
class Persona
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(
     *     type="integer",
     *     nullable=false
     * )
     */
    private $id;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=150,
     *     nullable=false
     *)
     */
    private $nombres;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=120,
     *     nullable=false
     *)
     */
    private $primerApellido;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=120,
     *     nullable=true
     *)
     */
    private $segundoApellido;

    /**
     * @ORM\Column(
     *     type="integer",
     *     nullable=false
     * )
     */
    private $documentoIdentidad;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=50,
     *     nullable=true
     *)
     */
    private $expedido;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $genero;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $correo;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $gradoAcademico;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $domicilio;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $departamento;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $centro;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombres(): ?string
    {
        return $this->nombres;
    }

    public function setNombres(string $nombres): self
    {
        $this->nombres = $nombres;

        return $this;
    }

    public function getPrimerApellido(): ?string
    {
        return $this->primerApellido;
    }

    public function setPrimerApellido(string $primerApellido): self
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    public function getSegundoApellido(): ?string
    {
        return $this->segundoApellido;
    }

    public function setSegundoApellido(?string $segundoApellido): self
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentoIdentidad()
    {
        return $this->documentoIdentidad;
    }

    /**
     * @param mixed $documentoIdentidad
     */
    public function setDocumentoIdentidad($documentoIdentidad): void
    {
        $this->documentoIdentidad = $documentoIdentidad;
    }


    public function getExpedido(): ?string
    {
        return $this->expedido;
    }

    public function setExpedido(string $expedido): self
    {
        $this->expedido = $expedido;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTime
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(?\DateTime $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getGenero(): ?string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(?string $correo): self
    {
        $this->correo = $correo;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getGradoAcademico(): ?string
    {
        return $this->gradoAcademico;
    }

    public function setGradoAcademico(?string $gradoAcademico): self
    {
        $this->gradoAcademico = $gradoAcademico;

        return $this;
    }

    public function getDomicilio(): ?string
    {
        return $this->domicilio;
    }

    public function setDomicilio(string $domicilio): self
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    public function getDepartamento(): ?string
    {
        return $this->departamento;
    }

    public function setDepartamento(string $departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }

    public function getCentro(): ?string
    {
        return $this->centro;
    }

    public function setCentro(string $centro): self
    {
        $this->centro = $centro;

        return $this;
    }
}
