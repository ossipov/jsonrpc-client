{{----------------------------------------------------------------------------------------------------}}
@push('js')
<script>function remove(el) { var element = el; element.remove(); }</script>
@endpush
{{----------------------------------------------------------------------------------------------------}}

@if ($message = Session::get('success'))
<div onclick="remove(this)" class="cursor-pointer text-green-700 text-center mb-5 bg-green-100 p-4 rounded-full border border-green-200">
  ✔ {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div onclick="remove(this)" class="cursor-pointer text-red-700 text-center mb-5 bg-green-100 p-4 rounded-full border border-red-200">
  ❌ {{ $message }}
</div>
@endif