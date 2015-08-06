<?php

namespace ZendAccessManager\Mvc\View;

use Zend\View\Model\ViewModel;

/**
 * Class ViewModelFactory
 * Fábrica de ViewModels para o ZendFramework 2.
 * @author  Lucas A. de Araújo <lucas@painapp.com.br>
 * @package ZendAccessManager\Mvc\View
 */
class ViewModelFactory
{
    /**
     * Cria um ViewModel a partir de um template
     * @param $template
     * @return  ViewModel
     */
    public static function make($template)
    {
        $viewModel = new ViewModel();
        $viewModel->setTemplate($template);
        return $viewModel;
    }
}