<script type="text/javascript" src="<?php echo base_url("assets/js/validate/parametros/lugares.js"); ?>"></script>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title" id="exampleModalLabel">Lugares
	<br><small>Adicionar/Editar Lugares</small>
	</h4>
</div>

<div class="modal-body">
	<form name="form" id="form" role="form" method="post" >
		<input type="hidden" id="hddId" name="hddId" value="<?php echo $information?$information[0]["id_param_lugares"]:""; ?>"/>

		<div class="row">
			<div class="col-sm-12">
				<div class="form-group text-left">
					<label for="type" class="control-label">Sede : *</label>
					<select name="sede" id="sede" class="form-control" >
						<option value=''>Select...</option>
						<?php for ($i = 0; $i < count($SEDE); $i++) { ?>
							<option value="<?php echo $SEDE[$i]["ID_SEDE"]; ?>" <?php if($information[0]["fk_sede"] == $SEDE[$i]["ID_SEDE"]) { echo "selected"; }  ?>><?php echo $SEDE[$i]["NOMBRE_SEDE"]; ?></option>	
						<?php } ?>
					</select>
				</div> 
			</div>
		</div>
		
		<div class="row">			
			<div class="col-sm-12">
				<div class="form-group text-left">
					<label for="type" class="control-label">Dirección : *</label>
					<input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $information?$information[0]["direccion"]:""; ?>" placeholder="Sede" required >
				</div> 
			</div>
		</div>
		
		<div class="form-group">
			<div class="row" align="center">
				<div style="width:50%;" align="center">
					<input type="button" id="btnSubmit" name="btnSubmit" value="Guardar" class="btn btn-primary"/>
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