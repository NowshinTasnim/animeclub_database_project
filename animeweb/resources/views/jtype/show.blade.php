@extends('layouts.adminlayout')

@section('content')
<div class="table_container fix">
    <div class="table_head fix">{{ __('Job Type TABLE') }}</div>
    <div class="table_body fix"> {{ __('Total number of TYpes: ')}}
        <?php 
            echo $num_type;
        ?>
        
        <div class="table_data fix">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Type id</th>
                        <th>Name of Type</th>
                    </tr>
                </thead>
                <?php foreach($data as $type): ?>
                <tbody>    
                    <tr>
                        <td><?php echo $type->type_id; ?></td>
                        <td><?php echo $type->type_name; ?></td>
                        <td><a href="{{ action('UpdateController@showJtypeForm') }}">EDIT</a></td>
                        <td><a href="{{ action('DeleteController@showJtypeForm') }}">DELETE</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
@endsection
