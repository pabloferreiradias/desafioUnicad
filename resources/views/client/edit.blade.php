<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clientes - Editar</title>
    <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Cliente:</h2><br  />
        <form method="post" action="{{action('ClientController@update', $id)}}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" name="name" value="{{$passport->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Editar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>