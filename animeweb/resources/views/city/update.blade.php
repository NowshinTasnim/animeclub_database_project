@extends('layouts.adminlayout')

@section('content')
<div class="insert_container fix">
    <div class="insert_head fix">{{ __('UPDATE CITY TABLE') }}</div>
    <div class="insert_form fix">
        <form action="{{ route('city.update.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="insert_left fix">{{ __('Column-name:')}}
                </div>

                <div class="insert_right1 fix">{{ __('City Name') }}
                </div>

                <div class="insert_left fix">{{ __('New Value')}}
                </div>

                <div class="insert_right1 fix">
                    <input type="text" name="val1"/>
                </div>

                <div class="insert_left fix">{{ __('Where : City id')}}
                </div>

                <div class="insert_right1 fix">
                    <input type="text" name="val2"/>
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
