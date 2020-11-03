<x-master>
    <form class="flex flex-col mx-auto md:w-3/5 text-lg" action="/{{ $todo->id }}/edit" method="POST">
        @csrf
        @method('PATCH')
        <p class="text-xl mt-4 mb-6 text-indigo-800 border text-center py-2" style="width: 200px">
            Update a Note
        </p>
        <label for="title">Tittle</label>
        <input class="border-2 focus:outline-none py-2 px-3 mb-2 mt-1" type="text" name="title"
            value="{{ $todo->title }}">
        <label for="description">Description</label>
        <textarea class="border-2 focus:outline-none py-2 px-3 mb-2 mt-1"
            name="description">{{ $todo->description }}</textarea>
        <label for="content">Content</label>
        <textarea class="border-2 focus:outline-none py-2 px-3 mb-2 mt-1"
            name="content"> {{ $todo->content }}</textarea>
        <label for="end_day">End Day</label>
        <select class="border-2 focus:outline-none py-2 px-3 mb-2 mt-1" name="end_day">
            <option value="{{ $todo->end_day }}" selected disabled>{{ $todo->end_day }}</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Thursday">Thursday</option>
        </select>
        <div class="mt-3 flex justify-between">
            <button type="submit"
                class="rounded-sm py-1 px-5 border border-green-500 hover:shadow hover:border-green-600">Update</button>
            <a class="py-1 px-5 border border-red-500 hover:shadow hover:border-red-600 rounded-sm"
                href="{{ route('single-todo', $todo->id) }}">Cancel</a>

        </div>
    </form>
</x-master>