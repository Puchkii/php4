<?php
    namespace views;

    class FormView extends \mvc\View {

        public function getHTML(){
            $output = "<p>Vul dit formulier in</p><br>";
            $output .= "<form method='POST'>";
            $output .= "<p>Username <input type='text' name='username'";
            $output .= "<p>Phone number <input type='number' name='phonenumber'";
            $output .= "<input type='submit' name='submit'";
            $output .= "</form><br>";

            $Username = filter_var($this->controller->getGetData("Username"), FILTER_SANITIZE_STRING);
            $Phonenumber = filter_var($this->controller->getGetData("Phonenumber"), FILTER_SANITIZE_STRING);

            $output .= "<br><input type='submit'>";

            $output .= "<h3>Username: ". $Username. "</h3>";
            $output .= "<h3>Phonenumber: ". $Phonenumber. "</h3>";

            return $output;
        }
    }
?>