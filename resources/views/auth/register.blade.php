
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Mash | Register</title>

    <!-- vendor css -->
    <link href="{{asset('backend')}}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.css">
    <link rel="stylesheet" href="{{asset('backend')}}/css/bracket.dark.css">
  </head>

  <body>
  
    <div class="d-flex align-items-center justify-content-center ht-100v ">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-br-primary bd bd-white-1 rounded">
        <div class="mt-5 signin-logo tx-center tx-28 tx-bold tx-white" ><span class="tx-normal">[</span>MA<span class="tx-info">SH</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>

<!-- Validation Errors -->
<x-auth-validation-errors class="" :errors="$errors" />

<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-label for="name" :value="__('Name')" />
        <x-input id="name" class="form-control form-control-sm" type="text" name="name" :value="old('name')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-2">
        <x-label for="email" :value="__('Email')" />
        <x-input id="email" class="form-control form-control-sm" type="email" name="email" :value="old('email')" required />
    </div>
    <!-- phone -->
    <div class="mt-2">
        <x-label for="phone" :value="__('Number')" />
        <x-input id="phone" class="form-control form-control-sm" type="text" name="phone" />
    </div>
    <!-- role  -->
    <div class="mt-2">
        <x-label for="role" :value="__('Role')" />
        <select name="role" id="" class="form-control form-control-sm" value="old('email')">
            <option value="">==Select Role==</option>
            <option value="1">Admin</option>
            <option value="2">Vendor</option>
            <option value="3">User</option>
        </select>

        
    </div>
    <!-- phone -->
    {{-- <div class="mt-2">
        <x-label for="image" :value="__('')" />
        <x-input id="image" class="form-control form-control-sm" type="file" name="image" />
    </div> --}}
    <!-- Password -->
    <div class="mt-2">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="form-control form-control-sm"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-2">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class="form-control form-control-sm"
                        type="password"
                        name="password_confirmation" required />
    </div>

    <div class="flex items-center justify-end mt-2">
        <x-button class="mt-3 btn btn-sm btn-info form-control from-control-sm">
            {{ __('Register') }}
        </x-button>
    </div>
</form>

    <div class="mg-t-30 tx-center">Already a member? <a href="{{route('login')}}" class="tx-info">Sign In</a></div>
    
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('backend')}}/lib/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{asset('backend')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
