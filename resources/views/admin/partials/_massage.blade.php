@if ($errors->any())
    <div class="mx-auto w-1/2 bg-red-100 px-4 py-1 text-red-700">
        @foreach ($errors->all() as $error)
            <p class="capitalize">{{ $error }}</p>
        @endforeach
    </div>
@endif

@if (session()->has('success'))
    <div class="mx-auto px-4 py-1 bg-green-200 text-green-700 w-1/2">
        <p class="capitalize">{{ session()->get('success') }}</p>
    </div>
@endif
