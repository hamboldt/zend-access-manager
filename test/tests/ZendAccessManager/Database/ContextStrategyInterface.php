<?php

namespace Tests\ZendAccessManager\Database;

use Zend\Db\ResultSet\ResultSet;
use ZendAccessManager\Database\DataAccessStrategy\DataAccessStrategyInterface;

/**
 * Interface ContextStrategyInterface
 * @author  Lucas A. de Ara�jo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Database
 */
interface ContextStrategyInterface extends DataAccessStrategyInterface
{
    /**
     * Retorna os usu�rios da tabela UsuarioTable
     * @return ResultSet
     */
    public function getUsuarios();
}