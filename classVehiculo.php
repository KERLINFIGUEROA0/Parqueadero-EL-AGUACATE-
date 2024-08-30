<?php
class Vehiculo {
    public $strPlaca;
    public $strMarca;
    public $strColor;
    public $strHoraIngreso;
    public $strHoraSalida;
    protected $strStatus = "Disponible";

    public function __construct(String $strPlaca, String $strMarca, String $strColor, String $strHoraIngreso, String $strHoraSalida = null) {
        $this->strPlaca = $strPlaca;
        $this->strMarca = $strMarca;
        $this->strColor = $strColor;
        $this->strHoraIngreso = $strHoraIngreso;
        $this->strHoraSalida = $strHoraSalida;
    }
    

    public function getInfoVehi(){
        return [
            'Placa' => $this->strPlaca,
            'Marca' => $this->strMarca,
            'Color' => $this->strColor,
            'HoraIngreso' => $this->strHoraIngreso,
            'HoraSalida' => $this->strHoraSalida,
        ];
    }

    public function calcularPrecio(): float {
        if (!$this->strHoraSalida) {
            return 0.0; 
        }

        $horaIngreso = new DateTime($this->strHoraIngreso);
        $horaSalida = new DateTime($this->strHoraSalida);

        $diferencia = $horaIngreso->diff($horaSalida);
        $horas = $diferencia->h + ($diferencia->days * 24); 
        $precio = $horas * 2; 

        return $precio;
    }
}
?>
