<?php

namespace Tests\ZendAccessManager\Database;

use ZendAccessManager\Database\StrategyManager\AbstractStrategyManager;
use ZendAccessManager\Database\StrategyManager\Exception\StrategyNotFoundException;

class StrategyManager extends AbstractStrategyManager
{

    /**
     * Configura as estratégias
     * @return void
     */
    public function setUpStrategies()
    {
        $this->setStrategy(0, new ContextAStrategy());
        $this->setStrategy(1, new ContextBStrategy());
    }

    /**
     * Retorna uma estratégia adequada para um contexto específico.
     * @param $context
     * @return ContextStrategyInterface
     * @throws StrategyNotFoundException
     */
    public static function getStrategyFor($context)
    {
        $sm = new StrategyManager();
        return $sm->getStrategy($context);
    }
}