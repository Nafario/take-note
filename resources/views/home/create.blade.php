<x-master>
    <form class="flex flex-col mx-auto md:w-3/5 text-xl" action="/todo/create" method="post">
        <p class="text-xl mt-4 mb-6 text-indigo-800 border text-center py-2" style="width: 200px">
            Create a Note
        </p>
        @csrf

        <label for="title">Title</label><input class="border-2 focus:outline-none py-2 px-3 mb-2 mt-1" type="text"
            name="title" id="title">
        @error('title')
        <p class="text-sm text-red-600 mb-3">{{ $message }}</p>
        @enderror
        <label for="description">Description</label>
        <textarea class="border-2 focus:outline-none py-2 px-3 mb-2 mt-1" name="description"
            id="description"></textarea>
        @error('description')
        <p class="text-sm text-red-700 mb-3">{{ $message }}</p>
        @enderror
        <label for="content">Content</label>
        <textarea class="border-2 focus:outline-none py-2 px-3 mb-2 mt-1" name="content" id="content"></textarea>
        @error('content')
        <p class="text-sm text-red-600 mb-3">{{ $message }}</p>
        @enderror
        <label for="end_day">End Day</label>
        <select class="border-2 focus:outline-none py-2 px-3 mb-2 mt-1" name="end_day" id="end_day">
            <option value="Saturday" selected>Saturday</option>
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Thursday">Thursday</option>
        </select>

        <div class="mt-3 flex justify-between">
            <button type="submit"
                class="py-1 px-6 border border-green-600 hover:shadow hover:border-green-700 rounded-sm">Create</button>
            <a class="py-1 px-6 border border-red-500 hover:shadow hover:border-red-600 rounded-sm"
                href="{{ route('home') }}">Cancel</a>
        </div>
    </form>
</x-master>