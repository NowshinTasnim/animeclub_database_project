@extends('layouts.adminlayout')

@section('content')
<div class="insert_container fix">
    <div class="insert_head fix">{{ __('INSERT INTO MEMBER TABLE') }}</div>
    <div class="insert_form fix">
        <form action="{{ route('member.insert.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="insert_left fix">{{ __('Member name :') }}</div>
                <div class="insert_right fix">
                    <input type="text" name="m_name"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('Email :') }} </div>
                <div class="insert_right fix">
                    <input type="email" name="email"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('Password :') }}</div>
                <div class="insert_right fix">
                    <input type="password" name="pass"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('admin :') }} </div>
                <div class="insert_right fix">
                    <input type="text" name="admin"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('Club id :') }}</div>
                <div class="insert_right fix">
                    <input type="text" name="cl_id"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="insert_left fix">{{ __('City id :') }}</div>
                <div class="insert_right fix">
                    <input type="text" name="ct_id"/>
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
