@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    @parent

@endsection

@section('content')
<div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-12">
        <livewire:create-post />
    </div>
    <div class="col-lg-6 col-md-12">
      Column
    </div>
    <div class="col-12">
        <livewire:table-post />
    </div>
  </div>
</div>
</div>
@endsection
