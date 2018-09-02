
@extends('layouts.default',['title'=>'home'])

@section('content')
    <h1 class="text-center">Laracarte</h1>


    <div class="font-sans text-black antialiased">
    <div id="app"  class="h-screen w-full flex justify-content-center align-items-center">
<Password-input> </Password-input>
<comment-form class="w-1/2" :data-comments="{{ $comments }}" > </comment-form>

    </div>
    </div>
@stop
