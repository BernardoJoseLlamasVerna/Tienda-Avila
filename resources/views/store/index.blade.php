@extends('store.template')

{{--el slider será una vista parcial que solo se ve en index--}}
@include('store.partials.slider')

@section('content')
  <div class="container text-center">
    <div id="products">
      @foreach ($products as $product)
        <div class="product white-panel">
          {{--Nombre del producto--}}
          <h3>{{ $product->name_product }}</h3><hr>
          <img src="{{ $product->image }}" width="200">
          {{--Info. del producto--}}
          <div class="product-info panel">
            <p>{{ $product->description }}</p>
            <h3><span class="label label-success">Precio: {{ number_format($product->price, 2) }}€</span></h3>
            <p>
              {{--Botón que te lleva a la ventana de comprar--}}
              <a class="btn btn-warning" href="#"><i class="fa fa-cart-plus"></i>Comprar</a>
              {{--Botón que te lleva a la ventana individual de cada producto--}}
              <a class="btn btn-warning"
                  href="{{ route('product-detail', $product->name_product) }}">
                  <i class="fa fa-chevron-circle-right"></i>Más detalles</a>
            </p>
          </div>
        </div>
    @endforeach
  </div>
</div>
@stop
