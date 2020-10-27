<div class="card-body">
        <span class="card-number card-circle subtle">{{ $todo->id }}</span>
        <span class="card-author subtle"><span class="font-bold">Title: </span>{{ $todo->title }}</span>
        <h2 class="card-title"><span class="font-bold">Description: </span>{{ Str::limit($todo->description, 30) }}</h2>
        <span class="card-description subtle"><span class="font-bold">Content:</span>{{ Str::limit($todo->content, 70) }}</span>
        <footer class="flex justify-between">
            <small>End Day: {{ $todo->end_day }}</small>
            <small>Created: {{ $todo->created_at->format('d-m-Y') }}</small>
        </footer>
        <div class="card-read">
            <a href="{{ route('single-todo', $todo->id) }}" >View</a>
        </div>
</div>