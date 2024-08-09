<?php
require_once 'Conexion.php';

class Autos {
	//Atributos
	private $id_Auto;
	private $id_Marca;
	private $modelo;
	private $precio;
	private $stock;
    private $imagen;
    private $tipo;

	const TABLA = 'autos';

	//Constructor
	public function __construct( $id_Auto = null, $modelo = null, $precio = null, $stock = null, $imagen = null, $tipo = null, $id_Marca = null,) {
        $this->id_Marca = $id_Marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->imagen = $imagen;
        $this->tipo = $tipo;
        $this->id_Auto = $id_Auto;
    }

    // Getter para id_Auto
    public function getIdAuto() {
        return $this->id_Auto;
    }

    // Setter para id_Auto
    public function setIdAuto($id_Auto) {
        $this->id_Auto = $id_Auto;
    }

    // Getter para id_Marca
    public function getIdMarca() {
        return $this->id_Marca;
    }

    // Setter para id_Marca
    public function setIdMarca($id_Marca) {
        $this->id_Marca = $id_Marca;
    }

    // Getter para modelo
    public function getModelo() {
        return $this->modelo;
    }

    // Setter para modelo
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    // Getter para precio
    public function getPrecio() {
        return $this->precio;
    }

    // Setter para precio
    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    // Getter para stock
    public function getStock() {
        return $this->stock;
    }

    // Setter para stock
    public function setStock($stock) {
        $this->stock = $stock;
    }

    // Getter para imagen
    public function getImagen() {
        return $this->imagen;
    }

    // Setter para imagen
    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    // Getter para tipo
    public function getTipo() {
        return $this->tipo;
    }

    // Setter para tipo
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }



	//Metodo que sirve para guardar un registro nuevo o actualizar uno existente
	public function guardar() {
        $conexion = new Conexion();
        if ($this->id_Auto) {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA .
			' SET id_Marca = :id_Marca, modelo = :modelo, precio = :precio, stock = :stock, imagen = :imagen, tipo = :tipo WHERE id_Auto = :id_Auto');
			$consulta->bindParam(':id_Auto', $this->id_Auto);
            $consulta->bindParam(':id_Marca', $this->id_Marca);
            $consulta->bindParam(':modelo', $this->modelo);
			$consulta->bindParam(':precio', $this->precio);
			$consulta->bindParam(':stock', $this->stock);
			$consulta->bindParam(':imagen', $this->imagen);
            $consulta->bindParam(':tipo', $this->tipo);
			$consulta->execute();

        } else {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .
            ' (id_Marca , modelo, precio, stock, imagen, tipo)
            VALUES(:id_Marca, :modelo, :precio, :stock, :imagen, :tipo)');
            $consulta->bindParam(':id_Marca', $this->id_Marca);
            $consulta->bindParam(':modelo', $this->modelo);
            $consulta->bindParam(':precio', $this->precio);
            $consulta->bindParam(':stock', $this->stock);
            $consulta->bindParam(':imagen', $this->imagen);
            $consulta->bindParam(':tipo', $this->tipo);
            /* var_dump($consulta); */
            //echo $this->imagen;
            //exit;
            $consulta->execute(); 
            $this->id_Auto = $conexion->lastInsertId();
        }
        $conexion = null;
        }
       
        public function eliminar(){
        echo $this->id_Auto;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id_Auto = :id_Auto');
        $consulta->bindParam(':id_Auto', $this->id_Auto);
       /*  var_dump($consulta);
        echo $this->id_Auto;
        exit; */
        $consulta->execute();
        $conexion = null;
        }
        public static function buscarPorId($id_Auto) {
       
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id_Auto = :id_Auto');
        $consulta->bindParam(':id_Auto', $id_Auto);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;
        if ($registro) {
            return new self($id_Auto, $registro['modelo'], $registro['precio'],
            $registro['stock'], $registro['imagen'], $registro['tipo'], $registro['id_Marca']);    
       
        } else {
        return false;
       
        }
        }
        public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM autos INNER JOIN marca ON autos.id_Marca = marca.id_Marca');
        $consulta->execute();
        $registros = $consulta->fetchAll();
        $conexion = null;
       return $registros;
        }
        
}