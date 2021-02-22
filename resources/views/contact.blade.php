@extends('layout.template')

@section('title','Contact')

@section('content')

<div class="container">
<h2 class="contacttext">Contact</h2>
</div>


@endsection

@section('nextcontent')

<div>
<img class="Imageholders" src="{{url('/image/Facecircle.png')}}" alt="">
</div>

<div class="col-md-4" >
<div class="card" >
    
    <div class="card-body">
        <center>
            <h6>I'm currently taking on freelance work. If you are interested in hiring me for your project please use the form below to get in touch. Want to know how I work and what I can offer? Check out my  
            <a href="{{'/projects'}}">project case studies</a>
            and
            <a href="{{'/resume'}}">resume</a>.</h6>
            <br>
            <h5 style="color:black;">You can also find me on the following channels</h5>
            
        </center>
    </div>
    <center>
    <div>
    <a href="">
    <img class="card-img-top" src="{{url('/image/Twitter.png')}}" alt="Card image cap" style="width: 40px; padding-bottom:40px;">
    </a>
    <a href="">
    <img class="card-img-top" src="{{url('/image/li.png')}}" alt="Card image cap" style="width: 40px; margin-left: 50px; padding-bottom:40px;">
    </a>
    <a href="">
    <img class="card-img-top" src="{{url('/image/STO.png')}}" alt="Card image cap" style="width: 40px; margin-left: 50px; padding-bottom:40px;">
    </a>
    </div>
    </center>
    
</div>
<center>
<div style="margin-top:40px; color: #434E5E;">
<h3>Get In Touch</h3>
</div>
<form action="submit" method="POST">
<input type="text" name="name" placeholder="Name" style="width:250px;">
<input type="text" name="address" placeholder="Email" style="width:250px; margin-left:10px;">
<br><br>
<input type="LongText" name="massage" placeholder="Enter You Massage" style="width:520px; height:250px;">
<br><br>
<button class="btn btn-info" type="submit" style="margin-bottom:40px; width:520px;" >Send it</button>
</form>
</center>
</div>



@endsection

<style>
.col-md-12 {
        display: flex;
        background-color: #41A4F5;
    }
.contacttext{
    color:white;
    margin-top:40px;
    padding-bottom:40px;
}
.Imageholders{
    display: block;
    vertical-align: middle;
    padding-top: 40;
    margin: 0px auto;
    height: 120px;
}
.col-md-4{
    display: block;
    vertical-align: middle;
    padding-top: 40;
    margin: 0px auto;
    height: 120px;
    
}

</style>