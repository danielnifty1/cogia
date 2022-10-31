 	<?php require "../connection.php" ?>
 <script src="web/js/jquery2.0.3.min.js"></script>
 	<table class="table" >
							<tr>
								<th>Feature</th>
								<th>Delete</th>
						

									<?php 
				       								//=$_SESSION['adminname'];
											$query = "SELECT* from features where status=0 order by id desc ";
												$result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
												$return = mysqli_num_rows($result);
										// 
								if($return ){
								
										while ($row = mysqli_fetch_assoc($result)){ 
												$feature = $row["feature"];
												$featureid = $row["id"];
															
											?>
											<tr id="show<?php echo $featureid ?>">
												<td><?php echo base64_decode ($feature) ?></td>
											

														
												<td>
										  	<button class="btn btn-danger btn-sm" id="delfeature<?php echo $featureid ?>">DELETE</button></td>
												
												
											</tr>
											<span id="rst"></span>
										
											<script type="text/javascript">

											  $(document).ready(function(){ 	

											alert("dd");

											  });


											</script>
											<?php }}else{
												echo mysqli_error($conn);
											}?>
	</table>