@extends('layouts.app')

@section('content')

    <!-- menu -->

    <!-- ajout colloc -->
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ajouter un colocataire
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- nom Colocation -->
                        <div class="form-group">
                            <label for="nom-coloc" class="col-sm-3 control-label">Nom du colocataire</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="nom-coloc" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Image colocation -->
                        <div class="form-group">
                            <label for="img-coloc" class="col-sm-3 control-label">Photo</label>

                            <div class="col-sm-6">
                                <input type="file" name="img" id="img-coloc" class="form" value="{{ old('task') }}">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default"  onClick="ajoute()">
                                    <i class="fa fa-btn fa-plus"> Ajouter le colocataire </i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

    <!-- <ul id="test">Ma Liste </ul> -->

    <script type="text/javascript">
    function ajoute()
    {
        var nom = document.getElementById("nom-coloc").value;
        // alert(nom);
        var menu = document.getElementById("listcoloc");
        var li = document.createElement("LI");
        var a = document.createElement("A");
        var t = document.createTextNode(nom);
        a.href="#";
        a.appendChild(t);
        li.appendChild(a);
        // var test = document.getElementById("test");
        menu.appendChild(li);
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
                                <th>Nom</th>
                                <th>Image</th>
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



<!--QUESTIONS A POSER AU PROF :
Comment ne pas suprimer les ajout dynamiques au code html
comment ajouter un champs image à task pour pouvoir l'afficher sur l'ajout des taches
comment naviguer entre plusieurs pages (et en rajouter)
Si j'ai le droit me modifer app.blade.php
le cas échéant comment faire communiquer les deux pages





 root::get('/':function(
     view 'tasks',
     [colocataires => ["kevin","",""...]]
 )


-->