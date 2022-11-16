<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anode BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class="contanier-fluid">
        <x-app-layout>
        </x-app-layout>
        <header id="header">
            <div class="row header">
                <div class="col-12 logout">
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                                @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
            </div>
        </header>

        <!-- SIDEBAR and CONTENT TABLE -->
        <section>
            <div class="row">
                <!-- SIDEBAR -->
                <div class="col-auto sidebar pe-2">
                    <div class="row navBar ps-0">
                        <div class="col-auto">
                            <img src="{{asset('img/about.jpg')}}" alt="">
                        </div>
                        <div class="col-10 navContent">
                            <h6>Welcome Admin</h6>
                        </div>
                    </div>
                    <div class="row settings ps-4 ">
                        <div class="col">
                            <ul>
                                <li id="set-title">
                                    <i class="fa-solid fa-gears"></i>
                                    <h5>SETTINGS</h5>
                                </li>
                                <li id='drop'>
                                    <a href="{{url('/redirect')}}">
                                        <i class="fa-solid fa-house"></i>
                                        Home
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{url('/view_nav')}}">
                                                <i class="fa-solid fa-bars"></i>
                                                Navbar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/view_slide')}}">
                                                <i class="fa-solid fa-sliders"></i>
                                                Slider
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('/view_about')}}">
                                        <i class="fa-regular fa-id-badge"></i>
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/view_category')}}">
                                        <i class="fa-solid fa-list"></i>
                                        Categories
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/view_posts')}}">
                                        <i class="fa-regular fa-clipboard"></i>
                                        Posts
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/view_contact')}}">
                                        <i class="fa-solid fa-envelopes-bulk"></i>
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- SIDEBAR FINISH -->