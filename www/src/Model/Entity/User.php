<?php

namespace Werner\BookStore\Model\Entity;

/**
 * @Entity
 * @Table(name="users")
 */
class User
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string", nullable=false)
     */
    private $name;

    /**
     * @Column(type="string", columnDefinition="CHAR(1) NOT NULL", options={"default":"c"})
     */
    private $access_level;

    /**
     * @Column(type="string")
     */
    private $email;

    /**
     * @Column(type="string")
     */
    private $password;

    public function passwordMatch($purePassword): bool
    {
        return password_verify($purePassword, $this->password);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }   

    public function getAccessLevel(): string
    {
        return $this->access_level;
    }

    public function setAccessLevel($access_level): self
    {
        $this->access_level = $access_level;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
