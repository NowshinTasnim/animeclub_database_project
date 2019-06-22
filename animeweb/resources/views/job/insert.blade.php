@extends('layouts.adminlayout')

@section('content')
<div class="insert_container fix">
    <div class="insert_head fix">{{ __('INSERT INTO JOB TABLE') }}</div>
    <div class="insert_form fix">
        <form action="{{ route('job.insert.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="insert_left fix">{{ __('Member ID :') }}</div>
                <div class="insert_right fix">
                    <input type="text" name="m_id"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('Type_id :') }} </div>
                <div class="insert_right fix">
                    <input type="text" name="type_id"/>
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
