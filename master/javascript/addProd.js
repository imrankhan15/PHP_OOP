
function productDescAlert(){
  

  var data_missing = false;
  var data_type_wrong = false;
  var sku_exists = false;

  $("input").each(function() {
    var element = $(this);
 
    if (element.val() == "" ) {
    
      data_missing = true;
     
    
    }
    
    else {
      
    }
    
  });


  $("#productDetails input").each(function() {
    var element = $(this);
 
   
    if ($.trim($(this).val()).length != 0 && !isNaN(element.val()) ) {
   
    }
    
    else {
      data_type_wrong = true;
    }
    
  });

  var priceVal = document.getElementById('price').value;

 
    if (priceVal != "" ) {
      if ($.trim(priceVal).length != 0 && !isNaN(priceVal) ) {
    
      }
      
      else {
        data_type_wrong = true;
      }
  }






  if( data_missing == true){
    alert('Please, submit required data');
    return false;
  }

  else if( data_type_wrong == true){
    alert('Please, provide the data of indicated type');
    return false;
  }
 

 else {
  var skuExists = document.getElementById("skuExists").value;
 
  if(skuExists == 'notOk'){
    alert('SKU already exists');
    return false;
  }
  else {
    return true;
  }

 
 } 
 

 

}




function productDesc(){
    var values = $("#productDetails input").map(function() {
    return $(this).val()
    }).get().join("x");

   

    var type = document.getElementById('type').getAttribute('data-value');
    var xmlhttp=new XMLHttpRequest();
   
   
    xmlhttp.onreadystatechange=function() {
     
      if (this.readyState==4 && this.status==200) {
        document.getElementById("desc").value=this.responseText;
       
        return true;
      }
    }
    xmlhttp.open("GET","../controller/getSize.php?type="+type + "&values="+values,true);
    xmlhttp.send();

    var sku = document.getElementById('sku').value;
    var xmlhttp=new XMLHttpRequest();
  
  
    xmlhttp.onreadystatechange=function() {
    
      if (this.readyState==4 && this.status==200) {
      
        if(this.responseText == 'notOk'){
          document.getElementById("skuExists").value='notOk';
        
        
        }
        else {
          document.getElementById("skuExists").value='ok';
        }
        
        
      }
    }
    xmlhttp.open("GET","../controller/checkSKU.php?sku="+sku,false);
    xmlhttp.send();
    
    
}

function getForm(type) {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("productDetails").innerHTML=this.responseText;
        
      }
    }
    xmlhttp.open("GET","../controller/getForms.php?type="+type,true);
    xmlhttp.send();
}