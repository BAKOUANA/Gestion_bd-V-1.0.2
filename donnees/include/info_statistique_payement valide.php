 
 <div class="panel panel-info" style="text-align :center; width:50%;">
							<div class="panel-heading">	
								 <span class="label label-success">Succès
										</span>	
								
							</div>
						</div>	
						
						<?php
						
							
							$nb_100=0;
							$nb_300=0;
							$nb_800=0;
							$nb_4500=0;
							
							$somme_v=0;
							
							$i=0; //pour compter le nombre d'element du tableau
							$s  =   '';
							foreach($userData_2 as $val){
								$i++; //pour compter le nombre d'element du tableau
								$s++;
								
								//Pour compter le nombre d'element de chaque somme
									if($val['cashAmount']==100)
										 $nb_100 ++;
								
									 if($val['cashAmount']==300)
										 $nb_300 ++;
									 
									 if($val['cashAmount']==800)
										 $nb_800 ++;
									 
									 if($val['cashAmount']==4500)
										 $nb_4500 ++;
									 
								$somme_v += $val['cashAmount'];
							}
								
						?>
				
							<tr > 
								<td><?php echo "Nombre"?></td>
								<td><?php echo $nb_100;?></td>
								<td><?php echo $nb_300 ;?></td>
								<td><?php echo $nb_800;?></td>								  
								<td><?php echo $nb_4500;?></td>
								<td><?php echo $i;?></td>
								 
							</tr>
							
							<tr > 
								<td><?php echo "Montant"?></td>
								<td><?php echo $nb_100 * 100;?></td>
								<td><?php echo $nb_300 *300 ;?></td>
								<td><?php echo $nb_800 * 800;?></td>								  
								<td><?php echo $nb_4500 * 4500;?></td>
								<td><?php echo $somme_v;?></td>
								 
							</tr>
							 