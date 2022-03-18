<section class="container row mx-auto">
    @include('layouts.flash')
    <h1 class="text-center m-5">Notes des auteurs cumulées : {{$total}} </h1>
        
    <table class="table table-striped table-danger">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Note</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <th scope="row">{{ $author->id }} </th>
                    <td>{{ $author->name }} </td>
                    <td>{{ $author->description }} </td>
                    <td>{{ $author->note }} / 5</td>
                    <td class="d-flex">
                        <form action="/author/{{ $author->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mx-2" type="submit">DELETE</button>
                        </form>
                        <a class="btn btn-info mx-2" href="/author/{{$author->id}}/edit ">Modifier</a>
                        <a class="btn btn-success mx-2" href="/author/{{$author->id}} ">Show</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</section>
