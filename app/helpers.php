<?php
// Utilizamos routIs para aplicar un operador ternario y hacer la clase del elemento <li> dinamica
// Los nombres del parametro routeIs hacen referencia a las rutas declaradas
// <li class="{{ request()->routeIs('home') ? 'active' : ''}}"> <a href="/">Home</a> </li>
function setActive($ruteName){
    return request()->routeIs($ruteName) ? 'active' : '';
}


?>