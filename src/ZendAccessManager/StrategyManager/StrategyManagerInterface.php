<?php

namespace ZendAccessManager\StrategyManager;

use Collections\Dictionary;


/**
 * Interface StrategyManagerInterface
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 */
interface StrategyManagerInterface
{
    /**
     * Configura o StrategyManager. Aqui deverão ser adicionados
     * os arquivos de configuração.
     */
    public function configure();

    /**
     * Retorna o dicionário de estratégias
     * @return Dictionary
     */
    public function getDictionary();

    /**
     * Adiciona uma estratégia no controlador de estratégias.
     *
     * @param $name Nome da estratégia
     * @param $strategies Array de estratégias
     */
    public function addStrategy($name, $strategies);

    /**
     * Busca por uma estratégia a partir do nome definido para a mesma.
     * @param $name
     * @return mixed
     */
    public function getStrategy($name);

    /**
     * Busca uma estratégia para um determinado contexto.
     * @param $context
     * @return mixed
     */
    public function getStrategyForContext($context);
}
