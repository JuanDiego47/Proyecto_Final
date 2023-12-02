function validar(){
    let regrex=/^[a-zA-Z0-9\s]+$/;
    const nombre_salon=document.getElementById("nombre_salon");
    const ubicacion=document.getElementById("ubicacion");

    if(nombre_salon.value===""){
        alert("El campo nombre esta vacio");
        return false;
    }

    else if(nombre_salon.value.match(regrex)==null){
        alert("Nombre con formato incorrecto");
        return false;
    }

    else if(nombre_salon.value.length<3||nombre_salon.value.length>10){
        alert("El nombre es muy largo o muy corto");
        return false;
    }


    if(ubicacion.value===""){
        alert("El campo ubicacion esta vacio");
        return false;
    }

    else if(ubicacion.value.match(regrex)==null){
        alert("Ubicacion con formato incorrecto");
        return false;
    }

    else if(ubicacion.value.length<3||ubicacion.value.length>10){
        alert("El nombre de la ubicacion es muy largo o muy corto");
        return false;
    }

}