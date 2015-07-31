<?php

namespace ZendAccessManager\Database\DataAccessStrategy;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Interface DataAccessInterface
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Database\DataAccess
 */
interface DataAccessStrategyInterface
{
    /**
     * Retorna a classe de acesso a dados dessa estratégia
     * @return TableGatewayInterface
     */
    public function getTableGateway();

    /**
     * Define o Tablegateway da estratégia
     * @param TableGatewayInterface $tableGateway
     */
    public function setTableGateway(TableGatewayInterface $tableGateway);

}