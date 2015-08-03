<?php

namespace Tests\ZendAccessManager\StrategyManager;

use ZendAccessManager\StrategyManager\AbstractStrategyManager;
use ZendAccessManager\StrategyManager\StrategyNotFoundException;

/**
 * Class StrategyManager
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\StrategyManager
 */
class StrategyManager extends AbstractStrategyManager
{
    /**
     * Configura o StrategyManager. Aqui deverão ser adicionados
     * os arquivos de configuração.
     */
    public function configure()
    {
        $this->addStrategy('a', 'Lucas');
        $this->addStrategy('b', 'Adolf');
    }

    /**
     * Busca uma estratégia para um determinado contexto.
     * @param $context
     * @return mixed
     * @throws StrategyNotFoundException
     */
    public function getStrategyForContext($context)
    {
        switch($context)
        {
            case 1995: return $this->getStrategy('a'); break;
            case 1889: return $this->getStrategy('b'); break;
        }

        // No caso de nenhuma estratégia ter sido encontrada.
        throw new StrategyNotFoundException();
    }
}

/**
 * Class StrategyManagerTest
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\StrategyManager
 */
class StrategyManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testManager(){

        $sm = new StrategyManager();

        // Lucas
        $nascimento = 1995;
        $strategy = $sm->getStrategyForContext($nascimento);
        $this->assertEquals($sm->getDictionary()->get('a'), $strategy);

        // Adolf
        $nascimento = 1889;
        $strategy = $sm->getStrategyForContext($nascimento);
        $this->assertEquals($sm->getDictionary()->get('b'), $strategy);

    }
}