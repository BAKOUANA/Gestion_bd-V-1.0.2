


		<?php
			$condition  =   '';
			if(isset($_REQUEST['phone']) and $_REQUEST['phone']!=""){
				$condition  .=  ' AND phone LIKE "%'.$_REQUEST['phone'].'%" ';
			}
			/*if(isset($_REQUEST['time_1']) and $_REQUEST['time_1']!=""){
				$condition  .=  ' AND time LIKE "%'.$_REQUEST['time_1'].'%" ';
			}
			
			if(isset($_REQUEST['time_2']) and $_REQUEST['time_2']!=""){
				$condition  .=  ' AND time LIKE "%'.$_REQUEST['time_2'].'%" ';
			}
			*/
			
			$time_1= (isset($_REQUEST['time_1']) and $_REQUEST['time_1']!="") ?  $_REQUEST['time_1'] : ( (isset($_REQUEST['time_2']) and $_REQUEST['time_2']!="") ? $_REQUEST['time_2'] : null);
			$time_2= (isset($_REQUEST['time_2']) and $_REQUEST['time_2']!="") ?  $_REQUEST['time_2'] : ( (isset($_REQUEST['time_1']) and $_REQUEST['time_1']!="") ? $_REQUEST['time_1'] : null);
						//var_dump ($time_1);
						//var_dump ($time_2);
						
			if( $time_1 || $time_2){
				$condition  .=  ' AND time BETWEEN \''.$time_1.' 00:00:00\' AND \''.$time_2.' 23:59:59\'';
			}
			 
			 if(isset($_GET['NIVEAU']))
				$niveau=$_GET['NIVEAU'];
			else
				$niveau="all";
			 
			$userData   =   $db->getAllRecords('payment_request','*',$condition);
			$userData_2   =   $db->getAllRecords('payment_response','*',$condition);
			
			$excel = "";
			$excel .=  " \tPhone\tOpérateur\tMontant\tTransaction Id\tDate Heure\n";
			
		?>



	<!-- Partie recherche -->	
				<div class="col-sm-12">
				
					<form method="get">
						<div class="row">
						 <div class="col-sm-2">
								<div class="form-group">
						 <label for="NIVEAU" class="control-label">Choix</label>
									<select name="NIVEAU" id="NIVEAU" class="form-control"
											onChange="this.form.submit();">
										<option value="all" <?php echo $niveau=="all"?"selected":"" ?> >Tout</option>
										<option value="succes" <?php echo $niveau=="succes"?"selected":"" ?> >Succès</option>
										<option value="echec" <?php echo $niveau=="echec"?"selected":"" ?>  >Echec</option>				 
									</select> 
									<div class="form-group"> </div>
									</div></div>
						 
						 
							<div class="col-sm-2">
								<div class="form-group">
									<label>Tel</label>
									<input type="text" name="phone" id="phone" class="form-control" value="<?php echo isset($_REQUEST['phone'])?$_REQUEST['phone']:''?>" placeholder="Numéro de Telphone">
								</div>
							</div>
							 					
							<div class="col-sm-2">
								<div class="form-group">
									<label>Date debut</label>
									<input type="date" name="time_1" id="time_1" class="form-control" value="<?php echo isset($_REQUEST['time_1'])?$_REQUEST['time_1']:''?>" placeholder="Date debut">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Date Fin</label>
									<input type="date" name="time_2" id="time_2" class="form-control" value="<?php echo isset($_REQUEST['time_2'])?$_REQUEST['time_2']:''?>" placeholder="Date Fin">
								</div>
							</div>
							
							<div class="col-sm-2">
							
								<div class="form-group">
									<label> </label>
									<div><button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Rechercher</button></div>
								</div>
								 
								
							</div>
							
							<div class="col-sm-2">
								<div class="form-group">
									<label> </label>
									<div>
										<a href="#">
											<button type="button" class="btn btn-info">Exporter </button>
										</a>
									</div>
								</div>
							</div>
							
						</div>
					</form>
				</div>
		<!-- Fin recherche -->	