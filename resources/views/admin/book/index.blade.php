@extends('admin.adminlayout');

@section('content')
<!-- Table lists -->

<main id="main">
  <section id="about" class="about">
    <div class="container">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Type</th>
            <th scope="col">Date</th>
            <th scope="col">Genre</th>
            <th scope="col">Scores</th>
            <th scope="col"> <a href="{{route('index.create')}}" class="btn btn-primary">Add Book</a></th>
          </tr>
        </thead>
        <tbody>
          @foreach($books as $book);
          <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->type}}</td>
            <td>{{$book->date}}</td>
            <td>{{$book->genre}}</td>
            <td>{{$book->scores}}</td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
</main>
@endsection