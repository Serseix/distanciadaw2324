
<?php
/**
 * Cuenta regresiva desde un número dado.
 *
 * Esta función recibe un número entero y retorna una cuenta atrás desde ese número hasta 1.
 *
 * @param int $numero El número desde el cual se realizará la cuenta atrás.
 * @return string La cuenta atrás en formato de cadena de texto.
 * @author Sergio Sánchez Rodríguez
 * @version 2.0
 * @internal Esta función solo debe utilizarse internamente para propósitos de demostración.
 */
function cuentaRegresiva($numero) {
    $cuenta_regresiva = "";
    for ($i = $numero; $i >= 1; $i--) {
        $cuenta_regresiva .= $i . " ";
    }
    return $cuenta_regresiva;
}

/**
 * Concatena el nombre y los apellidos.
 *
 * Esta función recibe el nombre y los apellidos como parámetros y retorna una cadena concatenada.
 *
 * @param string $nombre     El nombre del usuario.
 * @param string $apellidos  Los apellidos del usuario.
 * @return string La cadena resultante de la concatenación del nombre y apellidos.
 *
 * @author Sergio Sánchez Rodríguez
 * @version 1.0
 * @internal Esta función es útil para generar nombres completos a partir de partes separadas.
 */
function concatenarNombreCompleto($nombre, $apellidos) {
    return $nombre . " " . $apellidos;
}


