@extends('app.vendeur')



@section('content')
    <div>
        <p>Liste des courses</p>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs  uppercase  bg-gray-700 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Prix
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Likes
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fois vendu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Images
                        </th>
                        <th></th>

                        <th scope="col" class="px-6 py-3" colspan="3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr class=" border-b text-xl  ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $course->name }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap  text-xl text-red-500 ">
                                {{ number_format($course->price, '2', ',', ' ') }} CFA
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $course->likes != 0 ? $course->likes : 0 }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $course->number_buy != 0 ? $course->number_buy : 0 }}
                            </th>


                            <td class="px-6 py-4">
                                <img src="{{ asset('/courses/' . $course->image) }}" alt="" class="w-28">
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('courses.show', $course->id) }}"
                                    class="font-medium text-gray-600  hover:underline">Chapitres</a>
                            </td>

                            <td class="px-6 py-4">

                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                        <path
                                            d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z" />
                                        <path
                                            d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z" />
                                    </svg>
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{-- route('course.delete', $course->id) --}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button>
                                        <svg class="w-6 h-6 text-red-800 " aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
@endsection
