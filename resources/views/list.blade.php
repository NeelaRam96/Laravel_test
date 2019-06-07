
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>
 
<a href="{{route('form.create')}}" type="button" class="btn">Add</a>

<table border ="1" width ="100%" id="list_table">
	<thead>
		<tr>
			<th>S.No</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Action</th>
		</tr>	
	</thead>
	<tbody>
		@foreach($data as $d)
			<tr>
				<th>{{ $d['id'] }}</th>
				<th>{{ $d['firstname'] }}</th>
				<th>{{ $d['lastname'] }}</th>
				<th>{{ $d['email'] }}</th>
				<th><a href="{{route('form.edit',$d['id'])}}" type="button" class="btn btn-primary">Update</a>  <a href="{{route('form.show',$d['id'])}}" type="button" class="btn btn-success">View</a>  <a type="button" id="delete_data" data-toggle="modal" data-target="#myModal" data-id = "{{$d['id']}}" class="btn btn-danger">Delete</a></th>
			</tr>	
		@endforeach		
	</tbody>
	</table>

	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Confirmation</h4>
	        </div>
	        <div class="modal-body">
	          <p>Are You Sure? Want to Delete confirm it  tetg   kcdskvk?"</p>
	        </div>
	        <div class="modal-footer">
	        	<button type="button" class="btn btn-default" id= "confim_delete"  data-dismiss="modal">Yes</button>
	          	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
	        </div>
	      </div>
	        


	    </div>
	  </div>  
	</div>
	<script>
		
	  	var create_table = $('#list_table').DataTable();

		

	</script>


