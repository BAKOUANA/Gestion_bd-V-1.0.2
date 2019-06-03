

<?php
						
							$somme_v=0;
							$i=0; //pour compter le nombre d'element du tableau
							$s  =   '';
							foreach($userData_2 as $val){
								$i++; //pour compter le nombre d'element du tableau
								$s++;
								
								//Debut pour le test de la validation ou pas
									$test  =   'Validé';
							$somme_v += $val['cashAmount'];	 
								
						?>
							<tr > 
								<td><?php echo $i?></td>
								<td><?php echo $val['phone'];?></td>
								<td><?php echo $val['operator'];?></td>
								<td><?php echo $val['cashAmount'];?></td>
								<td>
									<span class="label label-success">Succès<?php/*echo $test;*/?>
									</span>
								</td>
								<td><?php echo $val['time'];?></td>
								 
							</tr>
						<?php } ?>