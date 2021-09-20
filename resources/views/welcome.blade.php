<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
  <title>Waps</title>
</head>
<body>
  <div class=" vh-100  position-relative">
        <a class="btn btn-lg btn-outline-dark m-3 end-0 position-absolute" style="z-index: 6" 
          href="{{ route('login') }}">Login</a>

      <div class="d-flex flex-column flex-md-row flex-wrap w-100 h-fit-content position-absolute start-0 end-0 top-0 bottom-0 m-auto" style="flex-basis: 25%">
        <div class="card w-25 h-fit-content bg-transparent m-4 d-none d-md-block border-0 flex-grow-1" >
          <img src="{{ asset('assets/images/landing/undraw_good_team_m7uu.svg') }}" class="card-img-top" alt="">
          <div class="card-body display-6">
            Our committed team work together to ensure only the best of service for you!
          </div>
        </div> 
        
        <div class="card w-25 h-fit-content bg-transparent m-4 d-none d-md-block border-0 flex-grow-1">
          <img src="{{ asset('assets/images/landing/undraw_navigator_a479.svg') }}" class="card-img-top" alt="">
          <div class="card-body display-6">
            
            Keep track of our drivers as they carry out your campaigns.
          </div>
        </div>
        
        <div class="card w-25 h-fit-content bg-transparent m-4 d-none d-md-block border-0 flex-grow-1">
          <img src="{{ asset('assets/images/landing/undraw_personal_file_222m.svg') }}" class="card-img-top" alt="">
          <div class="card-body display-6">
            
            A summary of your campaigns for your convenience!
          </div>
          <div class="card-footer bg-transparent">
            New here?
            Contact Us
            <ul class="list-group">
              <li class="list-group-item bg-transparent card-link"><a href="">waps@gmail.com</a></li>
              <li class="list-group-item bg-transparent">+254700000000</li>
            </ul>
          </div>
        </div>
        
        {{-- small Screens --}}
        <div class="card w-75 h-fit-content bg-transparent  d-md-none">
          <img src="{{ asset('assets/images/landing/undraw_good_team_m7uu.svg') }}" class="card-img-top" alt="">
          <div class="card-body ">
            
            We are commited to ensuring only the best for you!
          </div>
        </div>

        <div class="card w-75 h-fit-content bg-transparent  d-md-none">
          <img src="{{ asset('assets/images/landing/undraw_good_team_m7uu.svg') }}" class="card-img-top" alt="">
          <div class="card-body ">
            
            We are commited to ensuring only the best for you!
          </div>
        </div>

        <div class="card w-75 h-fit-content bg-transparent  d-md-none">
          <img src="{{ asset('assets/images/landing/undraw_good_team_m7uu.svg') }}" class="card-img-top" alt="">
          <div class="card-body ">
            
            We are commited to ensuring only the best for you!
          </div>
        </div>

      </div>
      <img src="{{ asset('assets/images/login/login_bg.jpg') }}" class="w-100 h-100 position-fixed" alt="Background" style="z-index: -1">
      



  </div>
</body>
</html>