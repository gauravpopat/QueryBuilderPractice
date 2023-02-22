<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <style>
        #faculty {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
          text-align: center;
        }
        
        #faculty td, #faculty th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #faculty tr:hover {background-color: #ddd;}
        
        #faculty th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #0457aa;
          color: white;
        }
        </style>
</head>

<body>
   <form action="{{ route('create') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Name" value="{{old('name')}}">
        @error('name')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="Designation">Designation</label>
        <input type="text" name="designation" id="designation" placeholder="Enter Designation" value="{{old('designation')}}">
        @error('designation')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="Qualification">Qualification</label>
        <input type="text" name="qualification" id="qualification" placeholder="Enter Qualification" value="{{old('qualification')}}">
        @error('qualification')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="City">City</label>
        <input type="text" name="city" id="city" placeholder="Enter City" value="{{old('city')}}">
        @error('city')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="name">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter Email" value="{{old('email')}}">
        @error('email')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <label for="Phone">Phone</label>
        <input type="tel" name="phone" id="phone" placeholder="Enter Phone Number" value="{{old('phone')}}">
        @error('phone')
        <p style="color: red;display: inline;font-size: 15px">{{$message}}</p>
        @enderror
        <br>

        <input type="submit" value="Submit">

        @if (Session::has('success'))
            <p style="color: green;">{{ Session::get('success') }}</p>
        @endif

        @if (Session::has('error'))
            <p style="color: red;">{{ Session::get('error') }}</p>
        @endif

    </form>

    @if (sizeof($faculty) > 0)
        <div class="show">
            <table id="faculty">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Qualification</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th colspan="2">Action</th>
                    </tr>

                @foreach ($faculty as $fc)
                    <tr>
                        <td>{{ $fc->id }}</td>
                        <td>{{ $fc->name }}</td>
                        <td>{{ $fc->designation }}</td>
                        <td>{{ $fc->qualification }}</td>
                        <td>{{ $fc->city }}</td>
                        <td>{{ $fc->email }}</td>
                        <td>{{ $fc->phone }}</td>
                        <td> <a href="{{ route('editform',$fc->id) }}">Edit</a> </td>
                        <td> <a href="{{ route('delete',$fc->id) }}">Delete</a> </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif

</body>

</html>
