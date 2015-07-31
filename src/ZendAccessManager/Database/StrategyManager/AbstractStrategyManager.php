<?php

namespace ZendAccessManager\Database\StrategyManager;

use Collections\ArrayList;

/**
 * Class AbstractStrategyManager
 * Abstração que deverá ser implementada com o propósito de ler um contexto
 * e definir qual estratégia de acesso a dados adequada para o mesmo.
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Database\StrategyManager
 */
abstract class AbstractStrategyManager implements StrategyManagerInterface
{
    /**
     * @var ArrayList
     */
    private $strategyCollection;

    /**
     * Construtor
     */
    public function __construct()
    {
        // Executa configuração das estratégias. Nesse trecho de código
        // Irá ser colocadas no sistema, todas as estratégias utilizadas.
        $this->setUpStrategies();

        // Cria uma nova coleção de estratégias
        $this->strategyCollection = new ArrayList();
    }

    /**
     * Retorna o conjunto de estratégias
     * @return ArrayList
     */
    public function getStrategyCollection()
    {
        return $this->strategyCollection;
    }

    /**
     * Retorna uma estratégia de acesso a dados
     * @param $name
     * @return DataAccessStrategyInterface
     */
    public function getStrategy($name)
    {
        return $this->getStrategyCollection()->get($name);
    }

    /**
     * Adiciona uma estratégia dentro do strategy manager.
     * @param $name
     * @param DataAccessStrategyInterface $d
     * @return mixed
     */
    public function setStrategy($name, DataAccessStrategyInterface $d)
    {
        $this->getStrategyCollection()->insert($name, $d);
    }
}