<div class="w-full flex px-6 justify-evenly items-center">
    <div class="py-4">
        <nav class=" flex gap-2 capitalize">
            @foreach ($collection as $item)
                <a href="{{ $item->id }}">{{ $item->title }}</a>
            @endforeach
        </nav>
    </div>
    <div>
        <form action="" method="get">
            <input class="bg-gray-400 outline-none px-2" type="text" name="s" id="" placeholder="Search">
        </form>
    </div>
</div>
