function validar(){
    var expletras="^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$";
    const nombre_dis=document.getElementById("nomdis");
    const descripcion_dis=document.getElementById("descdis");

    if(nombre_dis.value===""){
        alert("El campo nombre esta vacio");
        return false;
    }
    else if(nombre_dis.value.match(expletras)==null){
        alert("No se permiten numeros en el nombre");
        return false;
    }
    else if(nombre_dis.value.length<3||nombre_dis.value.length>10){
        alert("El nombre es muy largo o muy corto");
        return false;
    }
    else if(descripcion_dis.value.length===0){
        return true;
    }

    else if(descripcion_dis.value.match(expletras)==null){
        alert("No se permiten numeros en la descripcion");
        return false;
    }
    
    else if(descripcion_dis.value.length>100){
        alert("la descripcion es muy larga");
        return false;
    }
    











}