@extends('app.master')
@section('content')
    @include('app.navbar')


    <section class=" bg-white dark:bg-gray-900">
        <div class="flex flex-col  lg:flex-row lg:justify-between py-8   lg:mx-[15%] text-center lg:py-16 mx-8">
            <div class="lg:flex-1  ">
                <h1
                    class="mb-4 text-start text-2xl  font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                    Apprennez avec <br> des experts.
                </h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl   text-start">
                    Préparez-vous à vivre une expérience d'apprentissage sans pareille, où chaque leçon vous rapprochera
                    de votre plein potentiel. Que vous choisissiez de plonger dans un domaine familier ou d'explorer de
                    nouvelles passions, nos cours vous permettront de repousser vos limites et de vous dépasser.
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('register') }}"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Incrivez-vous gratuitement
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Obtenez un abonnenement
                    </a>
                </div>
            </div>
            <div class="lg:flex-1">
                <img src="{{ asset('images/hello.png') }}" alt="" class="w-auto h-full">
            </div>
        </div>

    </section>



    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h3 class="text-3xl font-bold my-3">Une vaste variétés de cours. Choississez un cour et commencez.</h3>
        <div class=" owl-carousel owl-theme">

            @foreach ($courses as $course)
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                    <a href="#">
                        <img class="p-2 rounded-t-lg w-full object-cover hover:scale-x-110"
                            src="{{ asset('courses/' . $course->image) }}" alt="{{ $course->image }}"
                            style="height: 200px; width: 100%" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ $course->name }}
                            </h5>
                        </a>

                        <div class="flex items-center justify-between">
                            <span class="text-xl text-red-700 font-bold  dark:text-white">
                                {{ number_format($course->price, 2, ',', ' ') }} CFA
                            </span>
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Acheter</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">

        <div class="flex flex-col  lg:flex-row lg:justify-between">
            <div class="lg:flex-1">
                <div class="flex items-center">
                    <div class="bg-gray-400 rounded-full p-2">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 16.5c0-1-8-2.7-9-2V1.8c1-1 9 .707 9 1.706M10 16.5V3.506M10 16.5c0-1 8-2.7 9-2V1.8c-1-1-9 .707-9 1.706" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-[17px] lg:text-xl font-serif font-bold">
                            Apprenez avec les meilleurs experts. Des cours claire et précis
                        </p>
                    </div>
                </div>
            </div>
            <div class="lg:flex-1">
                <div class="flex items-center my-4">
                    <div class="bg-gray-400 rounded-full p-2">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m11.479 1.712 2.367 4.8a.532.532 0 0 0 .4.292l5.294.769a.534.534 0 0 1 .3.91l-3.83 3.735a.534.534 0 0 0-.154.473l.9 5.272a.535.535 0 0 1-.775.563l-4.734-2.49a.536.536 0 0 0-.5 0l-4.73 2.487a.534.534 0 0 1-.775-.563l.9-5.272a.534.534 0 0 0-.154-.473L2.158 8.48a.534.534 0 0 1 .3-.911l5.294-.77a.532.532 0 0 0 .4-.292l2.367-4.8a.534.534 0 0 1 .96.004Z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-[17px] lg:text-xl font-serif font-bold">
                            Obtenez les compétences en un temps record.
                        </p>
                    </div>
                </div>
            </div>

            <div class="lg:flex-1">
                <div class="flex items-center">
                    <div class="bg-gray-400 rounded-full p-2">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-[17px] lg:text-xl font-serif font-bold">
                            Apprenez à votre rythme. Où vous voulez et quand vous voulez.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <p class="text-[17px] lg:text-2xl font-serif font-bold mb-6"> Par Catégories</p>
        <div class="flex flex-col  lg:flex-row lg:justify-between">
            <a href="">
                <img src="{{ asset('images/coding.png') }}" alt="" class="w-[200px] hover:scale-x-110  py-4">
                <span class="text-xl font-serif font-bold my-8">Développement web</span>
            </a>
            <div>
                <img src="{{ asset('images/mobile-development.png') }}" alt=""
                    class=" py-4 hover:scale-x-110 w-[200px]">
                <span class="text-xl font-serif font-bold">Développement mobile</span>
            </div>
            <div>
                <img src="{{ asset('images/software-development.png') }}" alt=""
                    class=" py-4 hover:scale-x-110 w-[200px]">
                <span class="text-xl font-serif font-bold">Développement logiciel</span>
            </div>
            <div>
                <img src="{{ asset('images/artificial-intelligence.png') }}" alt=""
                    class="py-4 hover:scale-x-110 w-[200px]">
                <span class="text-xl font-serif font-bold">Intelligence Artificiel</span>
            </div>
        </div>
        <div class="flex flex-col  lg:flex-row lg:justify-between mt-8">
            <div>
                <img src="{{ asset('images/machine-learning.png') }}" alt=""
                    class="w-[200px] hover:scale-x-110  py-4">
                <span class="text-xl font-serif font-bold">Machine Learning</span>
            </div>
            <div>
                <img src="{{ asset('images/data.png') }}" alt="" class="w-[200px] hover:scale-x-110 py-4">
                <span class="text-xl font-serif font-bold">Big Data</span>
            </div>
            <div>
                <img src="{{ asset('images/network.png') }}" alt="" class="w-[200px] hover:scale-x-110  py-4">
                <span class="text-xl font-serif font-bold">Réseaux Informatique</span>
            </div>
            <div>
                <img src="{{ asset('images/cyber-attack.png') }}" alt=""
                    class="w-[200px] hover:scale-x-110  py-4">
                <span class="text-xl font-serif font-bold">Sécurité Informatique</span>
            </div>
        </div>
    </div>

    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <p class="text-2xl font-serif font-bold">Les meilleurs cours</p>
        <div class="owl-carousel owl-theme">

            @foreach ($number_buys as $course)
                <div class="w-full max-w-sm bg-white  rounded-lg ">
                    <a href="#">
                        <img class="p-8 rounded-t-lg hover:scale-x-110" src="{{ asset('courses/' . $course->image) }}"
                            alt="{{ $course->image }}" style="height: 250px; width: 100%" />
                    </a>
                    <div class="px-5 pb-2">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                {{ $course->name }}
                            </h5>
                        </a>

                        <div class="flex items-center justify-between">
                            <span class="text-xl text-red-700 font-bold  dark:text-white">
                                {{ number_format($course->price, 2, ',', ' ') }} CFA
                            </span>
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Acheter</a>
                        </div>
                    </div>
                    <span class="px-5 text-green-600">{{ $course->number_buy }} clients</span>
                </div>
            @endforeach
        </div>
    </div>


    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-12">
        <div class="flex flex-col  lg:flex-row lg:justify-center">
            <div class="mx-4">
                <p class="text-3xl font-extrabold mx-10 py-2">Devenez formateur</p>
                <p class="text-xl font-serif">
                    Devenez un de nos formateur pour des miliers d'apprenants. <br>
                    Formez des gens dans le monde entier. <br>
                    Nous vous offrons tout les outils et moyens néccessaires.
                </p>
                <button class="justify-center my-4 w-[75%] bg-sky-900 py-2 text-white text-xl font-bold">Commencez
                    maintenant</button>
            </div>
            <img src="{{ asset('images/teacher.png') }}" alt="" class="w-[300px]">
        </div>

    </div>


    @include('app.footer')
@endsection
