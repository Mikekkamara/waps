<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
  <title>Waps</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
  <img src="{{ asset('assets/images/login/login_bg.jpg') }}" class="w-100 h-100 position-fixed" alt="Background" style="z-index: -1">
  <div class="">
    <div class="row-cols-1 p-2 bg-opacity-25 position-relative d-xl-none">
      <img src="{{ asset('assets/css/images/favpng_car-wrap-advertising-vehicle-fiat.png') }}" alt="" class="card-img">
      <div class="col text-center d-md-none">
        <p class="display-6">
            WAPS is an out of home, transit advertisement company that uses car wrap advertising applied on 
            everyday driver's cars and the power of technology to provide valuable analytics to help the advitiser
            get better outcomes from brand campaigns.
        </p>
        <a href="" class="btn btn-primary w-50">Login</a>
      </div>
      <div class="col text-center d-none d-md-block card-img-overlay m-auto w-50  h-fit-content home-overlay rounded-3">
        <p class="display-7">
            WAPS is an out of home, transit advertisement company that uses car wrap advertising applied on 
            everyday driver's cars and the power of technology to provide valuable analytics to help the advitiser
            get better outcomes from brand campaigns.
        </p>
        <a href="" class="btn btn-primary w-100">Login</a>
      </div>
    </div>
              {{-- Lg --}}
              <div class="row-cols-1 p-2 bg-opacity-25 position-relative d-none d-xl-block ">
                <div class="container-fluid w-75 me-0">
                  <img src="{{ asset('assets/css/images/favpng_car-wrap-advertising-vehicle-fiat.png') }}" alt="" class="card-img">
                </div>
                <div class="col text-center card-img-overlay w-25 home-overlay h-fit-content rounded-3 my-auto start-25">
                  <p class="display-7">
                      WAPS is an out of home, transit advertisement company that uses car wrap advertising applied on 
                      everyday driver's cars and the power of technology to provide valuable analytics to help the advitiser
                      get better outcomes from brand campaigns.
                  </p>
                  <a href="" class="btn btn-primary w-100">Login</a>
                </div>
              {{-- Lg --}}
              </div>
    <div class="p-2">
      <div class="card text-center bg-transparent border-theme h-auto m-auto border-4 d-md-none">
        <div class="card-header bg-transparent border-dark display-6">
          <i class="fas fa-bullhorn me-3"></i>Make your Campaign even bigger!
        </div>
        <div class="card-body ">
          {{-- <img src="{{ asset('assets/images/landing/undraw_Happy_birthday_re_c16u.svg') }}" class="card-img-top" alt=""> --}}
          <p class="card-text lead">
            Swarm is a new feature introduced by WAPS that enables advertisers with an
            already existing campaign to create an even bigger buzz! Swarm allows you to take over 
            specific road segments at specific times. Through our web platform an advitiser will be 
            able to send campaign vehicles to dominate an event center, campus or specific part of town.
          </p>
        </div>
      </div>
      <div class="card text-center bg-transparent border-theme h-auto m-auto border-4 d-none d-md-block">
        <div class="card-header bg-transparent border-dark display-6">
          <i class="fas fa-bullhorn me-3"></i>Make your Campaign even bigger! 
        </div>
        <div class="card-body d-flex">
          {{-- <img src="{{ asset('assets/images/landing/undraw_Happy_birthday_re_c16u.svg') }}" class="card-img-top" alt=""> --}}
          <p class="card-text fs-6">
            Swarm is a new feature introduced by WAPS that enables advertisers with an
            already existing campaign to create an even bigger buzz! Swarm allows you to take over 
            specific road segments at specific times. Through our web platform an advitiser will be 
            able to send campaign vehicles to dominate an event center, campus or specific part of town.
          </p>
        </div>
      </div>
    </div>
    <div class="card-header w-fit-content m-auto fw-bold  border-0 bg-transparent display-5 mt-3">
      How it works
    </div>
    <div class="container-fluid d-flex flex-column  p-3 my-2 rounded-1 align-items-center flex-lg-row h-fit-content" style="">

      <div class="card text-center m-1 bg-transparent border-dark " style="flex: 1">
        <div class="card-body">
          <p class="card-img-top">1</p>
          <p class="card-title display-6"><i class="fas fa-bullseye me-3 text-theme"></i>Goals</p>
          <p class="card-text lead fs-6">
            we first contact our brand partners and understand their arketing goals. If brand-awareness is an important
            piece of the media plan, we then make an appropriate campaign recommendation regarding the wrap style,
            quantity of cars, and campaign duration.
          </p>
        </div>
      </div>

      <div class="card text-center m-1 bg-transparent border-dark " style="flex: 1">
        <div class="card-body">
          <p class="card-img-top">2</p>
          <p class="card-title display-6"><i class="fas fa-list-ol me-3 text-theme"></i>Recruitment</p>
          <p class="card-text lead fs-6">
            Once confirmed, we recruit, screen, and admit drivers from our databse into our brand partner's campaign.
            Only drivers who drive in the region of interest and who hit all four of our needed driver quality check points are recruited.
          </p>
        </div>
      </div>

      <div class="card text-center m-1 bg-transparent border-dark " style="flex: 1">
        <div class="card-body">
          <p class="card-img-top">3</p>
          <p class="card-title display-6"><i class="fas fa-car me-3 text-theme" ></i>Wrapping</p>
          <p class="card-text lead fs-6">
            At a confirmed start date, all admited drivers come to our facility and their vehicles are wrapped in our brand 
            partner's advertisement. The car is the returned to the owner, and for the set time frame the car generates powerful impressions
            everywhere it is driven. Through the use of our phone app, all driving activities are tracked and reported back to our brand partner
            on a monthly basis.
          </p>
        </div>
      </div>

    </div>
    <div class="card-header w-fit-content m-auto fw-bold  border-0 bg-transparent display-5 mt-3">
      Drivers
    </div>

    <div class="row-cols-1 p-2 ">
      <img src="{{ asset('assets/css/images/favpng_car-door-minivan-wrap-advertising-city-car.png') }}" alt="" class="card-img">
      <div class="col text-center py-4">
        <p class="display-6">
          The drivers in WAPS network are safe, high-mileage, everday drivers from the local community who want to 
          earn residual income from driving around with a brand on their car. More specifically, our WAPS drivers are a myriad of esteemed
          community members; an eclectic mix of ride share drivers like <strong>Uber</strong> and <strong>Bolt</strong>
          all whom have consistent driving patterns and keep a 2010 model car or newer, in excellent condition.
        </p>
      </div>
    </div>
    <div class="card-header w-fit-content m-auto fw-bold  border-0 bg-transparent display-5 mt-3">
      Wrap Design
    </div>
    <div class="row-cols-1 p-2">
      <img src="{{ asset('assets/css/images/favpng_car-wrap-advertising-vehicle-fiat.png') }}" alt="" class="card-img">
      <div class="col text-center py-4">
        <p class="display-6">
          Designing for cars is a very niche field within the graphic design comunity. Not only do designs need to be thought of in 
          a 3-dimensional space, but the inticacies and difficulties of designing on a non-flat surface which include the likes of car door handles,
          side panelling, windows, and bumper contours, creates quite a complex design challenge. Unless our brand partner has designers or staff with experience
          on designing car wraps, it is highky recommended that our brand partner work with our in-house creative team to bring their car wrap vision to life at
          <strong>no extra fee</strong>!
        </p>
      </div>
    </div>
    <div class="card-header w-fit-content m-auto fw-bold  border-0 bg-transparent display-5 mt-3">
      Our Dashboard
    </div>
    <div class="row-cols-1 p-2">
      <img src="{{ asset('assets/css/images/Screenshot 2021-10-23 115215.png') }}" alt="" class="card-img">
      <div class="col text-center py-4">
        <p class="display-6">
          WAPS online dashboard takes online advertising to the next level. It allows the advitiser to measure the impact
          of the high-recall out of home WAPS vehicles produced with our OHH tracking technology. By loggin into the campaign
          dashboard, the advertiser will be able to access metrics in;
          <ul class="w-fit-content m-auto lead">
            <li class=""><i class="fas fa-map-marker-alt me-3"></i>Mileage</li>
            <li><i class="fas fa-fire me-3"></i>Heatmaps</li>
          </ul>
        </p>
      </div>
    </div>
    
  </div>
  {{-- <footer class="row-cols-3 bg-dark text-light d-flex flex-row">
    <div class="col-4">
      <p class="display-7">Social</p>
      <ul>
        <li>FaceBook</li>
        <li>Whatsapp</li>
        <li>Instagram</li>
        <li>messenger</li>
      </ul>
    </div>
    <div class="col-4">
      <ul>
        <li>About Us</li>
        <li>Q & A</li>
        <li>Privacy</li>
        <li>Terms and Conditions</li>
      </ul>
    </div>
    <div class="col-4">
      <p class="display-6">WAPS | All rights reserved</p>
    </div>
  </footer> --}}
</body>
</html>