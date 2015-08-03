<?php

namespace Tests\ZendAccessManager\Database;

use ZendAccessManager\StrategyManager\AbstractStrategyManager;

/**
 * Class StrategyManager
 * @author  Lucas A. de Ara�jo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Database
 */
class StrategyManager extends AbstractStrategyManager
{

    /**
     * Configura o StrategyManager. Aqui dever�o ser adicionados
     * os arquivos de configura��o.
     */
    public function configure()
    {
        $this->getDictionary()->add('ContextA', new ContextAStrategy());
        $this->getDictionary()->add('ContextB', new ContextBStrategy());
    }

    /**
     * Busca uma estrat�gia para um determinado contexto.
     * @param $context
     * @return mixed
     */
    public function getStrategyForContext($context)
    {
        return $this->getDictionary()->get($context);
    }
}