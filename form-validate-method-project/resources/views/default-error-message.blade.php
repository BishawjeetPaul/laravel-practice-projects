<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>
</head>
<body>
    
    <form action="" method="post" style="text-align: center;">
        @csrf
        <br><br>
        Name: <input type="text" name="name" id="name" value="{{ old('name') }}"><br><br>
        @error('name')
            <span>{{ $message }}
        @enderror
        Email: <input type="email" name="email" id="email" value="{{ old('email') }}"><br><br>
        @error('email')
            <span>{{ $message }}
        @enderror
        Password: <input type="password" name="password" id="password" value="{{ old('password') }}"><br><br>
        @error('password')
            <span>{{ $message }}
        @enderror

        <input type="submit" value="Submit">
    </form>

    @if (isset($data))
        @foreach ($data as $item)
            {{ $item }}
        @endforeach
    @endif 

</body>
</html>