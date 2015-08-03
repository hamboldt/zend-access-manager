<?php

namespace Tests\ZendAccessManager\Database;

use ZendAccessManager\StrategyManager\AbstractStrategyManager;

/**
 * Class StrategyManager
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package Tests\ZendAccessManager\Database
 */
class StrategyManager extends AbstractStrategyManager
{

    /**
     * Configura o StrategyManager. Aqui deverão ser adicionados
     * os arquivos de configuração.
     */
    public function configure()
    {
        $this->getDictionary()->add('ContextA', new ContextAStrategy());
        $this->getDictionary()->add('ContextB', new ContextBStrategy());
    }

    /**
     * Busca uma estratégia para um determinado contexto.
     * @param $context
     * @return mixed
     */
    public function getStrategyForContext($context)
    {
        return $this->getDictionary()->get($context);
    }
}