<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-06-17 14:41:02 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:41:07 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-06-17 14:41:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:41:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:41:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:41:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:41:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:41:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:41:11 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:41:11 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:41:18 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:41:18 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:41:29 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:41:29 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:41:44 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-06-17 14:41:45 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-06-17 14:41:45 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-06-17 14:41:45 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-06-17 14:41:45 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-06-17 14:41:46 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-06-17 14:41:46 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-06-17 14:42:00 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-06-17 14:42:00 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-06-17 14:42:08 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-06-17 14:42:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:42:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:42:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:42:08 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:42:11 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:42:11 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:42:18 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.W.fk_te_id_user' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `W`.`fk_te_id_user` as `Id`, COUNT(*) as Cantidad, `I`.`movil` as `programa`, `W`.`fk_te_id_user`, `T`.`fk_tp_id_param_asignaturas`, `Y`.`asignaturas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, CONCAT(I.last_name, ', ', I.first_name) as NombreE, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
WHERE `estado_tutoria` != 4
GROUP BY `I`.`id_user`, `Y`.`id_param_asignaturas`
ORDER BY `NombreE` ASC
ERROR - 2019-06-17 14:42:18 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 1985
ERROR - 2019-06-17 14:42:25 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.W.fk_te_id_user' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `W`.`fk_te_id_user` as `Id`, COUNT(*) as Cantidad, `I`.`movil` as `programa`, `W`.`fk_te_id_user`, `T`.`fk_tp_id_param_asignaturas`, `Y`.`asignaturas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, CONCAT(I.last_name, ', ', I.first_name) as NombreE, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
WHERE `estado_tutoria` != 4
GROUP BY `I`.`id_user`, `Y`.`id_param_asignaturas`
ORDER BY `NombreE` ASC
ERROR - 2019-06-17 14:42:25 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 1985
ERROR - 2019-06-17 14:42:28 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:42:28 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:36 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:36 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:36 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:36 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:36 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:43:38 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:38 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:38 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:38 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:38 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:43:53 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:54 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:54 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:54 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:43:54 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:44:01 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:49:31 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:49:53 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:49:53 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:49:54 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:49:54 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:49:55 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:49:55 --> 404 Page Not Found: /index
ERROR - 2019-06-17 14:49:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.A.asignaturas' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT COUNT(*) as CantEstu, `A`.`asignaturas` as `Asignaturas`, `I`.`movil` as `programa`, `D`.`NOMBRE`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `param_asignaturas` `A` ON `A`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
GROUP BY `I`.`movil`
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-06-17 14:49:58 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 2051
ERROR - 2019-06-17 14:50:06 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.A.asignaturas' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT COUNT(*) as CantEstu, `A`.`asignaturas` as `Asignaturas`, `I`.`movil` as `programa`, `D`.`NOMBRE`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `param_asignaturas` `A` ON `A`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
GROUP BY `I`.`movil`
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-06-17 14:50:06 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 2051
ERROR - 2019-06-17 14:50:12 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.W.fk_te_id_user' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `W`.`fk_te_id_user` as `Id`, COUNT(*) as Cantidad, `I`.`movil` as `programa`, `W`.`fk_te_id_user`, `T`.`fk_tp_id_param_asignaturas`, `Y`.`asignaturas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, CONCAT(I.last_name, ', ', I.first_name) as NombreE, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
WHERE `estado_tutoria` != 4
GROUP BY `I`.`id_user`, `Y`.`id_param_asignaturas`
ORDER BY `NombreE` ASC
ERROR - 2019-06-17 14:50:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 1985
ERROR - 2019-06-17 14:50:16 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:50:16 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:50:16 --> 404 Page Not Found: ../modules/Reports/controllers/Reports/vendor
ERROR - 2019-06-17 14:50:21 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.A.asignaturas' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT COUNT(*) as CantEstu, `A`.`asignaturas` as `Asignaturas`, `I`.`movil` as `programa`, `D`.`NOMBRE`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `param_asignaturas` `A` ON `A`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
GROUP BY `I`.`movil`
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-06-17 14:50:21 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 2051
ERROR - 2019-06-17 15:12:49 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:12:49 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:12:57 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-06-17 15:12:57 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:12:57 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:12:57 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:12:57 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:12:57 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:12:57 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:13:02 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:14:25 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:14:25 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:14:26 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:14:26 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:14:26 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:14:26 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:14:28 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:14:28 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:14:30 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:14:30 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:14:38 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:14:38 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:14:44 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:14:44 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:14:50 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.W.fk_te_id_user' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `W`.`fk_te_id_user` as `Id`, COUNT(*) as Cantidad, `I`.`movil` as `programa`, `W`.`fk_te_id_user`, `T`.`fk_tp_id_param_asignaturas`, `Y`.`asignaturas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, CONCAT(I.last_name, ', ', I.first_name) as NombreE, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
WHERE `estado_tutoria` != 4
GROUP BY `I`.`id_user`, `Y`.`id_param_asignaturas`
ORDER BY `NombreE` ASC
ERROR - 2019-06-17 15:14:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 1985
ERROR - 2019-06-17 15:15:00 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:15:00 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:15:04 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.A.asignaturas' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT COUNT(*) as CantEstu, `A`.`asignaturas` as `Asignaturas`, `I`.`movil` as `programa`, `D`.`NOMBRE`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `param_asignaturas` `A` ON `A`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
GROUP BY `I`.`movil`
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-06-17 15:15:04 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 2051
ERROR - 2019-06-17 15:15:07 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.A.asignaturas' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT COUNT(*) as CantEstu, `A`.`asignaturas` as `Asignaturas`, `I`.`movil` as `programa`, `D`.`NOMBRE`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
INNER JOIN `param_asignaturas` `A` ON `A`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
INNER JOIN `docente` `D` ON `D`.`ID_DOCENTE` = `T`.`fk_id_docente`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
GROUP BY `I`.`movil`
ORDER BY `fecha_tutoria` DESC
ERROR - 2019-06-17 15:15:07 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 2051
ERROR - 2019-06-17 15:15:12 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.W.fk_te_id_user' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `W`.`fk_te_id_user` as `Id`, COUNT(*) as Cantidad, `I`.`movil` as `programa`, `W`.`fk_te_id_user`, `T`.`fk_tp_id_param_asignaturas`, `Y`.`asignaturas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, CONCAT(I.last_name, ', ', I.first_name) as NombreE, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
WHERE `estado_tutoria` != 4
GROUP BY `I`.`id_user`, `Y`.`id_param_asignaturas`
ORDER BY `NombreE` ASC
ERROR - 2019-06-17 15:15:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 1985
ERROR - 2019-06-17 15:17:13 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.W.fk_te_id_user' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `W`.`fk_te_id_user` as `Id`, COUNT(*) as Cantidad, `I`.`movil` as `programa`, `W`.`fk_te_id_user`, `T`.`fk_tp_id_param_asignaturas`, `Y`.`asignaturas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, CONCAT(I.last_name, ', ', I.first_name) as NombreE, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
WHERE `estado_tutoria` != 4
GROUP BY `I`.`id_user`, `Y`.`id_param_asignaturas`
ORDER BY `NombreE` ASC
ERROR - 2019-06-17 15:17:13 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 1985
ERROR - 2019-06-17 15:18:43 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.W.fk_te_id_user' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `W`.`fk_te_id_user` as `Id`, COUNT(*) as Cantidad, `I`.`movil` as `programa`, `W`.`fk_te_id_user`, `T`.`fk_tp_id_param_asignaturas`, `Y`.`asignaturas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, CONCAT(I.last_name, ', ', I.first_name) as NombreE, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
WHERE `estado_tutoria` != 4
GROUP BY `I`.`id_user`, `Y`.`id_param_asignaturas`
ORDER BY `NombreE` ASC
ERROR - 2019-06-17 15:18:43 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 1985
ERROR - 2019-06-17 15:18:43 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:26:12 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.W.fk_te_id_user' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `W`.`fk_te_id_user` as `Id`, COUNT(*) as Cantidad, `I`.`movil` as `programa`, `W`.`fk_te_id_user`, `T`.`fk_tp_id_param_asignaturas`, `Y`.`asignaturas`, `W`.`calificacion_texto`, `W`.`calificacion`, `W`.`estado` as `estadoInscripcion`, CONCAT(I.last_name, ', ', I.first_name) as NombreE, `W`.`asistencia_docente`
FROM `tutorias_estudiante` `W`
INNER JOIN `tutorias_principal` `T` ON `T`.`id_tutorias_principal` = `W`.`fk_te_id_tutorias_principal`
LEFT JOIN `param_asignaturas` `Y` ON `Y`.`id_param_asignaturas` = `T`.`fk_tp_id_param_asignaturas`
LEFT JOIN `user` `I` ON `I`.`id_user` = `W`.`fk_te_id_user`
WHERE `estado_tutoria` != 4
GROUP BY `I`.`id_user`, `Y`.`id_param_asignaturas`
ORDER BY `NombreE` ASC
ERROR - 2019-06-17 15:26:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 1985
ERROR - 2019-06-17 15:26:13 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:26:19 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:19 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:21 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:21 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:21 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:21 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:23 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:23 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:23 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:25 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:25 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:26:28 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:33:50 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:33:50 --> 404 Page Not Found: ../modules/reports/controllers/Reports/vendor
ERROR - 2019-06-17 15:37:58 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:37:58 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:37:58 --> 404 Page Not Found: /index
ERROR - 2019-06-17 15:37:58 --> 404 Page Not Found: /index
ERROR - 2019-06-17 22:35:49 --> 404 Page Not Found: /index
