let url =String(window.location);
let eror=false;
let msg=false;
if(url.indexOf("usuario=false") != -1)
{
    alert("Usuario no registrado");
    error=true;
}
else if(url.indexOf("registro=true") != -1)
{
    alert("Regsitro exitoso");
    error=true;
}
else if(url.indexOf("existente=true") != -1)
{
    alert("El usuaro ya se encuentra registrado");
    error=true;
}else if(url.indexOf("nueva_clave=true") != -1){
    alert("Su contraseña ha sido reestablecida correctamente");
    msg = true;
}

if(error)
{
    location.href=url.substring(0,url.indexOf("?"));
}