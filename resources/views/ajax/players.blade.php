@foreach ($players as $p)
    <div class="col-6">
        <h1>{{ $p->name }}</h1>
    </div>
@endforeach
