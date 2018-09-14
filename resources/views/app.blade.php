<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Laravel VueJs</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        
       
    </head>
    <body>
        <div id="app" class="container">
            <div class="section">
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                          Launch demo modal
                        </button>


                        <table class="table striped">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Fecha de crecion</th>
                              <th scope="col">Editar</th>
                              <th scope="col">Eliminar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="keep in keeps">
                              <th scope="row">@{{keep.id}}</th>
                              <td>@{{keep.keep}}</td>
                              <td>@{{keep.created_at}}</td>
                              <td>
                                <button class="btn btn-warning" v-on:click="editKeep(keep.id)">Editar</button>
                              </td>
                              <td>
                                <button class="btn btn-danger" v-on:click="deleteKeep(keep.id)">Eliminar</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        @include('modal')
                    </div>        
                </div>
            </div>
        </div>
        
        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
