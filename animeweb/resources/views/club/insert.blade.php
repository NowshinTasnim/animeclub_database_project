@extends('layouts.adminlayout')

@section('content')
<div class="insert_container fix">
    <div class="insert_head fix">{{ __('INSERT INTO CLUB TABLE') }}</div>
    <div class="insert_form fix">
        <form action="{{ route('club.insert.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="insert_left fix">{{ __('Club name :') }}</div>
                <div class="insert_right fix">
                    <input type="text" name="cl_name"/>
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
