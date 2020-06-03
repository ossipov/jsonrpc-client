@extends('layouts.app')
{{----------------------------------------------------------------------------------------------------}}
@push('meta')
<title>🧼 JSON-RPC Client</title>
<meta name="description" content="">
<meta name="keywords" content="">
@endpush
{{----------------------------------------------------------------------------------------------------}}
@section('content')
  <section class="container mx-auto">
    <div class="max-w-screen-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <ul>
      @foreach ($data as $page_uid => $title)
        <li>
          [ <a class="text-red-800 hover:underline" href="/edit/{{ $page_uid }}">edit</a> ] 
          <a class="text-blue-600 hover:underline" href="/view/{{ $page_uid }}">
            {{ $title }}
          </a>
        </li>
      @endforeach
      </ul>
    </div>
  </section>
@endsection
{{----------------------------------------------------------------------------------------------------}}