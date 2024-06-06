<a href="{{route('keuzemodules.show',$module->id)}}">
<div class="flex align-sub h-[36rem] w-auto bg-white bg-cover p-6" style="background-image: url('{{asset('assets/Bitmap.png')}}');">
    <div class="self-end">
        <div class=" bg-white text-base-content min-w-2 text-center my-1 rounded-full">
            {{$module->category->name}}
        </div>
        <h5 class="mb-2 text-4xl leading-tight  text-white dark:text-neutral-50">
            {{$module->title}}
        </h5>
    </div>
</div>
</a>
