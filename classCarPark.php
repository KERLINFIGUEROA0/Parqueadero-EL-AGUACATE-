<?php
require_once "classCliente.php";

final class Parqueadero {
    private $intPisos;
    private $intEspaciosPorPiso;
    private $arrClientes = [];

    public function __construct(int $intPisos, int $intEspaciosPorPiso) {
        $this->intPisos = $intPisos;
        $this->intEspaciosPorPiso = $intEspaciosPorPiso;

        for ($numeroPisoParqueadero = 0; $numeroPisoParqueadero < $intPisos; $numeroPisoParqueadero++) {
            $this->arrClientes[$numeroPisoParqueadero] = array_fill(0, $intEspaciosPorPiso, null);
        }
    }

    public function registrarCliente(Cliente $cliente): bool {
        for ($numeroPisoParqueadero = 0; $numeroPisoParqueadero < $this->intPisos; $numeroPisoParqueadero++) {
            for ($EspacioDisponible = 0; $EspacioDisponible < $this->intEspaciosPorPiso; $EspacioDisponible++) {
                if ($this->arrClientes[$numeroPisoParqueadero][$EspacioDisponible] === null) {
                    $this->arrClientes[$numeroPisoParqueadero][$EspacioDisponible] = $cliente;
                    return true;
                }
            }
        }
        return false; 
    }

    public function liberarEspacio(string $Placa): bool {
        foreach ($this->arrClientes as $numeroPisoParqueadero => $espacios) {
            foreach ($espacios as $EspacioDisponible => $cliente) {
                if ($cliente !== null && $cliente->strPlaca === $Placa) {
                    $this->arrClientes[$numeroPisoParqueadero][$EspacioDisponible] = null;
                    return true;
                }
            }
        }
        return false;
    }

    public function getInfoParqueadero(): array {
        $arrParqueadero = [];
        for ($numeroPisoParqueadero = 0; $numeroPisoParqueadero < $this->intPisos; $numeroPisoParqueadero++) {
            for ($EspacioDisponible = 0; $EspacioDisponible < $this->intEspaciosPorPiso; $EspacioDisponible++) {
                if ($this->arrClientes[$numeroPisoParqueadero][$EspacioDisponible] !== null) {
                    $arrParqueadero[] = [
                        'Piso' => $numeroPisoParqueadero,
                        'Espacio' => $EspacioDisponible,
                        'Cliente' => $this->arrClientes[$numeroPisoParqueadero][$EspacioDisponible]->getInfoCliente()
                    ];
                }
            }
        }
        return $arrParqueadero;
    }

    public function buscarClientePorPlaca(string $strPlaca): ?array {
        foreach ($this->arrClientes as $numeroPisoParqueadero => $espacios) {
            foreach ($espacios as $EspacioDisponible => $cliente) {
                if ($cliente !== null && $cliente->strPlaca === $strPlaca) {
                    return [
                        'Piso' => $numeroPisoParqueadero,
                        'Espacio' => $EspacioDisponible,
                        'Cliente' => $cliente->getInfoCliente()
                    ];
                }
            }
        }
        return null;
    }

    public function calcularPrecioPorPlaca(string $strPlaca): ?float {
        foreach ($this->arrClientes as $espacios) {
            foreach ($espacios as $cliente) {
                if ($cliente !== null && $cliente->strPlaca === $strPlaca) {
                    return $cliente->calcularPrecio();
                }
            }
        }
        return null; 
    }
}
?>
