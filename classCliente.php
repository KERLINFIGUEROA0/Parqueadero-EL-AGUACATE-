<?php
require_once "classVehiculo.php";

class Cliente extends Vehiculo
{
    public $strNombre;
    public $strDocumento;

    public function __construct(String $strPlaca, String $strMarca, String $strColor, String $strHoraIngreso, String $strNombre, String $strDocumento, String $strHoraSalida = null)
    {
        parent::__construct($strPlaca, $strMarca, $strColor, $strHoraIngreso, $strHoraSalida);
        $this->strNombre = $strNombre;
        $this->strDocumento = $strDocumento;
    }

    public function getInfoCliente()
    {
        return [
            'Nombre' => $this->strNombre,
            'Documento' => $this->strDocumento,
            'Vehiculo' => $this->getInfoVehi()
        ];
    }
}
?>
