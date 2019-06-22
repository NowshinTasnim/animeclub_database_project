@extends('layouts.adminlayout')

@section('content')
<div class="table_container fix">
    <div class="table_head fix">{{ __('Anime TABLE') }}</div>
    <div class="table_body fix"> {{ __('Total number of anime: ')}}
        <?php 
            echo $num_anime;
        ?>
        
        <div class="table_data fix">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Anime id</th>
                        <th>Name of anime</th>
                        <th>Genre</th>
                        <th>Release Date</th>
                        <th>Made by</th>
                        <th>Club name</th>
                    </tr>
                </thead>
                <?php foreach($data as $anime): ?>
                <tbody>    
                    <tr>
                        <td><?php echo $anime->anm_id; ?></td>
                        <td><?php echo $anime->anm_name; ?></td>
                        <td><?php echo $anime->genre_name; ?></td>
                        <td><?php echo $anime->release_date; ?></td>
                        <td><?php echo $anime->member_name; ?></td>
                        <td><?php echo $anime->club_name; ?></td>
                        <td><a href="{{ action('UpdateController@showAnimeForm') }}">EDIT</a></td>
                        <td><a href="{{ action('DeleteController@showAnimeForm') }}">DELETE</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
@endsection
