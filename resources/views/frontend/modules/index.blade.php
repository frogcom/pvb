

    @foreach($modules as $module)

        <a href="{{route('keuzenmodules.show', $module->id)}}">module detai</a>

        {!! $module->text !!}
    @endforeach
