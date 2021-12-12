@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Orders</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Id_Valo</th>
                <th scope="col">No_Hp</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->nama }}</td>
                <td>{{ $order->id_game }}</td>
                <td>{{ $order->no_hp }}</td>
                <td>{{ $order->keterangan }}</td>
                <td>
                    <form action="/dashboard/orders/{{ $order->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                data-feather="x-circle"></span></button>
                    </form>
                </td>
                <td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection