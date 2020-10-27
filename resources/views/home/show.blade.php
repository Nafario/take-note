<x-master>
    <div class="flex text-lg justify-center items-center mt-8">
        <section class="p-4 border rounded-lg shadow">
            @include('parts._single-card')
            <div class="mt-6 flex justify-between items-center" style="padding: 0 50px">
                <a href="{{ route('home') }}" class="py-1 px-5 rounded-sm border border-red-500 hover:shadow hover:border-red-600">
                    {{'<'}}Back</a>
                <form action="/{{ $todo->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button style="padding: 2px 12px" type="submit" class="border border-red-500 hover:shadow hover:border-red-600 rounded-sm" href="">Delete</button>
                    <a href="{{ route('todo-edit', $todo->id )}}"
                        class="py-1 px-4 rounded-sm border border-blue-500 hover:shadow hover:border-blue-600">Edit</a>
                </form>
            </div>
        </section>
    </div>

</x-master>
