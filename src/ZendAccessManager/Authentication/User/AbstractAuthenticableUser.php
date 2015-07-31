<?php

namespace ZendAccessManager\Authentication\User;

/**
 * Class AbstractAuthenticableUser
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Authentication\User
 */
abstract class AbstractAuthenticableUser implements AuthenticableUserInterface
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * Retorna o nome de usuário.
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Define o nome de usuário.
     * @param $username
     * @return string
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Retorna a senha do usuário
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Define a senha do usuário
     * @param $password
     * @return mixed
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}

