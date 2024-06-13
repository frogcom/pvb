<header>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __('Update theme') }}
    </h2>

</header>
<div class="form-control">
    <label class="label cursor-pointer gap-4">
        <span class="label-text">Default</span>
        <input onchange="updateTheme(this);" type="radio" name="theme-radios" class="radio theme-controller" value="default"/>
    </label>
</div>
<div class="form-control">
    <label class="label cursor-pointer gap-4">
        <span class="label-text">Retro</span>
        <input onchange="updateTheme(this);" type="radio" name="theme-radios" class="radio theme-controller" value="retro"/>
    </label>
</div>
<div class="form-control">
    <label class="label cursor-pointer gap-4">
        <span class="label-text">Cyberpunk</span>
        <input onchange="updateTheme(this);" type="radio" name="theme-radios" class="radio theme-controller" value="cyberpunk"/>
    </label>
</div>
<div class="form-control">
    <label class="label cursor-pointer gap-4">
        <span class="label-text">Valentine</span>
        <input onchange="updateTheme(this);" type="radio" name="theme-radios" class="radio theme-controller" value="valentine"/>
    </label>
</div>
<div class="form-control">
    <label class="label cursor-pointer gap-4">
        <span class="label-text">Aqua</span>
        <input onchange="updateTheme(this);" type="radio" name="theme-radios" class="radio theme-controller" value="aqua"/>
    </label>
</div>
@push('script')
    <script>
        function updateTheme(item) {
            const elem = document.getElementById('body');

            localStorage.setItem("data-theme", item.value);
            elem.setAttribute('data-theme', item.value)

        }
    </script>

@endpush
