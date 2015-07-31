# zend-access-manager
Access management system for Zend Framework 2 with page construction strategies and page access control for different roles

### Database Access Configuration

```php
<?php

namespace Contracts\Controller;

class IndexController extends AbstractActionController
{
  public function indexAction()
  {
     $user = (new ManagedUserContainer())->getUser();
     $dataAccesLayer = ContractStrategyManager::getStrategyFor($user->getAccessLevel());
     $contracts = $dataAccessLayer->getTopTenContracts();
     
     $viewModel = new ViewModel();
     $viewModel->setVariable('contracts', $contracts);
  } 
}
```
