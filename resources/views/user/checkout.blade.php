@extends('layouts.user')
@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
      <h1 class="display-3 text-white mb-3 animated slideInDown">Checkout</h1>
    </div>
  </div>
<div class="card">
    <div class="card-body">
        <table class="table table-white table-hover">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>jumlah pesanan</th>
                <th>sub total</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $cart = \Cart::getContent();
                @endphp
                @foreach ($cart as $k)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$k->name}} </td>
                <td>{{$k->price}}</td>
                <td>
                    {{$k->quantity}}&nbsp;
                    <form display="hidden" action="{{route('tambahPesanan')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$k->id}}" name="id_tambah">
                            <button type="submit">
                                +
                            </button>
                    </form>
                        &nbsp;
                    <form display="hidden" action="{{route('kurangPesanan')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$k->id}}" name="id_kurang">
                            <button type="submit">
                                -
                            </button>
                    <form action="">
                </td>
                <td>{{$k->quantity * $k->price}}</td>
                <td>
                    @if ($k->quantity > 1)
                    <form action="{{route('cartdelete')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$k->id}}" name="id">
                        <button>delete pesanan</button>
                    </form>
                    
                    <form action="{{route('cartupdate')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$k->id}}" name="id">
                        <button>kurangi pesanan</button>
                    </form>

                    @elseif($k->quantity == 1)
                    <form action="{{route('deleteallcart')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$k->id}}" name="id">
                        <button>delete pesanan</button>
                    </form>
                    @endif

                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  
    
      <td>Total pembayaran Rp.{{ Cart::getTotal() }}</td>
      <td>
        <form action="{{route('deleteallcart')}}" method="POST">
          @csrf
          <input type="hidden" name="id">
          <button>delete cart</button>
        </form>
      </td>
</div>


@endsection