<?php

namespace Tests\ZendAccessManager\Database;

use ZendAccessManager\Database\DataAccessStrategy\AbstractDataAccessStrategy;
use Zend\Db\Sql\Select;

/**
 * ContextBStrategy
 * Estratégia personalizada de acesso aos dados da UsuarioTable.
 *
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Database
 */
class ContextBStrategy extends AbstractDataAccessStrategy implements ContextStrategyInterface
{
    /**
     * Construtor
     */
    public function __construct()
    {
        $this->setTableGateway(new UsuarioTable());
    }

    public function getUsuarios()
    {
        return $this->getTableGateway()->select(function(Select $select){
            $select->where->equalTo('cad_usuario.setor', '2');
        });
    }
}