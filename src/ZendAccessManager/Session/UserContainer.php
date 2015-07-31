<?php

namespace ZendAccessManager\Session;

use Zend\Session\Container;

/**
 * Class UserContainer
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Session
 */
class UserContainer extends Container
{
    /**
     * Construtor do container
     */
    public function __construct()
    {
        parent::__construct(md5("ZendAccessManager\\Session\\UserContainer"));
    }
}