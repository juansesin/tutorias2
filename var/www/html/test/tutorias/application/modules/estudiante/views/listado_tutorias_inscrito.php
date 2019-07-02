<script type="text/javascript" src="<?php echo base_url("assets/js/validate/estudiante/cancelar.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/validate/estudiante/calificar.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/validate/estudiante/asistencia.js"); ?>"></script>
<link href="../assets/bootstrap/selectbootstrap.css" rel="stylesheet" type="text/css"/>
<script src="../assets/js/general/selectimagen.js" type="text/javascript"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mis Tutorías
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Mis Tutorías</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="callout callout-info">
            <h4>Información Importante</h4>
            <p>Estimado estudiante, tenga en cuenta que es necesario calificar las tutorías a las que asistió para inscribirse a nuevas tutorías</p>
        </div>
        <?php
        $retornoExito = $this->session->flashdata('retornoExito');
        if ($retornoExito) {
            ?>
            <div class="callout callout-info">
                <h4>Información</h4>
                <p><?php echo $retornoExito ?></p>
            </div>
            <?php
        }
        $retornoError = $this->session->flashdata('retornoError');
        if ($retornoError) {
            ?>
            <div class="callout callout-danger">
                <h4>Información</h4>
                <p><?php echo $retornoError ?></p>
            </div>
            <?php
        }
        ?> 
        <?php
        if (!$info) {
            ?>
            <div class="callout callout-info">
                <h4>Información</h4>
                <p>No se encuentra inscrito en ninguna Tutoría.</p>
            </div>
            <?php
        }
        ?>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <?php
            if ($info) {
                foreach ($info as $lista):
                    ?>
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <!-- About Me Box -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">TUTORÍA INSCRITA</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-7">
                                        <p>
                                            <strong><i class="fa fa-tag margin-r-5"></i> Asignatura: </strong>
                                            <?php echo $lista['asignaturas']; ?>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-pencil margin-r-5"></i> Tema: </strong>
                                            <?php echo $lista['temas']; ?>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-calendar margin-r-5"></i> Fecha - Horario: </strong>
                                            <?php echo $lista['fecha_tutoria'] . ' / ' . $lista['minimo'] . ' - ' . $lista['maximo']; ?>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-thumb-tack margin-r-5"></i> Lugar: </strong>
                                            <?php echo $lista['direccion']; ?>
                                        </p>
                                        <p>
                                            <strong><i class="fa fa-user margin-r-5"></i> Docente: </strong>
                                            <?php echo $lista['NOMBRE']; ?>
                                        </p>
                                        <?php
                                        $bandera = true; //se coloca bandera para poder cancelar la tutoria
                                        $banderaIniciada = false;
                                        $tipo = "primary";
                                        //si ya empezo no puede cancelar la inscripcion
                                        $fechaTutoriaInicio = $lista["fecha_tutoria"] . " " . $lista['formato_minimo'];
                                        $fechaTutoriaInicio =  new DateTime($fechaTutoriaInicio);
                                        //si ya terminó no puede cancelar la inscripcion
                                        $fechaTutoriaFin = $lista["fecha_tutoria"] . " " . $lista['formato_maximo'];
                                        $fechaTutoriaFin =  new DateTime($fechaTutoriaFin);
                                        $fechaActual =  new DateTime();
                                        if ($fechaActual > $fechaTutoriaInicio and $fechaActual < $fechaTutoriaFin) {
                                            $bandera = false; //no se cancelar porque ya empezo la tutoria
                                            $mensaje = "Ya inició la Tutoría.";
                                            $tipo = "warning";
                                            if ($lista["estado_tutoria"] != 4 && $lista["asistenciaEstudiante"] == 1 ) {
                                                $banderaIniciada = true; //si esta iniciada y NO esta cancelada (y no esta cerrada entonces puede calificar al docente; se elimina esta condición)
                                                $mensaje = "Tutoría pendiente por calificar";
                                            }
                                        } elseif ($fechaActual > $fechaTutoriaFin) {
                                            $bandera = false; //Información sobre la tutoría que ya pasó
                                            $mensaje = "Ya terminó la tutoría y aún no se reporta su asistencia, encuentre mayor información en la decanatura de estudiantes";
                                            $tipo = "warning";
                                            if ($lista["estado_tutoria"] != 4 && $lista["asistenciaEstudiante"] == 1) {
                                                $banderaIniciada = true; //si esta iniciada y NO esta cancelada (y no esta cerrada entonces puede calificar al docente; se elimina esta condición)
                                                $mensaje = "Tutoría pendiente por calificar";
                                            }
                                        }
                                        if ($lista["calificacion"] != 0) {
                                            $banderaIniciada = true; //no se puede cancelar la inscripcion, tutoria cerrada
                                            $mensaje = "Tutoría calificada";
                                            $tipo = "success";
                                        }
                                        if ($lista["estado_tutoria"] == 5) {
                                            $bandera = false; //no se puede cancelar la inscripcion, tutoria cerrada
                                            //$mensaje = "La tutoría se encuentra cerrada. ";
                                        } elseif ($lista["estado_tutoria"] == 4) {
                                            $bandera = false; //no se puede cancelar la inscripcion, tutoria cancelada
                                            $mensaje = "La tutoría fue cancelada.";
                                            $tipo = "danger";
                                        }
                                        if ($lista['estadoInscripcion'] == 0) {
                                            $bandera = false; //no se puede cancelar la inscripcion, inscripcion eliminada por usuario
                                            $mensaje = "Usted canceló su inscripción a esta tutoría";
                                            $tipo = "info";
                                        }
                                        if ($bandera) {
                                            ?>
                                            <form id="formCancelar" role="form">
                                                <button type="button" id="<?php echo $lista['id_tutorias_principal']; ?>" class='btn btn-danger'>
                                                    <i class="fa fa-trash-o"></i> Cancelar inscripción 
                                                </button>
                                            </form>
                                            <?php
                                        } else {
                                            //$fechaTutoriaFinmas2 = $lista["fecha_tutoria"] . " " . $lista['formato_maximo'];			
                                            $fechaTutoriaFin->modify('+2 hour');
                                            if ((!$lista["asistencia_docente"] != 1) && ($lista['calificacion'] == 0) && ($fechaActual > $fechaTutoriaInicio and $fechaActual < $fechaTutoriaFin)&&($lista['estadoInscripcion'] != 0)) {
                                                ?>
                                                <form id="formAsistencia" role="form">
                                                    <button type="button" id="<?php echo $lista['id_tutorias_principal']; ?>" class='btn btn-default asisteDocente'>
                                                        <i class="fa fa-check"></i> ¿No asistió el profesor? 
                                                    </button><hr>
                                                </form>
                                            <?php } ?>
                                            <div class="alert alert-<?= $tipo ?> alert-dismissible">
                                                <h4><i class="icon fa fa-ban"></i> Atención!</h4>
                                                <?php echo $mensaje; ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col-xs-1">
                                    </div>
                                    <div class="col-xs-4">
                                        <?php
                                        if ($lista["calificacion"]) {
                                            ?>	
                                            <p>
                                                <strong><i class="fa fa-check"></i> Calificación: </strong>
                                                <?php echo $lista['calificacion_texto'] ? $lista['calificacion_texto'] . ' - ' : ''; ?>
                                                <?php
                                                switch ($lista['calificacion']) {
                                                    case 1:
                                                        echo "Buena";
                                                        break;
                                                    case 2:
                                                        echo "Regular";
                                                        break;
                                                    case 3:
                                                        echo "Mala";
                                                        break;
                                                }
                                                ?>
                                            </p>
                                            <?php
                                        } elseif (($banderaIniciada)&&($lista['estadoInscripcion'] != 0)) {
                                            ?>
                                            <form id="formCalificar" role="form">
                                                <input type="hidden" id="hddIdTutoriaEstudiante" name="hddIdTutoriaEstudiante" value="<?php echo $lista['id_tutorias_estudiante']; ?>"/>
                                                <input type="hidden" id="hddIdTutoriaPrincipal" name="hddIdTutoriaPrincipal" value="<?php echo $lista["id_tutorias_principal"]; ?>"/>
                                                <input type="hidden" id="hddAsistencia" name="hddAsistencia" value="<?php echo $lista["asistenciaEstudiante"]; ?>"/>
                                                <label for="exampleInputPassword1">Calificación</label>
                                                <div class="form-group">
                                                    <select name="calificacion" id="calificacion" class="form-control selectpicker" >
                                                        <option value="">Seleccione...</option>
                                                        <option value=1 data-thumbnail="../images/happy.png" <?php
                                                        if ($lista["calificacion"] == 1) {
                                                            echo "selected";
                                                        }
                                                        ?>> Buena</option>
                                                        <option value=2 data-thumbnail="../images/confused.png" <?php
                                                        if ($lista["calificacion"] == 2) {
                                                            echo "selected";
                                                        }
                                                        ?>> Regular</option>
                                                        <option value=3 data-thumbnail="../images/sad.png" <?php
                                                    if ($lista["calificacion"] == 3) {
                                                        echo "selected";
                                                    }
                                                    ?>> Mala</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="calificacion_texto" name="calificacion_texto" class="form-control" value="<?php echo $lista["calificacion_texto"]; ?>" placeholder="Observaciones" >
                                                </div>
                                                <div class="box-footer">
                                                    <button type="button" id="btnSubmitCalificar" name="btnSubmitCalificar" class='btn btn-info'>
                                                        Calificar <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                                                    </button>	
                                                </div>
                                            </form>
            <?php
        }
        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
        <?php
    endforeach;
}
?>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
