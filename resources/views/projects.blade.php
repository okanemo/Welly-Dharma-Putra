@extends('layout.template')

@section('title','Projects')

@section('content')

<div class="container" >

<h2 class="textproject1">Projects</h2>
<h5 class="textproject2">In-depth Case Studies to show you what I can offer and how I work</h5>
</div>

    
@endsection

@section('nextcontent')

    <br>
    <center>
    <button class="btn btn-light">
    <a class="alink2" href="{{'/projects'}}">All</a>
    </button>
    <button class="btn btn-light">
    <a class="alink2" href="{{'/projects/1'}}">PHP</a>
    </button>
    <button class="btn btn-light">
    <a class="alink2" href="{{'/projects/2'}}">React</a>
    </button>
    <button class="btn btn-light">
    <a class="alink2" href="{{'/projects/3'}}">HTML/CSS</a>
    </button>
    <button class="btn btn-light">
    <a class="alink2" href="{{'/projects/4'}}">Python</a>
    </button>
    <button class="btn btn-light">
    <a class="alink2" href="{{'/projects/5'}}">MySQL</a>
    </button>
    <button class="btn btn-light">
    <a class="alink2" href="{{'/projects/6'}}">MongoDB</a>
    </button>
    </center>

    <div class="row" style="margin-top: 40px">
    @foreach($projects as $project)
        <div class="col-md-4">
            <div class="card">
                <a href="{{'/projects/detail/'.$project->id}}">
                <img class="card-img-top" src="{{url($project->image)}}" alt="Card image cap" style="height: 300px;">
                </a>
                <div class="card-body">
                <center>
                    <h5>{{$project->title}}</h5>
                    @if($project->category_id == 1)
                        <h6 class="categorytext">PHP</h6>
                    @endif
                    @if($project->category_id == 2)
                        <h6 class="categorytext">React</h6>
                    @endif
                    @if($project->category_id == 3)
                        <h6 class="categorytext">HTML/CSS</h6>
                    @endif
                    @if($project->category_id == 4)
                        <h6 class="categorytext">Python</h6>
                    @endif
                    @if($project->category_id == 5)
                        <h6 class="categorytext">MySQL</h6>
                    @endif
                    @if($project->category_id == 6)
                        <h6 class="categorytext">MongoDB</h6>
                    @endif
                </center>
                <h6></h6>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection


<style>
    .col-md-12 {
        display: flex;
        background-color: #41A4F5;
    }

    .textproject1{
        color:white;
        margin-top:30px;
        
    }
    .textproject2{
        color:white;
        margin-top:20px;
        padding-bottom:30px;
    }
    .categorytext{
        background-color: #58677c;
        width: 70px;
        border-radius: 40%;
        color: #FFFFFF;
        font-size:small;
        height:20px;
    }
    a.alink2:hover{
        color:inherit;
        text-decoration:none;
        background-color:none;
    }
    a.alink2{
        color:inherit;
        text-decoration:none;
        background-color:none;
    }
</style>