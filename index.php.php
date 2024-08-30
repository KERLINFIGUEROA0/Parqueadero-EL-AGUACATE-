<?php
require_once "classCarPark.php";

$parqueadero = new Parqueadero(4, 10);

$cliente1 = new Cliente("XCD123", "Toyota", "Rojo", "2023-08-28 08:00:00", "Juan Perez", "12345678", "2023-08-28 12:00:00");
$cliente2 = new Cliente("XYZ789", "Honda", "Azul", "2023-08-28 09:00:00", "Maria Lopez", "87654321", "2023-08-28 13:30:00");
$cliente3 = new Cliente("XCD125", "Toyota", "Rojo", "2023-08-28 08:00:00", "Juan Perez", "12345678", "2023-08-28 12:00:00");
$cliente4 = new Cliente("ABC111", "Ford", "Blanco", "2023-08-28 07:30:00", "Carlos Gómez", "22334455", "2023-08-28 10:30:00");
$cliente5 = new Cliente("DEF222", "Chevrolet", "Negro", "2023-08-28 09:45:00", "Lucia Martínez", "33445566", "2023-08-28 12:15:00");
$cliente6 = new Cliente("GHI333", "Nissan", "Gris", "2023-08-28 08:20:00", "Pedro García", "44556677", "2023-08-28 11:20:00");
$cliente7 = new Cliente("JKL444", "Mazda", "Azul", "2023-08-28 10:10:00", "Ana Torres", "55667788", "2023-08-28 13:10:00");
$cliente8 = new Cliente("MNO555", "Hyundai", "Verde", "2023-08-28 07:50:00", "Fernando Ruiz", "66778899", "2023-08-28 10:50:00");
$cliente9 = new Cliente("PQR666", "Kia", "Amarillo", "2023-08-28 09:00:00", "Elena López", "77889900", "2023-08-28 11:30:00");
$cliente10 = new Cliente("STU777", "Volkswagen", "Rojo", "2023-08-28 08:40:00", "Jorge Fernández", "88990011", "2023-08-28 12:10:00");
$cliente11 = new Cliente("VWX888", "Subaru", "Azul", "2023-08-28 07:00:00", "Marta Ortiz", "99001122", "2023-08-28 09:30:00");
$cliente12 = new Cliente("YZA999", "Renault", "Blanco", "2023-08-28 09:30:00", "Sofía Sánchez", "10111213", "2023-08-28 11:00:00");
$cliente13 = new Cliente("BCD000", "Peugeot", "Negro", "2023-08-28 08:15:00", "Luis Mendoza", "11121314", "2023-08-28 10:45:00");

$parqueadero->registrarCliente($cliente1);
$parqueadero->registrarCliente($cliente2);
$parqueadero->registrarCliente($cliente3);
$parqueadero->registrarCliente($cliente4);
$parqueadero->registrarCliente($cliente5);
$parqueadero->registrarCliente($cliente6);
$parqueadero->registrarCliente($cliente7);
$parqueadero->registrarCliente($cliente8);
$parqueadero->registrarCliente($cliente9);
$parqueadero->registrarCliente($cliente10);
$parqueadero->registrarCliente($cliente11);
$parqueadero->registrarCliente($cliente12);
$parqueadero->registrarCliente($cliente13);

$infoCliente = $parqueadero->buscarClientePorPlaca("GHI333");

echo "<h2>Información del cliente por Placa </h2>";
echo "<pre>";
print_r($infoCliente);
echo "</pre>";

$precio = $parqueadero->calcularPrecioPorPlaca("GHI333");

echo "<h2>El precio por estacionamiento es: $" . $precio . "</h2>";
?>
