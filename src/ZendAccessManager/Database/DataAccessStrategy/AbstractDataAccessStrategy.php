<?php

namespace ZendAccessManager\Database\DataAccessStrategy;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * Class AbstractDataAccessStrategy
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Database\DataAccess
 */
abstract class AbstractDataAccessStrategy implements DataAccessStrategyInterface
{
    /**
     * @var TableGatewayInterface
     */
    protected $tableGateway;

    /**
     * Retorna a classe de acesso a dados dessa estratégia
     * @return TableGatewayInterface
     */
    public function getTableGateway()
    {
        return $this->tableGateway;
    }

    /**
     * Define o Tablegateway da estratégia
     * @param TableGatewayInterface $tableGateway
     */
    public function setTableGateway(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
}