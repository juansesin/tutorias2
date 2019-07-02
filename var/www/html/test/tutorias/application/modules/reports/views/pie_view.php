<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Reportes - Tutorias</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Reportes</a></li>
			<li class="active">Tutorias</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
            <div class="col-xs-12">			
				<div class="box">
					<div class="box-header text-center">
                        <h1><?php echo $title; ?></h1>
                    </div>
					
					<!-- /.box-header -->
					<div class="box-body">
                    
                    <?php 
                    if($PIE_DATA != null){
                        $PIE_DATA->run();
                        $PIE_DATA->render("Report_pie");
                    }else{
                        echo "<h2 class='lead'>No hay datos</h2>";
                    }
                    
                    ?>
                    </div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

            <!-- /.box -->
            </div>
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