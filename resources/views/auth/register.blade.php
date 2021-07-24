<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>waps | Register</title>

  <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
  <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">

</head>
<body>
  
<div class="container-fluid p-0">
  <div class="row m-0">
    <div class="">
      <div class="login-card">

        <div class="login-main">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <p class="display-6">waps</p>
                {{-- <h6 >Create your account</h6> --}}
                <p class="lead text-capitalize">create your account</p>
                  
                <div class="form-group">
                  <label for="name" class="col-form-label pt-0">Your Name</label>
                  <div class="row g-2">
                    
                      <input type="text" name="name" 
                        class="form-control @error('name')
                          is-invalid
                        @enderror" 
                        placeholder="Name"
                        value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    {{-- <div class="col-6">
                      <input type="text" name="surname" 
                        class="form-control @error('surname')
                        is-invalid
                      @enderror"
                        placeholder="Surname"
                        value="{{ old('surname') }}">
                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
                  </div>

                </div>

                <div class="form-group">
                  <label for="email" class="col-form-label">Email Address</label>
                  <input type="email" name="email" 
                    class="form-control @error('email')
                      is-invalid
                    @enderror" 
                    placeholder="email@example.com"
                    value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="phone" class="col-form-label">Phone </label>
                  <input type="tel" name="phone" 
                    class="form-control @error('phone')
                      is-invalid
                    @enderror" 
                    placeholder="phone number"
                    value="{{ old('phone') }}">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group position-relative">
                  <label for="password" class="col-form-label">Password</label>
                  <input type="password" name="password" 
                    class="form-control @error('password')
                      is-invalid
                    @enderror"
                    value="{{ old('password') }}">
                  <div class="show-hide"><span class="show text-capitalize"></span></div>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="password-confirm" class="col-form-label">Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <button class="btn btn-primary btn-block mt-4" type="submit">Create Account</button>
              
              </form>
          </div>
      </div>
    </div>
  </div>
</div>
  
</body>
</html>


