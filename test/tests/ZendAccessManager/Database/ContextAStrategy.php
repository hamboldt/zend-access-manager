<?php

namespace Tests\ZendAccessManager\Database;

use ZendAccessManager\Database\DataAccessStrategy\AbstractDataAccessStrategy;
use Zend\Db\Sql\Select;

/**
 * ContextAStrategy
 * Estratégia personalizada de acesso aos dados da UsuarioTable.
 *
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Database
 */
class ContextAStrategy extends AbstractDataAccessStrategy implements ContextStrategyInterface
{
    /**
     * Construtor
     */
    public function __construct()
    {
        $this->setTableGateway(new UsuarioTable());
    }

    /**
     * @return mixed
     */
    public function getUsuarios()
    {
        return $this->getTableGateway()->select(function(Select $select){
            $select->where->equalTo('cad_usuario.setor', '1');
        });
    }
}