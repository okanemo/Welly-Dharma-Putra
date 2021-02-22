@extends('layout.template')

@section('title','Blog')

@section('content')

<div class="container" style="display:flex; width:auto; ">
    <div class="imagetheme">
        <img class="imageholder" src="{{url('/image/Facecircle.png')}}" alt="">
    </div>

    <div class="textholder">
        <h4>Wely Dharma Putra's Blog</h4>
        <h5>I write about web development and life as a developer.
        You can follow me via the various channels below:</h5>

        <div>
        <a href="">
        <img class="card-img-top" src="{{url('/image/Twitter.png')}}" alt="Card image cap" style="width: 40px; padding-bottom:40px; margin-top:20px;">
        </a>
        <a href="">
        <img class="card-img-top" src="{{url('/image/li.png')}}" alt="Card image cap" style="width: 40px; margin-left: 20px; padding-bottom:40px; margin-top:20px;">
        </a>
        <a href="">
        <img class="card-img-top" src="{{url('/image/STO.png')}}" alt="Card image cap" style="width: 40px; margin-left: 20px; padding-bottom:40px; margin-top:20px;">
        </a>
        </div>
    </div>

</div>


@endsection

<style>
.col-md-12 {
        display: flex;
        background-color: #41A4F5;
    }
.imageholder{
    display: block;
    vertical-align: middle;
    padding-top: 40px;
    margin: 0px auto;
    height: 200px;
    margin-bottom:40px;
}
.textholder {
        margin-left: 20px;
        color: #FFFFFF;
        margin-top:40;
        width:500px;

    }
</style>