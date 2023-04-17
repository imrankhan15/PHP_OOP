<?php


 class Furniture extends Product
{
    
  public function forms(){
          echo " Please, Provide Dimensions";
          echo "</br> ";
          echo "</br> ";
          echo " <input type=\"text\" id=\"height\" placeholder=\"Height(CM)\">";
          echo "</br> ";
          echo " <input type=\"text\" id=\"width\" placeholder=\"Width(CM)\">";
          echo "</br> ";
          echo " <input type=\"text\" id=\"length\" placeholder=\"Length(CM)\">";
          echo "</br> ";
          echo "<div id=\"type\"   data-value=\"furniture\">";
          echo "</br> ";
          echo "";
          


    
  }
  public function size($values){


    echo "Dimension: ". $values;



  }

}
