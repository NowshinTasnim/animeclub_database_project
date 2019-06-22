@extends('layouts.adminlayout')

@section('content')
<div class="insert_container fix">
    <div class="insert_head fix">{{ __('INSERT INTO ANIME TABLE') }}</div>
    <div class="insert_form fix">
        <form action="{{ route('anime.insert.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="insert_left fix">{{ __('Anime name :') }}</div>
                <div class="insert_right fix">
                    <input type="text" name="anm_name"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('Release date :') }} </div>
                <div class="insert_right fix">
                    <input type="text" name="rls_date"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('Club id :') }}</div>
                <div class="insert_right fix">
                    <input type="text" name="cl_id"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('genre id :') }}</div>
                <div class="insert_right fix">
                    <input type="text" name="g_id"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('member id :') }} </div>
                <div class="insert_right fix">
                    <input type="text" name="m_id"/>
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
