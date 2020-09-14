<?php 
    namespace mvc;

    class App{
        
        private $view;

        public function __construct(){
            $this->view = new \views\testView(null, null);
        }

        public function __toString(){
            return $this->view->getHTML();
        }

    }
?>