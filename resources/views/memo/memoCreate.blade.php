@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col">
            메모 작성하기
            <hr>
            <form method="POST" action="{{ route('memo.store') }}">
                @csrf
                <div class="form-group">
                    <input class="form-control"  name="title" />
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    {{ __('저장') }}
                </button>
            </form>
        </div>
    </div>
@endsection
