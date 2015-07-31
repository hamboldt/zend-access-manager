<?php

namespace ZendAccessManager\Database\StrategyManager;

use Collections\ArrayList;
use ZendAccessManager\Database\StrategyManager\Exception\StrategyNotFoundException;

/**
 * Interface StrategyManagerInterface
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Database\DataAccess
 */
interface StrategyManagerInterface
{
    /**
     * Configura as estratégias
     * @return void
     */
    public function setUpStrategies();

    /**
     * Retorna o conjunto de estratégias
     * @return ArrayList
     */
    public function getStrategyCollection();

    /**
     * Retorna uma estratégia de acesso a dados
     * @param $name
     * @return DataAccessStrategyInterface
     */
    public function getStrategy($name);

    /**
     * Adiciona uma estratégia dentro do strategy manager.
     * @param $name
     * @param DataAccessStrategyInterface $d
     * @return mixed
     */
    public function setStrategy($name, DataAccessStrategyInterface $d);

    /**
     * Retorna uma estratégia adequada para um contexto específico.
     * @param $context
     * @return mixed
     * @throws StrategyNotFoundException
     */
    public static function getStrategyFor($context);
}