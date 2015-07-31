<?php

namespace Tests\ZendAccessManager\Database;

/**
 * Class StrategyManagerTest
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Database
 */
class StrategyManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testStrategySelection()
    {
        // Cadastra os usuários, um no setor 1, e outro no setor 2.
        // De acordo com a minha regra de negócio definida em minhas estratégias
        // os usuários do setor 1 estarão disponíveis na ContextAStrategy e os
        // usuário do setor 2 estarão acessíveis na ContextBStrategy.
        $table = new UsuarioTable();
        $table->insert(['nome'   => 'Lucas', 'setor'  => '1']);
        $table->insert(['nome'   => 'Lucas', 'setor'  => '2']);

        // Obtém a estratégia que carrega os usuários do setor 1
        $strategy  = StrategyManager::getStrategyFor(0);
        $usuariosA = $strategy->getUsuarios();
        var_dump($usuariosA->toArray()[0]);
        $this->assertEquals($usuariosA->count(), 1);

        // Obtém a estratégia que carrega os usuários do setor 2
        $strategy  = StrategyManager::getStrategyFor(1);
        $usuariosB = $strategy->getUsuarios();
        var_dump($usuariosB->toArray()[0]);
        $this->assertEquals($usuariosB->count(), 1);

        $table->delete(['nome' => 'Lucas']);

    }
}