{{-- @php
 dd($name, $lastname, $skills)    
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Home</h1>
  <h2>Ciao {{ $name }} {{ $lastname }}</h2>
  <h3>Skills</h3>
  @if(isset($skills))
  <ul>
    @foreach ($skills as $skill)
        <li>{{ $skill }}</li>
    @endforeach
  </ul>
  @endif
</body>
</html>