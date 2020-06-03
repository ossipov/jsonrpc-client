<form action="/upd/{{$page_uid}}" method="post" class="max-w-screen-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
  @csrf

  <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
    Title
  </label>
  <input class="shadow mb-5 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $page_fields['title'] }}" name="title" id="title">

  <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
    Description
  </label>
  <textarea class="shadow mb-5 h-64 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description">{{ $page_fields['description'] }}</textarea>

  <div class="flex ">
    <input type="submit" value="Submit" class="flex-shrink-0 mr-4 cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
    <a class="flex-shrink-0 inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 py-2 px-4" href="/view/{{$page_uid}}">
      View
    </a>
  </div>
</form>