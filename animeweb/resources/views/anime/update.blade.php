@extends('layouts.adminlayout')

@section('content')
<div class="insert_container fix">
    <div class="insert_head fix">{{ __('UPDATE ANIME TABLE') }}</div>
    <div class="insert_form fix">
        <form action="{{ route('anime.update.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="insert_left fix">{{ __('Column-name:')}}
                </div>

                <div class="insert_right1 fix">
                    <select name="col_opt">
                        <option>anm_name</option>
                        <option>release_date</option>
                        <option>club_id</option>
                        <option>genre_id</option>
                        <option>member_id</option>
                    </select>
                </div>

                <div class="insert_left fix">{{ __('New Value :')}}
                </div>

                <div class="insert_right1 fix">
                    <input type="text" name="val1"/>
                </div>

                <div class="insert_left fix">{{ __('Where :')}}
                    <select name="where_opt">
                        <option>anm_id</option>
                        <option>name</option>
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
