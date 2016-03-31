@extends('layouts.master')

@section('head')

@stop

@section('content')
<div class="tab-content">
  <h2><u>Lorem Ipsum Generator</u></h2>
  <p> This is a a random paragraph generater.</p>
  <p> Word lenths, sentance lengths, and paragraph lengths are all random.</p>
  <div class="row">
    <div class="col-md-4">
      <form method='POST' action=''>
        {{ csrf_field() }}
        <input class="form-control" placeholder="Paragraph Count: 1-50" type='text' name='paragraphcount'><br>
        <input class="btn btn-primary" type='submit' value='Generate Paragraph/s'>
      </form>
      <br>
    </div>
    <div class="col-md-8">
      <h3><?php echo $error != '' ? "Your input has the following errors:" : ""?></h3>
      <h5><?php echo $error != '' ? $error : ""?></h5>
    </div>
  </div>
</div>
@stop


@section('body')
  <script src="js/loremipsum.js"></script>
@stop
