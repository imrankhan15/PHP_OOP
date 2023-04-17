<?php
 class Dvd extends Product
{
   
     public function forms(){
   

        echo " Please, provide size ";
        echo "</br> ";
        echo "</br> ";
        echo " <input type=\"text\"  id=\"size\" placeholder=\"Size(MB)\"> ";
       
        echo "</br> ";
                echo "</br> ";

        echo "<div id=\"type\"   data-value=\"dvd\">";
        echo "</br> ";
                echo "</br> ";
        echo "";
      
      }

      public function size($values){
            echo "Size: " .$values. " MB";
      }



   
}
