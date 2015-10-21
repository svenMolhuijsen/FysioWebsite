<?php
	require_once("content/php-include/header.php");
	include_once "content/php-include/login-popup.php"
?>

	<div class="container">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-body">

					<form class="form-horizontal" id="frm_add_sportclub">
						<fieldset>
							<legend>Sportclub toevoegen</legend>

							<!-- Name -->
							<div class="form-group">
								<label for="tb_mail" class="col-lg-2 control-label">Sportclub naam</label>
								<div class="col-lg-10">
									<input name="tb_name" id="tb_name" required="required" type="text" class="form-control" placeholder="Sportclub naam...">
								</div>
							</div>

							<!-- Address -->
							<div class="form-group">
								<label for="tb_address" class="col-lg-2 control-label">Adres</label>
								<div class="col-lg-10">
									<input name="tb_address" id="tb_address" required="required" type="text" class="form-control" placeholder="Adres...">
								</div>
							</div>

							<div class="form-group">
								<!-- Zipcode -->
								<label for="tb_zipcode" class="col-lg-2 control-label">Postcode</label>
								<div class="col-lg-2">
									<input name="tb_zipcode" id="tb_zipcode" required="required" type="text" class="form-control"  placeholder="Postcode...">
								</div>

								<!-- City -->
								<label for="tb_location" class="col-lg-2 control-label">Plaats</label>
								<div class="col-lg-6">
									<input name="tb_location" id="tb_location" required="required" type="text" class="form-control" placeholder="Plaats...">
								</div>
							</div>

							<!-- Phone -->
							<div class="form-group">
								<label for="tb_phone" class="col-lg-2 control-label">Telefoonnummer</label>
								<div class="col-lg-10">
									<input name="tb_phone" id="tb_phone" required="required" type="text" class="form-control" placeholder="Telefoonnummer...">
								</div>
							</div>

							<!-- Mail -->
							<div class="form-group">
								<label for="tb_mail" class="col-lg-2 control-label">E-mail adres</label>
								<div class="col-lg-10">
									<input name="tb_mail" id="tb_mail" required="required" type="mail" class="form-control" placeholder="E-mail adres...">
								</div>
							</div>

							<!-- Contactperson -->
							<div class="form-group">
								<label for="tb_contactperson" class="col-lg-2 control-label">Contact persoon</label>
								<div class="col-lg-10">
									<input name="tb_contactperson" id="tb_contactperson" required="required" type="text" class="form-control" placeholder="Contact persoon...">
								</div>
							</div>
						</fieldset>
					</form>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button id="btn_add_sportclub" type="submit" class="btn btn-primary">Sportclub toevoegen</button>
							<button id="btn_cancel" class="btn btn-default">Annuleren</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
	require_once("content/php-include/footer.php");
?>
<script src="content/js/add-club.js"></script>
