@extends('layouts.adminlayout')

@section('content')
<div class="insert_container fix">
    <div class="insert_head fix">{{ __('DELETE FROM GENRE TABLE') }}</div>
    <div class="insert_form fix">
        <form action="{{ route('genre.delete.submit') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="insert_left fix">
                    <select name="del_opt">
                        <option>genre_id</option>
                        <option>genre_Name</option>
                    </select>
                </div>
                <div class="insert_right fix">
                    <input type="text" name="val"/>
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
