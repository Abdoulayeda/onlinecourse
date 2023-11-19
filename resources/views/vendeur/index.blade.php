@extends('app.vendeur')

@section('content')
    <div>
        <span>Bienvenue sur la page vendeur: {{ Auth::user()->name }}</span>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, deleniti. Corporis tempora quisquam saepe id
        exercitationem quam porro non. Quis doloribus eveniet voluptates vero possimus exercitationem autem saepe voluptatum
        ad?
    </div>
@endsection
