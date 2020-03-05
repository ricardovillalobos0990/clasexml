"use strict";
/*let url ="https://adsitarde.000webhostapp.com/cd.xml";*/
let url ="cd.xml";
fetch(url)
.then (respuesta => respuesta.text())
.then(datos => {
    console.log(datos);
});