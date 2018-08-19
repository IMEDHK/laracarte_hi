
@extends('layouts.default' ,['title'=>'contact'])
@section('content')
  <h2>contact</h2>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-9 col-sm-offset-2">
            <h4>Get in touch <a href="mailto:imedhkimi1@gmail.com" class="text-muted"click here>click for help</a></h4>
            <form action="POST">
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="message" class="control-label sr-only" >Message</label>

               <textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message"> </textarea>

                </div>
                <div class="form-group">
                   <button class="btn btn-primary btn-block"> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
