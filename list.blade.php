@extends('app')
@section('title', 'Books')
@section('content')

<style>
h1, th{
    text-align: center;
}

table {
  border-collapse: collapse;
  width: 100%;
}


td, th {
  border: 1px solid #dddddd;

  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<h1>Lists Of Books Available</h1>
<br>
    <table>
        <tr>
        <th>Book Name</th>
        <th>Categories</th>
        <th>Number of Pages</th>
        <th>ISBN</th>
        </tr>
        @foreach($b as $booksinfo)
            <tr>
                <td>{{$booksinfo[0]}}</td>
                <td>{{$booksinfo[1]}}</td>
                <td>{{$booksinfo[2]}}</td>
                <td>{{$booksinfo[3]}}</td>
            </tr>
     @endforeach
    </table>
@endsection