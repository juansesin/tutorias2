<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-04-28 14:52:17 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-28 14:52:18 --> 404 Page Not Found: /index
ERROR - 2019-04-28 14:52:24 --> 404 Page Not Found: /index
ERROR - 2019-04-28 14:52:30 --> 404 Page Not Found: /index
ERROR - 2019-04-28 14:52:30 --> 404 Page Not Found: /index
ERROR - 2019-04-28 15:59:21 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-04-28 15:59:21 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-04-28 16:09:09 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-04-28 16:09:09 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-04-28 16:27:30 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-28 16:27:31 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 16:27:31 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 17:45:00 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 17:45:08 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 17:45:08 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 17:45:43 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 17:45:43 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 17:45:44 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 19:12:08 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 19:12:08 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 19:12:27 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-28 19:12:28 --> 404 Page Not Found: /index
ERROR - 2019-04-28 19:12:28 --> 404 Page Not Found: /index
ERROR - 2019-04-28 19:14:01 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-04-28 19:14:01 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-04-28 19:14:08 --> 404 Page Not Found: /index
ERROR - 2019-04-28 19:14:08 --> 404 Page Not Found: /index
ERROR - 2019-04-28 19:14:35 --> 404 Page Not Found: /index
ERROR - 2019-04-28 19:14:36 --> 404 Page Not Found: /index
ERROR - 2019-04-28 20:03:15 --> Severity: Notice --> Undefined property: stdClass::$photo /home/servic/public_html/tutorias/application/modules/login/models/Login_model.php 39
ERROR - 2019-04-28 20:03:16 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 20:03:16 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 20:03:20 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
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
ERROR - 2019-04-28 20:03:20 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/servic/public_html/tutorias/application/models/General_model.php 579
ERROR - 2019-04-28 20:05:20 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '9'
AND `W`.`estado` = 1
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-04-28 20:05:20 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/servic/public_html/tutorias/application/models/General_model.php 579
ERROR - 2019-04-28 20:05:22 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '9'
AND `W`.`estado` = 1
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-04-28 20:05:22 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/servic/public_html/tutorias/application/models/General_model.php 579
ERROR - 2019-04-28 20:06:03 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` IS NULL
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-04-28 20:06:03 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/servic/public_html/tutorias/application/models/General_model.php 579
ERROR - 2019-04-28 20:10:10 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-04-28 20:10:10 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
