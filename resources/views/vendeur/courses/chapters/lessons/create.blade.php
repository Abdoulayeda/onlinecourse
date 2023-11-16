@extends('app.vendeur')

@section('content')
    <section class="bg-white ">
        <div class="py-8 px-4 mx-auto w-[50%] lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 ">Ajouter une leçon.</h2>
            <form action="{{ route('lessons.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Titre de la leçon
                        </label>
                        <input type="text" name="name" id="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 "
                            placeholder="Nom de la produit" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="video" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Video
                        </label>
                        <input type="text" name="video"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 "
                            placeholder="">
                    </div>
                </div>
                <button type="submit"
                    class="my-6 text-white bg-black hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    Enregistrer
                </button>
            </form>
        </div>
    </section>
@endsection
