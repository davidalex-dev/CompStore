@extends('mainlayout')

@section('title')
    Home
@endsection

@section('content')
<div class="p-4 text-center bg-image"
          style="
          background-image: url('img/computer.jpg');
          height: 250px;
            "
    >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="d-flex justify-content-center align-items-center h-100">
    <div class="text-white">
    <h1 class="mb-3">Welcome to CompStore</h1>
    <h3 class="mb-3">The store for your computing needs</h3>
    <h4 class="mb-3">Build your computer now</h4>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="p-5 bg-light" >
  <img src="img/intelcore.png" style="max-width: 20%"></img>
    <div class="bg-light" style="float:right" >
    
    </div>
    <h1>12th Gen Intel Core Processors. Scalability that Adapts to You.</h1>
    <p>Get the performance you need, right where you need it. Multitask like never before. Do it all with 12th Gen Intel Core processors.</p>
</div>
    
@endsection


    



