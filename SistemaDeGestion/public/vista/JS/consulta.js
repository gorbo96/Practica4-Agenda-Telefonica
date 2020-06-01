function buscarPorCedula() {    
    var cedula = document.getElementById("cedula").value;
    if (cedula == "") {
         document.getElementById("informacion").innerHTML = ""; 
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest(); 
        } else { 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {                
                document.getElementById("informacion").innerHTML = this.responseText;
            }
        };
        console.log(cedula);
        xmlhttp.open("GET","buscar.php?cedula="+cedula,true);
        xmlhttp.send();
    }
    return false;
}
function buscarPorCorreo() {    
    var correo = document.getElementById("correo").value;
    if (correo == "") {
         document.getElementById("informacion1").innerHTML = ""; 
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest(); 
        } else { 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {                
                document.getElementById("informacion1").innerHTML = this.responseText;
            }
        };
        console.log(cedula);
        xmlhttp.open("GET","buscar1.php?correo="+correo,true);
        xmlhttp.send();
    }
    return false;
}
        