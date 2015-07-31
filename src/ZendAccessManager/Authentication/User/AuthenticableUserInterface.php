<?php

namespace ZendAccessManager\Authentication\User;

/**
 * Interface AuthenticableUserInterface
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Authentication\User
 */
interface AuthenticableUserInterface
{
    /**
     * Retorna o nome de usuário.
     * @return string
     */
    public function getUsername();

    /**
     * Define o nome de usuário.
     * @param $username
     * @return string
     */
    public function setUsername($username);

    /**
     * Retorna a senha do usuário
     * @return string
     */
    public function getPassword();

    /**
     * Define a senha do usuário
     * @param $password
     * @return mixed
     */
    public function setPassword($password);
}