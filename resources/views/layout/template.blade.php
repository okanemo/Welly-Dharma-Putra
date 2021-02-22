<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
@section('navbar')
    <div class="col-sm-12">
    <div class="imageheader">
    <a class="alink" href="">
    <img class="image" src="{{url('/image/Twitter.png')}}" ></a>
    <a href="">
    <img class="image" src="{{url('/image/li.png')}}" ></a>
    <a href="">
    <img class="image" src="{{url('/image/STO.png')}}" ></a>
    
    
    </div>
    <div class="textheader">
    <h6 class="text">
    <a class="alink" href="{{'/'}}">ABOUT</a> </h6>
    <h6 class="text">
    <a  class="alink" href="{{'/projects'}}">PROJECTS</a> </h6></h6>
    <h6 class="text">
    <a  class="alink" href="">BLOG</a> </h6></h6>
    <h6 class="text">
    <a  class="alink" href="{{'/resume'}}">RSESUME</a> </h6></h6>
    <h6 class="text">
    <a  class="alink" href="{{'/contact'}}">CONTACT</a> </h6></h6>
    </div>
    
    </div>
    @show

    <div class="col-md-12">
    @yield('content')
    </div>
    @yield('nextcontent')
</body>
</html>


<style>
.col-sm-12{
    background-color: #1A6CCA;
    width: 100%;
    height: 50px;
    
}


.textheader{
    display:flex;
    right:0;
    position:absolute;
    margin-right:40px;
    top:25%;
    height:100%;

}
.imageheader{
    display:flex;
    left:0;
    position:absolute;
    margin:0;
    top:25%;
    height:100%;
    

}
.text{
    margin-left:20px;
    color:rgba(255,255,255,0.5);
}

.image{
    width:25px;
    height:25px;
    margin-left:25px;
}

a.alink:hover{
    text-decoration:none;
    background-color:none;
    color:#FFFFFF;
}


a.alink{
    color:rgba(255,255,255,0.5);
}
</style>