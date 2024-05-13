@extends('layouts.master')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-10 py-16 flex">
            <img src="https://image.tmdb.org/t/p/w500/{{ $tvshow['poster_path'] }}" alt="" class="w-96" style="width: 24rem">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{$tvshow['name']}}</h2>
                <div class="flex  mt-2 text-gray-400 text-sm ">
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="orange" viewBox="0 0 24 24"  class="w-4 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                      </svg>
                      </span>
                      <span class="ml-1">{{$tvshow['vote_average']}}</span>
                      <span class="mx-2">|</span>
                      <span>{{ date('M.Y', strtotime($tvshow['first_air_date'])) }}</span>
                </div>

 <p class="text-gray-300 mt-8">
    {{$tvshow['overview']}}

        </p>

        </div>
        </div>
        </div>

@endsection
