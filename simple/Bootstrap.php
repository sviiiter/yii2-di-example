<?php


  namespace simple;


  use yii\base\Application;
  use yii\base\BootstrapInterface;

  class Bootstrap implements BootstrapInterface
  {

    public function bootstrap($app) {
      $container = \Yii::$container;
      $container->setDefinitions([
        'simple\ISimple' => [
          'class' => 'simple\Simple',
//          'class' => 'simple\SimpleTest'
        ]
      ]);
    }

  }