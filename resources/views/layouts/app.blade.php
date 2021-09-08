<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- cara pertama
    @isset($styles)
    {{$styles}} 
    @endisset --}}

    {{-- cara ke dua --}}
    {{$styles}}
    {{-- tetapi harus menambahkan variable $styles ke AppLayouts --}}
</head>
<body>
  <x-navbar></x-navbar>
  <div class="mt-3">

    {{$slot}}
  </div>

  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>