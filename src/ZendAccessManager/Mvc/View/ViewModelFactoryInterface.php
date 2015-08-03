<?php

namespace ZendAccessManager\Mvc\View;

/**
 * Interface ViewModelFactoryInterface
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 */
interface ViewModelFactoryInterface
{
    /**
     * Cria um ViewModel a partir de um template
     * @param $template
     * @return  ViewModel
     */
    public static function makeViewModelFromTemplate($template);
}