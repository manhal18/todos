@extends('layouts.app')

@section('title','Todo Application')

@section('content')
<div class="container my-4" style="padding-top:4rem; padding-bottom:18rem;">
    <div class="row justify-content-center">
        <div class="col-md-4 p-4">
            @livewire('add-task')
        </div>

        <div class="col-md-8 p-4">
            @livewire('task')
        </div>
    </div>
</div>
@endsection
