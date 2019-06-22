@extends('layouts.adminlayout')

@section('content')
<div class="table_container fix">
    <div class="table_head fix">{{ __('City TABLE') }}</div>
    <div class="table_body fix"> {{ __('Total number of city: ')}}
        <?php 
            echo $num_city;
        ?>
        
        <div class="table_data fix">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>City id</th>
                        <th>Name of City</th>
                    </tr>
                </thead>
                <?php foreach($data as $city): ?>
                <tbody>    
                    <tr>
                        <td><?php echo $city->city_id; ?></td>
                        <td><?php echo $city->city_name; ?></td>
                        <td><a href="{{ action('UpdateController@showCityForm') }}">EDIT</a></td>
                        <td><a href="{{ action('DeleteController@showCityForm') }}">DELETE</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
@endsection
