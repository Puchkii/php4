<?php
    namespace views;

    class ViewTwo extends \mvc\view {
        public function getHTML(){
            $output = "<p>View Two</p>";

            return $output;
        }
    }
?>