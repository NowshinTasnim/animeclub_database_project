@extends('layouts.mainlayout')

@section('content')
<div class="work_container fix">
		<div class="topwork fix">
			<h1><?php print_r($best); ?></h1>
		</div>
        <div class="workviewarea fix">
           <table class="table table-dark table-striped fix">
	                    	<thead>
		                    	<tr>
		                    		<td>Anime name</td>
		                    		<td>Release date</td>
		                    		<td>genre</td>
		                    	</tr>
	                    	</thead>
	                    	<?php foreach($workdata as $info): ?>
	                    	<tbody>
		                    	<tr>
		                    		<td><?php echo $info->anm_name; ?></td>
		                    		<td><?php echo $info->release_date; ?></td>
		                    		<td><?php echo $info->genre_name; ?></td>
		                    	</tr>
	                    	</tbody>
	                    <?php endforeach; ?>
	        </table>
    </div>
    </div>
    </div>
</div>
@endsection
