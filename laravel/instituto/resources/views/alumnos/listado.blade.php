{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <h1>Este es ellistado de alumnos</h1>--}}
{{--</body>--}}
{{--</html>--}}

<x-layouts.layout>
    <div class="overflow-x-auto h-96 w-96">
        <table class="table table-xs table-pin-rows table-pin-cols">
            <thead>
                <tr>
                    @foreach($fields as $field)
                        <td>{{$field}}</td>
                    @endforeach
                </tr>
            </thead>
            <tbody>
            @foreach($proyects as $proyect)
                <tr>
                    <td>{{$proyect->name}}</td>
                    <td>{{$proyect->description}}</td>
                    <td>{{$proyect->hours}}</td>
                    <td>{{$proyect->starting_date}}</td>

                    <td>Editar</td>
                    <form onsubmit="confirmar" action="{{route("projects.destroy", $project->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btm-secondary">Borrar</button>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function confirmar(event){
            event.prevent.default
            const respuesta = confirm("Seguro que quieres borrar")
            if(respuesta){
                const form = closest(form)
            }
        }
    </script>
</x-layouts.layout>
