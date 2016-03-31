@extends('layouts.master')

@section('head')

@stop

@section('content')
<div class="tab-content">
  <h2><u>XKCD Password Generator</u></h2>
  <p> This is a password generator that will combine words known to the system along with some numbers and a symbol to give you a password.</p>
  <p> The word length is random because the words are random, and you can customize the number of words as well as the number of digits.</p>
  <p> The symbols available are: !,@,#,$,%,&amp;.</p>
  <div class="row">
    <div class="col-md-4">
      <form method='POST' action=''>
        {{ csrf_field() }}
        <input class="form-control" placeholder="Word Count: 1-10" type='text' name='wordcount'><br>
        <input class="form-control" placeholder="Number Count: 1-10" type='text' name='numbercount'><br>
        <div class="form-group">
          <select name="symbol">
            <option value="TRUE">Include Symbol</option>
            <option value="FALSE">Exclude Symbol</option>
          </select>
        </div>
        <input class="btn btn-primary" type='submit' value='Generate Password'>
      </form>
      <br>
    </div>
    <div class="col-md-8">
      <h3><?php echo $error != '' ? "Your input has the following errors:" : ""?></h3>
      <h5><?php echo $error != '' ? $error : ""?></h5>
      <h3><?php echo $xkcdpassword != '' ? "Your Generated Password is:" : ""?></h3>
      <h4><?php echo $xkcdpassword != '' ? $xkcdpassword : ""?></h4>
    </div>
  </div>
</div>
@stop

@section('body')
  <script src="js/xkcdpassword.js"></script>
@stop
