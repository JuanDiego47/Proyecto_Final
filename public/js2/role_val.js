function validar(){
    var ExpRegSoloLetras="^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$";
    const name=document.getElementById("name");
    const label=document.getElementById("label");

    if(name.value===""){
        alert("El campo nombre esta vacio");
        return false;
    }
    
    else if(label.value===""){
        alert("El campo label esta vacio ");
        return false;
    }
    else if(name.value.length<3||nombre_salon.value.length>10){
        alert("El nombre es muy largo o muy corto");
        return false;
    }
    else if(label.value.length<3||nombre_salon.value.length>10){
        alert("El label es muy largo o muy corto");
        return false;
    }

    else if(name.value.match(ExpRegSoloLetras)==null){
        alert("El formato del nombre es incorrecto");
        return false;
    }
    else if(label.value.match(ExpRegSoloLetras)==null){
        alert("El formato del label es incorrecto");
        return false;
    }
    
    

}