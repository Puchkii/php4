<?php
    namespace views;

    class DbView extends \mvc\View {

        public function getHTML(){

            $data = $this->model->UserData();
            $output = "<table class='datetable'>";
            $output .= "<th>Username</th><th>Phonenumber</th>";

            foreach ($data as $row) {
                $output .= "<tr>";
                $output .= "<td>" . $row['Username'] . "</td>";
                $output .= "<td>" . $row['Phonenumber'] . "</td>";
                $output .= "</tr>";
            }
            $output .= "</table>";

            return $output;
        }
    }
?>