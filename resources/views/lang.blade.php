<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <a href="{{ route('lang', 'en') }}" class="btn btn-sm btn-primary">English</a>
        <a href="{{ route('lang', 'ar') }}" class="btn btn-sm btn-primary">Arabic</a>
    </div>
   <h1>{{ __('lang.hello') }}</h1>
   <p>{{ __('lang.content') }}</p>
   {{ __('lang.home') }}
</body>
</html>
