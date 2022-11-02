// funcion para autocompletar el campo URL del proyecto en el formulario.
function autofillUrl(){
    var $url = document.getElementById('title').value;
    var $urlLowerCase = $url.toLowerCase();
    var $urlFinal = $urlLowerCase.replaceAll(' ', '-');
    document.getElementById('url').value=$urlFinal
}
