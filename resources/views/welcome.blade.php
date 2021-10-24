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
  <img src="{{ asset('assets/images/login/login_bg.jpg') }}" class="w-100 h-100 position-fixed" alt="Background" style="z-index: -1">
  <div class="">
    
    {{-- <nav class="nav py-1 d-flex justify-content-end">
      <ul class="nav nav-pills m-1">
        <li class="nav-item ">
          <a href="" class="nav-link active ">Login</a>
        </li>
      </ul>
    </nav> --}}
    
    <div class="row-cols-1 p-2" style="background: url('../public/assets/images/landing/favpng_car-wrap-advertising-vehicle-fiat.png')">
      
      <div class="col text-center py-4">
        <p class="display-6">
            WAPS is an out of home, transit advertisement company that uses car wrap advertising applied on 
            everyday driver's cars and the power of technology to provide valuable analytics to help the advitiser
            get better outcomes from brand campaigns.
        </p>
        <a href="" class="btn btn-primary w-50">Login</a>
      </div>
    </div>
    <div class="px-2">
      <div class="card text-center bg-transparent border-theme">
        <div class="card-header bg-transparent border-dark lead">
          Make your Campaign even bigger!
        </div>
        <div class="card-body">
          <img src="{{ asset('assets/images/landing/undraw_Happy_birthday_re_c16u.svg') }}" class="card-img-top" alt="">
          <p class="card-text display-6">
            Swarm is a new feature introduced by WAPS that enables advertisers with an
            already existing campaign to create an even bigger buzz! Swarm allows you to take over 
            specific road segments at specific times. Through our web platform an advitiser will be 
            able to send campaign vehicles to dominate an event center, campus or specific part of town.
          </p>
        </div>
      </div>
    </div>
    <div class="card-header w-75 m-auto text-center display-5 mt-3 border-theme fw-light">
      How it works
    </div>
    <div class="container d-flex flex-column p-3">

      <div class="card text-center m-1 bg-transparent border-dark">
        <div class="card-body">
          <p class="card-img-top">1</p>
          <p class="card-title display-6">Goals</p>
          <p class="card-text lead">
            we first contact our brand partners and understand their arketing goals. If brand-awareness is an important
            piece of the media plan, we then make an appropriate campaign recommendation regarding the wrap style,
            quantity of cars, and campaign duration.
          </p>
        </div>
      </div>

      <div class="card text-center m-1 bg-transparent border-dark">
        <div class="card-body">
          <p class="card-img-top">2</p>
          <p class="card-title display-6">Recruitment</p>
          <p class="card-text lead">
            Once confirmed, we recruit, screen, and admit drivers from our databse into our brand partner's campaign.
            Only drivers who drive in the region of interest and who hit all four of our needed driver quality check points are recruited.
          </p>
        </div>
      </div>

      <div class="card text-center m-1 bg-transparent border-dark">
        <div class="card-body">
          <p class="card-img-top">3</p>
          <p class="card-title display-6">Wrapping</p>
          <p class="card-text lead">
            At a confirmed start date, all admited drivers come to our facility and their vehicles are wrapped in our brand 
            partner's advertisement. The car is the returned to the owner, and for the set time frame the car generates powerful impressions
            everywhere it is driven. Through the use of our phone app, all driving activities are tracked and reported back to our brand partner
            on a monthly basis.
          </p>
        </div>
      </div>

    </div>
    
  </div>
</body>
</html>