<?php

if (!defined('BASEPATH'))

    exit('No direct script access allowed');



/**

 * Clase para consultas generales a una tabla

 */

class General_model extends CI_Model {



    /**

     * Consulta BASICA A UNA TABLA

     * @param $TABLA: nombre de la tabla

     * @param $ORDEN: orden por el que se quiere organizar los datos

     * @param $COLUMNA: nombre de la columna en la tabla para realizar un filtro (NO ES OBLIGATORIO)

     * @param $VALOR: valor de la columna para realizar un filtro (NO ES OBLIGATORIO)

     * @since 8/11/2016

     */

    public function get_basic_search($arrData) {

        if ($arrData["id"] != 'x')

            $this->db->where($arrData["column"], $arrData["id"]);

        $this->db->order_by($arrData["order"], "ASC");

        $query = $this->db->get($arrData["table"]);



        if ($query->num_rows() >= 1) {

            return $query->result_array();

        } else

            return false;

    }



    /**

     * Verifica si ya existe una tutoria para un docente en un dia a una hora

     * Modules: 

     * @since 12/4/2019

     * JSJL 

     */

    public function get_tutoria_docente_en_horario($arrData,$dia) {

        $this->db->select();

        $this->db->where('fk_id_docente', $arrData["fk_id_docente"]);

        if($arrData[$dia]){

            $this->db->where($dia."_inicio", $arrData[$dia."_inicio"]);

            $this->db->where($dia.'_fin', $arrData[$dia."_fin"]);

        }

        $query = $this->db->get('tutorias_base');

        //print $this->db->last_query();        die();

        if ($query->num_rows() == 0) {

            return true;

        } else {

            return false;

        }

    }



    /**

     * Verifica si un estudiante ya tiene tutoria el mismo día a la misma hora

     * Modules: Parametros

     * @since 12/3/2019

     * select * from tutorias_principal, tutorias_estudiante where tutorias_principal.id_tutorias_principal = tutorias_estudiante.fk_te_id_tutorias_principal and tutorias_principal.fk_id_docente =1901 and fk_te_id_user =21;

     * JSJL 

     */

    public function get_tutoria_en_horario($arrData) {

        $this->db->select();

        $this->db->join('tutorias_principal tp', 'tp.id_tutorias_principal = te.fk_te_id_tutorias_principal', 'INNER');



        if (array_key_exists("fechaTutoria", $arrData)) {

            $this->db->where('tp.fecha_tutoria', $arrData["fechaTutoria"]);

        }

        if (array_key_exists("horaInicio", $arrData)) {

            $this->db->where('tp.hora_inicio', $arrData["horaInicio"]);

        }

        if (array_key_exists("idUser", $arrData)) {

            $this->db->where('te.fk_te_id_user', $arrData["idUser"]);

        }

        $query = $this->db->get('tutorias_estudiante te');

        if ($query->num_rows() > 0) {

            return true;

        } else {

            return false;

        }

    }



    /**

     * Verifica si un estudiante tiene tutorias con un profesor

     * Modules: Parametros

     * @since 12/3/2019

     * select * from tutorias_principal, tutorias_estudiante where tutorias_principal.id_tutorias_principal = tutorias_estudiante.fk_te_id_tutorias_principal and tutorias_principal.fk_id_docente =1901 and fk_te_id_user =21;

     * JSJL 

     */

    public function get_tutoria_con_docente($arrData) {

        $this->db->select();

        $this->db->join('tutorias_principal tp', 'tp.id_tutorias_principal = te.fk_te_id_tutorias_principal', 'INNER');



        if (array_key_exists("idDocente", $arrData)) {

            $this->db->where('tp.fk_id_docente', $arrData["idDocente"]);

        }

        if (array_key_exists("idUser", $arrData)) {

            $this->db->where('te.fk_te_id_user', $arrData["idUser"]);

        }

        $fecha = date("Y-m-d");

        $this->db->where('tp.fecha_tutoria >', $fecha);

        $this->db->where('te.calificacion is null');

        $this->db->where('tp.estado_tutoria < 3');

        $this->db->where('te.estado = 1');

        $query = $this->db->get('tutorias_estudiante te');

        if ($query->num_rows() > 0) {

            return true;

        } else {

            return false;

        }

    }



    public function get_tutoria_estudiante($idUser, $idTutoria) {

        $this->db->select();

        $this->db->join('tutorias_principal tp', 'tp.id_tutorias_principal = te.fk_te_id_tutorias_principal', 'INNER');

        $this->db->where('te.fk_te_id_user', $idUser);

        $this->db->where('tp.id_tutorias_principal', $idTutoria);

        $query = $this->db->get('tutorias_estudiante te');

        if ($query->num_rows() > 0) {

            return true;

        } else {

            return false;

        }

    }

    

    public function get_gestores() {

        $this->db->select();

        $this->db->where('perfil', 4);

        $query = $this->db->get('user');

        if($query->num_rows() > 0){

            return $query->result_array();

        } else {

            return false;

        }

    }

    

    public function get_docentes_user($iddocente){

        $this->db->select();

        $this->db->join('docente_x_user du', 'du.fk_id_user = U.id_user', 'LEFT');

        $this->db->where('du.fk_id_docente', $iddocente);

        $query = $this->db->get('user U');

        if($query->num_rows() > 0){

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * Asignaturas

     * Modules: Parametros

     * @since 12/3/2019

     */
    public function get_asignaturas_temas($arrData){
    	$this->db->distinct();

        $this->db->select("id_param_asignaturas,asignaturas,MIN(id_relacion),MIN(`AP`.fk_id_param_asignaturas),MIN(`AP`.fk_id_param_programas),MIN(fk_escuela),MIN(programa),MIN(id_param_temas),MIN(temas) ");



        if (array_key_exists("idAsignatura", $arrData)) {

            $this->db->where('A.id_param_asignaturas', $arrData["idAsignatura"]);

        }

        if (array_key_exists("idEscuela", $arrData)) {

            $this->db->join('asignatura_vs_programa AP', 'AP.fk_id_param_asignaturas = A.id_param_asignaturas', 'LEFT');

            $this->db->join('param_programas P', 'P.id_param_programas = AP.fk_id_param_programas', 'LEFT');

            $this->db->where('P.fk_escuela', $arrData["idEscuela"]);

            if (isset($arrData["temas"]) && ($arrData["temas"] == TRUE)) {

                $this->db->join('param_temas T', 'T.fk_id_param_asignaturas = A.id_param_asignaturas', 'INNER');

                $this->db->group_by("id_param_asignaturas");

            }

            //$this->db->order_by('MIN(P.programa)', 'asc');

        }

        $query = $this->db->get('param_asignaturas A');

//        print $this->db->last_query();

//        die();

        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }
    }


  public function get_asignaturas($arrData) {
  		$this->db->select();
        $this->db->join('asignatura_vs_programa AP', 'AP.fk_id_param_asignaturas = A.id_param_asignaturas', 'LEFT');
        $this->db->join('param_programas P', 'P.id_param_programas = AP.fk_id_param_programas', 'LEFT');

        if (array_key_exists("idAsignatura", $arrData)) {
            $this->db->where('A.id_param_asignaturas', $arrData["idAsignatura"]);
        }
        if (array_key_exists("idEscuela", $arrData)) {
            $this->db->where('P.fk_escuela', $arrData["idEscuela"]);
            }

        $this->db->order_by('P.programa', 'asc');
        $query = $this->db->get('param_asignaturas A');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }



    //verifica que las asignaturas tengan temas

    public function comprobar_temas($idAsignatura){

        $bandera = 0;

        if(!empty($idAsignatura)){

            $this->db->select();

            $this->db->join('param_asignaturas A', 'A.id_param_asignaturas = T.fk_id_param_asignaturas', 'INNER');

            $this->db->where('A.id_param_asignaturas', $idAsignatura);

            $query = $this->db->get('param_temas T');

            $bandera = $query->num_rows();

        }

        



        if ($bandera > 0) {

            return true;

        } else {

            return false;

        }

    }



    /**

     * Temas

     * Modules: Parametros

     * @since 12/3/2019

     */

    public function get_temas($arrData) {

        $this->db->select();

        $this->db->join('param_asignaturas A', 'A.id_param_asignaturas = T.fk_id_param_asignaturas', 'INNER');



        if (array_key_exists("idTema", $arrData)) {

            $this->db->where('T.id_param_temas', $arrData["idTema"]);

        }



        if (array_key_exists("idAsignatura", $arrData)) {

            $this->db->where('T.fk_id_param_asignaturas', $arrData["idAsignatura"]);

        }



        $this->db->order_by('A.asignaturas', 'asc');

        $query = $this->db->get('param_temas T');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }

    

    public function get_asignaturas_programa($arrData) {

        $this->db->select();

        $this->db->join('param_asignaturas A', 'A.id_param_asignaturas = ap.fk_id_param_asignaturas', 'INNER');

        $this->db->join('param_programas P', 'P.id_param_programas = ap.fk_id_param_programas', 'INNER');

        

        if (array_key_exists("id_relacion", $arrData)) {

            $this->db->where('ap.id_relacion', $arrData["id_relacion"]);

        }



        if (array_key_exists("idAsignatura", $arrData)) {

            $this->db->where('ap.fk_id_param_asignaturas', $arrData["idAsignatura"]);

        }



        $this->db->order_by('A.asignaturas', 'asc');

        $query = $this->db->get('asignatura_vs_programa ap');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * usuarios

     * Modules: Parametros

     * @since 13/3/2019

     */

    public function get_usuarios($arrData) {

        $this->db->select("U.*");

        $this->db->where('U.state', 1);

        if (array_key_exists("idUser", $arrData)) {

            $this->db->where('U.id_user', $arrData["idUser"]);

        }

        $this->db->order_by('U.log_user', 'desc');

        $query = $this->db->get('user U');

        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * MOtivosCancelaciones

     * Modules: MOtivosCancelaciones

     * @since 13/3/2019

     */

    public function get_motivosCancelaciones($arrData) {

        $this->db->select("*");



        $this->db->order_by('id_motivo_cancelacion', 'asc');

        $query = $this->db->get('motivo_cancelacion');



        if ($query->num_rows() > 0) {

            return $query->result();

        } else {

            return false;

        }

    }



    /**

     * periodos

     * Modules: Parametros

     * @since 13/3/2019

     */

    public function get_periodos($arrData) {

        $this->db->select("P.*, H.hora minimo, X.hora maximo");

        $this->db->join('param_horas H', 'H.id_hora = P.horario_minimo', 'INNER');

        $this->db->join('param_horas X', 'X.id_hora = P.horario_maximo', 'INNER');



        if (array_key_exists("idPeriodo", $arrData)) {

            $this->db->where('P.id_param_periodos', $arrData["idPeriodo"]);

        }

        if (array_key_exists("idEstado", $arrData)) {

            $this->db->where('P.estado', $arrData["idEstado"]);

        }



        $this->db->order_by('P.id_param_periodos', 'desc');

        $query = $this->db->get('param_periodos P');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * Lista de horas

     * si es un usuario gestor se filtra por las horas configuradas en la tabla param generales

     * @since 22/4/2018

     * @review 23/4/2018

     */

    public function get_horas($arrData) {

        if (array_key_exists("idHoraInicio", $arrData)) {

            $this->db->where('id_hora >=', $arrData["idHoraInicio"]);

            //$this->db->where('id_hora >=', $º);

        }

        if (array_key_exists("idHoraFinal", $arrData)) {

            $this->db->where('id_hora <=', $arrData["idHoraFinal"]);

            //$this->db->where('id_hora <=', 24);

        }

        $this->db->order_by("id_hora", "ASC");

        $query = $this->db->get("param_horas");



        if ($query->num_rows() >= 1) {

            return $query->result_array();

        } else

            return false;

    }



    /**

     * SEDE

     * Modules: Parametros

     * @since 25/4/2019

     * @author SDD

     */

    public function get_sede($arrData) {

        $this->db->select("S.*");

        if (array_key_exists("idSede", $arrData)) {

            $this->db->where('S.ID_SEDE', $arrData["idSede"]);

        }

        $this->db->order_by('S.NOMBRE_SEDE', 'ASC');

        $query = $this->db->get('sede S');

        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * LUGARES

     * Modules: Parametros

     * @since 15/3/2019

     */

    public function get_lugares($arrData) {

        $this->db->select();

        $this->db->join('sede S', 'S.ID_SEDE = L.fk_sede', 'INNER');



        if (array_key_exists("idLugar", $arrData)) {

            $this->db->where('L.id_param_lugares', $arrData["idLugar"]);

        }



        if (array_key_exists("idSede", $arrData)) {

            $this->db->where('L.fk_sede', $arrData["idSede"]);

        }



        $this->db->order_by('S.NOMBRE_SEDE', 'asc');

        $query = $this->db->get('param_lugares L');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * PROGRAMAS

     * Modules: Parametros

     * @since 15/3/2019

     */

    public function get_programas($arrData) {

        $this->db->select();

        $this->db->join('escuela E', 'E.ID_ESCUELA = P.fk_escuela', 'INNER');



        if (array_key_exists("idPrograma", $arrData)) {

            $this->db->where('P.id_param_programas', $arrData["idPrograma"]);

        }



        if (array_key_exists("idEscuela", $arrData)) {

            $this->db->where('P.fk_escuela', $arrData["idEscuela"]);

        }



        $this->db->order_by('E.NOMBRE_ESCUELA', 'asc');

        $query = $this->db->get('param_programas P');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * TEMAS

     * Modules: TUTORIAS

     * @since 15/3/2019

     */

    public function get_tutorias($arrData) {

        $this->db->distinct();

        $this->db->select("T.*, S.NOMBRE_SEDE, E.NOMBRE_ESCUELA, D.NOMBRE, L.direccion, H.hora minimo, H.formato_24 formato_minimo, X.hora maximo, X.formato_24 formato_maximo, Y.asignaturas, Z.temas");

        $this->db->join('sede S', 'S.ID_SEDE = T.fk_id_sede', 'INNER');

        $this->db->join('escuela E', 'E.ID_ESCUELA = T.fk_id_escuela', 'INNER');

        $this->db->join('docente D', 'D.ID_DOCENTE = T.fk_id_docente', 'INNER');

        $this->db->join('param_lugares L', 'L.id_param_lugares = T.fk_id_lugar', 'INNER');

        $this->db->join('param_horas H', 'H.id_hora = T.hora_inicio', 'INNER');

        $this->db->join('param_horas X', 'X.id_hora = T.hora_fin', 'INNER');

        $this->db->join('param_asignaturas Y', 'Y.id_param_asignaturas = T.fk_tp_id_param_asignaturas', 'LEFT');
        
        $this->db->join('param_temas Z', 'Z.id_param_temas = T.fk_tp_id_param_temas', 'LEFT');

        $this->db->order_by("fecha_tutoria", "ASC");



        if (array_key_exists("idTutoria", $arrData)) {

            $this->db->where('T.id_tutorias_principal', $arrData["idTutoria"]);

        }



        if (array_key_exists("idSede", $arrData) && $arrData["idSede"] != '') {

            $this->db->where('T.fk_id_sede', $arrData["idSede"]);

        }



        if (array_key_exists("idEscuela", $arrData) && $arrData["idEscuela"] != '') {

            $this->db->where('T.fk_id_escuela', $arrData["idEscuela"]);

        }



        if (array_key_exists("idDocente", $arrData) && $arrData["idDocente"] != '') {

            $this->db->where('T.fk_id_docente', $arrData["idDocente"]);

        }



        if (array_key_exists("idAsignatura", $arrData) && $arrData["idAsignatura"] != '') {

            $this->db->join('tutorias_base tb', 'tb.id_tutorias_base = T.fk_id_tutorias_base', 'LEFT');

            $this->db->join('tutorias_asignaturas ta', 'ta.fk_ta_tutoria_base = T.fk_id_tutorias_base', 'LEFT');

            $this->db->where('ta.fk_ta_param_asignaturas', $arrData["idAsignatura"]);

            $this->db->where("(T.fk_tp_id_param_asignaturas IS NULL OR T.fk_tp_id_param_asignaturas = '".$arrData["idAsignatura"]."')"); 

        }



        if (array_key_exists("fechaInicio", $arrData) && $arrData["fechaInicio"] != '') {

            $this->db->where('T.fecha_tutoria >=', $arrData["fechaInicio"]); 

        }



        if (array_key_exists("fechaFin", $arrData) && $arrData["fechaFin"] != '') {

            $this->db->where('T.fecha_tutoria <=', $arrData["fechaFin"]);

        }



        if (array_key_exists("Estado", $arrData) && $arrData["Estado"] != '') {

            $this->db->where('T.estado_tutoria', $arrData["Estado"]);

        }



        if (array_key_exists("listaEstadosTutoria", $arrData) && !empty($arrData["listaEstadosTutoria"])) {

            $this->db->where_in('T.estado_tutoria', $arrData["listaEstadosTutoria"]);          

        }



        if (array_key_exists("idPrograma", $arrData) && $arrData["idPrograma"] != '') {
            $this->db->join('tutorias_base tb', 'tb.id_tutorias_base = T.fk_id_tutorias_base', 'LEFT');
            $this->db->join('tutorias_asignaturas ta', 'ta.fk_ta_tutoria_base = T.fk_id_tutorias_base', 'LEFT');
        	$this->db->join('asignatura_vs_programa AP', 'AP.fk_id_param_asignaturas = ta.fk_ta_param_asignaturas', 'LEFT');
            $this->db->where('AP.fk_id_param_programas', $arrData["idPrograma"]);

        }



       /* if (array_key_exists("fechaActual", $arrData)) {

            $fechaActual = date('Y-m-d G:i');

            $this->db->where('T.fecha_tutoria >=', $fechaActual);

        }*/

        //Incluir que si la tutoría esta en estado 2 -> mostrarla aún sea antes de las 24 horas



        $query = $this->db->get('tutorias_principal T');

        //print $this->db->last_query();
        //die();      

        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * CREAR ESCUELAS

     * Modules: Parametros

     * @since 25/4/2019

     * @author SDD



      public function get_param_escuela($arrData)

      {

      $this->db->select("E.*");

      if (array_key_exists("idEscuela", $arrData)) {

      $this->db->where('E.ID_ESCUELA', $arrData["idEscuela"]);

      }

      $this->db->order_by('E.NOMBRE_ESCUELA', 'ASC');

      $query = $this->db->get('escuela E');

      if ($query->num_rows() > 0) {

      return $query->result_array();

      } else {

      return false;

      }

      } */



    /**

     * ESCUELAS

     * Modules: TUTORIAS

     * @since 15/3/2019

     */

    public function get_escuelas($arrData) {

        $this->db->select();

        $this->db->join('escuelas_x_sede S', 'S.ID_ESCUELA = E.ID_ESCUELA', 'LEFT');



        if (array_key_exists("idSede", $arrData)) {

            $this->db->where('S.ID_SEDE', $arrData["idSede"]);

        }

        if (array_key_exists("idEscuela", $arrData)) {

            $this->db->where('E.ID_ESCUELA', $arrData["idEscuela"]);

        }

        $this->db->order_by('E.NOMBRE_ESCUELA', 'ASC');

        $query = $this->db->get('escuela E');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * TEMAS

     * Modules: TUTORIAS

     * @since 15/3/2019

     */

    public function get_escuela_sede($arrData) {

        $this->db->select("S.ID_SEDE, S.NOMBRE_SEDE, E.NOMBRE_ESCUELA, EXS.*");

        $this->db->join('sede S', 'S.ID_SEDE = EXS.ID_SEDE', 'LEFT');

        $this->db->join('escuela E', 'E.ID_ESCUELA = EXS.ID_ESCUELA', 'LEFT');

        $this->db->order_by('NOMBRE_ESCUELA', "ASC");



        if (array_key_exists("idEscuelaSede", $arrData)) {

            $this->db->where('EXS.ID_ESCUELAS_X_SEDE', $arrData["idEscuelaSede"]);

        }



        if (array_key_exists("idSede", $arrData) && $arrData["idSede"] != '') {

            $this->db->where('EXS.ID_SEDE', $arrData["idSede"]);

        }



        if (array_key_exists("idEscuela", $arrData) && $arrData["idEscuela"] != '') {

            $this->db->where('EXS.ID_ESCUELA', $arrData["idEscuela"]);

        }



        $query = $this->db->get("escuelas_x_sede EXS");



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * DOCENTES

     * Modules: TUTORIAS

     * @since 15/3/2019

     */

    public function get_docentes($arrData) {

        $this->db->select();

        $this->db->join('escuela E', 'E.ID_ESCUELA = D.ID_ESCUELA', 'INNER');



        if (array_key_exists("idEscuela", $arrData)) {

            $this->db->where('D.ID_ESCUELA', $arrData["idEscuela"]);

        }



        if (array_key_exists("idDocente", $arrData)) {

            $this->db->where('D.ID_DOCENTE', $arrData["idDocente"]);

        }



        $this->db->order_by('D.NOMBRE', 'asc');

        $query = $this->db->get('docente D');

        //print $this->db->last_query();

        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }

    

    public function get_docentes_sinE($arrData) {

        $this->db->select();

        

        if (array_key_exists("idEscuela", $arrData)) {

            $this->db->where('D.ID_ESCUELA', $arrData["idEscuela"]);

        }



        if (array_key_exists("idDocente", $arrData)) {

            $this->db->where('D.ID_DOCENTE', $arrData["idDocente"]);

        }



        $this->db->order_by('D.NOMBRE', 'asc');

        $query = $this->db->get('docente D');

        //print $this->db->last_query();

        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * Asignaturas de una tutoria

     * Modules: ESTUDIANTE

     * @since 20/3/2019

     */

    public function get_asignaturas_tutoria($arrData) {

        $this->db->select();

        $this->db->join('param_asignaturas X', 'X.id_param_asignaturas = A.fk_ta_param_asignaturas', 'INNER');



        if (array_key_exists("idTutoria", $arrData)) {

            $this->db->where('A.fk_ta_tutoria_base', $arrData["idTutoria"]);

        }

        $this->db->order_by('X. Asignaturas', 'ASC');

        $query = $this->db->get('tutorias_asignaturas A');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * Listado estudiates de una tutoria

     * Modules: ESTUDIATE

     * @since 20/3/2019

     */

    public function get_inscritos_tutoria($arrData) {

        $this->db->select();

        $this->db->join('user U', 'U.id_user = E.fk_te_id_user', 'INNER');



        if (array_key_exists("idTutoria", $arrData)) {

            $this->db->where('E.fk_te_id_tutorias_principal', $arrData["idTutoria"]);

        }



        if (array_key_exists("idEstudiante", $arrData)) {

            $this->db->where('E.fk_te_id_user', $arrData["idEstudiante"]);

        }



        if (array_key_exists("asistencia", $arrData)) {

            $this->db->where('E.asistencia', $arrData["asistencia"]);

        }



        if (array_key_exists("calificacion", $arrData)) {

            $this->db->where('E.calificacion !=', 0);

        }



        $query = $this->db->get('tutorias_estudiante E');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * Temas

     * Modules: TUTORIAS

     * @since 15/3/2019

     */

    public function get_tutorias_inscritos() {

        $idUser = $this->session->userdata("id");



        $this->db->select("T.*, D.NOMBRE, L.direccion, H.hora minimo, H.formato_24 formato_minimo, X.hora maximo, X.formato_24 formato_maximo, Y.asignaturas, Z.temas, W.calificacion_texto, W.calificacion, W.estado as estadoInscripcion, W.id_tutorias_estudiante, W.asistencia_docente, , W.asistencia as asistenciaEstudiante");

        $this->db->join('tutorias_principal T', 'T.id_tutorias_principal = W.fk_te_id_tutorias_principal', 'INNER');

        $this->db->join('docente D', 'D.ID_DOCENTE = T.fk_id_docente', 'INNER');

        $this->db->join('param_lugares L', 'L.id_param_lugares = T.fk_id_lugar', 'INNER');

        $this->db->join('param_horas H', 'H.id_hora = T.hora_inicio', 'INNER');

        $this->db->join('param_horas X', 'X.id_hora = T.hora_fin', 'INNER');

        $this->db->join('param_asignaturas Y', 'Y.id_param_asignaturas = T.fk_tp_id_param_asignaturas', 'LEFT');

        $this->db->join('param_temas Z', 'Z.id_param_temas = T.fk_tp_id_param_temas', 'LEFT');



        $this->db->where('W.fk_te_id_user', $idUser);

        //$this->db->where('W.estado', 1);

        $this->db->order_by("fecha_tutoria", "DESC");

        $query = $this->db->get('tutorias_estudiante W');

//        print $this->db->last_query();

//        print "<pre>";

//        print $query->num_rows();

        //die();

        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * Lista numero de cancelaciones de un usuario para un periodos

     * Modules: ESTUDIATE

     * @since 25/3/2019

     */

    public function get_cancelaciones_estudiante($arrData) {

        $this->db->select();



        if (array_key_exists("idPeriodo", $arrData)) {

            $this->db->where('fk_ec_id_param_periodos', $arrData["idPeriodo"]);

        }



        if (array_key_exists("idEstudiante", $arrData)) {

            $this->db->where('fk_ec_id_user', $arrData["idEstudiante"]);

        }



        $query = $this->db->get('estudiante_cancelaciones');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }

    

    public function get_activas_estudiante($arrData) {

        $this->db->select();

        $this->db->join('tutorias_principal t', 'te.fk_te_id_tutorias_principal = t.id_tutorias_principal', 'INNER');

        $this->db->where('te.fk_te_id_user', $arrData["idEstudiante"]);

        $this->db->where('te.estado',1);

        $this->db->where('(t.estado_tutoria = 1 OR t.estado_tutoria = 2)');



        $query = $this->db->get('tutorias_estudiante te');



        if ($query->num_rows() > 0) {

            return $query->num_rows();

        } else {

            return 0;

        }

    }

    

    public function get_faltas_estudiante($arrData) {

        $this->db->select();

        $this->db->join('tutorias_principal t', 'te.fk_te_id_tutorias_principal = t.id_tutorias_principal', 'INNER');

        $this->db->where('te.fk_te_id_user', $arrData["idEstudiante"]);

        $this->db->where('(te.estado = 0 OR te.asistencia = 2)');



        $query = $this->db->get('tutorias_estudiante te');

//        echo "<pre>";

//        echo $this->db->last_query();

//        echo $query->num_rows();

//        echo "</pre>";        die();



        if ($query->num_rows() > 0) {

            return $query->num_rows();

        } else {

            return 0;

        }

    }

    

    public function get_tutorias_correo($idtutoria) {

        $this->db->select("T.*, D.NOMBRE, L.direccion, H.hora minimo, H.formato_24 formato_minimo, X.hora maximo, X.formato_24 formato_maximo, Y.asignaturas, Z.temas");

        $this->db->join('docente D', 'D.ID_DOCENTE = T.fk_id_docente', 'INNER');

        $this->db->join('tutorias_base TB', 'T.fk_id_tutorias_base = TB.id_tutorias_base', 'INNER');

        $this->db->join('tutorias_asignaturas TA', 'TA.fk_ta_tutoria_base = TB.id_tutorias_base', 'INNER');

        $this->db->join('param_lugares L', 'L.id_param_lugares = T.fk_id_lugar', 'INNER');

        $this->db->join('param_horas H', 'H.id_hora = T.hora_inicio', 'INNER');

        $this->db->join('param_horas X', 'X.id_hora = T.hora_fin', 'INNER');

        $this->db->join('param_asignaturas Y', 'Y.id_param_asignaturas = TA.fk_ta_param_asignaturas', 'LEFT');

        $this->db->join('param_temas Z', 'Z.id_param_temas = T.fk_tp_id_param_temas', 'LEFT');

        $this->db->where('T.id_tutorias_principal', $idtutoria);



        $query = $this->db->get('tutorias_principal T');

//        echo "<pre>";

//        echo $this->db->last_query();

//        print "<br><br>";

//        echo $query->num_rows();

//        echo "</pre>";        die();

        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }

    /**

     * Búsqueda del perfil "Docente"

     * Modules: DOCENTES

     * @since 27/3/2019

     */

    public function get_tutorias_docentes($arrData) {

        $idUser = $this->session->userdata("id");



        $this->db->select("T.*, D.NOMBRE, L.direccion, H.hora minimo, H.formato_24 formato_minimo, X.hora maximo, X.formato_24 formato_maximo, Y.asignaturas, Z.temas");

        $this->db->join('docente D', 'D.ID_DOCENTE = M.fk_id_docente', 'INNER');

        $this->db->join('tutorias_principal T', 'T.fk_id_docente = D.ID_DOCENTE', 'INNER');

        $this->db->join('param_lugares L', 'L.id_param_lugares = T.fk_id_lugar', 'INNER');

        $this->db->join('param_horas H', 'H.id_hora = T.hora_inicio', 'INNER');

        $this->db->join('param_horas X', 'X.id_hora = T.hora_fin', 'INNER');

        $this->db->join('param_asignaturas Y', 'Y.id_param_asignaturas = T.fk_tp_id_param_asignaturas', 'LEFT');

        $this->db->join('param_temas Z', 'Z.id_param_temas = T.fk_tp_id_param_temas', 'LEFT');



        $this->db->where('M.fk_id_user', $idUser);





        if (array_key_exists("fechaInicio", $arrData) && $arrData["fechaInicio"] != '') {

            $this->db->where('T.fecha_tutoria >=', $arrData["fechaInicio"]);

        }



        if (array_key_exists("fechaFin", $arrData) && $arrData["fechaFin"] != '') {

            $this->db->where('T.fecha_tutoria <=', $arrData["fechaFin"]);

        }



        if (array_key_exists("Estado", $arrData) && $arrData["Estado"] != '') {

            $this->db->where('T.estado_tutoria', $arrData["Estado"]);

        }



        $this->db->order_by("fecha_tutoria", "ASC");

        $query = $this->db->get('docente_x_user M');



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return false;

        }

    }



    /**

     * Actualizar datos de la tutoria, se cierrar tutoria

     * @since 27/3/2019

     */

    public function updateTutoriaCerrar() {

        $idTutoria = $this->input->post('hddIdTutoriaPrincipal');



        $data = array(

            'estado_tutoria' => 5,

            'asistencia'=>1,

                //'observaciones' => $this->input->post('observaciones')

        );



        $this->db->where('id_tutorias_principal', $idTutoria);

        $query = $this->db->update('tutorias_principal', $data);



        if ($query) {

            return true;

        } else {

            return false;

        }

    }



    /**

     * Actualizar datos de la tutoria, se cierrar tutoria

     * @since 27/3/2019

     */

    public function updateAsistenciaObservaciones() {

        $idTutoria = $this->input->post('hddIdTutoriaPrincipal');



        $concatenado = $this->input->post('observaciones') . "\n" . $this->input->post('observaciones2');

        $data = array('observaciones' => $concatenado);



        $this->db->where('id_tutorias_principal', $idTutoria);

        $query = $this->db->update('tutorias_principal', $data);

        if ($query) {

            return true;

        } else {

            return false;

        }

    }



    /**

     * Actualizar asistencia

     * @since 24/3/2019

     */

    public function updateAsistencia() {

        $idTutoriaPrincipal = $this->input->post('hddIdTutoriaPrincipal');



        //se actualiza todas los estudiantes como no asistieron

        $data['asistencia'] = 2;

        $this->db->where('fk_te_id_tutorias_principal', $idTutoriaPrincipal);

        $query = $this->db->update('tutorias_estudiante', $data);



        //actualizo asistencia 

        $query = 1;

        if ($estudiante = $this->input->post('estudiante')) {

            $tot = count($estudiante);

            for ($i = 0; $i < $tot; $i++) {

                $data['asistencia'] = 1;

                $this->db->where('id_tutorias_estudiante', $estudiante[$i]);

                $query = $this->db->update('tutorias_estudiante', $data);

            }

        }

        if ($query) {

            return true;

        } else {

            return false;

        }

    }



    public function confirmarhorarios($arrayparams) {

        $this->db->select();

        $this->db->join('tutorias_principal tp', 'tp.id_tutorias_principal = te.fk_te_id_tutorias_principal', 'INNER');

        $this->db->where('te.fk_te_id_user', $arrayparams[3]);

        $this->db->where('tp.fecha_tutoria',$arrayparams[0]);

        $this->db->where('tp.hora_inicio', $arrayparams[1]);

        $this->db->where('tp.hora_fin', $arrayparams[2]);

        $this->db->where('tp.estado_tutoria <', 3);

        $query = $this->db->get('tutorias_estudiante te');

        if ($query->num_rows() == 0) {

            return true;

        } else {

            return false;

        }

    }

    

    function validarfechahora($fecha, $horaInicio, $horaFin, $docente){

        $this->db->select();

        $this->db->where('fk_id_docente', $docente);

        $this->db->where('fecha_tutoria',$fecha);

        $this->db->where('hora_inicio', $horaInicio);

        $this->db->where('hora_fin', $horaFin);

        $this->db->where('estado_tutoria <', 3);

        $query = $this->db->get('tutorias_principal');

        if ($query->num_rows() == 0) {

            return true;

        } else {

            return false;

        }

    }





    public function enviarCorreo($arrayparams) {

        $this->load->config('email');

        $this->load->library('email');

        

        $from = $arrayparams['de'];

        $to = $arrayparams['para'];

        $subject = $arrayparams['Asunto'];

        $message = $arrayparams['mensaje'];



        $this->email->set_newline("\r\n");

        $this->email->from($from);

        $this->email->to($to);

        $this->email->subject($subject);

        $this->email->message($message);



        if ($this->email->send()) {

            return 'El correo a sido enviado correctamente.';

        } else {

            return ($this->email->print_debugger());

        }

    }


      /**
     * Temas
     * Modules: Reportes
     * @since 15/5/2019
     */
    public function get_tutorias_report($canceladas_tutor = FALSE,$canceladas_estudiante = FALSE) {
        $this->db->select("T.*,I.id_user, D.NOMBRE, R.motivo_cancelacion ,W.asistencia , L.direccion, H.hora minimo, H.formato_24 formato_minimo, X.hora maximo, X.formato_24 formato_maximo, Y.asignaturas, Z.temas, W.calificacion_texto, W.calificacion, W.estado as estadoInscripcion, CONCAT(I.first_name , ' ' , I.last_name) as NombreE, I.numero_documento , W.asistencia_docente, W.calificacion_texto , W.calificacion,CONCAT(A.first_name , ' ' , A.last_name) as NombreUserCancelacion,A.perfil as RolUserCancelacion, B.numero_cancelaciones,C.cancelaciones as Num_cancelaciones");
        if($canceladas_tutor){
            $this->db->join('tutorias_estudiante W', 'W.fk_te_id_tutorias_principal = T.id_tutorias_principal', 'LEFT');
        }else{
            $this->db->join('tutorias_principal T', 'T.id_tutorias_principal = W.fk_te_id_tutorias_principal', 'LEFT');
        }
        $this->db->join('docente D', 'D.ID_DOCENTE = T.fk_id_docente', 'INNER');
        $this->db->join('param_lugares L', 'L.id_param_lugares = T.fk_id_lugar', 'INNER');
        $this->db->join('param_horas H', 'H.id_hora = T.hora_inicio', 'INNER');
        $this->db->join('param_horas X', 'X.id_hora = T.hora_fin', 'INNER');
        $this->db->join('user I', 'I.id_user = W.fk_te_id_user', 'LEFT');
        $this->db->join('user A', 'A.id_user = T.fk_id_user_cancelacion', 'LEFT');
        $this->db->join('estudiante_cancelaciones B', 'B.fk_ec_id_user = I.id_user', 'LEFT');
        $this->db->join('param_periodos C', 'C.id_param_periodos = B.fk_ec_id_param_periodos', 'LEFT');
        $this->db->join('param_asignaturas Y', 'Y.id_param_asignaturas = T.fk_tp_id_param_asignaturas', 'LEFT');
        $this->db->join('param_temas Z', 'Z.id_param_temas = T.fk_tp_id_param_temas', 'LEFT');
        $this->db->join('motivo_cancelacion R', 'R.id_motivo_cancelacion = T.fk_id_motivo_cancelacion', 'LEFT');
        $this->db->order_by("fecha_tutoria", "DESC");
        if($canceladas_tutor){
            $this->db->where('T.estado_tutoria  =',4);
            $query = $this->db->get('tutorias_principal T');
        }else if($canceladas_estudiante){
            $this->db->where('W.estado  =',1);
            $query = $this->db->get('tutorias_estudiante W');
            if ($query->num_rows() > 0) {
                $this->db->select("count(*) as total_cancelaciones,I.id_user");
                $this->db->join('user I', 'I.id_user = W.fk_te_id_user', 'LEFT');
                $this->db->join('tutorias_principal T', 'T.id_tutorias_principal = W.fk_te_id_tutorias_principal', 'LEFT');
                $this->db->group_by('I.id_user');
                $this->db->where('W.estado  =',1);
                $query2 = $this->db->get('tutorias_estudiante W');
                $query2 = $query2->result_array();
                //print_r($this->db->last_query());
                $query = $query->result_array();
                for($i = 0;$i<count($query);$i++){
                    foreach($query2 as $reg){
                        if($query[$i]['id_user'] == $reg['id_user'] && $query[$i]['Num_cancelaciones'] >= $reg['total_cancelaciones']){
                            $query[$i]['Comentarios'] = "1";
                        }
                    }
                    if(!key_exists('Comentarios',$query[$i])){
                        $query[$i]['Comentarios'] = null;
                    }
                }
                return $query;
            }
        }else{
            $query = $this->db->get('tutorias_estudiante W');
        }

        
        //print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    


    /**
     * Temas
     * Modules: Reportes
     * @since 1/6/2019
     */
    public function Tutorias_Por_Tutor_Total(){
        $this->db->select("W.fk_te_id_user as Id,COUNT(*) as Cantidad, I.movil as programa ,W.fk_te_id_user,T.fk_tp_id_param_asignaturas, Y.asignaturas, W.calificacion_texto, W.calificacion, W.estado as estadoInscripcion, CONCAT(I.last_name , ', ' , I.first_name) as NombreE, W.asistencia_docente");
        
        $this->db->join('tutorias_principal T', 'T.id_tutorias_principal = W.fk_te_id_tutorias_principal', 'INNER');
        $this->db->join('param_asignaturas Y', 'Y.id_param_asignaturas = T.fk_tp_id_param_asignaturas', 'LEFT');
        $this->db->join('user I', 'I.id_user = W.fk_te_id_user', 'LEFT');
        
        $this->db->group_by(array("I.id_user", "Y.id_param_asignaturas"));  
        $this->db->where('estado_tutoria !=', 4);
        $this->db->order_by("NombreE", "asc");
        $query = $this->db->get('tutorias_estudiante W');
        //print_r($this->db->last_query());
        
        if ($query->num_rows() > 0) {
            $contador = 0;
            $docentes = array();
            $query = $query->result_array();
            foreach($query as $data){
                $this->db->select("COUNT(*) as Cantidad,  D.NOMBRE");
                $this->db->join('tutorias_principal T', 'T.id_tutorias_principal = W.fk_te_id_tutorias_principal', 'INNER');
                $this->db->join('docente D', 'D.ID_DOCENTE = T.fk_id_docente', 'INNER');            
                $this->db->where('W.fk_te_id_user', $data['fk_te_id_user']);
                $this->db->where('T.fk_tp_id_param_asignaturas', $data['fk_tp_id_param_asignaturas']);
                $queryaux = $this->db->get('tutorias_estudiante W');
                if ($queryaux->num_rows() > 0) {
                    $queryaux = $queryaux->result_array();
                    //print_r($this->db->last_query());
                    if(count($queryaux) == 0){
                        $query[$contador][$queryaux['NOMBRE']] = $queryaux['Cantidad'];
                        if(!key_exists($data2['NOMBRE'],$docentes)){
                            $docentes[$queryaux['NOMBRE']] = array('label'=>$queryaux['NOMBRE']);
                        }
                    }else{
                        foreach($queryaux as $data2){
                            $query[$contador][$data2['NOMBRE']] = $data2['Cantidad'];
                            if(!key_exists($data2['NOMBRE'],$docentes)){
                                $docentes[$data2['NOMBRE']] = array('label'=>$data2['NOMBRE']);
                            }
                        }
                    }
                }
                $contador++;
            }
            
            for($i = 0;$i < count($query);$i++){
                $query[$i][0] = $docentes;
                foreach($docentes as $docente){
                    if(!key_exists($docente['label'],$query[$i])){
                        $query[$i][$docente['label']] = 0;
                    }
                }
            }
            return array('data'=>$query,'docentes_label'=>$docentes);
        } else {
            return false;
        }
    }

    /**
     * Temas
     * Modules: Reportes
     * @since 29/5/2019
     */
    public function get_programa_por($docente=FALSE,$asignatura=FALSE) {
        $this->db->select("COUNT(*) as CantEstu, A.asignaturas as Asignaturas, I.movil as programa,D.NOMBRE");
        $this->db->join('tutorias_principal T', 'T.id_tutorias_principal = W.fk_te_id_tutorias_principal', 'INNER');
        $this->db->join('param_asignaturas A', 'A.id_param_asignaturas = T.fk_tp_id_param_asignaturas', 'INNER');
        $this->db->join('docente D', 'D.ID_DOCENTE = T.fk_id_docente', 'INNER');
        $this->db->join('user I', 'I.id_user = W.fk_te_id_user', 'LEFT');
        if($asignatura){
            $this->db->group_by('A.id_param_asignaturas');
        }else if($docente){
            $this->db->group_by('I.movil');
        }else{
            return false;
        }
        $this->db->order_by("fecha_tutoria", "DESC");
        $query = $this->db->get('tutorias_estudiante W');
        //print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    /**
     * Temas
     * Modules: Reportes
     * @since 15/5/2019
     */
    public function get_asignaturas_all() {
        $this->db->select(" sum(T.cantidad_estudiantes) as tot_estud, Y.asignaturas");
        $this->db->join('param_asignaturas Y', 'Y.id_param_asignaturas = T.fk_tp_id_param_asignaturas', 'LEFT');
        //$this->db->join('param_programas Z', 'Z.id_param_programas = Y.fk_id_param_programas', 'LEFT');
        $this->db->order_by("fecha_tutoria", "DESC");
        $this->db->group_by('Y.id_param_asignaturas');
        $this->db->where('T.fk_tp_id_param_asignaturas  !=',NULL);
        $query = $this->db->get('tutorias_principal T');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    /**
     * Temas
     * Modules: Reportes
     * @since 7/5/2019
     */
    public function get_asignatura_programa() {
        $this->db->select("COUNT(*) as CantEstu, A.asignaturas as Asignaturas, P.programa");
        $this->db->join('param_asignaturas A', 'A.id_param_asignaturas = T.fk_tp_id_param_asignaturas', 'INNER');
        $this->db->join('user E', 'P.id_param_programas = R.fk_id_param_programas', 'INNER');
        $this->db->join('user I', 'I.id_user = W.fk_te_id_user', 'LEFT');
        $this->db->group_by('P.id_param_programas');
        $query = $this->db->get('tutorias_principal T');
        //print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    /**
     * Temas
     * Modules: Reportes
     * @since 5/6/2019
     */
    public function get_docentes_nombre() {
        $this->db->select("D.NOMBRE");
        $this->db->join('tutorias_principal T', 'T.id_tutorias_principal = W.fk_te_id_tutorias_principal', 'INNER');
        $this->db->join('docente D', 'D.ID_DOCENTE = T.fk_id_docente', 'INNER');
        $this->db->join('param_asignaturas Y', 'Y.id_param_asignaturas = T.fk_tp_id_param_asignaturas', 'LEFT');
        $this->db->join('param_programas Z', 'Z.id_param_programas = Y.fk_id_param_programas', 'LEFT');
        $this->db->join('user I', 'I.id_user = W.fk_te_id_user', 'LEFT');
        
        $this->db->group_by(array("I.id_user", "Y.id_param_asignaturas"));  
        $this->db->where('estado_tutoria !=', 4);
        $this->db->order_by("Z.programa", "asc");  
        $this->db->order_by('D.NOMBRE', 'asc');
        $query = $this->db->get('tutorias_estudiante W');

        if ($query->num_rows() > 0) {
            $result = array();
            foreach($query->result_array() as $docente){
                array_push($result,$docente['NOMBRE']);
            }
            return $result;
        } else {
            return false;
        }
    }

    
    /**
     * Temas
     * Modules: Reportes
     * @since 7/6/2019
     */
    public function get_estudiante_por_programa(){
        $this->db->select("count(*) as cantidad, E.movil as programa");
        $this->db->group_by("E.movil");
        $this->db->where('E.perfil', 2);
        $this->db->where('E.movil !=',"");
        $this->db->where('E.movil !=',"NA");
        $query = $this->db->get('user E');
        //print_r($this->db->last_query());
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }    
    }

}