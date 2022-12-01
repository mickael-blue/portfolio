@extends('layouts.front')

@section('content')

<h1>Mickaël DARRAS</h1>
<section id="about">
    <h2>About-me</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt omnis assumenda corporis, similique molestiae error. A vel in, maiores cum totam aliquam temporibus cupiditate laborum voluptatibus fugiat quam et recusandae ad eum alias? Fugiat, minima quam. Dolores incidunt alias impedit, consequuntur ipsum iusto. Consequatur doloribus perferendis at magni quasi similique molestias tempora impedit, debitis quae blanditiis quisquam est, saepe assumenda voluptate qui distinctio inventore ad aspernatur magnam modi? Distinctio laudantium quae, optio deserunt ullam fugiat cumque velit soluta consequatur earum voluptatum nostrum, tempora dicta possimus, facere officiis similique ratione sunt corporis aperiam. Cumque ipsam maiores voluptatum. Asperiores similique error laudantium.</p>
</section>
<section>
    <h2>My projects</h2>


</section>


<ul>
    @forelse ($skills as $skill)
    <li>{{ $skill->name }} => {{ $skill->rank }}</li>
    @empty
        <li>Aucun skill</li>
    @endforelse
</ul>
@endsection
