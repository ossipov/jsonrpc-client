@extends('layouts.app')
{{----------------------------------------------------------------------------------------------------}}
@push('meta')
<title>🧼 Edit page</title>
<meta name="description" content="">
<meta name="keywords" content="">
@endpush
{{----------------------------------------------------------------------------------------------------}}
@section('content')
  
  <section class="container mx-auto">
    <h2 class="text-center text-gray-500 text-xl mb-10">Page # {{$page_uid}}</h2>
    <x-form 
      :page-uid="$page_uid"
      :page-fields="$page_fields"
    />
  </section>

@endsection
{{----------------------------------------------------------------------------------------------------}}