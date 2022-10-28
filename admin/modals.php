<div class="modal fade modal-primary" id="exampleModal3<?php echo $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" >
						<center>
							
							<span style="color:red; font-weight: bold;font-size: 20px;" class="fa fa-star"></span>	<span style="color:black; font-weight: bold;font-size: 20px;" id="">By <?php echo $name ?></span>
						</center>
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<h6 style="text-align: center;color: red" id="trackerror"></h6>
					<div class="modal-body">
						
						<p>
							<?php echo $testimony ?>
						</p>
						
						
					
					</div>

					<div class="modal-footer">
						<?php 
						if($status==0){ ?>
						<button class="btn btnsm btn-success" data-dismiss="modal" id="approve<?php echo $id ?>">approve</button>
						<button class="btn btnsm btn-danger" data-dismiss="modal" id="delview<?php echo $id ?>">Delete</button>

						<?php }elseif($status==1){ ?>
							<button data-dismiss="modal" id="delview<?php echo $id ?>">Delete</button>
						<?php } ?>
					</div>
				</div>
			</div>
	</div>
