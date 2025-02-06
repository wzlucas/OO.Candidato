<?php

abstract class Candidato{

    protected int $id;
    protected string $nome;
    protected string $email;
    protected int $numero;
    protected int $cpf;
    protected string $descricao;
    protected string $endereco;

    public abstract function getFase();


    public function __toString() {
        return sprintf("%d- %s | %s | %s\n",
                        $this->id, $this->getFase(), $this->nome);
    }
        

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
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
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getCpf(): int
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */
    public function setCpf(int $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of endereco
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     */
    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }
    }

