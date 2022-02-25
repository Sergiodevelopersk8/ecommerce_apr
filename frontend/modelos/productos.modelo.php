<?php

require_once "conexion.php";

class ModeloProductos{

/**=================================
 Mostrar Categorias
 ===================================*/


    static public function mdlMostrarCategorias($tabla, $item, $valor){
        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();

        }
        else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt = null;
    
        }

        $stmt = null;
        
    }

/**=================================
 Mostrar SubCategorias
 ===================================*/


    static public function mdlMostrarSubCategorias($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt = null;


    }

/**=================================
 Mostrar Productos
 ===================================*/


    static public function mdlMostrarProductos($tabla, $ordenar,$item,$valor,$base, $tope,)
    {
        if($item !=null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item= :$item ORDER BY $ordenar 
            DESC LIMIT $base, $tope");
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetchAll();
           

        }
        else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar DESC LIMIT $base, $tope");
        
            $stmt -> execute();
            return $stmt -> fetchAll();
          

        }
        $stmt = null;
       
    }


    static public function  mdlMostrarInfoProducto ($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt = null;

    }





}
