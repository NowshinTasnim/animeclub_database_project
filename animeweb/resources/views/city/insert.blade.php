@extends('layouts.adminlayout')

@section('content')
<div class="insert_container fix">
    <div class="insert_head fix">{{ __('INSERT INTO CITY TABLE') }}</div>
    <div class="insert_form fix">
        <form action="{{ route('city.insert.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="insert_left fix">{{ __('City name :') }}</div>
                <div class="insert_right fix">
                    <input type="text" name="ct_name"/>
                </div>
            </div>

            <div class="button_insert fix">
                <button type="submit" class="btn_insert fix">
                    {{ __('Submit') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
