<?php 
    namespace mvc;

    abstract class Controller implements \mvc\interfaces\Controller {
        private $model;

        public function __construct($model){
            $this->model->$model;
        }
    }
?>