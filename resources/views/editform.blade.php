<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Form</title>
</head>
<body>
    <form action="{{ route('update',$faculty->id) }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Name" value="{{$faculty->name}}">
        @error('name')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="Designation">Designation</label>
        <input type="text" name="designation" id="designation" placeholder="Enter Designation" value="{{$faculty->designation}}">
        @error('designation')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="Qualification">Qualification</label>
        <input type="text" name="qualification" id="qualification" placeholder="Enter Qualification" value="{{$faculty->qualification}}">
        @error('qualification')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="City">City</label>
        <input type="text" name="city" id="city" placeholder="Enter City" value="{{$faculty->city}}">
        @error('city')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="name">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter Email" value="{{$faculty->email}}">
        @error('email')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="Phone">Phone</label>
        <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" value="{{$faculty->phone}}">
        @error('phone')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <input type="submit" value="Update">

        @if (Session::has('success'))
            <p style="color: green;">{{ Session::get('success') }}</p>
        @endif

        @if (Session::has('error'))
            <p style="color: red;">{{ Session::get('error') }}</p>
        @endif

    </form>
</body>
</html>