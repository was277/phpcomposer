<?php
/**
 * Created by sheldon
 * 2021/02/25
 */

 $m = new TestClass();
 $m->show();

 function __autoload($className){
    require $className . '.php';
 }