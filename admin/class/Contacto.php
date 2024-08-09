<?php
require_once 'Conexion.php';

class Contacto {
	//Atributos
	private $id_Contacto;
    
    private $nombre;
	private $email;
	private $empresa;
	private $asunto;
    private $mensaje;
    private $telefono;
	const TABLA = 'contacto';

	//Constructor
	public function __construct($nombre=null, $email=null, $empresa=null, $asunto=null, $mensaje=null, $telefono=null, $id_Contacto=null) {
		 //Se usa la variable de autoreferencia $this, para referirse al objeto actual
        $this->nombre = $nombre;
        $this->email = $email;
		$this->empresa = $empresa;
		$this->asunto = $asunto;
        $this->mensaje = $mensaje;
        $this->telefono = $telefono;
		$this->id_Contacto = $id_Contacto;
	}




	// Getter para $id_Contacto
    public function getIdContacto() {
        return $this->id_Contacto;
    }

    // Setter para $id_Contacto
    public function setIdContacto($id_Contacto) {
        $this->id_Contacto = $id_Contacto;
    }

    // Getter para $nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Setter para $nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter para $email
    public function getEmail() {
        return $this->email;
    }

    // Setter para $email
    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter para $empresa
    public function getEmpresa() {
        return $this->empresa;
    }

    // Setter para $empresa
    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    // Getter para $asunto
    public function getAsunto() {
        return $this->asunto;
    }

    // Setter para $asunto
    public function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    // Getter para $mensaje
    public function getMensaje() {
        return $this->mensaje;
    }

    // Setter para $mensaje
    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    // Getter para $telefono
    public function getTelefono() {
        return $this->telefono;
    }

    // Setter para $telefono
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

	//Metodo que sirve para guardar un registro nuevo o actualizar uno existente
	public function guardar() {
		$conexion = new Conexion();
		if ($this->id_Contacto) /* Modifica un registro existente si se recibe un id*/ {
			$consulta = $conexion->prepare('UPDATE ' . self::TABLA .
			' SET nombre = :nombre, email = :email, empresa = :empresa, asunto = :asunto, mensaje = :mensaje,
			telefono = :telefono WHERE id_Contacto = :id_Contacto');
			$consulta->bindParam(':id_Contacto', $this->id_Contacto);
			$consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':email', $this->email);
            $consulta->bindValue(':empresa', $this->empresa);
            $consulta->bindParam(':asunto', $this->asunto);
            $consulta->bindParam(':mensaje', $this->mensaje);
			$consulta->bindParam(':telefono', $this->telefono);
			$consulta->execute();

		} else /* Inserta un registro nuevo */ {
			$consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .
			' (nombre, email, empresa, asunto, mensaje, telefono)
			VALUES(:nombre, :email, :empresa, :asunto, :mensaje, :telefono)');
			$consulta->bindParam(':nombre', $this->nombre);
			$consulta->bindParam(':email', $this->email);
            $consulta->bindValue(':empresa', $this->empresa);
            $consulta->bindParam(':asunto', $this->asunto);
            $consulta->bindParam(':mensaje', $this->mensaje);
			$consulta->bindParam(':telefono', $this->telefono);
			$consulta->execute();
			$this->id_Contacto = $conexion->lastInsertId();
		}
		$conexion = null;
	}

	//Eliminar un registro de la tabla
	public function eliminar(){
        echo $this->id_Contacto;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id_Contacto = :id_Contacto');
        $consulta->bindParam(':id_Contacto', $this->id_Contacto);
        $consulta->execute();
        $conexion = null;
    }

    //Busca un registro de la tabla usando el id de ese registro
    public static function buscarPorId($id_Contacto) {        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_Contacto = :id_Contacto');
        $consulta->bindParam(':id_Contacto', $id_Contacto);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['nombre'], $registro['email'], $registro['empresa'], $registro['asunto'], $registro['mensaje'],
            $registro['telefono'], $id_Contacto);
            
        } else {
            return false;
            
        }
    }
    //Listar todos los registros de la tabla
    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA);
        $consulta->execute();
        $registros = $consulta->fetchAll();
        $conexion = null;
        return $registros;
    }
	
}