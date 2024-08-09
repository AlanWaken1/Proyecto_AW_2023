<?php
require_once 'Conexion.php';

class Comentarios {
	//Atributos
	private $id_Comentario;
	private $email;
	private $mensaje;
	private $fecha;
	private $estatus;
	const TABLA = 'comentarios';

	//Constructor
	public function __construct($email=null, $mensaje=null, $fecha=null, $estatus=null,$id_Comentario=null) {
		$this->email = $email; //Se usa la variable de autoreferencia $this, para referirse al objeto actual
		$this->mensaje = $mensaje;//el operador flecha sirve para llamar a un atributo o metodo de la clase
		$this->fecha = $fecha;
		$this->estatus = $estatus;
		$this->id_Comentario = $id_Comentario;
	}

	// Getter para $id_Comentario
    public function getIdComentario() {
        return $this->id_Comentario;
    }

    // Setter para $id_Comentario
    public function setIdComentario($id_Comentario) {
        $this->id_Comentario = $id_Comentario;
    }

    // Getter para $email
    public function getEmail() {
        return $this->email;
    }

    // Setter para $email
    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter para $mensaje
    public function getMensaje() {
        return $this->mensaje;
    }

    // Setter para $mensaje
    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    // Getter para $fecha
    public function getFecha() {
        return $this->fecha;
    }

    // Setter para $fecha
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    // Getter para $estatus
    public function getEstatus() {
        return $this->estatus;
    }

    // Setter para $estatus
    public function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

	//Metodo que sirve para guardar un registro nuevo o actualizar uno existente
	public function guardar() {
		$conexion = new Conexion();
		if ($this->id_Comentario) /* Modifica un registro existente si se recibe un id*/ {
			$consulta = $conexion->prepare('UPDATE ' . self::TABLA .
			' SET email = :email, mensaje = :mensaje, fecha = :fecha,
			estatus = :estatus WHERE id_Comentario = :id_Comentario');
			$consulta->bindParam(':id_Comentario', $this->id_Comentario);
			$consulta->bindParam(':email', $this->email);
			$consulta->bindParam(':mensaje', $this->mensaje);
			$consulta->bindParam(':fecha', $this->fecha);
			$consulta->bindParam(':estatus', $this->estatus);
			$consulta->execute();

		} else /* Inserta un comentario nuevo */ {
			$consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .
			' (email, mensaje, fecha, estatus)
			VALUES(:email, :mensaje, :fecha, :estatus)');
			$consulta->bindParam(':email', $this->email);
			$consulta->bindParam(':mensaje', $this->mensaje);
			$consulta->bindParam(':fecha', $this->fecha);
			$consulta->bindParam(':estatus', $this->estatus);
			//var_dump($consulta);//Se musetra información de las variables
			//var_dump($this->email);
			//exit();//se detiene el script
			$consulta->execute();
			$this->id_Comentario = $conexion->lastInsertId();
		}
		$conexion = null;
	}

	//Eliminar un registro de la tabla
	public function eliminar(){
        echo $this->id_Comentario;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id_Comentario = :id_Comentario');
        $consulta->bindParam(':id_Comentario', $this->id_Comentario);
        $consulta->execute();
        $conexion = null;
    }

    //Busca un registro de la tabla usando el id de ese registro
    public static function buscarPorId($id_Comentario) {        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_Comentario = :id_Comentario');
        $consulta->bindParam(':id_Comentario', $id_Comentario);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['email'], $registro['mensaje'],
            $registro['fecha'], $registro['estatus'], $id_Comentario);
            
        } else {
            return false;
            
        }
    }
    //Investigar que significa static
    //Listar todos los registros de la tabla
    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA);
        $consulta->execute();
        $registros = $consulta->fetchAll();
        $conexion = null;
        // var_dump($consulta);
        // echo "<br>";
        // var_dump($registros);
        // exit();
        return $registros;
    }
}