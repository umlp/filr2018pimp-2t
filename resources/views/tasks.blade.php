@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Créer une colocation
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- nom Colocation -->
                        <div class="form-group">
                            <label for="nom-coloc" class="col-sm-3 control-label">Nom de la colocation</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="nom-coloc" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Image colocation -->
                        <div class="form-group">
                            <label for="img-coloc" class="col-sm-3 control-label">Image</label>

                            <div class="col-sm-6">
                                <input type="file" name="img" id="img-coloc" class="form" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default"  onClick="ajoute()">
                                    <i class="fa fa-btn fa-plus"></i>Ajouter la colocation
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


    <script type="text/javascript">
    function ajoute()
    {
        var nom = document.getElementById("nom-coloc").value;
        alert("1");
        var menu = document.getElementById("listcoloc");
        alert("2");
        alert(menu.name);
        menu.append("<li><a href="#">" $nom "</a></li>");
    }
    </script>


            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Colocations
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Supprimer colocation
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
