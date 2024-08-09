<?php
require_once 'Conexion.php';

class Usuario {
	//Atributos
	private $id_usuario;

	private $nombre;

	private $apellido_p;

	private $apellido_m;

	private $direccion;

	private $ciudad;

	private $estado;

	private $cp;
	private $email;
	private $password;
	private $estatus;
	private $privilegios;
	const TABLA = 'usuarios';

	//Constructor
	public function __construct($nombre=null, $apellido_p=null, $apellido_m=null, $direccion=null, $ciudad=null, $estado=null, $cp=null,$email=null, $password=null, $estatus=null, $privilegios=null,$id_usuario=null){
		$this->nombre = $nombre;
		$this->apellido_p = $apellido_p;
		$this->apellido_m = $apellido_m;
		$this->direccion = $direccion;
		$this->ciudad = $ciudad;
		$this->estado = $estado;
		$this->cp = $cp;
		$this->email = $email; //Se usa la variable de autoreferencia $this, para referirse al objeto actual
		$this->password = $password;//el operador flecha sirve para llamar a un atributo o metodo de la clase
		$this->estatus = $estatus;
		$this->privilegios = $privilegios;
		$this->id_usuario = $id_usuario;
	}

	//seccion de getters
	// Getter para $id_usuario
    public function getIdUsuario() {
        return $this->id_usuario;
    }

    // Setter para $id_usuario
    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    // Getter para $nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Setter para $nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter para $apellido_p
    public function getApellidoP() {
        return $this->apellido_p;
    }

    // Setter para $apellido_p
    public function setApellidoP($apellido_p) {
        $this->apellido_p = $apellido_p;
    }

    // Getter para $apellido_m
    public function getApellidoM() {
        return $this->apellido_m;
    }

    // Setter para $apellido_m
    public function setApellidoM($apellido_m) {
        $this->apellido_m = $apellido_m;
    }

    // Getter para $direccion
    public function getDireccion() {
        return $this->direccion;
    }

    // Setter para $direccion
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    // Getter para $ciudad
    public function getCiudad() {
        return $this->ciudad;
    }

    // Setter para $ciudad
    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    // Getter para $estado
    public function getEstado() {
        return $this->estado;
    }

    // Setter para $estado
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    // Getter para $cp
    public function getCp() {
        return $this->cp;
    }

    // Setter para $cp
    public function setCp($cp) {
        $this->cp = $cp;
    }

    // Getter para $email
    public function getEmail() {
        return $this->email;
    }

    // Setter para $email
    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter para $password
    public function getPassword() {
        return $this->password;
    }

    // Setter para $password
    public function setPassword($password) {
        $this->password = $password;
    }

    // Getter para $estatus
    public function getEstatus() {
        return $this->estatus;
    }

    // Setter para $estatus
    public function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    // Getter para $privilegios
    public function getPrivilegios() {
        return $this->privilegios;
    }

    // Setter para $privilegios
    public function setPrivilegios($privilegios) {
        $this->privilegios = $privilegios;
    }


	//Metodo que sirve para guardar un registro nuevo o actualizar uno existente
	public function guardar() {
		$conexion = new Conexion();
		if ($this->id_usuario) /* Modifica un registro existente si se recibe un id*/ {
			$consulta = $conexion->prepare('UPDATE ' . self::TABLA .
			' SET nombre = :nombre, apellido_p = :apellido_p, apellido_m = :apellido_m, direccion = :direccion, ciudad = :ciudad, estado = :estado, cp = :cp, email = :email, password = :password, estatus = :estatus,
			privilegios = :privilegios WHERE id_usuario = :id_usuario');
			$consulta->bindParam(':id_usuario', $this->id_usuario);
			$consulta->bindParam(':nombre', $this->nombre);
			$consulta->bindParam(':apellido_p', $this->apellido_p);
			$consulta->bindParam(':apellido_m', $this->apellido_m);
			$consulta->bindParam(':direccion', $this->direccion);
			$consulta->bindParam(':ciudad', $this->ciudad);
			$consulta->bindParam(':estado', $this->estado);
			$consulta->bindParam(':cp', $this->cp);
			$consulta->bindParam(':email', $this->email);
			$consulta->bindParam(':password', $this->password);
			$consulta->bindParam(':estatus', $this->estatus);
			$consulta->bindParam(':privilegios', $this->privilegios);
			$consulta->execute();

		} else /* Inserta un registro nuevo */ {
			$consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .
			' (nombre, apellido_p, apellido_m, direccion, ciudad, estado, cp, email, password, estatus, privilegios)
			VALUES(:nombre, :apellido_p, :apellido_m, :direccion, :ciudad, :estado, :cp, :email, :password, :estatus, :privilegios)');
			$consulta->bindParam(':nombre', $this->nombre);
			$consulta->bindParam(':apellido_p', $this->apellido_p);
			$consulta->bindParam(':apellido_m', $this->apellido_m);
			$consulta->bindParam(':direccion', $this->direccion);
			$consulta->bindParam(':ciudad', $this->ciudad);
			$consulta->bindParam(':estado', $this->estado);
			$consulta->bindParam(':cp', $this->cp);
			$consulta->bindParam(':email', $this->email);
			$consulta->bindParam(':password', $this->password);
			$consulta->bindParam(':estatus', $this->estatus);
			$consulta->bindParam(':privilegios', $this->privilegios);
			//var_dump($consulta);//Se musetra información de las variables
			//var_dump($this->email);
			//exit();//se detiene el script
			$consulta->execute();
			$this->id_usuario = $conexion->lastInsertId();
		}
		$conexion = null;
	}

	//Eliminar un registro de la tabla
	public function eliminar(){
        echo $this->id_usuario;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id_usuario = :id_usuario');
        $consulta->bindParam(':id_usuario', $this->id_usuario);
        $consulta->execute();
        $conexion = null;
    }

    //Busca un registro de la tabla usando el id de ese registro
    public static function buscarPorId($id_usuario) {        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_usuario = :id_usuario');
        $consulta->bindParam(':id_usuario', $id_usuario);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['nombre'],$registro['apellido_p'],$registro['apellido_m'],$registro['direccion'],
            $registro['ciudad'],$registro['estado'],$registro['cp'],$registro['email'], $registro['password'],
            $registro['estatus'], $registro['privilegios'], $id_usuario);
            
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
        return $registros;
    }



	/* Método que permite a un usuario iniciar sesión en el sitio */
	public function logIn(){
		$conexion = new Conexion();
		$consulta = $conexion->prepare('SELECT email, privilegios FROM ' . self::TABLA .
		' WHERE email = :email and password = :password');
		$consulta->bindParam(':email', $this->email);
		$consulta->bindParam(':password', $this->password);
		$consulta->execute();
		$registro = $consulta->fetch();

		if ($registro) {
			$_SESSION['email'] = $registro[0];
			$_SESSION['privilegios'] = $registro[1];
			return true;
		} else {
			return false;	
		}
		$conexion = null;
	}//Fin login

    


}