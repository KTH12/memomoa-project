@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">메모 리스트</div>
                <div class="row">
                @foreach ($memos as $memo)
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $memo->title }}</h5>
                                <p class="card-text">{{ $memo->content }}</p>
                                <a href="#" class="btn btn-primary">수정</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
