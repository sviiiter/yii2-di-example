# yii2-di-example

Kinda help example described Yii2 Dependency Injection pattern with app and test class

## Installation:

- Add class name into bootstrap section of your application's config file (any of console/config/main.php,
  frontend/config/main.php e.t.c)

```php
    'bootstrap' => [
       // ... 'log'
      'simple\Bootstrap'
    ]
```

###### OR
you can use configure container part of your application's config file instead of usage BootstrapInterface
  ````php
  'container' => [
    'definitions' => [
      'frontend\components\ISimple' => [
        'class' => 'frontend\components\Simple',
      ],
    ],
  ]
````


- add its namespace into "autoload" section of your composer.json

````
    "autoload": {
        "psr-4": {"simple\\": "simple/"}
    }

````

- dump new autoload files

````
composer dump-autoload
````

## Usage

In your example controller:

````php

namespace frontend\controllers;


use simple\ISimple;

class SiteController extends Controller
{

    public function actionIndex(ISimple $s) {// inject your interface's realization Simple.php or SimpleTest.php, or any of others -> profit
      return $s->make(); 
    }
    
}

````



