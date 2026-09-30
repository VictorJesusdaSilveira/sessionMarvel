<?php

class Heroi {
    private string $nome;
    private string $poder;
    private string $origem;

    public function __construct(string $nome, string $poder, string $origem){
       $this->nome = $nome;
       $this->poder = $poder;
       $this->origem = $origem;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of poder
     */
    public function getPoder(): string
    {
        return $this->poder;
    }

    /**
     * Set the value of poder
     */
    public function setPoder(string $poder): self
    {
        $this->poder = $poder;

        return $this;
    }

    /**
     * Get the value of origem
     */
    public function getOrigem(): string
    {
        return $this->origem;
    }

    /**
     * Set the value of origem
     */
    public function setOrigem(string $origem): self
    {
        $this->origem = $origem;

        return $this;
    }
}



?>