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
     * Executa a seleção de estratégias de acordo com
     * situações pré-definidas para contextos distintos.
     */
    public function testStrategySelection()
    {
        // Table de usuário
        $table = new UsuarioTable();
        $sm = new StrategyManager();

        // Prepara tabela para execução
        $table->delete(['nome' => 'Lucas']);

        // Cadastra os usuários, um no setor 1, e outro no setor 2.
        // De acordo com a minha regra de negócio definida em minhas estratégias
        // os usuários do setor 1 estarão disponíveis na ContextAStrategy e os
        // usuário do setor 2 estarão acessíveis na ContextBStrategy.
        $table->insert(['nome' => 'Lucas', 'setor' => '1']);
        $table->insert(['nome' => 'Lucas', 'setor' => '2']);

        // Obtém a estratégia que carrega os usuários do setor 1
        $strategy  = $sm->getStrategyForContext('ContextA');
        $usuariosA = $strategy->getUsuarios();
        $this->assertEquals($usuariosA->count(), 1);
        $this->assertEquals($usuariosA->toArray()[0]['setor'], '1');

        // Obtém a estratégia que carrega os usuários do setor 2
        $strategy  = $sm->getStrategyForContext('ContextB');
        $usuariosB = $strategy->getUsuarios();
        $this->assertEquals($usuariosB->count(), 1);
        $this->assertEquals($usuariosB->toArray()[0]['setor'], '2');

        // Limpa tabela após a execução
        $table->delete(['nome' => 'Lucas']);

    }
}