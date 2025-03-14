<?php

namespace BwlPlugin\HelloWorldPackage;

/**
 * Class MyClass
 * 
 * @package BwlPlugin\HelloWorldPackage
 * @version 1.0.0
 * @author Bwl<hkhan.cse@gmail.com>
 * @category BwlPlugin
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */
class HelloWorld
{
  public function sayHelloWorld()
  {
    return "Hello from HelloWorld Class! " . $this->get_current_time();
  }

  public function get_current_time()
  {
    return date('Y-m-d H:i:s');
  }
}