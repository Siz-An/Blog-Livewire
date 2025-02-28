<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Laravel Livewire' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">

<!-- Navigation -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="container mx-auto flex items-center justify-between py-4 px-6">
        <a wire:navigate href="{{route('home')}}" class="text-lg font-bold text-primary">
            <img class="h-12" src="{{asset('frontend/images/logo.jpg')}}" alt="Logo">
        </a>
        <button id="nav-toggle" class="md:hidden text-gray-700 text-2xl">
            ☰
        </button>
        <ul id="nav-menu" class="hidden md:flex space-x-6 text-gray-700 font-medium">
            <li><a wire:navigate class="hover:text-primary transition" href="{{route('home')}}">Home</a></li>
            <li><a wire:navigate class="hover:text-primary transition" href="{{route('page',1)}}">About Us</a></li>
            <li><a wire:navigate class="hover:text-primary transition" href="{{route('servicePage')}}">Services</a></li>
            <li><a wire:navigate class="hover:text-primary transition" href="{{route('team')}}">Our Team</a></li>
            <li><a wire:navigate class="hover:text-primary transition" href="{{route('blog')}}">Blogs</a></li>
            <li><a wire:navigate class="hover:text-primary transition" href="{{route('faq')}}">FAQ</a></li>
        </ul>
        <a wire:navigate href="{{route('contact')}}" class="border border-primary text-primary px-6 py-2 rounded-full transition hover:bg-primary hover:text-white">Contact Us</a>
    </nav>
</header>

<!-- Main Content -->
<main class="flex-grow bg-gray-50">
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
        <div>
            <h5 class="text-primary text-lg font-semibold mb-4">Services</h5>
            <ul class="space-y-2">
                @foreach (getservices() as $service)
                    <li><a wire:navigate href="{{route('service',$service->id)}}" class="hover:text-gray-400 transition">{{$service->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <h5 class="text-primary text-lg font-semibold mb-4">Quick Links</h5>
            <ul class="space-y-2">
                <li><a wire:navigate href="{{route('page',1)}}" class="hover:text-gray-400 transition">About Us</a></li>
                <li><a wire:navigate href="{{route('contact')}}" class="hover:text-gray-400 transition">Contact Us</a></li>
                <li><a wire:navigate href="{{route('blog')}}" class="hover:text-gray-400 transition">Blog</a></li>
                <li><a wire:navigate href="{{route('team')}}" class="hover:text-gray-400 transition">Team</a></li>
            </ul>
        </div>
        <div>
            <h5 class="text-primary text-lg font-semibold mb-4">Legal</h5>
            <ul class="space-y-2">
                <li><a wire:navigate href="{{route('page',3)}}" class="hover:text-gray-400 transition">Privacy Policy</a></li>
                <li><a wire:navigate href="{{route('page',4)}}" class="hover:text-gray-400 transition">Terms & Conditions</a></li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-8 text-sm">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</footer>

@livewireScripts

<script>
    document.getElementById('nav-toggle').addEventListener('click', function () {
        document.getElementById('nav-menu').classList.toggle('hidden');
    });
</script>

</body>
</html>
