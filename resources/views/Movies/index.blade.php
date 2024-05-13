@extends('layouts.master')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($movies['results'] as $movie)
                <div class="grid grid-col-4 gap-16 ">
                    <div class="mt-8">
                        <a href="{{ route('movies.show', $movie['id']) }}">
                            <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="" class="w-96" style="width: 24rem">
                        </a>
                        <div class=" text-lg mt-2 hover:text-gray-300 "><a href="{{ route('movies.show', $movie['id']) }}">{{$movie['title']}}</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="orange" viewBox="0 0 24 24"  class="w-4 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                              </svg>
                              </span>
                              <span class="ml-1">{{$movie['vote_average']}}</span>

                        </div>
                        <div class="text-gray-400 text-sm">
                            <span>{{ date('Y', strtotime($movie['release_date'])) }}</span>
                            <h1></h1>
                        </div>
                        </div>
                    </div>

                </div>
                @endforeach





        </div>
        </div>
    </div>
@endsection
