<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .help-block{
    color:red;
  }
</style>
<div class="card uper">

@foreach($datas as $value)
<div>{{ $value->item_name }}</div>
@endforeach
  <div class="card-header">
    Add Item
  </div>
  @if (session('status'))
     <p>{{ session('status') }}</p>
@endif 
  <div class="card-body">
      <form method="post" action="{{ route('form.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Item Name:</label>
              <input type="text" class="form-control" name="item_name" value="{{ old('item_name') }}"/>
              {!! $errors->first('item_name', '<p class="help-block">:message</p>') !!}
          </div>
          <div class="form-group">
              <label for="price">SKU Number :</label>
              <input type="text" value="{{ old('sku_no') }}" class="form-control" name="sku_no"/>
              {!! $errors->first('sku_no','<p class="help-block">:message</p>') !!}
              
          </div>
          <div class="form-group">
              <label for="quantity">Item Price :</label>
              <input type="text" class="form-control" name="price"/>
              {!! $errors->first('price','<p class="help-block">:message</p>') !!}
          </div>
          <button type="submit" class="btn btn-primary">Create Item</button>
      </form>
  </div>
</div>
@endsection