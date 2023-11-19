@extends('app.vendeur')

@section('content')
    @if (!empty($lesson->content))
        <div class="px-6 py-6 preview">
            {!! $lesson->content?->content !!}
        </div>
    @else
        <div class="px-6 py-6 preview">
            <span>Vous avez pas de texte pour cette leçon. Veillez rédiger le contenu texte de ce cours.</span>
        </div>
    @endif
@endsection
