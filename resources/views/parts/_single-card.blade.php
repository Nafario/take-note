<style>
    #font-big{
        font-size: 22px;
        line-height: 28px
    }
    #font-mid{
        font-size: 20px;
        line-height: 28px
    }
</style>
<div class="card-body" style="padding: 0 50px">
        <span class="card-number card-circle">{{ $todo->id }}</span>
        <span id="font-big" class="card-author"><span class="font-bold">Title: </span>{{ $todo->title }}</span>
        <h2 id="font-mid" class="card-title"><span class="font-bold">Description: </span>{{ $todo->description }}</h2>
        <span class="card-description subtle"><span class="font-bold">Content: </span>{{ $todo->content }}</span>
        <footer class="flex justify-between">
            <small>End Day: {{ $todo->end_day }}</small>
            <small>Created: {{ $todo->created_at->format('d-m-Y') }}</small>
        </footer>
    <div></div>

</div>
