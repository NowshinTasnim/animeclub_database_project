@extends('layouts.mainlayout')

@section('content')
<div class="admin_home_container fix">
    <div class="admin_home_header fix"><label>Members</label></div>

        <div class="viewarea fix">
           <table class="table table-dark table-striped fix">
	                    	<thead>
		                    	<tr>
		                    		<td>Member Name</td>
		                    		<td>Email</td>
		                    		<td>Club name</td>
		                    		<td>City name</td>
		                    		<td>job type</td>
		                    	</tr>
	                    	</thead>
	                    	<?php foreach($data as $info): ?>
	                    	<tbody>
		                    	<tr>
		                    		<td><?php echo $info->member_name; ?></td>
		                    		<td><?php echo $info->email; ?></td>
		                    		<td><?php echo $info->club_name; ?></td>
		                    		<td><?php echo $info->city_name; ?></td>
		                    		<td><?php echo $info->type_name; ?></td>
		                    	</tr>
	                    	</tbody>
	                    <?php endforeach; ?>
	        </table>
    </div>
    </div>
    </div>
</div>
@endsection
