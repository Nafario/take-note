<x-master>
    <div class="flex justify-between items-center">
        <a href="/" class=" text-center text-xl sm:text-5xl line-through">Note</a>
        <a class="py-1 px-4 rounded-sm border border-green-500 hover:shadow hover:border-green-600" href="{{ route('todo-create') }}">Create New</a>
    </div>

    <div class="grid md:grid-cols-3 col-gap-4 row-gap-4 mt-4">
        @foreach ($todos as $todo)
        <section class="col-span-1 p-4 border rounded-lg shadow">
            @include('parts._card')
        </section>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $todos->links() }}
    </div>
</x-master>