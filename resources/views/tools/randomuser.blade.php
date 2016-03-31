@extends('layouts.master')

@section('head')

@stop

@section('content')
<div class="tab-content">
  <h2><u>Random User Generator</u></h2>
  <p> This is a random user generator that will give you a sample user's data including: first name, last name, birthday, email, and user summary.</p>
  <div class="row">
    <div class="col-md-4">
      <form method='POST' action=''>
        {{ csrf_field() }}
        <input class="form-control" placeholder="User Count: 1-50" type='text' name='usercount'><br>
        <div class="form-group">
          <select name="birthday">
            <option value="TRUE">Include Birthday</option>
            <option value="FALSE">Exclude Birthday</option>
          </select>
        </div>
        <div class="form-group">
          <select name="summary">
            <option value="TRUE">Include Summary</option>
            <option value="FALSE">Exclude Summary</option>
          </select>
        </div>
        <div class="row-fluid">
          <input class="btn btn-primary" type='submit' value='Generate User/s'>
        </div>
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
  <script src="js/randomuser.js"></script>
@stop