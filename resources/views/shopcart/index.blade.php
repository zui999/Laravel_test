@extends('book/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">カート一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">書籍名</th>
        <th class="text-center">価格</th>
        <th class="text-center">著者</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($shopcartitems as $shopcartitem)
      <tr>
        <td>{{ $shopcartitem->name }}</td>
        <td>{{ $shopcartitem->price }}</td>
        <td>{{ $shopcartitem->id }}</td>
        <td>
          <form action="/shopcart/{{ $shopcartitem->id }}" method="post">
            <input type="hidden" name="_method" value="Delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="" aria-label="Left Align"><span class="glyphicon glyphicon-shopping-cart"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/shop" class="btn btn-default">戻る</a></div>
  </div>
</div>
@endsection
