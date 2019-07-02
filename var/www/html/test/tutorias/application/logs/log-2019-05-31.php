<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-05-31 00:35:23 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 00:35:23 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:35:23 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:35:23 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:35:23 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:35:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:35:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:10 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 00:46:10 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:10 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:10 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:10 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:11 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:11 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:39 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:50 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 00:46:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:46:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:47:07 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:47:07 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:47:07 --> 404 Page Not Found: /index
ERROR - 2019-05-31 00:47:07 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:07:01 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:07:23 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:07:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:07:35 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 06:07:35 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 06:07:35 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 06:07:36 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 06:07:36 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 06:07:36 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 06:07:36 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 06:07:39 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 06:07:39 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 06:08:11 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 06:08:11 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:08:11 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:08:11 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:08:13 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:08:13 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:08:18 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:08:18 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:08:35 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:08:35 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:08:35 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:08:35 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:08:40 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.A.id_param_asignaturas' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '7'
GROUP BY `A`.`asignaturas`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 06:08:40 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 337
ERROR - 2019-05-31 06:09:04 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.A.id_param_asignaturas' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '11'
GROUP BY `A`.`asignaturas`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 06:09:04 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 337
ERROR - 2019-05-31 06:13:01 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.A.id_param_asignaturas' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '19'
GROUP BY `A`.`asignaturas`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 06:13:01 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 337
ERROR - 2019-05-31 06:24:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:24:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:24:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:24:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:27:31 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:57:17 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 06:57:17 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:57:18 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:57:19 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:57:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:57:21 --> 404 Page Not Found: /index
ERROR - 2019-05-31 06:57:34 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:57:34 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:57:36 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:57:36 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:57:36 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 06:57:36 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:23:38 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:23:38 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:23:38 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:23:38 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:26:33 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 08:26:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:26:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:26:34 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:26:34 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:26:41 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 08:26:41 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 08:27:34 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 08:27:34 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 08:28:41 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:28:41 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:28:55 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:28:55 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:28:55 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:28:55 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 08:36:01 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 08:36:01 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 08:37:12 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 08:37:12 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 08:37:12 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 08:37:13 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 08:37:13 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 08:37:17 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 08:37:17 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 08:39:35 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 08:39:35 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:39:35 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:39:35 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:39:35 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:40:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/dashboard/views/form_busqueda_admin.php 599
ERROR - 2019-05-31 08:40:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/dashboard/views/form_busqueda_admin.php 599
ERROR - 2019-05-31 08:40:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/dashboard/views/form_busqueda_admin.php 599
ERROR - 2019-05-31 08:40:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/dashboard/views/form_busqueda_admin.php 599
ERROR - 2019-05-31 08:40:19 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:40:19 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:40:19 --> 404 Page Not Found: /index
ERROR - 2019-05-31 08:40:19 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:21 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:23 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 09:22:23 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:32 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:32 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:32 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:22:32 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:23:22 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:24:01 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:24:01 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:24:09 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:09 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:09 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:09 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:09 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:12 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:24:12 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:24:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:16 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:16 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:16 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:24:16 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:25:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:25:34 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:34 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:34 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:35 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:25:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:25:56 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:25:56 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:25:56 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:25:56 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:25:56 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:26:04 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:26:04 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:26:04 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:26:04 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:32:57 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 09:32:57 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 09:33:39 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:33:39 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:33:39 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:33:39 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:33:41 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:33:41 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:33:41 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:33:41 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:33:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:06 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:34:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 09:34:12 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:12 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:26 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:26 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:26 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:26 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:57 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:57 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:57 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:58 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:58 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:59 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:34:59 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:08 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:08 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:08 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:08 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:08 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:08 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:09 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:09 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:34 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 09:35:35 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:35 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:35 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:35:35 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:44 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 09:36:44 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:44 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:44 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:36:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:36:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:36:48 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:36:48 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:36:49 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:36:49 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:37:35 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 09:37:35 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 09:39:42 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:39:42 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:39:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:39:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:39:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:39:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 09:40:40 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 09:40:40 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 09:43:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:43:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:43:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:43:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:43:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:43:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 09:44:13 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 09:44:13 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 10:24:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 10:26:39 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 10:26:41 --> 404 Page Not Found: /index
ERROR - 2019-05-31 10:26:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 10:26:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 10:26:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 10:26:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 10:26:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 10:49:23 --> 404 Page Not Found: /index
ERROR - 2019-05-31 12:14:48 --> 404 Page Not Found: /index
ERROR - 2019-05-31 12:14:48 --> 404 Page Not Found: /index
ERROR - 2019-05-31 12:14:48 --> 404 Page Not Found: /index
ERROR - 2019-05-31 12:14:48 --> 404 Page Not Found: /index
ERROR - 2019-05-31 12:14:49 --> 404 Page Not Found: /index
ERROR - 2019-05-31 18:58:28 --> 404 Page Not Found: /index
ERROR - 2019-05-31 18:58:36 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 18:58:37 --> 404 Page Not Found: /index
ERROR - 2019-05-31 18:58:37 --> 404 Page Not Found: /index
ERROR - 2019-05-31 18:58:38 --> 404 Page Not Found: /index
ERROR - 2019-05-31 18:58:38 --> 404 Page Not Found: /index
ERROR - 2019-05-31 18:58:38 --> 404 Page Not Found: /index
ERROR - 2019-05-31 18:58:38 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:01:51 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 19:01:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:01:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:01:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:01:51 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:05:13 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:05:13 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:05:19 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:05:19 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:06:00 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:06:00 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:27:51 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:27:51 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:27:52 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:27:52 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:28:07 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:28:07 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:28:18 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:28:18 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:28:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:28:28 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:28:37 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:28:37 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:29:07 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:29:07 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:29:21 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:29:21 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:29:33 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:29:33 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:30:00 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:30:00 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:30:33 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:30:33 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:30:50 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:30:50 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:31:21 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:31:21 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:34:54 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:34:54 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:35:20 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:35:20 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:35:35 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:35:35 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:35:45 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:35:45 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:36:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:36:05 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:36:19 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:36:19 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:36:32 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:36:32 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:36:48 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:36:48 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:37:04 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 19:37:04 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:37:04 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:37:04 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:37:04 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:37:29 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:37:29 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:37:53 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:37:53 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:38:10 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:38:10 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:38:23 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:38:23 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:38:43 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:38:43 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:38:57 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:38:57 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:39:09 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:39:09 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:41:09 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:41:09 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:41:11 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:41:11 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:41:11 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:41:11 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:42:56 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:42:56 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:43:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:43:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:43:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:43:14 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:43:16 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:43:16 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:43:17 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:43:17 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:44:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:44:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:44:02 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:44:02 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:44:02 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:44:02 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:45:10 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:45:10 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:45:52 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:45:52 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:45:52 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:45:52 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:46:44 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:46:44 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:46:59 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:46:59 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:47:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:47:00 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:48:15 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:48:15 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:48:16 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:48:16 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:48:24 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:48:24 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:48:42 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:48:43 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:48:43 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:48:43 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:50:03 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:50:03 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:50:03 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:50:03 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:51:04 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:51:04 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:51:17 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:51:17 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:54:32 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:54:32 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:54:32 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:54:32 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:54:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:54:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:54:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:54:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 19:54:52 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:54:52 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:56:22 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:56:22 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 19:58:23 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:58:23 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:58:25 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:58:25 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:58:25 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 19:58:25 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:11:29 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:11:29 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:11:30 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:11:30 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:13:17 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:13:17 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:14:17 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:14:17 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:14:17 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:14:17 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:15:54 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:15:54 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:16:42 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:16:43 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:16:45 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:16:45 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:31:23 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:31:23 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:31:25 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:31:25 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:31:26 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:31:26 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:31:28 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:31:28 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:34:22 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:34:22 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:34:23 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:34:23 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:34:23 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:34:23 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:34:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:35:55 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:35:56 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:35:56 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:35:57 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:35:58 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:35:58 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:35:58 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:35:58 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:36:01 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:36:01 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:36:07 --> Severity: Warning --> Use of undefined constant idAsignatura - assumed 'idAsignatura' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 20:37:46 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:37:46 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:37:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:37:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:37:48 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:37:48 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:37:50 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:37:50 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:37:57 --> Severity: Warning --> Use of undefined constant idAsignatura - assumed 'idAsignatura' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 304
ERROR - 2019-05-31 20:37:57 --> Query error: Unknown column 'idAsignatura' in 'field list' - Invalid query: SELECT DISTINCT `idAsignatura`
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '10'
GROUP BY `A`.`asignaturas`, `A`.`id_param_asignaturas`, `sertutorias`.`AP`.`id_relacion`, `sertutorias`.`T`.`id_param_temas`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 20:37:57 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 338
ERROR - 2019-05-31 20:38:22 --> Severity: Warning --> Use of undefined constant idAsignatura - assumed 'idAsignatura' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 304
ERROR - 2019-05-31 20:38:22 --> Query error: Unknown column 'idAsignatura' in 'field list' - Invalid query: SELECT DISTINCT `idAsignatura`
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '11'
GROUP BY `A`.`asignaturas`, `A`.`id_param_asignaturas`, `sertutorias`.`AP`.`id_relacion`, `sertutorias`.`T`.`id_param_temas`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 20:38:22 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 338
ERROR - 2019-05-31 20:39:50 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:39:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:39:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:39:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:39:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:39:52 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:39:53 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:40:19 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:19 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:20 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:20 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:21 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:21 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:21 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:21 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:40:24 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:40:56 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:56 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:56 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:56 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:57 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:57 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:40:59 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:40:59 --> 404 Page Not Found: /index
ERROR - 2019-05-31 20:42:13 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:42:13 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:42:13 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:42:13 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:42:31 --> Query error: Unknown column 'sertutorias.T.id_param_tema' in 'group statement' - Invalid query: SELECT DISTINCT *
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '10'
GROUP BY `A`.`asignaturas`, `A`.`id_param_asignaturas`, `sertutorias`.`AP`.`id_relacion`, `sertutorias`.`T`.`id_param_tema`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 20:42:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 339
ERROR - 2019-05-31 20:45:23 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' /var/www/html/test/tutorias/application/models/General_model.php 305
ERROR - 2019-05-31 20:45:38 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:45:38 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:45:38 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:45:38 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:45:47 --> Severity: Warning --> Use of undefined constant id_param_asignatura - assumed 'id_param_asignatura' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 305
ERROR - 2019-05-31 20:45:47 --> Severity: Warning --> Use of undefined constant asignaturas - assumed 'asignaturas' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 305
ERROR - 2019-05-31 20:49:14 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:49:14 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:49:14 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:49:14 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:49:24 --> Severity: Warning --> Use of undefined constant id_param_asignatura - assumed 'id_param_asignatura' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 305
ERROR - 2019-05-31 20:49:24 --> Severity: Warning --> Use of undefined constant asignaturas - assumed 'asignaturas' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 305
ERROR - 2019-05-31 20:49:24 --> Query error: Expression #10 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sertutorias.T.id_param_temas' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '10'
GROUP BY `A`.`asignaturas`, `A`.`id_param_asignaturas`, `AP`.`id_relacion`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 20:49:24 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 339
ERROR - 2019-05-31 20:59:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:59:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:59:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:59:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 20:59:58 --> Severity: Warning --> Use of undefined constant id_param_asignatura - assumed 'id_param_asignatura' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 20:59:58 --> Severity: Warning --> Use of undefined constant asignaturas - assumed 'asignaturas' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 20:59:58 --> Severity: Warning --> Use of undefined constant P - assumed 'P' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 20:59:58 --> Severity: Warning --> Use of undefined constant programa - assumed 'programa' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 20:59:58 --> Query error: Unknown column 'id_param_asignatura' in 'field list' - Invalid query: SELECT DISTINCT `id_param_asignatura`
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '10'
GROUP BY `A`.`asignaturas`, `A`.`id_param_asignaturas`, `AP`.`id_relacion`, `T`.`id_param_temas`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 20:59:58 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 338
ERROR - 2019-05-31 20:59:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/test/tutorias/system/core/Exceptions.php:271) /var/www/html/test/tutorias/system/core/Common.php 570
ERROR - 2019-05-31 21:01:16 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:01:16 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:01:16 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:01:16 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:01:24 --> Severity: Warning --> Use of undefined constant id_param_asignaturas - assumed 'id_param_asignaturas' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:01:24 --> Severity: Warning --> Use of undefined constant asignaturas - assumed 'asignaturas' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:01:24 --> Severity: Warning --> Use of undefined constant P - assumed 'P' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:01:24 --> Severity: Warning --> Use of undefined constant programa - assumed 'programa' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:01:24 --> Query error: Expression #1 of ORDER BY clause is not in SELECT list, references column 'sertutorias.P.programa' which is not in SELECT list; this is incompatible with DISTINCT - Invalid query: SELECT DISTINCT `id_param_asignaturas`
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '10'
GROUP BY `A`.`asignaturas`, `A`.`id_param_asignaturas`, `AP`.`id_relacion`, `T`.`id_param_temas`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 21:01:24 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 338
ERROR - 2019-05-31 21:01:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/test/tutorias/system/core/Exceptions.php:271) /var/www/html/test/tutorias/system/core/Common.php 570
ERROR - 2019-05-31 21:02:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:02:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:02:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:02:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:02:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:02:55 --> Severity: Warning --> Use of undefined constant A - assumed 'A' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:02:55 --> Severity: Warning --> Use of undefined constant id_param_asignaturas - assumed 'id_param_asignaturas' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:02:55 --> Severity: Warning --> Use of undefined constant A - assumed 'A' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:02:55 --> Severity: Warning --> Use of undefined constant asignaturas - assumed 'asignaturas' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:02:55 --> Severity: Warning --> Use of undefined constant P - assumed 'P' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:02:55 --> Severity: Warning --> Use of undefined constant programa - assumed 'programa' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:02:55 --> Query error: Unknown column 'Aid_param_asignaturas' in 'field list' - Invalid query: SELECT DISTINCT `Aid_param_asignaturas`
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '10'
GROUP BY `A`.`asignaturas`, `A`.`id_param_asignaturas`, `AP`.`id_relacion`, `T`.`id_param_temas`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 21:02:55 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 338
ERROR - 2019-05-31 21:02:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/test/tutorias/system/core/Exceptions.php:271) /var/www/html/test/tutorias/system/core/Common.php 570
ERROR - 2019-05-31 21:03:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:03:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:03:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:03:47 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:03:57 --> Severity: Warning --> Use of undefined constant A - assumed 'A' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:03:57 --> Severity: Warning --> Use of undefined constant id_param_asignaturas - assumed 'id_param_asignaturas' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:03:57 --> Severity: Warning --> Use of undefined constant A - assumed 'A' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:03:57 --> Severity: Warning --> Use of undefined constant asignaturas - assumed 'asignaturas' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:03:57 --> Severity: Warning --> Use of undefined constant P - assumed 'P' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:03:57 --> Severity: Warning --> Use of undefined constant programa - assumed 'programa' (this will throw an Error in a future version of PHP) /var/www/html/test/tutorias/application/models/General_model.php 303
ERROR - 2019-05-31 21:03:57 --> Query error: Unknown column 'Aid_param_asignaturas' in 'field list' - Invalid query: SELECT `Aid_param_asignaturas`
FROM `param_asignaturas` `A`
LEFT JOIN `asignatura_vs_programa` `AP` ON `AP`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
LEFT JOIN `param_programas` `P` ON `P`.`id_param_programas` = `AP`.`fk_id_param_programas`
INNER JOIN `param_temas` `T` ON `T`.`fk_id_param_asignaturas` = `A`.`id_param_asignaturas`
WHERE `P`.`fk_escuela` = '10'
GROUP BY `A`.`asignaturas`, `A`.`id_param_asignaturas`, `AP`.`id_relacion`, `T`.`id_param_temas`
ORDER BY `P`.`programa` ASC
ERROR - 2019-05-31 21:03:57 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /var/www/html/test/tutorias/application/models/General_model.php 337
ERROR - 2019-05-31 21:03:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/test/tutorias/system/core/Exceptions.php:271) /var/www/html/test/tutorias/system/core/Common.php 570
ERROR - 2019-05-31 21:05:50 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:05:50 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:05:50 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 21:05:50 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:24:57 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:25:01 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 22:25:01 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:25:01 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:25:01 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:25:01 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:25:06 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 22:25:06 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 22:25:28 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:28 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:31 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:31 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:31 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:31 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:50 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:50 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:50 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:50 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:51 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:25:52 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:25:52 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:28:22 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 22:28:22 --> 404 Page Not Found: ../modules/parametros/controllers/Parametros/vendor
ERROR - 2019-05-31 22:29:46 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:29:46 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:29:48 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:29:48 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:29:49 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:29:49 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:31:06 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:31:06 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:31:06 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:31:07 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:31:59 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:31:59 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:31:59 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:31:59 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:32:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:32:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:32:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:32:20 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:33:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:33:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:33:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:33:25 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 22:33:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 22:34:07 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:07 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:07 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:07 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:07 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:07 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:07 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:07 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:07 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:08 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:08 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:08 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:08 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:08 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:08 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 197
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 231
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 22:34:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /var/www/html/test/tutorias/application/modules/tutorias/views/form_modificar.php 259
ERROR - 2019-05-31 22:34:49 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:34:49 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:34:49 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:34:49 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:01 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:02 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:02 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:02 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:03 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:03 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:06 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:06 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:15 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:35:15 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:35:18 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:18 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:18 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:18 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:27 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:35:27 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:35:47 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 22:35:47 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:47 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:47 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:35:47 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:36:09 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:36:09 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/vendor
ERROR - 2019-05-31 22:45:27 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 22:45:27 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:45:27 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:45:27 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:45:27 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:45:48 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:45:48 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:46:27 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:46:27 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:47:30 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:47:30 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:47:30 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:47:30 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:01 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:02 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:02 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:02 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:48:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/test/tutorias/system/core/Exceptions.php:271) /var/www/html/test/tutorias/system/helpers/url_helper.php 561
ERROR - 2019-05-31 22:51:28 --> 404 Page Not Found: ../modules/tutorias/controllers/Tutorias/index
ERROR - 2019-05-31 22:51:44 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 22:51:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:51:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:51:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:51:45 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:52:27 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 22:52:29 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:52:29 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:52:29 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:52:29 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:53:14 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:53:14 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:54:00 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:54:00 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:54:00 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:54:00 --> Severity: Warning --> fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:54:00 --> Severity: Warning --> fsockopen(): Failed to enable crypto /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:54:00 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.office365.com:587 (Unknown error) /var/www/html/test/tutorias/system/libraries/Email.php 2069
ERROR - 2019-05-31 22:54:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:54:15 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:54:47 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:54:47 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:54:47 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:54:47 --> 404 Page Not Found: ../modules/estudiante/controllers/Estudiante/vendor
ERROR - 2019-05-31 22:55:33 --> Severity: Notice --> Undefined index: photo /var/www/html/test/tutorias/application/modules/login/controllers/Login.php 43
ERROR - 2019-05-31 22:55:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:55:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:55:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:55:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:55:33 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:56:03 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:56:03 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:56:03 --> 404 Page Not Found: /index
ERROR - 2019-05-31 22:56:03 --> 404 Page Not Found: /index
