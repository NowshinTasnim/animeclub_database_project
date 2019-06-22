@extends('layouts.adminlayout')

@section('content')
<div class="table_container fix">
    <div class="table_head fix">{{ __('MEMBER TABLE') }}</div>
    <div class="table_body fix"> {{ __('Total number of members: ')}}
        <?php 
            echo $num_member;
        ?>
        
        <div class="table_data fix">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Member ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Admin</th>
                        <th>Club</th>
                        <th>City</th>
                        <th>Job</th>
                    </tr>
                </thead>
                <?php foreach($data as $member): ?>
                <tbody>    
                    <tr>
                        <td><?php echo $member->member_id; ?></td>
                        <td><?php echo $member->member_name; ?></td>
                        <td><?php echo $member->email; ?></td>
                        <td><?php echo $member->password; ?></td>
                        <td><?php echo $member->admin; ?></td>
                        <td><?php echo $member->club_name; ?></td>
                        <td><?php echo $member->city_name; ?></td>
                        <td><?php echo $member->type_name; ?></td>
                        <td><a href="{{ action('UpdateController@showMemberForm') }}">EDIT</a></td>
                        <td><a href="{{ action('DeleteController@showMemberForm') }}">DELETE</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
@endsection
