<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 col-md-push-3">

					<div class="table-responsive">
					<style type="text/css">
						th,td{
							color: black !important;
						}
					</style>
					<span id="rst1"></span>
					<table class="table" >
						<tr>
							<th>OFFERING</th>
							<th>EDITH</th>
							<th>DELETE</th>	
						</tr>

							<?php 
		       								//=$_SESSION['adminname'];
									$query = "SELECT* from offering where status=0 order by id desc";
										$result = mysqli_query($conn, $query);//runs the connection to dsatabase and then run the query
										$return = mysqli_num_rows($result);
											// 
										if($return ){
						
											while ($row = mysqli_fetch_assoc($result)){ 
										$title = $row["title"];
								
										$id = $row["id"];
									 				
									?>
									<tr id="show<?php echo $id ?>">
										<td><?php echo base64_decode($title) ?></td>
										<td><a data-toggle="modal" data-target="#exampleModal3<?php echo $id ?>" class="btn btn-small btn-info">Edith</a></td>		
										<td>
								  	<button class="btn btn-danger btn-sm" id="delofferring<?php echo $id ?>">DELETE</button></td>
										
										
									</tr>
									 		
									<div class="modal fade" id="exampleModal3<?php echo $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
								            <div class="modal-dialog" role="document">
								            <div class="modal-content">   
								                <div class="modal-body">
								                
								                        <!-- <form action="#" method="post"> -->
								                        <div class="form-group">
								                        	<h6 style="text-align:center;" id="updrst<?php echo $id ?>"></h6>
								                            <label class="col-form-label">Title</label>
								                            <input type="text" id="updatetitle<?php echo $id ?>" class="form-control" placeholder=" " value="<?php echo base64_decode($title) ?>" name="Name" required="">
								                        </div>
								                       
								                        <div class="right-w3l">
								                            <input type="submit" id="update<?php echo $id ?>" class="form-control btn btn-success" data-dismiss="modal" value="UPDATE">
								                        </div>
								                </div>
								            </div>
								        </div>
								</div>



									<script type="text/javascript">

									  $(document).ready(function(){ 	

									  	// updating offering
									  	 $("#update<?php echo $id ?>").click(function(){
									  	 	var updatetitle=$("#updatetitle<?php echo $id ?>").val();
									 	 var updateofferringid ="<?php echo $id ?> ";

									 	 // alert(updatetitle);

									 	   $.ajax({
									                    url:'eventproc.php',
									                    method:'POST',							
									                    data:{
									                        updateofferringid:updateofferringid,  
									                        updatetitle:updatetitle                
									                       
									                    },

									                      beforeSend: function(){
									               
									              },
									                   success:function(data){
									             
									                 // $("#show<?php echo $id ?>").hide(500)
									                   	$("#rst1").html(data);
									                   	// $("#rst").hidden;
									                     }
									                });



									 	})	

									  	// deleting oferring
									 $("#delofferring<?php echo $id ?>").click(function(){

									 	 var offerringid ="<?php echo $id ?> ";
									 	
									 		var retval =confirm("do u want to delete <?php echo base64_decode($title) ?> from the offerring list?");

									 		if(retval==true){
									  
									              $.ajax({
									                    url:'eventproc.php',
									                    method:'POST',							
									                    data:{
									                        offerringid:offerringid,                  
									                       
									                    },

									                      beforeSend: function(){
									                $('#delofferring<?php echo $id ?>').val("DELETING....");
									              },
									                   success:function(data){
									             
									                 $("#show<?php echo $id ?>").hide(500)
									                   	$("#rst1").html(data);
									                     }
									                });

									            // }
									 			return true;
									 		}else{
									 			
									 			return false;
									 		}
									 	
									//alert(''"');
									 
									 });

									 });


									</script>
									<?php }}else{
										echo mysqli_error($conn);
									}?>
								</table>
							</div>
				</div>