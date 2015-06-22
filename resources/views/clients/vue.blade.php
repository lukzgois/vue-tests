@extends('layouts.vue')

@section('content')
    <h1>Lista de Clientes</h1>
    <hr>
    
    <div id="clients">

        <form class="form-inline" v-on="submit: search">
            <div class="form-group">
                <input type="text" class="form-control" v-model="term" placeholder="Nome ou E-mail">
            </div>
            <button type="submit" class="btn btn-success">Buscar</button>
        </form>

        <br />

        <table class="table table-striped">
            <thead>
                <tr>
                    <th v-repeat="column:columns">
                        @{{ column }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-repeat="clients">
                    <td>@{{ id }}</td>
                    <td>@{{ name }}</td>
                    <td>@{{ email }}</td>
                    <td>@{{ state }}</td>
                    <td>
                        <a class="btn btn-primary" href="#" role="button">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="btn btn-danger" href="#" role="button">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="btn-group" role="group">
            <a
                href="#"
                v-on="click: changePage('prev', $event)"
                v-attr="disabled: !prev_page_url"
                class="btn btn-default"
                role="button">
                    Anterior
            </a>
            <a
                href="#"
                v-on="click: changePage('next', $event)"
                v-attr="disabled: !next_page_url"
                class="btn btn-default"
                role="button">
                    Próxima
            </a>

        </div>

    </div>
@endsection