/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var espaciosNombre=false;
var espaciosApellidos=false;
var espaciosDireccion=false;
var barrasFecha=0;
var arrobaCorreo=false;
var recorrido=0;
var ancho=0;
var band1=false;
var band2=false;
var band3=false;
var ext1 ="ups.edu.ec";
var ext2 ="est.ups.edu.ec";
var bext=0;
function validarCamposObligatorios() {
    var bandera = true;
    for(var i = 0; i < document.forms[0].elements.length; i++){
        var elemento = document.forms[0].elements[i];
        if(elemento.value == '' && elemento.type == 'text'){            
            elemento.value="Vacio";
            elemento.className="error";
            bandera = false;
        }else {
            if((elemento.id=="Nombres") && !espaciosNombre){
                elemento.value="Incompleto";
                elemento.className="error";
                bandera = false;
        }        
        if((elemento.id=="Apellidos") && !espaciosApellidos){
                elemento.value="Incompleto";
                elemento.className="error";
                bandera = false;
        }
        if((elemento.id=="Cedula" | elemento.id=="Telefono") && elemento.value.length<10){
                elemento.value="Incompleto";
                elemento.className="error";
                bandera = false;
        }
        if((elemento.id=="Fecha") && elemento.value.length<10){
                elemento.value="Incompleto";
                elemento.className="error";
                bandera = false;
        }
        if((elemento.id=="Correo") && ((bext==1 && recorrido<(ext1.length-1)) | (bext==2 && recorrido<(ext2.length-1)) | bext==0)){
                elemento.value="Incompleto";
                elemento.className="error";
                bandera = false;
        }
        }
    } 
    if(!bandera){
        alert('Formulario erroneo; revisar campos');
    } 
    return bandera; 
}
function validarNombres(elemento) {    
    if(elemento.value.length > 0){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);        
        if((miAscii >= 97 && miAscii <= 122) | (miAscii==32 && !espaciosNombre) | (miAscii >= 65 && miAscii <= 90)){
            if (miAscii==32) {
                espaciosNombre=true;
            }
            return true; 
        } else { 
            elemento.value = elemento.value.substring(0, elemento.value.length-1);
            return false;
        }
    } else {
        
        return true; 
    }
}
function validarApellidos(elemento) {    
    if(elemento.value.length > 0){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);        
        if((miAscii >= 97 && miAscii <= 122) | (miAscii==32 && !espaciosApellidos) | (miAscii >= 65 && miAscii <= 90)){
            if (miAscii==32) {
                espaciosApellidos=true;
            }
            return true; 
        } else { 
            elemento.value = elemento.value.substring(0, elemento.value.length-1);
            return false;
        }
    } else {
        return true; 
    }
}
function validarDireccion(elemento) {    
    if(elemento.value.length > 0){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);        
        if((miAscii >= 97 && miAscii <= 122) | (miAscii==32 && !espaciosDireccion) | (miAscii >= 65 && miAscii <= 90)){
            if (miAscii==32) {
                espaciosDireccion=true;
            }
            return true; 
        } else { 
            elemento.value = elemento.value.substring(0, elemento.value.length-1);
            return false;
        }
    } else {
        return true; 
    }
}
function validarCedula(elemento) {    
    if(elemento.value.length > 0){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);        
        if((miAscii >= 48 && miAscii <= 57) && (elemento.value.length<=10)) {            
            if (elemento.value.length==10) {                
                var suma=0;
                for (var i = 0; i < 9; i++) {
                    var temp;
                    if((i%2)==1) {
                        temp=(elemento.value.charCodeAt(i)-48);                        
                    }else {
                        temp=((elemento.value.charCodeAt(i)-48)*2);                        
                    }
                    if(temp>9) {
                        temp-=9;
                    }
                    suma+=temp;                    
                }                
                suma%=10;
                if(!(suma==0)) {                    
                    suma=10-suma;
                }
                console.log(suma);
                if ((elemento.value.charCodeAt(9)-48)==suma) {
                    return true;
                }else {
                    elemento.value = elemento.value.substring(0, elemento.value.length-1);
                    return false;
                }
            }
            return true; 
        } else { 
            elemento.value = elemento.value.substring(0, elemento.value.length-1);
            return false;
        }
    } else {
        return true; 
    }
}
function validarTelefono(elemento) {
    if(elemento.value.length > 0){        
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);
        if((miAscii >= 48 && miAscii <= 57) && (elemento.value.length<=10)){            
            return true; 
        } else {
            elemento.value = elemento.value.substring(0,elemento.value.length-1);
            return false;
        }
    } else {
        return true; 
    }
}
function validarFecha(elemento) {    
    if(elemento.value.length > 0){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);
        if((miAscii >= 48 && miAscii <= 57) && (!(elemento.value.length==3 | elemento.value.length==6)) && (elemento.value.length<=10)) {
                return true;
        }else {            
            if((elemento.value.length==3 | elemento.value.length==6) && miAscii==47) {
                barrasFecha++;
                return true;
            }else {
                elemento.value = elemento.value.substring(0,elemento.value.length-1);
                return false;            
            }
        }        
    } else {
        return true; 
    }
}
function validarCorreo(elemento) {    
    if(elemento.value.length > 0){
        var miAscii = elemento.value.charCodeAt(ancho);        
        if(((miAscii>=97 && miAscii<=122) | (miAscii >= 65 && miAscii <= 90) && !arrobaCorreo)) {
            ancho++;
            return true;            
        }else {
            if(miAscii==64 && !arrobaCorreo && ancho>=3) {
                arrobaCorreo=true;
                ancho++;
                return true;                
            } else {
                if(ancho<elemento.value.length) {
                    if((miAscii==ext1.charCodeAt(recorrido)) |(miAscii==ext2.charCodeAt(recorrido))){
                        if(miAscii==ext1.charCodeAt(recorrido) && recorrido==0){
                            bext=1;
                        }
                        if(miAscii==ext2.charCodeAt(recorrido) && recorrido==0){
                            bext=2;
                        }
                        recorrido++;
                        ancho++;
                        return true;
                    }else {
                        elemento.value = elemento.value.substring(0,ancho);
                        return false;
                    }
                }else {
                    elemento.value = elemento.value.substring(0,ancho);
                    return false;
                }
            }            
        }        
     }else{
         return true;
     }
        
}
function validarClave(elemento) {    
    if(elemento.value.length > 0){
        var miAscii = elemento.value.charCodeAt(elemento.value.length-1);
        if((miAscii >= 97 && miAscii <= 122) | (miAscii >= 65 && miAscii <= 90) | miAscii==64 | miAscii==95 | miAscii==36) {
            if((miAscii >= 97 && miAscii <= 122)){
                band1=true;                
            }
            if((miAscii >= 65 && miAscii <= 90)){
                band2=true;                
            }
            if(miAscii==64 | miAscii==95 | miAscii==36){
                band3=true;
            }
            if(elemento.value.length>=8 && band1 && band2 && band3){
                elemento.style.border="none";                
            }            
            return true;
        }else{            
            elemento.value = elemento.value.substring(0,elemento.value.length-1);
            return false;            
        }
    } else {        
        return true; 
    }
}
function vaciar(elemento) {
    elemento.value="";
    elemento.className="entrada";
    switch (elemento.id) {
        case "Nombres":
            espaciosNombre=false;            
            break;
        case "Apellidos":
            espaciosApellidos=false;
            break;
        case "Direccion":
            espaciosDireccion=false;
            break;
        case "Fecha":
            barrasFecha=0;
            break;
        case "Correo":
            arrobaCorreo=false;
            recorrido=0;
            ancho=0;
            break;
        case "Correo":
            arrobaCorreo=false;
            recorrido=0;
            ancho=0;
            bext=0;
            break;
        case "Clave":
            band3=false;
            band2=false;
            band1=false;
            break;
    }
}