@extends('layout.template')

@section('title','Resume')

@section('content')

<div class="container">
<h2 class="resumetext">Resume</h2>
</div>
<div class="download">
<button class="btn btn-light">
    <a  href="{{'/download'}}">Download pdf</a>
    </button>
</div>

@endsection
@section('nextcontent')
<center>
<div>
<img class="Imageholders" src="{{url('/image/CV.png')}}" alt="">
</div>
</center>


@endsection
<style>
.col-md-12 {
        display: flex;
        background-color: #41A4F5;
    }
.Imageholders{
    height: 1200px;
    margin-top: 40px;
    padding-bottom: 40px;
}
.resumetext{
    color:white;
    margin-top:40px;
    padding-bottom:40px;
}
.download{
    margin-top:40px;
}
</style>