@extends('layouts.app')
@section('content')
    <h1 class="text-center m-5">Modifier un auteur</h1>
    <section class="w-50 mx-auto">
        @include('layouts.flash')
        <form action="/author/{{$author->id}} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" name="name" value="{{old('name') == "" ? $author->name : old('name')}} " class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" value="{{old('description') == "" ? $author->description : old('description')}} "
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Note</label>
                <input type="number" name="note" class="form-control" value="{{ old('note') == "" ? $author->note : old('note') }}"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
