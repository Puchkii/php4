<?php 
    namespace views;
    
    class HomeView extends \mvc\View {
        public function getHTML(){
            $output = "<p>Home View</p>";
            return $output;
        }
    }
?>