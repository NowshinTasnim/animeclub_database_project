@extends('layouts.adminlayout')

@section('content')
<div class="table_container fix">
    <div class="table_head fix">{{ __('JOB TABLE') }}</div>
    <div class="table_body fix"> {{ __('Total number of job: ')}}
        <?php 
            echo $num_job;
        ?>
        
        <div class="table_data fix">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Job id</th>
                        <th>Member Name</th>
                        <th>Job Type</th>
                    </tr>
                </thead>
                <?php foreach($data as $job): ?>
                <tbody>    
                    <tr>
                        <td><?php echo $job->job_id; ?></td>
                        <td><?php echo $job->member_name; ?></td>
                        <td><?php echo $job->type_name; ?></td>
                        <td><a href="{{ action('UpdateController@showJobForm') }}">EDIT</a></td>
                        <td><a href="{{ action('DeleteController@showJobForm') }}">DELETE</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
@endsection
