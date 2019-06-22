@extends('layouts.adminlayout')

@section('content')
<div class="table_container fix">
    <div class="table_head fix">{{ __('Genre TABLE') }}</div>
    <div class="table_body fix"> {{ __('Total number of genre: ')}}
        <?php 
            echo $num_genre;
        ?>
        
        <div class="table_data fix">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Genre id</th>
                        <th>Name of Genre</th>
                    </tr>
                </thead>
                <?php foreach($data as $genre): ?>
                <tbody>    
                    <tr>
                        <td><?php echo $genre->genre_id; ?></td>
                        <td><?php echo $genre->genre_name; ?></td>
                        <td><a href="{{ action('UpdateController@showGenreForm') }}">EDIT</a></td>
                        <td><a href="{{ action('DeleteController@showGenreForm') }}">DELETE</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
@endsection
