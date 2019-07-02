<script>

    $(function () {

        $(".btn-success").click(function () {

            var oID = $(this).attr("id");

            $.ajax({

                type: 'POST',

                url: base_url + 'parametros/cargarModalTema',

                data: {'idTema': oID},

                cache: false,

                success: function (data) {

                    $('#tablaDatos').html(data);

                }

            });

        });

    });

</script>





<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1>Parámetros - Temas</h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

            <li><a href="#">Parámetros</a></li>

            <li class="active">Temas</li>

        </ol>

    </section>



    <!-- Main content -->

    <section class="content">

        <div class="row">

            <div class="col-xs-12">			

                <div class="box">

                    <div class="box-body" style="border: #cfcfcf 1px solid;padding: 20px;">

                        <div class="modal-header">

                            <h4 class="modal-title" id="exampleModalLabel">Temas

                                <br><small>Adicionar/Editar Temas</small>

                                <!--<br><small><a href="temas_exel" target="_blank"> Generar excel </a></small>-->

                            </h4>

                        </div>

                        <form name="form" id="form" role="form" method="post" >

                            <input type="hidden" id="hddId" name="hddId" value="<?php echo $information ? $information[0]["id_param_temas"] : ""; ?>"/>

                            <div class="row">

                                <div class="col-sm-5">

                                    <div class="form-group text-left">

                                        <label for="type" class="control-label">Asignatura : *</label>

                                        <select name="asignatura" id="asignatura" class="form-control" >

                                            <option value=''>Select...</option>

                                            <?php for ($i = 0; $i < count($asignatura); $i++) { ?>

                                                <option value="<?php echo $asignatura[$i]["id_param_asignaturas"]; ?>" <?php

                                                if ($information[0]["fk_id_param_asignaturas"] == $asignatura[$i]["id_param_asignaturas"]) {

                                                    echo "selected";

                                                }

                                                ?>><?php echo $asignatura[$i]["asignaturas"]; ?></option>	

                                                    <?php } ?>

                                        </select>

                                    </div> 

                                </div>



                                <div class="col-sm-5">

                                    <div class="form-group text-left">

                                        <label for="type" class="control-label">Tema : *</label>

                                        <input type="text" id="tema" name="tema" class="form-control" value="<?php echo $information ? $information[0]["temas"] : ""; ?>" placeholder="Tema" required >

                                    </div> 

                                </div>





                                <div class="form-group">

                                    <div class="col-sm-2" align="center">

                                        <div class="form-group text-center" style="margin-top: 25px;">

                                            <input type="button" id="btnSubmit" name="btnSubmit" value="Guardar" class="btn btn-primary"/>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <div id="div_load" style="display:none">		

                                    <div class="progress progress-striped active">

                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">

                                            <span class="sr-only">45% completado</span>

                                        </div>

                                    </div>

                                </div>

                                <div id="div_error" style="display:none">			

                                    <div class="alert alert-danger"><span class="glyphicon glyphicon-remove" id="span_msj">&nbsp;</span></div>

                                </div>	

                            </div>



                        </form>

                    </div>



                    <!-- /.box-header -->

                    <div class="box-body">



                        <?php

                        $retornoExito = $this->session->flashdata('retornoExito');

                        if ($retornoExito) {

                            ?>

                            <div class="col-lg-12">	

                                <div class="alert alert-success ">

                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>

                                    <?php echo $retornoExito ?>		

                                </div>

                            </div>

                            <?php

                        }



                        $retornoError = $this->session->flashdata('retornoError');

                        if ($retornoError) {

                            ?>

                            <div class="col-lg-12">	

                                <div class="alert alert-danger ">

                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>

                                    <?php echo $retornoError ?>

                                </div>

                            </div>

                            <?php

                        }

                        ?> 



                        <?php

                        if ($info) {

                            ?>				

                            

                            <table id="example1" class="table table-bordered table-hover">

                                <thead>

                                    <tr>

                                        <th>Editar</th>

                                        <th>Asignatura</th>

                                        <th>Tema</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php

                                    foreach ($info as $lista):

                                        echo "<tr>";

                                        echo "<td class='text-center'>";

                                        ?>

                                    <a type="button" class="btn btn-success btn-xs"  href="temas?idTema=<?php echo $lista['id_param_temas']; ?>" id="<?php echo $lista['id_param_temas']; ?>" >

                                        Editar <span class="glyphicon glyphicon-edit" aria-hidden="true">

                                    </a>

                                    <?php

                                    echo "</td>";

                                    echo "<td>" . $lista['asignaturas'] . "</td>";

                                    echo "<td>" . $lista['temas'] . "</td>";

                                endforeach;

                                ?>

                                </tbody>

                                <tfoot>

                                    <tr>

                                        <th>Editar</th>

                                        <th>Asignatura</th>

                                        <th>Tema</th>

                                    </tr>

                                </tfoot>

                            </table>



                        <?php } ?>



                    </div>

                    <!-- /.box-body -->

                </div>

                <!-- /.box -->



                <!-- /.box -->

            </div>



            <!-- /.col -->

        </div>



        <!-- /.row -->

    </section>

    <!-- /.content -->

</div>

<!-- /.content-wrapper -->





<!--INICIO Modal para adicionar HAZARDS -->

<div class="modal fade text-center" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">    

    <div class="modal-dialog" role="document">

        <div class="modal-content" id="tablaDatos">



        </div>

    </div>

</div>                       

<!--FIN Modal para adicionar HAZARDS -->





<!-- page script -->

<script>

    $(function () {

        $('#example1').DataTable()

    })

</script>

<script type="text/javascript" src="<?php echo base_url("assets/js/validate/parametros/temas.js"); ?>"></script>