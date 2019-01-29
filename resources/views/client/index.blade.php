<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clientes</title>
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

    <a href="{{ url('/client/create') }}" class="btn btn-xs btn-info pull-right">Novo Cliente</a>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($clients as $client)
      @php
        $date=date('Y-m-d', $client['date']);
        @endphp
      <tr>
        <td>{{$client['id']}}</td>
        <td>{{$client['name']}}</td>
        
        <td><a href="{{action('ClientController@edit', $client['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ClientController@destroy', $client['id'])}}" method="post">
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