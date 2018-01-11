<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RedeRepository")
 */
class Rede
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
   
    public function getId()
    {
        return $this->id;
    }
    
    /**
      * @ORM\Column(type="string")
      */
    private $nome;
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
      * @ORM\Column(type="string")
      */
    private $iprede;

    /**
      * @ORM\Column(type="string")
      */
    private $cidr;    
}
