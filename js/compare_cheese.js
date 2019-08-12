function loadDoc() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
myFunction(this);
    }
  };
xhttp.open("GET", "cheese1.xml", true);
xhttp.send();
}
function myFunction(xml) {
var i;
var xmlDoc = xml.responseXML;
var table="<tr><th>Item</th><th>Poetry by Love</th><th>Pizza Express</th><th>Chantilly</th><th>Cake Cafe</th></tr>";
var x = xmlDoc.getElementsByTagName("list");
for (i = 0; i <x.length; i++) { 
table += "<tr><td>" +
x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>"+
x[i].getElementsByTagName("cost1")[0].childNodes[0].nodeValue +
    "</td><td>" +
x[i].getElementsByTagName("cost2")[0].childNodes[0].nodeValue +
    "</td><td>" +
x[i].getElementsByTagName("cost3")[0].childNodes[0].nodeValue +
    "</td><td>" +
x[i].getElementsByTagName("cost4")[0].childNodes[0].nodeValue +
    "</td></tr>" ;
  }
document.getElementById("demo").innerHTML = table;
}