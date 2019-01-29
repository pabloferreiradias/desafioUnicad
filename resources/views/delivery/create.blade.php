<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entregas - Nova</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Criar Entrega:</h2><br/>
      <form method="post" action="{{url('delivery')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="client_id">Id Cliente:</label>
            <input type="text" class="form-control" name="client_id">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Origin">Origem:</label>
            <input type="text" class="form-control" name="origin">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Destiny">Destino:</label>
            <input type="text" class="form-control" name="destiny">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Data da entrega: </strong>  
            <input class="date form-control"  type="text" id="datepicker" name="delivery_date">   
         </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>