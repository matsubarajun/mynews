@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row">
                        <div class="headline">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>Myプロフィール</h1>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="mx-auto">氏名　{{ Str::limit($headline->name, 150) }}</p>
                        </div>
                        <div>
                            <p class="mx-auto">性別　{{ Str::limit($headline->gender, 150) }}</p>
                        </div>
                        <div>
                            <p class="mx-auto">趣味　{{ Str::limit($headline->hobby, 150) }}</p>
                        </div>
                        <div>
                            <p class="mx-auto">自己紹介　{{ Str::limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection