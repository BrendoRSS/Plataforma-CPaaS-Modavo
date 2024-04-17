<?php
class Usuario{
    private $cpf;
    private $login;
    private $senha;
    
    public function __construct($cpf = "", $login = "", $senha = "") 
    {
        $this->cpf = $cpf;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function getCPF()
    {
        return $this -> cpf;
    }


    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }
    
    public function getLogin() 
    {
        return $this -> login;
    }

    public function setLogin($login)
    {
        $this -> login = $login;
    }
        
    public function getSenha()
    {
        return $this -> senha;
    }

    public function setSenha($senha)
    {
        $this -> senha = $senha;
    }
    }
?>