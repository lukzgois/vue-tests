@extends('layouts.vue')

@section('content')
    <h1>Lista de Clientes</h1>
    <hr>

    <div id="clients">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Estado</th>
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
                    Anterior
            </a>

        </div>

    </div>
@endsection