<?php

namespace Tests\ZendAccessManager\Database;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;

/**
 * Class UsuarioTable
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Database
 */
class UsuarioTable extends AbstractTableGateway
{
    /**
     * Construtor.
     */
    public function __construct()
    {
        $this->table = 'cad_usuario';
        $this->adapter = GlobalAdapterFeature::getStaticAdapter();
    }
}