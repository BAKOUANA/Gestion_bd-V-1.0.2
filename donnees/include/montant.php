
						<div class="panel panel-info" style="text-align :center; width:50%;">
							<div class="panel-heading">	
								<?php 
									if ($niveau=='all'){?>
									<span class="label label-success">Succès									
												</span>  &nbsp;&nbsp; : (<?php echo $somme_v ?> &nbsp Fcfa) &nbsp &nbsp &nbsp &nbsp  | &nbsp &nbsp &nbsp &nbsp  
									
									<span class="label label-danger">Echec
									</span>&nbsp;&nbsp; :  (<?php echo $somme_nv?> &nbsp Fcfa)	
								<?php } ?>
								
								<?php 
									if ($niveau=='succes'){?>									 
										<span class="label label-success">Succès
										</span>&nbsp;&nbsp; :  (<?php echo $somme_v?> &nbsp Fcfa)	
								<?php } ?>
								
								<?php 
									if ($niveau=='echec'){?>
										<span class="label label-danger">Echec
										</span>  &nbsp;&nbsp; : (<?php echo $somme_nv ?> &nbsp Fcfa)
										
								<?php } ?>
								
							</div>
						</div>	