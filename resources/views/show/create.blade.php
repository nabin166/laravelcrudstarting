<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body style="text-align: center">
  <h1>Add Name</h1>
  <form method="POST" action='name'>
    @csrf
    <div class="col container  ">
      <div class="col mt-4">
        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name">
      </div>
      <div class="col mt-4">
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name">
      </div>
      <button type="submit" name="submit" id="submit" class="btn btn-primary mt-4">Submit</button>
    </div>
  </form>


  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col"></th>

      </tr>
    </thead>
    <tbody>
      {{-- {{ print_r($usernames)}} --}}


      @foreach ($usernames as $usernames)

      <tr>
        <td>{{ $usernames->id }}</td>
        <td> {{ $usernames->firstname }}</td>
        <td>{{ $usernames->lastname }}</td>
        <td> <a href="{{ $usernames->id }}">delete</a></td>


        <td> <a href="update/{{ $usernames->id }}">update</a></td>

      </tr>

      @endforeach



    </tbody>
  </table>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>