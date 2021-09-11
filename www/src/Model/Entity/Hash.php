<?php

namespace Werner\BookStore\Model\Entity;

use JsonSerializable;

/**
 * @Entity
 * @Table(name="hashes")
 */
class Hash implements JsonSerializable
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $hash;

    public function __construct($hash)
    {
        $this->hash = base64_encode(trim($hash));
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getHash(): string
    {
        return base64_decode($this->hash);
    }

    public function setHash($hash): void
    {
        $this->hash = base64_encode(trim($hash));
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'hash' => base64_decode($this->hash),
        ];
    }
}
