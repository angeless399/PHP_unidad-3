<h1>Vamos a trabajar con POO</h1>

<?php
class Persona {
    public $nombre;
    protected $apellido;
    protected $edad;
    public $genero;
    protected $altura;

    public function __construct($n, $a, $e, $g, $al){
        $this->nombre = $n;
        $this->apellido = $a;
        $this->edad = $e;
        $this->genero = $g;
        $this->altura = $al;
    }

    public function dameDatos(){
        echo 'nombre:'.$this->nombre.'<br>';
        echo 'apellido:'. $this->apellido.'<br>';
        echo 'edad:'.$this->edad.'<br>';
        echo 'genero: '.$this->genero.'<br>';
        echo 'altura: '.$this->altura.'<br>';
        
    }

    public function repite($mensaje){
    echo $this->nombre.' repite: '.$mensaje;
    }
}

class Empleado extends Persona {
    public $puesto;
    public $turno;

    public function __construct($n, $a, $e, $g, $al, $puesto, $turno){
        parent::__construct($n, $a, $e, $g, $al);
        $this->puesto = $puesto;
        $this->turno = $turno;
    }

    public function dameDatos(){
        parent::dameDatos();
        echo 'puesto: '.$this->puesto.'<br>';
        echo 'turno: '.$this->turno.'<br>';
    }
}

echo '<h2> Utilizando la Clase Persona</h2><br>';
$persona1 = new Persona('Ines', 'lopez', 34, 'mujer', 1.89);
$persona2 = new Persona('Carlos', 'Rodriguez', 18, 'hombre', 1.69);

echo $persona1->nombre;
echo '<br>';
echo $persona2->dameDatos();
echo '<br>';
$persona1->repite('Hola estoy aquí');
echo '<br>';
echo '<br>';

echo '<h2> Utilizando la sub-clase Empleado</h2><br>';

$empleado1 = new Empleado('Juan', 'Perez', 45, 'hombre', 1.67, 'gerente', 'mañana');
$empleado1->dameDatos();


?>
