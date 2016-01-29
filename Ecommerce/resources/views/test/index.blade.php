<h1>APENAS TESTE ! {{ $name }}</h1>

<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
</ul>