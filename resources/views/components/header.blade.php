<div>
    <h1>Day La Header Components</h1>
    <h2>Xin Chao {{$name}}</h2>
    <h3>Suc Vat La:</h3>
    <ul>
        @foreach ($animal as $item)
         <li>{{ $item }}</li>
        @endforeach
</ul>
</div>