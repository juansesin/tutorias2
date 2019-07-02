<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-10 10:45:46 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 10:53:03 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 10:53:16 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 11:12:31 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 11:44:43 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 11:47:12 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 12:00:44 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 12:06:28 --> Query error: Unknown column 'W.estado' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '9'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-04-10 12:06:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/servic/public_html/tutorias/application/models/General_model.php 383
ERROR - 2019-04-10 12:08:08 --> Query error: Unknown column 'W.estado' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '9'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-04-10 12:08:08 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/servic/public_html/tutorias/application/models/General_model.php 383
ERROR - 2019-04-10 12:09:43 --> Severity: Notice --> Undefined index: estadoInscripcion /home/servic/public_html/tutorias/application/modules/estudiante/views/listado_tutorias_inscrito.php 141
ERROR - 2019-04-10 13:04:53 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 13:53:12 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 13:53:30 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 13:54:23 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 14:00:47 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 14:01:25 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 14:02:13 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 14:06:01 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 14:08:46 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 14:30:43 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 14:32:37 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 14:36:22 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 14:36:33 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 15:09:12 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 15:36:56 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 15:45:58 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 15:47:55 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 15:51:02 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 16:14:53 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 16:17:34 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-10 16:19:42 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
