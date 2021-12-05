@extends('layouts/admin')

@section('content')

<h2 class="p-3">Grid 1</h2>
    <div class="row text-center justify-content-right">
        <div class="col-lg-1 bg-primary text-white">kolom1</div>
        <div class="col-lg-1 bg-secondary text-white">kolom2</div>
        <div class="col-lg-1 bg-success text-white">kolom3</div>
        <div class="col-lg-1 bg-danger text-white">kolom4</div>        
    </div>

    <h2 class="p-3">Grid 2</h2>
    <div class="row text-center justify-content-end">
        <div class="col-12 col-md-6 col-lg-1 bg-primary text-white">kolom1</div>
        <div class="col-12 col-md-6 col-lg-1 bg-secondary text-white">kolom2</div>
        <div class="col-12 col-md-6 col-lg-1 bg-success text-white">kolom3</div>
        <div class="col-12 col-md-6 col-lg-1 bg-danger text-white">kolom4</div>        
    </div>

    <h2 class="p-3">Grid 3</h2>
    <div class="row text-center justify-content-center">
        <div class="col-12 col-md-6 col-lg-1 bg-primary text-white">kolom1</div>
        <div class="col-12 col-md-6 col-lg-1 bg-secondary text-white">kolom2</div>
        <div class="col-12 col-md-6 col-lg-1 bg-success text-white">kolom3</div>
        <div class="col-12 col-md-6 col-lg-1 bg-danger text-white">kolom4</div>        
    </div>

    <h2 class="p-3">Grid 4</h2>
    <div class="row text-center justify-content-between">
        <div class="col-12 col-md-6 col-lg-1 bg-primary text-white">kolom1</div>
        <div class="col-12 col-md-6 col-lg-1 bg-secondary text-white">kolom2</div>
        <div class="col-12 col-md-6 col-lg-1 bg-success text-white">kolom3</div>
        <div class="col-12 col-md-6 col-lg-1 bg-danger text-white">kolom4</div>        
    </div>

    <h2 class="p-3">Grid 5</h2>
    <div class="row text-center justify-content-between">
        <div class="col-1"></div>
        <div class="col-12 col-md-6 col-lg-1 bg-primary text-white">kolom1</div>
        <div class="col-12 col-md-6 col-lg-1 bg-secondary text-white">kolom2</div>
        <div class="col-12 col-md-6 col-lg-1 bg-success text-white">kolom3</div>
        <div class="col-12 col-md-6 col-lg-1 bg-danger text-white">kolom4</div>  
        <div class="col-1"></div>      
    </div>

    <h2 class="p-3">Grid 7</h2>
    <div class="row text-left justify-content-between">
        <div class="col-12 col-md-6 col-lg-1 bg-primary text-white">kolom1</div>
        <div class="col-12 col-md-6 col-lg-2 bg-secondary text-white">kolom2</div>
        <div class="col-12 col-md-6 col-lg-3 bg-success text-white">kolom3</div>
        <div class="col-12 col-md-6 col-lg-4 bg-danger text-white">kolom4</div>        
    </div>

@endsection