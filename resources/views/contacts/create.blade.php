
@extends('layouts.default' ,['title'=>'contact'])
@section('content')
  <h2>contact</h2>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-9 col-sm-offset-2">
            <h4>Get in touch <a href="mailto:{{config('laracarte.admin_support_email')}}" class="text-muted"click here>click for help</a></h4>
            <form action="{{route('contact_path')}}" method="post" >
                @csrf
                <div class="form-group {{$errors->has('name')? 'has-error' : '' }}">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required="required" value="{{old('name')}}">
                    {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{$errors->has('email')? 'has-error' : '' }}">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required="required" value="{{old('email')}}">
                    {!! $errors->first('email','<span class="help-block">:message</span>') !!}

                </div>
                <div class="form-group {{$errors->has('message')? 'has-error' : '' }}">
                    <label for="message" class="control-label sr-only" >Message</label>

               <textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message" value="{{old('message')}}"> </textarea>
                    {!!  $errors->first('message','<span class="help-block">:message</span>') !!}

                </div>
                <div class="form-group">
                   <button class="btn btn-primary btn-block"> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

@stop
