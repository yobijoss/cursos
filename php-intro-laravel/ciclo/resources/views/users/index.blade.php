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
