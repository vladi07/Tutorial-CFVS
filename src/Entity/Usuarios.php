<?php

namespace App\Entity;

use App\Repository\UsuariosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UsuariosRepository::class)
 */
class Usuarios
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $usuario;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $clave;

    /**
     * @ORM\Column(
     *     type="string",
     *     length=120,
     *     nullable=true)
     */
    private $tipo;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $idPersona;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $idRoles;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $idCentro;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $creadoPor;

    /**
     * @ORM\Column(
     *     type="datetime",
     *     nullable=true
     * )
     */
    private $fechaCreacion;

    /**
     * @ORM\ManyToMany(
     *     targetEntity=Roles::class,
     *     inversedBy="usuarios"
     * )
     */
    private $Roles;

    /**
     * @ORM\ManyToOne(
     *     targetEntity=Persona::class,
     *     inversedBy="usuarios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $persona;

    public function __construct()
    {
        $this->Roles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getClave(): ?string
    {
        return $this->clave;
    }

    public function setClave(string $clave): self
    {
        $this->clave = $clave;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getIdPersona(): ?int
    {
        return $this->idPersona;
    }

    public function setIdPersona(?int $idPersona): self
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    public function getIdRoles(): ?string
    {
        return $this->idRoles;
    }

    public function setIdRoles(?string $idRoles): self
    {
        $this->idRoles = $idRoles;

        return $this;
    }

    public function getIdCentro(): ?string
    {
        return $this->idCentro;
    }

    public function setIdCentro(?string $idCentro): self
    {
        $this->idCentro = $idCentro;

        return $this;
    }

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(?bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getCreadoPor(): ?string
    {
        return $this->creadoPor;
    }

    public function setCreadoPor(?string $creadoPor): self
    {
        $this->creadoPor = $creadoPor;

        return $this;
    }

    public function getFechaCreacion(): ?\DateTimeInterface
    {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion(?\DateTimeInterface $fechaCreacion): self
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * @return Collection|Roles[]
     */
    public function getRoles(): Collection
    {
        return $this->Roles;
    }

    public function addRole(Roles $role): self
    {
        if (!$this->Roles->contains($role)) {
            $this->Roles[] = $role;
        }

        return $this;
    }

    public function removeRole(Roles $role): self
    {
        if ($this->Roles->contains($role)){
            $this->Roles->removeElement($role);
        }
        return $this;
    }

    public function getPersona(): ?Persona
    {
        return $this->persona;
    }

    public function setPersona(?Persona $persona): self
    {
        $this->persona = $persona;

        return $this;
    }
}