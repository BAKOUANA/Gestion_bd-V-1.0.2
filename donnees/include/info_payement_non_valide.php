

<?php
						$somme_nv=0;
						$i=0; //pour compter le nombre d'element du tableau
							$s  =   '';
							foreach($userData as $val){
								
								$s++;
								 
									//Debut pour le test de la validation ou pas
									$test  =   '';
									$c=0;
									$a='';
									foreach($userData_2 as $val_2){
											$a++;
									if($val['requestId']==$val_2['requestId']){
										 
										$c=1;
										}					 
									}
									
									if($c==0) {
										$i++; //pour compter le nombre d'element du tableau
										$test="Non Validé";
										//Fin pour le test de la validation ou pas
										
										$somme_nv+=$val['cashAmount'];
										?>
										
										<tr > 
											<td><?php echo $i?></td>
											<td><?php echo $val['phone'];?></td>
											<td><?php echo $val['operator'];?></td>
											<td><?php echo $val['cashAmount'];?></td>
											<td>
												<span class="label label-danger">Echec<?php /*echo $test;*/?> 
												</span>
											</td>
											<td><?php echo $val['time'];?></td>
								 
										</tr>
							 
							
						<?php }} ?>