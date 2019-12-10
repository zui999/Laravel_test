@extends('book/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">ショップ一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">詳細</th>
        <th class="text-center">書籍名</th>
        <th class="text-center">価格</th>
        <th class="text-center">著者</th>
        <th class="text-center">カートに入れる</th>
      </tr>
      @foreach($books as $book)
      <tr>
        <td>
          <a href="">{{ $book->id }}</a>
        </td>
        <td>{{ $book->name }}</td>
        <td>{{ $book->price }}</td>
        <td>{{ $book->author }}</td>
        <td>
          <form action="shopcart/{{ $book->id }}" method="post">
            <input type="hidden" name="_method" value="addToCart">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="" aria-label="Left Align"><span class="glyphicon glyphicon-shopping-cart"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/shopcart" class="btn btn-default">カート一覧</a></div>
  </div>
</div>
@endsection
