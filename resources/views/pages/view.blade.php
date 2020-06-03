@extends('layouts.app')
{{----------------------------------------------------------------------------------------------------}}
@push('meta')
<title>🧼 {{ $page_fields['title'] }}</title>
<meta name="description" content="">
<meta name="keywords" content="">
@endpush
{{----------------------------------------------------------------------------------------------------}}
@section('content')
  
  <section class="container mx-auto">
    <h2 class="text-center text-gray-500 text-xl mb-10">Page # {{$page_uid}}</h2>
    
    <div class="max-w-screen-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      @include('components.flashes')

      <h3 class="text-2xl mb-5 font-semibold">{{ $page_fields['title'] }}</h3>

      <div class="mb-10">
        {{ $page_fields['description'] }}
      </div>

      <a href="/edit/{{ $page_uid }}" class="cursor-pointer bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
    </div>
  </section>

@endsection
{{----------------------------------------------------------------------------------------------------}}