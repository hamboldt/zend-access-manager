<?php

namespace ZendAccessManager\Session;

use Zend\Session\Container;

/**
 * Class AbstractUserContainer
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Session
 */
abstract class AbstractUserContainer extends Container implements UserContainerInterface
{
    /**
     * Construtor do container
     */
    public function __construct()
    {
        parent::__construct(md5("ZendAccessManager\\Session\\UserContainer"));
        $this->user = null;
    }

    /**
     * Retorna o usuário armazenado na sessão
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Armazena um usuário na sessão
     * @param AuthenticableUserInterface $user
     */
    public function setUser(AuthenticableUserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * Verifica se existe algum usuário no container.
     * Quando contem usuário = autenticado, quando não = desautenticado.
     * @return bool
     */
    public function hasUser()
    {
        return (is_null($this->user) == false);
    }

    /**
     * Remove o usuário no container
     * @return mixed
     */
    public function removeUser()
    {
        if(!$this->hasUser())
            $this->user = null;
    }
}