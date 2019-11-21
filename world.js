window.onload = function()
{
    var lookbutton = document.getElementById("#lookup");
    
    
    lookbutton.addEventListener("click", function()
    {
	var httpRequest = new XMLHttpRequest();
        var srch = document.getElementById("#country").value;
	var url="world.php?country="+srch
        
        
    }
 
    
    
    function getResu() {
	  if(httpRequest.readyState === XMLHttpRequest.DONE) {
          if(httpRequest.status === 200) {
            var response = httpRequest.responseText;
            var resultDiv = document.getElementById("result");
            resultDiv.innerHTML = response;
          } 
}
}
}
