<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

require APPPATH."/libraries/vendor/autoload.php";

use \koolreport\processes\Limit;
use \koolreport\processes\ValueMap;
use \koolreport\processes\CalculatedColumn;

class Report  extends \koolreport\KoolReport{
    use \koolreport\codeigniter\Friendship;
    use \koolreport\clients\jQuery;
    use \koolreport\clients\Bootstrap;
    use \koolreport\clients\FontAwesome;

    function __construct($arg) {
        if(array_key_exists("data",$arg)){
            $this->data = $arg["data"];
        }else{
            $this->data = null;
        }
        if(array_key_exists("showFooter",$arg)){
            $this->showFooter = $arg["showFooter"];
        }else{
            $this->showFooter = null;
        }
        if(array_key_exists("add_column",$arg)){
            $this->addColumn = $arg["add_column"];
        }else{
            $this->addColumn = array();
        }
        if(array_key_exists("nombre",$arg)){
            $this->nombre = $arg["nombre"];
        }else{
            $this->nombre = null;
        }
        if(array_key_exists("columnas",$arg)){
            $this->columnas = $arg["columnas"];
        }else{
            $this->columnas = null;
        }
        if(array_key_exists("mapeado",$arg)){
            $this->mapeado = $arg["mapeado"];
        }else{
            $this->mapeado = null;
        }
        if(array_key_exists("docente",$arg)){
            $this->docentes_aux = $arg["docente"];
        }else{
            $this->docentes_aux = null;
        }
        $args = array(
            "themeBase"=>APPPATH."/libraries/vendor/",
        );
        parent::__construct($args);
    }
    public function settings(){
        return array(
            "dataSources"=>array(
                "assets"=>array(
                    "path"=>"../../assets/",
                    "url"=>"http://localhost/tutorias/assets/",
                ),
                $this->nombre=>array(
                    "class"=>"\koolreport\datasources\ArrayDataSource",
                    "dataFormat"=>"associate",
                    "data"=>$this->data
                )
            )
        );
    }

    protected function setup(){
        if ($this->nombre){
            $this->src($this->nombre)
            ->pipe(new CalculatedColumn(
                $this->addColumn
            ))
            ->pipe(new ValueMap($this->mapeado))
            ->pipe($this->dataStore($this->nombre.'_table'));
        }
    }

}
?>