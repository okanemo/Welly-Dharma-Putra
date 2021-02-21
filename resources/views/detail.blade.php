@extends('layout.template')

@section('title','Project Detail')

@section('content')
<div class="container">
    <h2 class="textproject1">Web App Development</h2>
    <h5 class="textproject2">Project tagline goes here lorem ipsum dolor sit amet.</h5>
</div>
@endsection

@section('nextcontent')
<div>
    <center>
        <img src="{{url($projects->image)}}" style="margin-top:40px;">
        <h4 style="margin-top:30px">Project Background</h4>
        <p style="width: 800px">{{$projects->description}}</p>
    </center>
</div>
@endsection

<style>
.col-md-12 {
    background-color: #41A4F5;
    height: 150px;
    color:#FFFFFF;
}
</style>