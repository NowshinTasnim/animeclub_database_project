@extends('layouts.mainlayout')

@section('content')
        <div class="home_container fix">

            <div class="content fix">
            	<div class="hbox fix">
	            	<div class="home_box_head fix">LATEST ANIME</div>
	                <div class="home_box fix">
	                    <table class="table table-dark table-striped fix">
	                    	<thead>
		                    	<tr>
		                    		<td>ANIME Name</td>
		                    		<td>GENRE</td>
		                    		<td>release date</td>
		                    		<td>made by</td>
		                    	</tr>
	                    	</thead>
	                    	<?php foreach($data as $info): ?>
	                    	<tbody>
		                    	<tr>
		                    		<td><?php echo $info->anm_name; ?></td>
		                    		<td><?php echo $info->genre_name; ?></td>
		                    		<td><?php echo $info->release_date; ?></td>
		                    		<td><?php echo $info->member_name; ?></td>
		                    	</tr>
	                    	</tbody>
	                    <?php endforeach; ?>
	                    </table>
	                </div>
	            </div>

                <div class="hbox fix">
	            	<div class="home_box_head fix">TOP 5 Member's Work</div>
	                <div class="home_box fix">
	                    <table class="table table-dark table-striped">
	                    	<thead>
		                    	<tr>
		                    		<td>Member Name</td>
		                    		<td>total work</td>
		                    	</tr>
	                    	</thead>
	                    	<?php foreach($memdata as $info): ?>
	                    	<tbody>
		                    	<tr>
		                    		<td><?php echo $info->member_name; ?></td>
		                    		<td><?php echo $info->cnt_anime; ?></td>
		                    	</tr>
	                    	</tbody>
	                    <?php endforeach; ?>
	                    </table>
	                </div>
	            </div>
	            <div class="hbox fix">
	            	<div class="home_box_head fix">Clubs</div>
	                <div class="home_box1 fix">
	                    <table class="table table-dark table-striped">
	                    	<thead>
		                    	<tr>
		                    		<td>club id</td>
		                    	</tr>
	                    	</thead>
	                    	
	                    	<tbody>
	                    		<?php foreach($clubid as $info): ?>
		                    	<tr>
		                    		<td><?php echo $info->club_id; ?></td>
		                    	</tr>
		                    	<?php endforeach; ?>
	                    	</tbody>
 	                    </table>
	                </div>
	                <div class="home_box2 fix">
	                    <table class="table table-dark table-striped">
	                    	<thead>
		                    	<tr>
		                    		<td>club Name</td>
		                    		<td>members</td>
		                    	</tr>
	                    	</thead>
	                    	
	                    	<tbody>
	                    		<?php foreach($clubdata as $info): ?>
		                    	<tr>
		                    		<td><?php echo $info->club_name; ?></td>
		                    		<td><?php echo $info->cnt_mem; ?></td>
		                    	</tr>
		                    	<?php endforeach; ?>
	                    	</tbody>
 	                    </table>
	                </div>
	            </div>

	            <div class="hbox fix">
	            	<div class="home_box_head fix">type of job</div>
	                <div class="home_box fix">
	                    <table class="table table-dark table-striped">
	                    	<thead>
		                    	<tr>
		                    		<td>Type Name</td>
		                    		<td>members</td>
		                    	</tr>
	                    	</thead>
	                    	<?php foreach($typedata as $info): ?>
	                    	<tbody>
		                    	<tr>
		                    		<td><?php echo $info->type_name; ?></td>
		                    		<td><?php echo $info->cnt_mem; ?></td>
		                    	</tr>
	                    	</tbody>
	                    	<?php endforeach; ?>
	                    </table>
	                </div>
	            </div>

	            <div class="hbox fix">
	            	<div class="home_box_head fix">No members from</div>
	                <div class="home_box fix">
	                    <table class="table table-dark table-striped">
	                    	<thead>
		                    	<tr>
		                    		<td>City ID</td>
		                    		<td>city name</td>
		                    	</tr>
	                    	</thead>
	                    	<?php foreach($blankcitydata as $info): ?>
	                    	<tbody>
		                    	<tr>
		                    		<td><?php echo $info->city_id; ?></td>
		                    		<td><?php echo $info->city_name; ?></td>
		                    	</tr>
	                    	</tbody>
	                    	<?php endforeach; ?>
	                    </table>
	                </div>
	            </div>

	            <div class="hbox fix">
	            	<div class="home_box_head fix">Action Anime</div>
	                <div class="home_box fix">
	                    <table class="table table-dark table-striped">
	                    	<thead>
		                    	<tr>
		                    		<td>Anime Name</td>
		                    		<td>release date</td>
		                    	</tr>
	                    	</thead>
	                    	<?php foreach($acanm as $info): ?>
	                    	<tbody>
		                    	<tr>
		                    		<td><?php echo $info->anm_name; ?></td>
		                    		<td><?php echo $info->release_date; ?></td>
		                    	</tr>
	                    	</tbody>
	                    	<?php endforeach; ?>
	                    </table>
	                </div>
	            </div>

	            <div class="hbox fix">
	            	<div class="home_box_head fix">Horror Anime</div>
	                <div class="home_box fix">
	                    <table class="table table-dark table-striped">
	                    	<thead>
		                    	<tr>
		                    		<td>Anime Name</td>
		                    		<td>release date</td>
		                    	</tr>
	                    	</thead>
	                    	<?php foreach($hranm as $info): ?>
	                    	<tbody>
		                    	<tr>
		                    		<td><?php echo $info->anm_name; ?></td>
		                    		<td><?php echo $info->release_date; ?></td>
		                    	</tr>
	                    	</tbody>
	                    	<?php endforeach; ?>
	                    </table>
	                </div>
	            </div>

	            
            </div>
        </div>
@endsection
