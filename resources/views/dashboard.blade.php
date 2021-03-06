<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">
    @if($message=Session::get('error'))
        <div class="alert alert-info alert-block">
        {{message}}
        </div>
    @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="/cake">Cake List</a>
            </div>
        </div>
    </div>
</x-app-layout>
