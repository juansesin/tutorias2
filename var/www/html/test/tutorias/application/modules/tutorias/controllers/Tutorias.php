<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Tutorias extends CI_Controller {



    public function __construct() {

        parent::__construct();

        $this->load->model("tutorias_model");

        $this->load->model("general_model");

        $this->load->helper('form');

    }



    /**

     * Lista de tutorias

     * @since 14/3/2019

     * @author BMOTTAG

     */

    public function listado() {

        $arrParam = array();

        $data['info'] = $this->general_model->get_tutorias($arrParam);



        $data["view"] = 'listado_tutorias';

        $this->load->view("layout", $data);

    }



    /**

     * Adicionar tutorias

     * @since 15/3/2019

     * @author BMOTTAG

     */

    public function adicionar() {

        $data['information'] = FALSE;



        //listado sedes

        $arrParam = array(

            "table" => "sede",

            "order" => "NOMBRE_SEDE",

            "id" => "x"

        );

        $data['SEDE'] = $this->general_model->get_basic_search($arrParam);



        //informacion periodo

        $arrParam = array("idEstado" => 1);

        $data['PERIODOS'] = $this->general_model->get_periodos($arrParam);



        $arrParamFiltro = array(

            "idHoraInicio" => $data['PERIODOS'][0]['horario_minimo'],

            "idHoraFinal" => $data['PERIODOS'][0]['horario_maximo']

        );

        $data['horas'] = $this->general_model->get_horas($arrParamFiltro); //LISTA DE HORAS



        $data["view"] = 'form_tutorias';

        $this->load->view("layout", $data);

    }



    /**

     * Guardar tutoria

     * @since 16/3/2019

     */

    public function guardar_tutoria() {

        header('Content-Type: application/json');

        $fechaActual = date('Y-m-d');

        if ($fechaActual > $this->input->post('inicio_periodo')) {

            $fechaInicio =  date('Y-m-d', strtotime($fechaActual . ' +1 day'));;

        } else {

            $fechaInicio = $this->input->post('inicio_periodo');

        }

        $fechaFin = $this->input->post('fin_periodo');

        $lunes = $this->input->post('lunes');

        $martes = $this->input->post('martes');

        $miercoles = $this->input->post('miercoles');

        $jueves = $this->input->post('jueves');

        $viernes = $this->input->post('viernes');

        $sabado = $this->input->post('sabado');



        $lunes_inicio = $this->input->post('horario_minimo_lunes');

        $lunes_fin = $this->input->post('horario_maximo_lunes');

        $martes_inicio = $this->input->post('horario_minimo_martes');

        $martes_fin = $this->input->post('horario_maximo_martes');

        $miercoles_inicio = $this->input->post('horario_minimo_miercoles');

        $miercoles_fin = $this->input->post('horario_maximo_miercoles');

        $jueves_inicio = $this->input->post('horario_minimo_jueves');

        $jueves_fin = $this->input->post('horario_maximo_jueves');

        $viernes_inicio = $this->input->post('horario_minimo_viernes');

        $viernes_fin = $this->input->post('horario_maximo_viernes');

        $sabado_inicio = $this->input->post('horario_minimo_sabado');

        $sabado_fin = $this->input->post('horario_maximo_sabado');

        $fk_id_docente = $this->input->post('Docente');

        $this->load->model("general_model");

        $arrParam = array("fk_id_docente" => $fk_id_docente, "lunes" => $lunes, "lunes_inicio" => $lunes_inicio, "lunes_fin" => $lunes_fin,

            "martes" => $martes, "martes_inicio" => $martes_inicio, "martes_fin" => $martes_fin,

            "miercoles" => $miercoles, "miercoles_inicio" => $miercoles_inicio, "miercoles_fin" => $miercoles_fin,

            "jueves" => $jueves, "jueves_inicio" => $jueves_inicio, "jueves_fin" => $jueves_fin,

            "viernes" => $viernes, "viernes_inicio" => $viernes_inicio, "viernes_fin" => $viernes_fin,

            "sabado" => $sabado, "sabado_inicio" => $sabado_inicio, "sabado_fin" => $sabado_fin);

        $asignaturas = $this->input->post('Asignaturas');

        $numeroAsignaturas = count($asignaturas);

        $errortemas = true;

        if (!empty($lunes)) {

            if (!$this->general_model->get_tutoria_docente_en_horario($arrParam, 'lunes')) {

                $errortemas = false;

                $this->session->set_flashdata('retornoError', 'Ya se tienen tutorias para uno de los dias seleccionados.');

            }

        } elseif (!empty($martes)) {

            if (!$this->general_model->get_tutoria_docente_en_horario($arrParam, 'martes')) {

                $errortemas = false;

                $this->session->set_flashdata('retornoError', 'Ya se tienen tutorias para uno de los dias seleccionados.');

            }

        } elseif (!empty($miercoles)) {

            if (!$this->general_model->get_tutoria_docente_en_horario($arrParam, 'miercoles')) {

                $errortemas = false;

                $this->session->set_flashdata('retornoError', 'Ya se tienen tutorias para uno de los dias seleccionados.');

            }

        } elseif (!empty($jueves)) {

            if (!$this->general_model->get_tutoria_docente_en_horario($arrParam, 'jueves')) {

                $errortemas = false;

                $this->session->set_flashdata('retornoError', 'Ya se tienen tutorias para uno de los dias seleccionados.');

            }

        } elseif (!empty($viernes)) {

            if (!$this->general_model->get_tutoria_docente_en_horario($arrParam, 'viernes')) {

                $errortemas = false;

                $this->session->set_flashdata('retornoError', 'Ya se tienen tutorias para uno de los dias seleccionados.');

            }

        } elseif (!empty($sabado)) {

            if (!$this->general_model->get_tutoria_docente_en_horario($arrParam, 'sabado')) {

                $errortemas = false;

                $this->session->set_flashdata('retornoError', 'Ya se tienen tutorias para uno de los dias seleccionados.');

            }

        } else {

            for ($j = 0; $j < $numeroAsignaturas; $j++) {

                if (!$this->general_model->comprobar_temas($asignaturas[$j])) {

                    $errortemas = false;

                    $this->session->set_flashdata('retornoError', 'Una de las asignaturas seleccionada no tiene tema.');

                }

            }

        }



        if ($errortemas) {

            if ($idTutoria = $this->tutorias_model->saveTutoria()) {

                //GUARDO ASIGNATURAS DE LA Tutorias



                for ($i = 0; $i < $numeroAsignaturas; $i++) {

                    $idUser = $this->tutorias_model->saveTutoriaAsignaturas($idTutoria, $asignaturas[$i]);

                }





                //tutorias para los lunes

                if (isset($lunes)) {

                    $calculo = $this->calculo_algoritmo($fechaInicio, $fechaFin, 1, 'monday'); //fechas de lunes



                    if ($calculo) {

                        $tot = count($calculo);

                        for ($i = 0; $i < $tot; $i++) {



                            //revisar si las horas son consecutivas de lo contrario guardar un registro por cada hora

                            $inicio = $lunes_inicio;

                            $fin = $lunes_fin;



                            $restaHoras = $fin - $inicio;



                            for ($x = 0; $x < $restaHoras; $x++) {

                                $fin = $inicio + 1;

                                $idUser = $this->tutorias_model->saveTutoriaPrincipal($idTutoria, $calculo[$i], $inicio, $fin);

                                $inicio = $fin;

                            }

                        }

                    }

                }



                //tutorias para los martes

                if (isset($martes)) {

                    $calculo = $this->calculo_algoritmo($fechaInicio, $fechaFin, 2, 'tuesday'); //fechas de martes



                    if ($calculo) {

                        $tot = count($calculo);

                        for ($i = 0; $i < $tot; $i++) {



                            //revisar si las horas son consecutivas de lo contrario guardar un registro por cada hora

                            $inicio = $martes_inicio;

                            $fin = $martes_fin;



                            $restaHoras = $fin - $inicio;



                            for ($x = 0; $x < $restaHoras; $x++) {

                                $fin = $inicio + 1;

                                $idUser = $this->tutorias_model->saveTutoriaPrincipal($idTutoria, $calculo[$i], $inicio, $fin);

                                $inicio = $fin;

                            }

                        }

                    }

                }



                //tutorias para los miercoles

                if (isset($miercoles)) {

                    $calculo = $this->calculo_algoritmo($fechaInicio, $fechaFin, 3, 'wednesday'); //fechas de martes



                    if ($calculo) {

                        $tot = count($calculo);

                        for ($i = 0; $i < $tot; $i++) {

                            //revisar si las horas son consecutivas de lo contrario guardar un registro por cada hora

                            $inicio = $miercoles_inicio;

                            $fin = $miercoles_fin;



                            $restaHoras = $fin - $inicio;



                            for ($x = 0; $x < $restaHoras; $x++) {

                                $fin = $inicio + 1;

                                $idUser = $this->tutorias_model->saveTutoriaPrincipal($idTutoria, $calculo[$i], $inicio, $fin);

                                $inicio = $fin;

                            }

                        }

                    }

                }



                //tutorias para los jueves

                if (isset($jueves)) {

                    $calculo = $this->calculo_algoritmo($fechaInicio, $fechaFin, 4, 'thursday'); //fechas de jueves



                    if ($calculo) {

                        $tot = count($calculo);

                        for ($i = 0; $i < $tot; $i++) {

                            //revisar si las horas son consecutivas de lo contrario guardar un registro por cada hora

                            $inicio = $jueves_inicio;

                            $fin = $jueves_fin;



                            $restaHoras = $fin - $inicio;



                            for ($x = 0; $x < $restaHoras; $x++) {

                                $fin = $inicio + 1;

                                $idUser = $this->tutorias_model->saveTutoriaPrincipal($idTutoria, $calculo[$i], $inicio, $fin);

                                $inicio = $fin;

                            }

                        }

                    }

                }



                //tutorias para los viernes

                if (isset($viernes)) {

                    $calculo = $this->calculo_algoritmo($fechaInicio, $fechaFin, 5, 'friday'); //fechas de viernes



                    if ($calculo) {

                        $tot = count($calculo);

                        for ($i = 0; $i < $tot; $i++) {

                            //revisar si las horas son consecutivas de lo contrario guardar un registro por cada hora

                            $inicio = $viernes_inicio;

                            $fin = $viernes_fin;



                            $restaHoras = $fin - $inicio;



                            for ($x = 0; $x < $restaHoras; $x++) {

                                $fin = $inicio + 1;

                                $idUser = $this->tutorias_model->saveTutoriaPrincipal($idTutoria, $calculo[$i], $inicio, $fin);

                                $inicio = $fin;

                            }

                        }

                    }

                }



                //tutorias para los sabado

                if (isset($sabado)) {

                    $calculo = $this->calculo_algoritmo($fechaInicio, $fechaFin, 6, 'saturday'); //fechas de sabado



                    if ($calculo) {

                        $tot = count($calculo);

                        for ($i = 0; $i < $tot; $i++) {

                            //revisar si las horas son consecutivas de lo contrario guardar un registro por cada hora

                            $inicio = $sabado_inicio;

                            $fin = $sabado_fin;



                            $restaHoras = $fin - $inicio;



                            for ($x = 0; $x < $restaHoras; $x++) {

                                $fin = $inicio + 1;

                                $idUser = $this->tutorias_model->saveTutoriaPrincipal($idTutoria, $calculo[$i], $inicio, $fin);

                                $inicio = $fin;

                            }

                        }

                    }

                }





                $data["result"] = true;

                $data["idRecord"] = $idTutoria;

                $this->session->set_flashdata('retornoExito', 'Se guardó la información');

            } else {

                $data["result"] = true;

                $data["idRecord"] = '';

                $this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help, contact the Admin.');

            }

        } else {

            $data["result"] = true;

        }





        echo json_encode($data);

    }



    /**

     * Lista de escuelas

     * @since 4/2/2017

     * @author BMOTTAG

     */

    public function escuelaList() {

        header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos

        $Sede = $this->input->post('Sede');



        //company list

        $this->load->model("general_model");

        $arrParam = array("idSede" => $Sede);

        $lista = $this->general_model->get_escuelas($arrParam); //lista de escuelas



        echo "<option value=''>Select...</option>";

        if ($lista) {

            foreach ($lista as $fila) {

                echo "<option value='" . $fila["ID_ESCUELA"] . "' >" . $fila["NOMBRE_ESCUELA"] . "</option>";

            }

        }

    }



    /**

     * Lista de escuelas

     * @since 4/2/2017

     * @author BMOTTAG

     */

    public function docenteList() {

        header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos

        $Escuela = $this->input->post('Escuela');



        //company list

        $this->load->model("general_model");

        $arrParam = array("idEscuela" => $Escuela);

        $lista = $this->general_model->get_docentes($arrParam); //lista de escuelas



        echo "<option value=''>Select...</option>";

        if ($lista) {

            foreach ($lista as $fila) {

                echo "<option value='" . $fila["ID_DOCENTE"] . "' >" . $fila["NOMBRE"] . "</option>";

            }

        }

    }



    /**

     * Lista de lugares

     * @since 4/2/2017

     * @author BMOTTAG

     */

    public function lugarList() {

        header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos

        $Sede = $this->input->post('Sede');



        //listado de lugares para la sede seleccionada

        $this->load->model("general_model");

        $arrParam = array("idSede" => $Sede);

        $lista = $this->general_model->get_lugares($arrParam); //lista de lugares



        echo "<option value=''>Select...</option>";

        if ($lista) {

            foreach ($lista as $fila) {

                echo "<option value='" . $fila["id_param_lugares"] . "' >" . $fila["direccion"] . "</option>";

            }

        }

    }



    /**

     * Lista de asignaturas

     * @since 15/3/2019

     * @author BMOTTAG

     */

    public function asignaturasList() {

        header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos

        $Escuela = $this->input->post('Escuela');

        //$Escuela = 111;

        $this->load->model("general_model");

        $arrParam = array("idEscuela" => $Escuela, "temas" => TRUE);

        $lista = $this->general_model->get_asignaturas_temas($arrParam); //lista de escuelas

        print "<br><br>";

        echo "<option value=''>Select... $Escuela</option>";

        if ($lista) {

            foreach ($lista as $fila) {

                echo "<option value='" . $fila["id_param_asignaturas"] . "' >" . $fila["asignaturas"] . "</option>";

            }

        }

    }



    /**

     * Lista de progrmas

     * @since 28/3/2019

     * @author BMOTTAG

     */

    public function programasList() {

        header("Content-Type: text/plain; charset=utf-8"); //Para evitar problemas de acentos

        $Escuela = $this->input->post('Escuela');



        //company list

        $this->load->model("general_model");

        $arrParam = array("idEscuela" => $Escuela);

        $lista = $this->general_model->get_programas($arrParam); //lista de programas



        echo "<option value=''>Select...</option>";

        if ($lista) {

            foreach ($lista as $fila) {

                echo "<option value='" . $fila["id_param_programas"] . "' >" . $fila["programa"] . "</option>";

            }

        }

    }



    /**

     * Calculo de dias

     * @since 25/12/2018

     * @author BMOTTAG

     */

    public function calculo_algoritmo($fechaNormalInicial, $fechaNormalFinal, $numeroDia, $diaLetras) {

        $fechaInicio = strtotime($fechaNormalInicial);

        $fechaFin = strtotime($fechaNormalFinal);



        $dia = date('w', $fechaInicio);



        if ($dia > $numeroDia) {

            //como es un dia despues del lunes entonces le sumo una semana para averiguar los lunes de la siguiente semana

            $nuevafecha = strtotime('+7 day', strtotime($fechaNormalInicial));

            $fechaNormalInicial = date('Y-m-j', $nuevafecha);

        }



        $fechaInicio = strtotime($fechaNormalInicial);

        //Recorro las fechas y con la función strotime obtengo los lunes

        $x = 0;



        for ($i = $fechaInicio; $i <= $fechaFin; $i += 86400 * 7) {

            $lunes[$x] = date("Y-m-d", strtotime($diaLetras . ' this week', $i));

            $x++;

        }

        if (isset($lunes)) {

            return $lunes;

        } else {

            return false;

        }

    }



    /**

     * Editar tutorias

     * @since 22/3/2019

     * @author BMOTTAG

     */

    public function modificar($idTutoriaPrincipal) {

        $data['information'] = FALSE;



        //informacion periodo

        $arrParam = array("idEstado" => 1);

        $data['PERIODOS'] = $this->general_model->get_periodos($arrParam);



        //informacion tutoria

        $arrParam = array(

            "idTutoria" => $idTutoriaPrincipal

        );

        $data['info'] = $this->general_model->get_tutorias($arrParam);



        $idTutoriaBase = $data['info'][0]['fk_id_tutorias_base'];

        $Escuela = $data['info'][0]['fk_id_escuela'];

        $idAsignatura = $data['info'][0]['fk_tp_id_param_asignaturas'];

//pr($data['info']); exit;

        //listado de docentes para la escuela de la tutoria

        $arrParam = array("idEscuela" => $Escuela);

        $data['listaDocentes'] = $this->general_model->get_docentes($arrParam); //lista de docentes

        //listado de lugares para la sede de la tutoria

        $arrParam = array("idSede" => $data['info'][0]['fk_id_sede']);

        $data['listaLugares'] = $this->general_model->get_lugares($arrParam); //lista de lugares

        //listado de asignaturas guardadas para la tutoria

        $arrParam = array("idTutoria" => $idTutoriaBase);

        $data['listaAsignaturas'] = $this->general_model->get_asignaturas_tutoria($arrParam); //lista de asignaturas

        //si ya se encuentra guardada la asignatura entonces busca la lista de los temas

        if ($idAsignatura && ($idAsignatura != '' || $idAsignatura != 0)) {

            $arrParam = array("idAsignatura" => $idAsignatura);

            $data['listaTemas'] = $this->general_model->get_temas($arrParam); //lista de temas

        }



        $arrParamFiltro = array(

            "idHoraInicio" => $data['PERIODOS'][0]['horario_minimo'],

            "idHoraFinal" => $data['PERIODOS'][0]['horario_maximo']

        );

        $data['horas'] = $this->general_model->get_horas($arrParamFiltro); //LISTA DE HORAS



        $data["view"] = 'form_modificar';

        $this->load->view("layout", $data);

    }



    /**

     * Guardar tutoria

     * @since 23/3/2019

     */

    public function guardar_edicion_tutoria() {

        header('Content-Type: application/json');

        $idTutoria = $this->input->post('hddIdTutoriaPrincipal');

        $arrParam = array(

            "idTutoria" => $idTutoria

        );

        $data["result"] = true;

        $data["idRecord"] = $idTutoria;

        $infoTutoria = $this->general_model->get_tutorias($arrParam);

        if ($infoTutoria) {

            $fechaTutoria = date("Y-m-d H:i");

            $fechaTutoriaLimite = date("Y-m-d H:i", strtotime($fechaTutoria . "+ 1 days"));

            $hora = $this->input->post('horarioInicio') - 1;

            $horacompleta = "$hora:00";

            $fechaNuevo = date("Y-m-d H:i", strtotime($this->input->post('fecha') . " $horacompleta"));

            if ($this->general_model->validarfechahora($this->input->post('fecha'), $this->input->post('horarioInicio'), $this->input->post('horarioFin'), $this->input->post('Docente'))) {

                if ($fechaTutoriaLimite < $fechaNuevo) {

                    if ($this->tutorias_model->updateTutoria()) {

                        if ($this->CorreoMo($idTutoria)) {

                            $this->session->set_flashdata('retornoExito', "Se guardó la información");

                        } else {

                            $this->session->set_flashdata('retornoExito', "No se logro enviar el correo");

                        }

                    } else {

                        $this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help, contact the Admin.');

                    }

                } else {

                    $this->session->set_flashdata('retornoError', "<strong>¡ERROR EN FECHA Y/O HORA!</strong> La tutoría se debe programar con 24 horas de anticipación");

                }

            } else {

                $this->session->set_flashdata('retornoError', 'Ya existe una tutoria programada en ese horario.');

            }

        } else {

            $this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> No existe la tutoria.');

        }

        echo json_encode($data);

    }



    /**

     * Cancelar tutoria

     * Se debe actualizar tabla de tutorias principal, actualizar el estado

     * @since 23/3/2019

     */

    public function cancelar_tutoria($idTutoria, $idMotivoCancelacion) {

        header('Content-Type: application/json');

        //$idMotivoCancelacion = $this->input->post('motivoCancelacion');

        //die(print_r($idMotivoCancelacion));	



        if ($this->tutorias_model->updateTutoriaCancelar($idTutoria, $idMotivoCancelacion)) {

                        $tutoria = $this->general_model->get_tutorias_correo($idTutoria);

            foreach ($tutoria as $value) {

                $data = array(

                    "asignatura" => $value['asignaturas'],

                    "tema" => $value['temas'],

                    "fecha" => $value['fecha_tutoria'] . ' ' . $value['formato_minimo'] . '-' . $value['formato_maximo'],

                    "lugar" => $value['direccion'],

                    "docente" => $value['NOMBRE'],

                    "inscritos" => $value['numero_inscritos'],

                    "idDocente" => $value['fk_id_docente'],

                );

            }

            $tipo = "tutoria_cancelada";

            $asunto = "Aviso de cancelación de tutoría";

            $this->correoDocente($data, $tipo, $asunto);

            $this->correoGestores($data, $tipo, $asunto);

            $this->correoEstudiante($data, $tipo, $asunto, $idTutoria);

            $data["result"] = true;

            $this->session->set_flashdata('retornoExito', 'Se canceló la Tutoría.');

        } else {

            $data["result"] = "error";

            $data["mensaje"] = "Error!!! Contactarse con el Administrador.";

            $this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Contactarse con el Administrador.');

        }

        //echo json_encode($data);

        redirect(base_url('docente'), 'refresh');

    }



    //Cancelar tutorias desde admin

    public function cancelar_tutoria_admin($idTutoria, $idMotivoCancelacion) {

        header('Content-Type: application/json');

        //$idMotivoCancelacion = $this->input->post('motivoCancelacion');



        if ($this->tutorias_model->updateTutoriaCancelar($idTutoria, $idMotivoCancelacion)) {

            $tutoria = $this->general_model->get_tutorias_correo($idTutoria);

            foreach ($tutoria as $value) {

                $data = array(

                    "asignatura" => $value['asignaturas'],

                    "tema" => $value['temas'],

                    "fecha" => $value['fecha_tutoria'] . ' ' . $value['formato_minimo'] . '-' . $value['formato_maximo'],

                    "lugar" => $value['direccion'],

                    "docente" => $value['NOMBRE'],

                    "inscritos" => $value['numero_inscritos'],

                    "idDocente" => $value['fk_id_docente'],

                );

            }

            $tipo = "tutoria_cancelada";

            $asunto = "Aviso de cancelación de tutoría";

            $this->correoDocente($data, $tipo, $asunto);

            $this->correoGestores($data, $tipo, $asunto);

            $this->correoEstudiante($data, $tipo, $asunto, $idTutoria);



            $data["result"] = true;

            $this->session->set_flashdata('retornoExito', 'Se canceló la Tutoría.');

        } else {

            $data["result"] = true;

            $data["mensaje"] = "Error!!! Contactarse con el Administrador.";

            $this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Contactarse con el Administrador.');

        }

        //echo json_encode($data);

        redirect(base_url('dashboard'), 'refresh');

    }



    /**

     * Listado de inscritos a una tutoria, para confirmar la asistencia

     * @since 24/3/2019

     * @author BMOTTAG

     */

    public function inscritos($idTutoria) {

        $arrParam = array("idTutoria" => $idTutoria);

        $data['info'] = $this->general_model->get_tutorias($arrParam);



        //listado de inscritos

        $arrParam = array("idTutoria" => $idTutoria);

        $data['infoInscritos'] = $this->general_model->get_inscritos_tutoria($arrParam);

        $data['fechaactual'] = date('Y-m-d');

        $data["view"] = 'listado_inscritos';

        $this->load->view("layout", $data);

    }



    /**

     * Actualizar observaciones de los estudiantes

     * @since 24/3/2019

     * @author BMOTTAG

     */

    public function update_asistencia_observaciones() {

        $idTutoriaPrincipal = $this->input->post('hddIdTutoriaPrincipal');



        if ($this->general_model->updateAsistenciaObservaciones()) {



            //actulizo el estado de la tutoria a cerrada y actualizo el campo de observacion

            $data["result"] = true;

            $this->session->set_flashdata('retornoExito', "Se actualizaron las observaciones.");

        } else {

            $data["result"] = "error";

            $this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');

        }



        redirect(base_url('tutorias/inscritos/' . $idTutoriaPrincipal), 'refresh');

    }



    /**

     * Actualizar asistencia de los estudiantes

     * @since 24/3/2019

     * @author BMOTTAG

     */

    public function update_asistencia() {

        $idTutoriaPrincipal = $this->input->post('hddIdTutoriaPrincipal');



        if ($this->general_model->updateAsistencia()) {



            //consulto si todos los estudiantes que asistieron hicieron la calificacion del docente

            //si es asi entonces coloco la tutoria como cerrada

            $arrParam = array(

                "idTutoria" => $idTutoriaPrincipal,

                "asistencia" => 1,

                "calificacion" => true

            );

            $infoInscritosCalificaron = $this->general_model->get_inscritos_tutoria($arrParam);



            if ($infoInscritosCalificaron) {

                $conteoCalificaron = count($infoInscritosCalificaron);

            } else {

                $conteoCalificaron = 0;

            }



            $arrParam2 = array(

                "idTutoria" => $idTutoriaPrincipal,

                "asistencia" => 1,

                "calificacion" => true

            );

            $infoInscritosAsistieron = $this->general_model->get_inscritos_tutoria($arrParam2);

            if ($infoInscritosAsistieron) {

                $conteoAsistentes = count($infoInscritosAsistieron);

            } else {

                $conteoAsistentes = 0;

            }



            //actulizo el estado de la tutoria a cerrada y actualizo el campo de observacion

            $this->general_model->updateTutoriaCerrar();

            $data["result"] = true;

            $this->session->set_flashdata('retornoExito', "Se cerro la Tutoría.");

        } else {

            $data["result"] = "error";

            $this->session->set_flashdata('retornoError', '<strong>Error!!!</strong> Ask for help');

        }



        redirect(base_url('tutorias/inscritos/' . $idTutoriaPrincipal), 'refresh');

    }



    public function CorreoMo($idTutoria) {

        //$idTutoria = 434;

        $tutorias = $this->general_model->get_tutorias_correo($idTutoria);

        //print_r($tutorias);        die();

        foreach ($tutorias as $value) {

            $data = array(

                "asignatura" => $value['asignaturas'],

                "tema" => $value['temas'],

                "fecha" => $value['fecha_tutoria'] . ' ' . $value['formato_minimo'] . '-' . $value['formato_maximo'],

                "lugar" => $value['direccion'],

                "docente" => $value['NOMBRE'],

                "inscritos" => $value['numero_inscritos'],

                "idDocente" => $value['fk_id_docente'],

            );

        }

        $tipo = "tutoria_modificada";

        $asunto = "Aviso de modificación de tutoría";

        $this->correoDocente($data, $tipo, $asunto);

        $this->correoGestores($data, $tipo, $asunto);

        $this->correoEstudiante($data, $tipo, $asunto, $idTutoria);

        //print "CorreoMo"; die();

        return true;

    }



    public function correoDocente($tutoria, $tipo, $asunto) {

        $docentes = $this->general_model->get_docentes_user($tutoria['idDocente']);

        if ($docentes) {

            // print_r($gestores);            die();

            foreach ($docentes as $value) {

                if (($value['correo'] == 1)&&(!empty($value['email']))) {

                    $data = array(

                        "de" => 'notificaciones.ptd@usa.edu.co',

                        "para" => $value['email'],

                        "Asunto" => $asunto,

                        "mensaje" => $this->load->view("templatesMail/$tipo.php", $tutoria, TRUE),

                    );

                    $this->general_model->enviarCorreo($data);

                }

            }

        }

        return;

    }



    public function correoGestores($tutoria, $tipo, $asunto) {

        $gestores = $this->general_model->get_gestores();

        if ($gestores) {

            // print_r($gestores);            die();

            foreach ($gestores as $value) {

                if ($value['correo'] == 1) {

                    $data = array(

                        "de" => 'notificaciones.ptd@usa.edu.co',

                        "para" => $value['email'],

                        "Asunto" => $asunto,

                        "mensaje" => $this->load->view("templatesMail/$tipo.php", $tutoria, TRUE),

                    );

                    $this->general_model->enviarCorreo($data);

                }

            }

        }

        return;

    }



    public function correoEstudiante($tutoria, $tipo, $asunto, $idtutoria) {

        $arrParam = array("idTutoria" => $idtutoria);

        $usuario = $this->general_model->get_inscritos_tutoria($arrParam);

        if ($usuario) {

            foreach ($usuario as $value) {

                if ($value['correo'] == 1) {

                    $data = array(

                        "de" => 'notificaciones.ptd@usa.edu.co',

                        "para" => $value['email'],

                        "Asunto" => $asunto,

                        "mensaje" => $this->load->view("templatesMail/$tipo.php", $tutoria, TRUE),

                    );

                    $this->general_model->enviarCorreo($data);

                }

            }

        }

        return;

    }



}

