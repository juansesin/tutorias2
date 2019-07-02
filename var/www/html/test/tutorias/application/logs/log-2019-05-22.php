<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-05-22 09:50:47 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 09:50:47 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:50:47 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:50:48 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:50:48 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:50:48 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:50:48 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:50:50 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '204'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 09:50:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 1315
ERROR - 2019-05-22 09:53:30 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '204'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 09:53:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 658
ERROR - 2019-05-22 09:53:33 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '204'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 09:53:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 658
ERROR - 2019-05-22 09:53:33 --> 404 Page Not Found: /index
ERROR - 2019-05-22 09:53:42 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 09:53:43 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:53:43 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:53:43 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:53:43 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 09:53:44 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '204'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 09:53:44 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 658
ERROR - 2019-05-22 11:27:15 --> Severity: Notice --> Undefined property: stdClass::$movil /var/www/html/test/tutorias/application/modules/login/models/Login_model.php 136
ERROR - 2019-05-22 11:27:15 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 11:27:15 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:27:16 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:27:16 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:27:16 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:27:16 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:27:17 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:31:02 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 11:31:03 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:03 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:03 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:04 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:05 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:09 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '204'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 11:31:09 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:09 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:09 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:09 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:11 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:11 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:12 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:12 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:15 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '204'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 11:31:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:31:59 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 11:31:59 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:31:59 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:32:00 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:32:00 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:32:06 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:32:07 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:32:08 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:33:01 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:33:05 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:33:06 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:33:07 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:33:08 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:33:13 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:33:15 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:33:15 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:33:15 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:33:17 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:33:17 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:00 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:34:00 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:34:01 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:34:01 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:34:04 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:34:04 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:34:04 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:34:06 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:06 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:14 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:14 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:14 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:14 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:29 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:29 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:29 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:29 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:29 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:38 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:39 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:39 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:39 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:42 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:42 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:42 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:42 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:49 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:49 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:49 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:50 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:52 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:53 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:53 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:53 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:34:57 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:35:15 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 11:35:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:35:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:35:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:35:16 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:35:23 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '204'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 11:35:23 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:35:23 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:37:35 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:37:35 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:37:35 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:37:35 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:38:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:38:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 11:46:33 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 11:46:33 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:46:34 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:46:34 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:46:34 --> 404 Page Not Found: /index
ERROR - 2019-05-22 11:47:30 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:47:30 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 11:47:38 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:47:41 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:47:44 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:47:45 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:47:46 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:47:46 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 11:47:46 --> Query error: Unknown column 'movil' in 'field list' - Invalid query: UPDATE `user` SET `log_user` = 'ronald.romero', `last_name` = 'Romero Reyes', `first_name` = 'Ronald Jared', `movil` = NULL, `state` = '1', `email` = 'ronald.romero@correo.usa.edu.co', `perfil` = '0', `correo` = '1'
WHERE `id_user` = '212'
ERROR - 2019-05-22 12:03:06 --> 404 Page Not Found: /index
ERROR - 2019-05-22 12:06:21 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 12:06:22 --> 404 Page Not Found: /index
ERROR - 2019-05-22 12:06:22 --> 404 Page Not Found: /index
ERROR - 2019-05-22 12:06:23 --> 404 Page Not Found: /index
ERROR - 2019-05-22 12:06:23 --> 404 Page Not Found: /index
ERROR - 2019-05-22 12:06:23 --> 404 Page Not Found: /index
ERROR - 2019-05-22 12:06:23 --> 404 Page Not Found: /index
ERROR - 2019-05-22 12:06:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:06:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:06:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:06:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:06:46 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:06:46 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:06:46 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:06:46 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:07:18 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:07:18 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:07:18 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:07:18 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:08:12 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:08:12 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:08:12 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:08:12 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:17:31 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:17:31 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:17:32 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:17:32 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:17:46 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:17:46 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:17:47 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:17:47 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 12:21:03 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 12:21:04 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:04 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:04 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:04 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:06 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '204'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 12:21:06 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:07 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:30 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:30 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:30 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:30 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:30 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 12:21:30 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 13:59:17 --> 404 Page Not Found: /index
ERROR - 2019-05-22 13:59:17 --> 404 Page Not Found: /index
ERROR - 2019-05-22 13:59:19 --> 404 Page Not Found: /index
ERROR - 2019-05-22 13:59:30 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 13:59:31 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 13:59:31 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 13:59:32 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 13:59:32 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 13:59:32 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 13:59:32 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 13:59:37 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '207'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 13:59:37 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 13:59:37 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:00:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:01:55 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 14:01:55 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:01:55 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:01:55 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:01:55 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:01:55 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:01:55 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:02:00 --> Query error: Unknown column 'W.asistencia_docente' in 'field list' - Invalid query: SELECT `T`.*, `D`.`NOMBRE`, `L`.`direccion`, `H`.`hora` `minimo`, `H`.`formato_24` `formato_minimo`, `X`.`hora` `maximo`, `X`.`formato_24` `formato_maximo`, `Y`.`asignaturas`, `Z`.`temas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, `W`.`id_tutorias_estudiante`, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
INNER JOIN `param_lugares` `L` ON `L`.`id_param_lugares` = `T`.`fk_id_lugar`
INNER JOIN `param_horas` `H` ON `H`.`id_hora` = `T`.`hora_inicio`
INNER JOIN `param_horas` `X` ON `X`.`id_hora` = `T`.`hora_fin`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `param_temas` `Z` ON `Z`.`id_param_temas` = `T`.`fk_tp_id_param_temas`
WHERE `W`.`fk_te_id_user` = '204'
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-05-22 14:02:00 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:02:00 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:03:52 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:03:52 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:03:52 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:03:52 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:04:22 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:04:22 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-22 14:06:56 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 14:06:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:06:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:06:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:06:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:06:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:06:56 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:07:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:07:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:07:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:07:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:07:37 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:07:37 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:07:37 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:07:37 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:09:51 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 14:09:52 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:09:52 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:09:53 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:09:53 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:09:53 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:09:53 --> 404 Page Not Found: /index
ERROR - 2019-05-22 14:10:04 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:49 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:49 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:51 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:51 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:55 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:55 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:55 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 14:10:55 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:42:44 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-22 16:42:46 --> 404 Page Not Found: /index
ERROR - 2019-05-22 16:42:48 --> 404 Page Not Found: /index
ERROR - 2019-05-22 16:42:50 --> 404 Page Not Found: /index
ERROR - 2019-05-22 16:42:50 --> 404 Page Not Found: /index
ERROR - 2019-05-22 16:42:51 --> 404 Page Not Found: /index
ERROR - 2019-05-22 16:42:52 --> 404 Page Not Found: /index
ERROR - 2019-05-22 16:43:07 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:43:07 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:44:02 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:44:02 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:44:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:44:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:47:13 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 16:47:13 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 16:47:26 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:47:27 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:47:40 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:47:40 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 16:49:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 16:49:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 16:49:02 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 16:49:02 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 16:49:02 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 16:49:02 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 17:24:23 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 17:24:23 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 17:24:23 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 17:24:30 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 17:24:30 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 17:24:38 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 17:24:38 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 17:25:04 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 17:25:04 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 17:25:07 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 17:25:07 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 17:25:07 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 17:25:07 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-22 17:25:25 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-22 17:25:25 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
