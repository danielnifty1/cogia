<!-- The Modal -->


  
            
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false"  role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" style="color:black">Enter Member ID</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="color:black">
      	<form id="membersearch" action="pro" method="post" class="needs-validation">
      		
	        <table>
	        	<tr>
	        		<td><input type="" name="searchmemberid" required></td>
	        		<td>
	        		 <button class="" name="mbtnsubmit" id="mbtnsubmit" type="submit">Submit</button>
                     <button style="display:none" class="" name="mbtnsubmit" id="mbtnsubmit1" type="submit">
                     	Submit
                     	<i class="fa fa-spinner fa-spin"></i>
                     </button>
                 </td>
	        	</tr>
	        </table>
      	</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" id="mclose" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

