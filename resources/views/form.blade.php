<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
      <h1 class="text-center mt-4">Registeration</h1>
      
      <form action="{{url('/')}}/register" method="POST">
        @csrf
        <div class="form-row">
         
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" name="name" class="form-control" id="inputEmail4" value="{{old('name')}}" placeholder="Name"><span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
              </div>
            
              <div class="form-group col-md-6">
                <label for="inputEmail4"> Email </label>
                <input type="email" name="email" class="form-control" id="inputEmail4" value="{{old('email')}}" placeholder="Email"><span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
              </div>

          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4" value="{{old('password')}}" placeholder="Password"><span class="text-danger">
                @error('password')
                        {{$message}}
                @enderror
            </span>
          </div>
        </div>
       
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
            Accept and Continue
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
  </body>
</html>