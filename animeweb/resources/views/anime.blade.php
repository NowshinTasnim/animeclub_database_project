@extends('layouts.mainlayout')

@section('content')
<div class="admin_home_container fix">
    <div class="admin_home_header fix"><label>ANIME</label></div>

        <div class="viewarea fix">
            <table class="table table-dark table-striped fix">
	                    	<thead>
		                    	<tr>
		                    		<td>ANIME Name</td>
		                    		<td>GENRE</td>
		                    		<td>release date</td>
		                    		<td>made by</td>
		                    		<td>Club</td>
		                    	</tr>
	                    	</thead>
	                    	<?php foreach($data as $info): ?>
	                    	<tbody>
		                    	<tr>
		                    		<td><?php echo $info->anm_name; ?></td>
		                    		<td><?php echo $info->genre_name; ?></td>
		                    		<td><?php echo $info->release_date; ?></td>
		                    		<td><?php echo $info->member_name; ?></td>
		                    		<td><?php echo $info->club_name; ?></td>
		                    	</tr>
	                    	</tbody>
	                    <?php endforeach; ?>
	        </table>
    	</div>
    </div>
</div>
@endsection
