@extends('layouts.app')

@section('content')
    @if (Auth::check())

    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Alexaskills</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', '', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection