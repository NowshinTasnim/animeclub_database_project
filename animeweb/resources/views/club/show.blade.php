@extends('layouts.adminlayout')

@section('content')
<div class="table_container fix">
    <div class="table_head fix">{{ __('Club TABLE') }}</div>
    <div class="table_body fix"> {{ __('Total number of club: ')}}
        <?php 
            echo $num_club;
        ?>
        
        <div class="table_data fix">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Club id</th>
                        <th>Name of Club</th>
                    </tr>
                </thead>
                <?php foreach($data as $club): ?>
                <tbody>    
                    <tr>
                        <td><?php echo $club->club_id; ?></td>
                        <td><?php echo $club->club_name; ?></td>
                        <td><a href="{{ action('UpdateController@showClubForm') }}">EDIT</a></td>
                        <td><a href="{{ action('DeleteController@showClubForm') }}">DELETE</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
@endsection
