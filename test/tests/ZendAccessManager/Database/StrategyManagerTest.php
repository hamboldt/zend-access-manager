<?php

namespace Tests\ZendAccessManager\Database;

/**
 * Class StrategyManagerTest
 * @author  Lucas A. de Ara�jo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Database
 */
class StrategyManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testStrategySelection()
    {
        // Cadastra os usu�rios, um no setor 1, e outro no setor 2.
        // De acordo com a minha regra de neg�cio definida em minhas estrat�gias
        // os usu�rios do setor 1 estar�o dispon�veis na ContextAStrategy e os
        // usu�rio do setor 2 estar�o acess�veis na ContextBStrategy.
        $table = new UsuarioTable();
        $table->insert(['nome'   => 'Lucas', 'setor'  => '1']);
        $table->insert(['nome'   => 'Lucas', 'setor'  => '2']);

        // Obt�m a estrat�gia que carrega os usu�rios do setor 1
        $strategy  = StrategyManager::getStrategyFor(0);
        $usuariosA = $strategy->getUsuarios();
        var_dump($usuariosA->toArray()[0]);
        $this->assertEquals($usuariosA->count(), 1);

        // Obt�m a estrat�gia que carrega os usu�rios do setor 2
        $strategy  = StrategyManager::getStrategyFor(1);
        $usuariosB = $strategy->getUsuarios();
        var_dump($usuariosB->toArray()[0]);
        $this->assertEquals($usuariosB->count(), 1);

        $table->delete(['nome' => 'Lucas']);

    }
}