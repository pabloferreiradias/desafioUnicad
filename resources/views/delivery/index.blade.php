<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entregas</title>
    <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
  </head>
  <body>
  @include('menu')
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

    <a href="{{ url('/delivery/create') }}" class="btn btn-xs btn-info pull-right">Nova Entrega</a>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>ID do Cliente</th>
        <th>Origem</th>
        <th>Destino</th>
        <th>Data</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($deliverys as $delivery)
      <tr>
        <td>{{$delivery['id']}}</td>
        <td>{{$delivery['client_id']}}</td>
        <td>{{$delivery['origin']}}</td>
        <td>{{$delivery['destiny']}}</td>
        <td>{{$delivery['delivery_date']}}</td>
        
        <td><a href="{{action('DeliveryController@route', $delivery['id'])}}" class="btn btn-info">Traçar Rota</a></td>

        <td><a href="{{action('DeliveryController@edit', $delivery['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('DeliveryController@destroy', $delivery['id'])}}" method="post">
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>