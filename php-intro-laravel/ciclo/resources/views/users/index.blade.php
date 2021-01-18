<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 mx-auto">
              <div class="card border-0 shadow">
                <div class="card-body">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      @foreach ($errors->all() as $error)
                      - {{$error}} <br>
                      @endforeach
                    </div>
                  @endif

                  <form class="row g-4" action="{{ route('users.store')}}" method="POST">
                    <div class="col-auto">
                      <input type="text" name="name" class="form-control" placeholder="Nombre..." value="{{old('name')}}">
                    </div>
                    <div class="col-auto">
                      <input type="email" name="email" class="form-control" placeholder="EMail..." value="{{old('email')}}">
                    </div>
                    <div class="col-auto">
                      <input type="password" name="password" class="form-control" placeholder="Contraseña...">
                    </div>
                    <div class="col-auto">
                      @csrf
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>

              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>email</th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                      <tr> 
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                        <td>
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                              @method('DELETE') {{-- EL METODO EXTREMO QUE QUEREMOS LLAMAR EN NUESTRA PERRA RUTA --}}
                              @csrf 
                              <input type="submit" value="Eliminar" class="btn btn-sm btn-danger"
                              onclick="return confirm('Deseas Eliminar...?')">
                            </form>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

          </div>

        </div>
    </body>
</html>