@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upravljanje knjižarom</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
<a href="{{ route('books.create') }}">Unos knjige</a> </br>


<table>
  <tr>
    <th>Knjiga</th>
    <th>Autor</th>
    <th>Akcije</th>
  </tr>
  @foreach($books as $item)
  <tr>
    <td>{{$item->naslov}}</td>
    <td>{{$item->autor}}</td>
    <td><a href="{{ route('books.edit', $item->id) }}">Ažuriranje knjige</a> </br>
    <a href="{{ route('books.show', $item->id) }}">Detalji knjige</a> </br>
    <a href="{{ route('books.edit', $item->id) }}">Izbriši knjigu</a>

    </td>
  </tr>
  @endforeach
</table>        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
