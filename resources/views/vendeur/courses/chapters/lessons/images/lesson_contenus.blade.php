@extends('app.vendeur')

@section('content')
    <div>
        <section class="bg-white ">

            <div class="py-2 px-4 mx-auto w-full">
                Leçon: {{ $lesson->title }}
                <h2 class="mb-4 text-xl font-bold text-gray-900 ">Ajouter du texte.</h2>
                <form action="{{ route('contents.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="lesson_id" value={{ $lesson->id }}>
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <textarea name="content" id="myeditorinstance" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="my-6 text-white bg-black hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Enregistrer
                    </button>
                </form>
            </div>
        </section>
    </div>
@endsection
