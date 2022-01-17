<?php

require_once "conexion.php";

class ModeloProductos{

/**=================================
 Mostrar Categorias
 ===================================*/


    static public function mdlMostrarCategorias($tabla, $item, $valor){
        if($item != null){

        }
        else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt -> execute();
            return $stmt -> fetchAll();
            $stmt = null;
    
        }
        
    }

/**=================================
 Mostrar Categorias
 ===================================*/


    static public function mdlMostrarSubCategorias($tabla, $id){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_categoria = :id_categoria");
        $stmt -> bindParam(":id_categoria", $id, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt = null;


    }





}
