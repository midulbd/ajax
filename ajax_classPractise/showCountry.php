<!DOCTYPE html>
<html>

<head>
    <title>Country get</title>

</head>
<body>

<h2>Let AJAX change this text</h2>
<button type="button" onClick="xml()">Click it</button>

    <p id="demo"></p>
<script>
    function xml()
    {
        var xmlhttp;

        if (window.XMLHttpRequest)
        {
            xmlhttp=new XMLHttpRequest();
        }
        else
        {
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //alert(xmlhttp.responseText);
                var objCountries = JSON.parse(xmlhttp.responseText);
				for (i=0;i<objCountries.countries.length;i++)
						
			
	
				 alert(objCountries.countries);
            }
        }
        xmlhttp.open("GET","country.txt",true);
        xmlhttp.send();
    }



</script>
</body>
</html>