<script>
function showList(str, typeSearch) { // eerste dropdownlist
console.log(typeSearch);
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				if(typeSearch == "list"){
					var myArr = JSON.parse(xmlhttp.responseText);
					printArray(myArr);
				}
				if(typeSearch == "answer"){
					 document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
				}
            }
        }
		xmlhttp.open("GET","models/search_result.php?q="+str+"&type="+typeSearch,true);
        xmlhttp.send();
    }
}
function printArray(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
		// console.log(arr[i]);
		out += '<p><span id="'  + arr[i] + '" onClick="showList(this.id,\'answer\')">'+ arr[i] + '</span></p>';
    }
    document.getElementById("txtHint").innerHTML = out;
	
}
</script>
<header>
	<div id="nav">
		<ul>
			<li><a href="?page=home">Home</a></li>
			<li><a href="?page=songs">Songs</a></li>
			<li><a href="?page=about">About</a></li>
			<li><a href="?page=featured">Featured</a></li>
		</ul>
		<div id="search">
		<form>
			<input type = "text" name="search" onKeyUp="showList(this.value, 'list')" placeholder="Search...">
			<div id = "txtHint"><p>Hier komen de resultaten</p></div>
		</form>
	</div>
	</div>
</header>
<div id="wrapper">