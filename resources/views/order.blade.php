@extends('layouts.main')

@section('container')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
</div>
@endif
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="row align-items-center">
                    <div class="col-lg-7 mb-5 mb-lg-0">

                        <h2 class="mb-5">Fill the form. <br> to Order.</h2>

                        <form action="/order" class="border-right pr-5 mb-5" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control " name="nama" id="nama" placeholder="Nama">
                                </div>

                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="id_game" id="id_game"
                                        placeholder="ID_Valo">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No HP">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <!-- <input type="text" class="form-control" name="post_id" id="post_id"
                                        placeholder="Post Product"> -->
                                      <select class="form-control" name="post_id">
                                        @foreach ($posts as $post)
                                          @if(old('post_id') == $post->id)
                                          <option value="{{ $post->id }}" selected>{{ $post->title }}</option>
                                          @else
                                          <option value="{{ $post->id }}">{{ $post->title }}</option>
                                          @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="7"
                                        placeholder="Keterangan*"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-danger">Order</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-lg-4 ml-auto">
                        <h3 class="mb-4">Valship</h3>
                        <p>You must fill all from to order te item Valorant</p>
                        <p><a href="/posts">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
