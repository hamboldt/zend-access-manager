<?php

namespace ZendAccessManager\Session;

use ZendAccessManager\Authentication\User\AuthenticableUserInterface;

/**
 * Interface UserContainerInterface
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Session
 */
interface UserContainerInterface
{
    /**
     * Retorna o usuário armazenado na sessão
     * @return mixed
     */
    public function getUser();

    /**
     * Armazena um usuário na sessão
     * @param AuthenticableUserInterface $user
     */
    public function setUser(AuthenticableUserInterface $user);

    /**
     * Verifica se existe algum usuário no container.
     * Quando contem usuário = autenticado, quando não = desautenticado.
     * @return bool
     */
    public function hasUser();

    /**
     * Remove o usuário no container
     * @return mixed
     */
    public function removeUser();
}