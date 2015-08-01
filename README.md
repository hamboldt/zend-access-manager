# zend-access-manager

[![Build Status](https://scrutinizer-ci.com/g/hamboldt/zend-access-manager/badges/build.png?b=master)](https://scrutinizer-ci.com/g/hamboldt/zend-access-manager/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hamboldt/zend-access-manager/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/hamboldt/zend-access-manager/?branch=master)

Estrutura genérica de controle de acesso para o Zend Framework 2.


### Exemplo prático final

Essa biblioteca foi desenvolvida para atender uma demanda de desenvolvedores que precisam
adaptar

```php
class IndexController extends AbstractActionController
{
  public function indexAction()
  {
    // Definindo qual é o contexto ao qual a aplicação deverá
    // Se adaptar para contruir o resultado apropriadamente.
    $currentContext = $this->getRequest();
    
    // Obtém uma estratégia de acesso a dados passando qual é
    // o contexto atual. Esse método deverá fazer o tratamento.
    $dataAccessStrategy = DataStrategyManager::getStrategyFor($currentContext);
    
    // Acessa os dados utilizando a estratégia fornecida
    $data = $dataAccessStrategy->fetchPartners();
    
    // Obtém a estratégia de exibição de dados que será
    // aplicada ao ViewModel.
    $dataDisplayStrategy = DisplayStrategyManager:getStrategyFor($currentContext);
    
    // Constrói o modelo visual
    $viewModel = new ViewModel();
    $viewModel->setTemplate($dataDisplayStrategy->getTemplate());
    $viewModel->setVariable('partners', $data);
    return $viewModel;
  }
}
```
