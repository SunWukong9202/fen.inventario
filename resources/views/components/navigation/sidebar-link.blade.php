@props([
    'page'
])

<a 
{{-- 
class="py-2 text-size-sm mx-4 flex items-center whitespace-nowrap px-4 transition-colors
{{ (request()->routeIs($page) ? 'shadow-xl rounded-lg bg-white font-semibold text-slate-700' : '') }}" --}}

{{ $attributes->class([
    'py-2 text-size-sm mx-4 flex items-center whitespace-nowrap px-4 transition-colors',
    'shadow-xl rounded-lg bg-white font-semibold text-slate-700' => request()->routeIs($page),
    ]) 
}}

href="{{ route($page) }}">
<div
class="{{ (request()->routeIs($page) ? 'bg-blue-100' : 'bg-white') }} shadow-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg  bg-center stroke-0 text-center xl:p-2.5">

<x-heroicon-s-users class="w-4 h-4" />

</div>
<span
class="ml-1 duration-300 opacity-100 pointer-events-none">User
Profile</span>
</a>