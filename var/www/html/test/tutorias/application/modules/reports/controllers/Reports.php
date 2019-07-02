<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require APPPATH."report/Report.php";


class Reports extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->model("general_model");
    }

    public function Tutorias(){

        $this->load->model("general_model");

        $arrParam = array();

        $data['title'] = 'Reporte puntos de control calificación/inasistencia tutorias estudiante y tutor';

        $data['info'] = $this->general_model->get_periodos($arrParam);

        $aux = $this->general_model->get_tutorias_report();

        if($aux != false){
            $args = array(
                'data' => $aux,
                'add_column' => array(
                    "Row"=>"{#}+1",
                ),
                'nombre' => "tutorias",
                'mapeado'=>array(
                    "asistencia_docente"=>array(
                        "{func}"=>function($value){
                            if($value == "1"){
                                $value = "Si";
                            }else if($value == "2"){
                                $value = "No";
                            }else{
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "temas"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "asignaturas"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "asistencia"=>array(
                        "{func}"=>function($value){
                            if($value == "1"){
                                $value = "Si";
                            }else if($value == "2"){
                                $value = "No";
                            }else{
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    'calificacion'=>array(
                        "{func}"=>function($value){
                            if($value == 1){
                                $value = "Buena";
                            }else if($value == 2){
                                $value = "Regular";
                            }else if($value == 3){
                                $value = "Mala";
                            }else{
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    'calificacion_texto'=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    )
                ),
                'columnas' => array(
                    'Row'=>array(
                        'label'=>"#",
                    ),
                    'fecha_tutoria'=>array(
                        'label'=>"Fecha Tutoria",
                    ),
                    'NOMBRE'=>array(
                        'label'=>"Nombre Docente",
                    ),
                    'asignaturas'=>array(
                        'label'=>"Asignatura",
                    ),
                    'temas'=>array(
                        'label'=>"Tema",
                    ),
                    'NombreE'=>array(
                        'label'=>"Nombre Estudiante",
                    ),
                    'numero_documento'=>array(
                        'label'=>"Documento\n Estudiante",
                    ),
                    'cantidad_estudiantes'=>array(
                        'label'=>"Cant.\n Estudiantes",
                    ),
                    'minimo'=>array(
                        'label'=>"Hora Inicio",
                    ),
                    'maximo'=>array(
                        'label'=>"Hora Final",
                    ),
                    'asistencia_docente'=>array(
                        'label'=>"Asistencia Docente",
                    ),
                    'asistencia'=>array(
                        'label'=>"Asistencia Estudiante",
                    ),
                    'calificacion'=>array(
                        'label'=>"Calificación",
                    ),
                    'calificacion_texto'=>array(
                        'label'=>"Calificación Comentario",
                    ),
                ),
            );
            //print_r($args["data"][0]);
            $data['TABLE_DATA'] = new Report($args);
        }else{
            $data['TABLE_DATA'] = null;
        }

        $data["view"] = 'table_view';

        $this->load->view("layout", $data);

    }

    public function Canceladas(){
        $this->load->model("general_model");

        $arrParam = array();

        $data['title'] = "Tutorias Canceladas Docente";

        $data['info'] = $this->general_model->get_periodos($arrParam);

        $aux = $this->general_model->get_tutorias_report($canceladas_tutor = TRUE);
        
        if($aux != false){
            $args = array(
                'data' => $aux,
                'add_column' => array(
                    "Row"=>"{#}+1",
                ),
                'nombre' => "tutorias",
                'mapeado'=>array(
                    "motivo_cancelacion"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "numero_documento"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "fecha_cancelacion"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "RolUserCancelacion"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "NombreE"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "temas"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "asignaturas"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "NombreUserCancelacion"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "RolUserCancelacion"=>array(
                        "{func}"=>function($value){
                            if($value == "99"){
                                $value = "Super Admin";
                            }else if($value == "0"){
                                $value = "Admin";
                            }else if($value == "1"){
                                $value = "Normal";
                            }else if($value == "2"){
                                $value = "Estudiante";
                            }else if($value == "3"){
                                $value = "Docente";
                            }else if($value == "4"){
                                $value = "Gestor principal";
                            }else if($value == "5"){
                                $value = "Gestor Escuela";
                            }else{
                                $value = "-";
                            }
                            return $value;
                        },
                    )
                ),
                'columnas' => array(
                    'Row'=>array(
                        'label'=>"#",
                    ),
                    'fecha_tutoria'=>array(
                        'label'=>"Fecha Tutoria",
                    ),
                    'asignaturas'=>array(
                        'label'=>"Asignatura",
                    ),
                    'temas'=>array(
                        'label'=>"Tema",
                    ),
                    'NOMBRE'=>array(
                        'label'=>"Nombre Docente",
                    ),
                    'NombreE'=>array(
                        'label'=>"Nombre Estudiante",
                    ),
                    'numero_documento'=>array(
                        'label'=>"Numero de Documento Estudiante",
                    ),
                    'fecha_cancelacion'=>array(
                        'label'=>"Fecha cancelación Tutoría",
                    ),
                    'motivo_cancelacion'=>array(
                        'label'=>"Motivo cancelación",
                    ),
                    'RolUserCancelacion'=>array(
                        'label'=>"Rol de quien realizó la cancelación",
                    ),
                    'NombreUserCancelacion'=>array(
                        'label'=>"Persona que realizó la cancelación",
                    ),
                    
                ),
            );
            //print_r($args["data"][0]);
            $data['TABLE_DATA'] = new Report($args);
        }else{
            $data['TABLE_DATA'] = null;
        }

        $data["view"] = 'table_view';

        $this->load->view("layout", $data);
    }

    public function CanceladasEstudiante(){
        $this->load->model("general_model");

        $arrParam = array();

        $data['title'] = "Reporte puntos de control cancelaciones tutorias gestor / tutor";

        $data['info'] = $this->general_model->get_periodos($arrParam);

        $aux = $this->general_model->get_tutorias_report(FALSE, TRUE);

        if($aux != false){
            $args = array(
                'data' => $aux,
                'add_column' => array(
                    "Row"=>"{#}+1",
                ),
                'nombre' => "tutorias",
                'mapeado'=>array(
                    "asistencia_docente"=>array(
                        "{func}"=>function($value){
                            if($value == "1"){
                                $value = "Si";
                            }else if($value == "2"){
                                $value = "No";
                            }else{
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "motivo_cancelacion"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "temas"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "asignaturas"=>array(
                        "{func}"=>function($value){
                            if(empty($value)){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "asistencia"=>array(
                        "{func}"=>function($value){
                            if($value == "1"){
                                $value = "Si";
                            }else if($value == "2"){
                                $value = "No";
                            }else{
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "RolUserCancelacion"=>array(
                        "{func}"=>function($value){
                            if($value == "99"){
                                $value = "Super Admin";
                            }else if($value == "0"){
                                $value = "Admin";
                            }else if($value == "1"){
                                $value = "Normal";
                            }else if($value == "2"){
                                $value = "Estudiante";
                            }else if($value == "3"){
                                $value = "Docente";
                            }else if($value == "4"){
                                $value = "Gestor principal";
                            }else if($value == "5"){
                                $value = "Gestor Escuela";
                            }else{
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    "estado_tutoria"=>array(
                        "1"=>"Nueva",
                        "2"=>"Programada",
                        "3"=>"Pendiente",
                        "4"=>"Cancelada",
                        "5"=>"Cerrada",
                    )
                ),
                'columnas' => array(
                    'Row'=>array(
                        'label'=>"#",
                    ),
                    'fecha_tutoria'=>array(
                        'label'=>"Fecha Tutoria",
                    ),
                    'asignaturas'=>array(
                        'label'=>"Asignatura",
                    ),
                    'temas'=>array(
                        'label'=>"Tema",
                    ),
                    'NOMBRE'=>array(
                        'label'=>"Nombre Docente",
                    ),
                    'NombreE'=>array(
                        'label'=>"Nombre Estudiante",
                    ),
                    'numero_documento'=>array(
                        'label'=>"Numero de Documento Estudiante",
                    ),
                    'Comentarios'=>array(
                        'label'=>"Observacion Estudiantes con 3 o más cancelaciones",
                        "formatValue"=>function($value,$row){
                            if($value){
                                $value = "Supera el número de cancelaciones o fallas permitidas para este período";
                            }else{
                                $value = "-";
                            }
                            return $value;
                        },
                    )
                ),
            );
            //print_r($args["data"][0]);
            $data['TABLE_DATA'] = new Report($args);
        }else{
            $data['TABLE_DATA'] = null;
        }

        $data["view"] = 'table_view';

        $this->load->view("layout", $data);
    }

    public function Estudiante_Por_Programa(){
        
        $this->load->model("general_model");

        $arrParam = array();

        $data['title'] = "Estudiante por Programa";
        
        $data['info'] = $this->general_model->get_periodos($arrParam);
        
        $aux = $this->general_model->get_estudiante_por_programa();
        if($aux != false){
            $args = array(
                'data' => $aux,
                'nombre' => "tutorias",
                'columnas' => array(
                    'programa'=>array(
                        'label'=>"Programa",
                        
                    ),
                    'cantidad'=>array(
                        'label'=>"Total Estudiantes",
                        "type"=>"number",
                        "decimals"=>0,
                        
                        "prefix"=>"",
                    )
                ),
            );
            $data['COLUM_DATA'] = new Report($args);
        }else{
            $data['COLUM_DATA'] = null;
        }

        $data["view"] = 'report_colum';

        $this->load->view("layout", $data);
    }


    public function Docente_Por_Programa(){
        $this->load->model("general_model");

        $arrParam = array();

        $data['title'] = "Docente por Programa";

        $data['info'] = $this->general_model->get_periodos($arrParam);

        $aux = $this->general_model->get_programa_por($docente=TRUE);

        if($aux != false){
            $args = array(
                'data' => $aux,
                'nombre' => "tutorias",
                'columnas' => array(
                    'programa'=>array(
                        'label'=>"Programa"
                    ),
                    'CantEstu'=>array(
                        'label'=>"Cantidad Estudiantes",
                        "type"=>"number",
                    )
                ),
            );
            //print_r($args["data"][0]);
            $data['COLUM_DATA'] = new Report($args);
        }else{
            $data['COLUM_DATA'] = null;
        }

        $aux = $this->general_model->get_asignaturas_all();

        $data["view"] = 'report_colum';

        $this->load->view("layout", $data);
    }

    public function Asignatura_Por_Programa(){
        $this->load->model("general_model");

        $arrParam = array();

        $data['title'] = "Estudiantes En Asignaturas";

        $data['info'] = $this->general_model->get_periodos($arrParam);

        $aux = $this->general_model->get_programa_por($asignatura=TRUE);

        if($aux != false){
            $args = array(
                'data' => $aux,
                'nombre' => "tutorias",
                'mapeado'=>array(
                    'Asignaturas'=>array(
                        "{func}"=>function($value){
                            if($value == null){
                                $value = "Sin asignar";
                            }
                            return $value;
                        },
                    )
                ),
                'columnas' => array(
                    'Asignaturas'=>array(
                        'label'=>"Asignaturas",
                    ),
                    'CantEstu'=>array(
                        'label'=>"Cantidad Estudiantes",
                        "type"=>"number",
                    )
                ),
            );
            $data['PIE_DATA'] = new Report($args);
        }else{
            $data['PIE_DATA'] = null;
        }

        $aux = $this->general_model->get_asignaturas_all();

        $data["view"] = 'pie_view';

        $this->load->view("layout", $data);
    }


    public function Tutorias_Por_Tutor(){
        $this->load->model("general_model");

        $arrParam = array();

        $data['title'] = "Tutorías por tutor total";

        $data['info'] = $this->general_model->get_periodos($arrParam);

        $aux = $this->general_model->Tutorias_Por_Tutor_Total();

        if($aux != false){
            $args = array(
                'data' => $aux['data'],
                'nombre' => "tutorias",
                'mapeado'=>array(
                    'asignaturas'=>array(
                        "{func}"=>function($value){
                            if($value == null){
                                $value = "-";
                            }
                            return $value;
                        },
                    ),
                    'programa'=>array(
                        "{func}"=>function($value){
                            if($value == null){
                                $value = "-";
                            }
                            return $value;
                        },
                    )
                ),
                "showFooter"=>"bottom",
                'columnas' => array(
                    'Id'=>array(
                        'type' => 'customType',
                        'targets' => 0,
                        'label'=>"Nro.",
                    ),
                    'programa'=>array(
                        'label'=>"Programa",
                    ),
                    'asignaturas'=>array(
                        'label'=>"Asignaturas",
                    ),
                    'NombreE'=>array(
                        'label'=>"Nombre Estudiante",
                        "footerText"=>"<span style='font-size:150%;'><b>Total:</b></span>",
                    )
                ),
                'docente'=>$aux['docentes_label'],
                'add_column'=>array(
                    "Total"=>function($data){
                        $sumador = 0;
                        foreach($data[0] as $key => $value){
                            $sumador += $data[$key];
                        }
                        return $sumador;
                    }
                ),
                'order' => array(
                    array(0, 'asc')
                )
            );
            foreach($aux['docentes_label'] as $key => $value){
                $value['footer'] = "sum";
                $args['columnas'][$key] = $value;
            }
            $args['columnas']['Total'] = array(
                'label'=>"Total",
                'footer'=>"sum"
            );
            //print_r($args["data"][0]);
            $data['TABLE_DATA'] = new Report($args);
        }else{
            $data['TABLE_DATA'] = null;
        }

        $data["view"] = 'table_view';
        
        $this->load->view("layout", $data);
    }
}
