<?php
 require_once 'Conexion.php';

 class Marca{

    private $id_Marca;
    private $nombre;
    private $pais;
    private $descripcion;

    const TABLA = 'marca';

    public function __construct($nombre=null, $pais=null, $descripcion=null, $id_Marca=null) {
            $this->nombre = $nombre; //Se usa la variable de autoreferencia $this, para referirse al objeto actual
            $this->pais = $pais;
            $this->descripcion = $descripcion;//el operador flecha sirve para llamar a un atributo o metodo de la clase
            $this->id_Marca = $id_Marca;
        }

    // Getter para id_Marca
    public function getIdMarca() {
        return $this->id_Marca;
    }

    // Setter para id_Marca
    public function setIdMarca($id_Marca) {
        $this->id_Marca = $id_Marca;
    }

    // Getter para nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Setter para nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter para pais
    public function getPais() {
        return $this->pais;
    }

    // Setter para pais
    public function setPais($pais) {
        $this->pais = $pais;
    }

    // Getter para descripcion
    public function getDescripcion() {
        return $this->descripcion;
    }

    // Setter para descripcion
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }



    public function guardar() {
		$conexion = new Conexion();
		if ($this->id_Marca) /* Modifica un registro existente si se recibe un id*/ {
			$consulta = $conexion->prepare('UPDATE ' . self::TABLA .
			' SET nombre = :nombre, pais = :pais, descripcion = :descripcion WHERE id_Marca = :id_Marca');
			$consulta->bindParam(':id_Marca', $this->id_Marca);
			$consulta->bindParam(':nombre', $this->nombre);
			$consulta->bindParam(':pais', $this->pais);
			$consulta->bindParam(':descripcion', $this->descripcion);
			$consulta->execute();

		} else /* Inserta un registro nuevo */ {
			$consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .
			' (nombre, pais, descripcion)
			VALUES(:nombre, :pais, :descripcion)');
			$consulta->bindParam(':nombre', $this->nombre);
			$consulta->bindParam(':pais', $this->pais);
			$consulta->bindParam(':descripcion', $this->descripcion);
			$consulta->execute();
			$this->id_Marca = $conexion->lastInsertId();
		}
		$conexion = null;
	}

	//Eliminar un registro de la tabla
	public function eliminar(){
        echo $this->id_Marca;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id_Marca = :id_Marca');
        $consulta->bindParam(':id_Marca', $this->id_Marca);
        $consulta->execute();
        $conexion = null;
    }

    //Busca un registro de la tabla usando el id de ese registro
    public static function buscarPorId($id_Marca) {        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_Marca = :id_Marca');
        $consulta->bindParam(':id_Marca', $id_Marca);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;
        if ($registro) {
            return new self($registro['nombre'], $registro['pais'],
            $registro['descripcion'], $id_Marca);
            
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
    
 }
?>