@extends('app.vendeur')

@section('content')
    @if (Auth::user()?->role == 'vendeur')
        <div class="px-6 py-6 preview">
            {!! $lesson->content?->content !!}
        </div>
    @endif
@endsection
