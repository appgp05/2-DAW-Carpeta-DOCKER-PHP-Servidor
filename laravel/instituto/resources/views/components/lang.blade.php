<select name="lang" id="" onchange="window.location.href=this.value" class="btn btn-sm btn-primary">
    <option disabled selected>{{__("Selecciona Idioma")}}</option>
    @foreach(config("languages") as $index => $language)
        <option value="{{route("set_lang", $index)}}">{{$language["name"]}} {{$language["flag"]}}</option>
    @endforeach
</select>
