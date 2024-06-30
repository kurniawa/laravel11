@props(['active' => false])
{{-- props active => false membuat variable active ini menjadi false terlebih dahulu, jadi secara default $active = false. Dan varibel yang tercantum pada props akan otomatis tidak tercantum pada attribute, sehingga lebih rapih saja ketika halaman di inspect --}}
<a {{ $attributes }}
    class="rounded-md {{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
