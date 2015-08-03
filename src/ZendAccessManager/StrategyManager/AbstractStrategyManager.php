<?php

namespace ZendAccessManager\StrategyManager;

use Collections\Dictionary;

/**
 * Class AbstractStrategyManager
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\StrategyManager
 */
abstract class AbstractStrategyManager implements StrategyManagerInterface
{
    /**
     * @var Dictionary
     */
    private $dictionary;

    /**
     * Construtor
     */
    public function __construct()
    {
        $this->dictionary = new Dictionary();
        $this->configure();
    }

    /**
     * Retorna o dicionário de estratégias
     * @return Dictionary
     */
    public function getDictionary()
    {
        return $this->dictionary;
    }

    /**
     * Define o dicionário de estratégias
     * @param Dictionary $dictionary
     */
    public function setDictionary(Dictionary $dictionary)
    {
        $this->dictionary = $dictionary;
    }

    /**
     * Adiciona uma estratégia no controlador de estratégias.
     *
     * @param $name Nome da estratégia
     * @param $strategies Array de estratégias
     */
    public function addStrategy($name, $strategies)
    {
        $this->dictionary->add($name, $strategies);
    }

    /**
     * Busca por uma estratégia a partir do nome definido para a mesma.
     * @param $name
     * @return mixed
     * @throws StrategyNotFoundException
     */
    public function getStrategy($name)
    {
        if(!$this->dictionary->containsKey($name))
            throw new StrategyNotFoundException();

        return $this->dictionary->get($name);
    }
}