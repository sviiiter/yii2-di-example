<?php

  namespace simple;


  class SimpleTest implements ISimple
  {

    public function make() {
      return 'Hello people';
    }
  }