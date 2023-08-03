<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"><br><br>
        @error('name')
            <span>{{ $message }}</span><br>
        @enderror 

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}"><br><br>
        @error('email')
            <span>{{ $message }}</span><br>
        @enderror 

        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br><br>
        @error('password')
            <span>{{ $message }}</span><br>
        @enderror

        <input type="submit" value="Submit">
    </form> 

    @if (isset($data))
        @foreach($data as $item) 
            <h1>{{ $item }}</h1>
        @endforeach
    @endif
</body>
</html>
