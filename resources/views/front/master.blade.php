<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
<head>
    <title>Prime1nyc | @yield('title') | YOUR TRUSTEND INSURANCE AND TAX SERVICE</title>
    @include('front.partials.css')
    @include('front.partials.cdn')
  
    
</head>


<body class="@yield('class')">
    @include('front.header.preloader')
    @include('front.header.heading')
    @yield('body')




@include('front.footers.footer')
@include('front.partials.js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>