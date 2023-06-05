<h1>Your Models</h1>
<ul>
    @foreach ($yourModels as $yourModel)
        <li>{{ $yourModel->name }}</li>
    @endforeach
</ul>
