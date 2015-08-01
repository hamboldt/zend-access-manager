<?php

namespace Tests\ZendAccessManager\Database;

use ZendAccessManager\Database\StrategyManager\AbstractStrategyManager;
use ZendAccessManager\Database\StrategyManager\Exception\StrategyNotFoundException;

/**
 * Class StrategyManager
 * @author  Lucas A. de Ara�jo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Database
 */
class StrategyManager extends AbstractStrategyManager
{

    /**
     * Configura as estrat�gias
     * @return void
     */
    public function setUpStrategies()
    {
        $this->setStrategy(0, new ContextAStrategy());
        $this->setStrategy(1, new ContextBStrategy());
    }

    /**
     * Retorna uma estrat�gia adequada para um contexto espec�fico.
     * @param $context
     * @return ContextStrategyInterface
     * @throws StrategyNotFoundException
     */
    public static function getStrategyFor($context)
    {
        $sm = new StrategyManager();

        switch($context)
        {
            case "ContextA":
                return $sm->getStrategy(0);

            case "ContextB":
                return $sm->getStrategy(0);
        }
    }
}