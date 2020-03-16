@extends('layouts.app')

@section('content')
<div class="w-full bg-white">
    <div class="bg-indigo-100 pt-16 pb-16">
        <div class="container mx-auto px-5 lg:px-12">
            <h1>{{ __('Modules') }}</h1>
            <p class="leading-normal mt-4">
                {{ __('The tech concepts you should know in order to get a job as a Laravel developer.') }}
            </p>
        </div>
    </div>

    @include('partials.you-should-log-in')

    <div class="container mx-auto pt-12">
        {{-- <div class="w-full px-5"> --}}
            <p class="font-semibold leading-tight text-xl mb-10">All modules</p>

            <div class="flex flex-wrap w-full px-2">
                @foreach ($standardModules as $module)
                    <div class="px-2 w-full sm:w-1/2 lg:w-1/3 xl:w-1/4">
                        <a class="mb-5 bg-white shadow-md block" href="{{ route_wlocale('modules.show', $module) }}">
                            <span class="bg-teal-600 pb-8/12 block"></span>
                            <span class="p-5 pb-6 block">
                                <p class="font-semibold">{{ $module->name }}</p>
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>

            @if ($bonusModules->isNotEmpty())
            <p class="font-semibold leading-tight text-xl mb-10">Bonus modules</p>

            @foreach ($bonusModules as $module)
                <a class="mb-5 bg-white shadow-md block" href="{{ route_wlocale('modules.show', $module) }}">
                    <span class="bg-teal-600 pb-8/12 block"></span>
                    <span class="p-5 pb-6 block">
                        <p class="font-semibold">{{ $module->name }}</p>
                    </span>
                </a>
            @endforeach
            @endif

            {{-- <p class="mb-2 font-bold text-lg">Recommended modules</p>

            <ul class="@guest list-disc @endguest">
                @foreach ($standardModules as $module)
                <li>
                    @auth
                    <completed-checkbox
                        :initial-is-completed="{{ $completedModules->contains($module->id) ? 'true' : 'false' }}"
                        type="{{ $module->getMorphClass() }}"
                        id="{{ $module->id }}"
                        ></completed-checkbox>
                    @endauth
                    <a href="{{ route_wlocale('modules.show', $module) }}">{{ $module->name }}</a>
                </li>
                @endforeach
            </ul>

            @if ($bonusModules->isNotEmpty())
            <p class="mb-2 font-bold text-lg mt-8">Bonus modules</p>

            <ul class="@guest list-disc @endguest">
                @foreach ($bonusModules as $module)
                <li>
                    @auth
                    <completed-checkbox
                        :initial-is-completed="{{ $completedModules->contains($module->id) ? 'true' : 'false' }}"
                        type="{{ $module->getMorphClass() }}"
                        id="{{ $module->id }}"
                        ></completed-checkbox>
                    @endauth
                    <a href="{{ route_wlocale('modules.show', $module) }}">{{ $module->name }}</a>
                </li>
                @endforeach
            </ul>
            @endif --}}
        {{-- </div> --}}
    </div>
</div>
@endsection
