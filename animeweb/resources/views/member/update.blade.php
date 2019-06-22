@extends('layouts.adminlayout')

@section('content')
<div class="insert_container fix">
    <div class="insert_head fix">{{ __('UPDATE MEMBER TABLE') }}</div>
    <div class="insert_form fix">
        <form action="{{ route('member.update.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="insert_left fix">{{ __('Column-name:')}}
                </div>

                <div class="insert_right1 fix">
                    <select name="col_opt">
                        <option>member_name</option>
                        <option>email</option>
                        <option>password</option>
                        <option>admin</option>
                        <option>club_id</option>
                        <option>city_id</option>
                    </select>
                </div>

                <div class="insert_left fix">{{ __('New Value')}}
                </div>

                <div class="insert_right1 fix">
                    <input type="text" name="val1"/>
                </div>

                <div class="insert_left fix">{{ __('Where :')}}
                    <select name="where_opt">
                        <option>member_id</option>
                        <option>email</option>
                    </select>
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
