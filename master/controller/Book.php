<?php

class Book extends Product
{
        public function forms(){

                echo " Please, provide weight ";
                echo "</br> ";
                echo "</br> ";
                
                echo " <input type=\"text\" id=\"weight\" placeholder=\"Weight(KG)\">";
                echo "</br> ";
                echo "</br> ";
                
                echo "<div id=\"type\"   data-value=\"book\">";
                echo "</br> ";
                echo "";
        }

        public function size($values){
                echo "Weight: " . $values. " KG";
        }
}

  