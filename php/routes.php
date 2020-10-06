<?php 
    define("DEFAULT_ROUTE", "red");

    $routes = array(
        "home" => array(
            "view" => "HomeView",
            "controller" => "HomeController",
        ),
        "form" => array(
            "view" => "FormView",
            "controller" => "FormController",
        ),
        "test" => array(
            "view" => "TestView",
            "controller" => "TestController",
        ),
        "red" => array(
            "controller" => "RedController",
          ),
        "blue" => array(
            "view" => "blueView",
            "controller" => "BlueController",
        ),
    );
?>