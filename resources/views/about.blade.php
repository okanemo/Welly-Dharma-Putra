@extends('layout.template')

@section('title','AboutMe')

@section('content')
<div class="container" style="display:flex; width:auto; align-items: center;">
    <div class="imagetheme">
        <img class="imageholder" src="{{url($data[0]->image)}}" alt="">
    </div>

    <div class="textholder">
        <h5>Hello, my name is</h5>
        <h1>{{$data[0]->name}}</h1>
        <h6>{{$data[0]->description}}</h6>
        <button class="btn btn-info" style="margin-top:20px;">Hire Me</button>
    </div>

</div>

@endsection
@section('nextcontent')
<div class="skilloverview">

    <h4>Skill Overview</h4>
    <h6>I have more than 8 years' experience building rich web applications for clients all over the world. Below is a
        quick overview of my main technical skill sets and tools I use. Want to find out more about my experience?</h6>
    <a class="checkresume" href="">Check out my online resume.</a>
</div>

<div class="row">

<div class="col-md-4" style="padding-left: 220px;">
<div class="card" >
    <img class="card-img-top" src="{{url('/image/frontend-icon.svg')}}" alt="Card image cap">
    <div class="card-body">
        <center>
            <h4>Frontend</h4>
        </center>
        <ul style="margin-top:30px;">
            <li>React/Angular</li>
            <li>Javascript</li>
            <li>Node.js</li>
            <li>HTML/CSS</li>
        </ul>
    </div>
</div>
</div>

<div class="col-md-4" style="padding-left: 130px;">
<div class="card" >
    <img class="card-img-top" src="{{url('/image/backend-icon.svg')}}" alt="Card image cap">
    <div class="card-body">
        <center>
            <h4>Backend</h4>
        </center>
        <ul style="margin-top:30px;">
            <li>Python</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>MongoDB</li>
        </ul>
    </div>
</div>
</div>

<div class="col-md-4" style="padding-left: 40px;">
<div class="card" >
    <img class="card-img-top" src="{{url('/image/other-skills-icon.svg')}}" alt="Card image cap">
    <div class="card-body">
        <center>
            <h4>Others</h4>
        </center>
        <ul style="margin-top:30px;">
            <li>DevOps</li>
            <li>Blender</li>
            <li>Adobe Photoshop</li>
            <li>Adobe Animate</li>
        </ul>
    </div>
</div>
</div>

</div>


@endsection


<style>
    .imageholder {
        /* width: 240px; */
        height: 240px;

    }

    .imagetheme {
        position: initial;
        margin-top: 40px;
        padding-bottom: 40px;
    }

    .col-md-12 {
        display: flex;
        background-color: #41A4F5;
    }

    .textholder {
        margin-left: 20px;
        color: #FFFFFF;

    }

    .skilloverview {
        text-align: center;
        padding-left: 300px;
        padding-right: 300px;
        margin-top: 40px;
    }

    .checkresume {
        color: Blue;
    }

    .card-img-top {
        background-color: #41A4F5;
        border-radius: 40%;
        width: 50px;
        height: 50px;
        padding: 10px;
        vertical-align: middle;
    }
    .row{
        margin-top: 40px;
        width: auto;
    }
    .card{
        height: 400px;
        width: 350px;   
    }

</style>
