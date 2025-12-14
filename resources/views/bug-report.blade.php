<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIKOCAK') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="min-h-screen bg-[#9DFF00] bg-cover bg-center bg-no-repeat flex items-center justify-center font-sans antialiased overflow-hidden">

        <div>
            <!-- Wrapper -->
            <div class="flex shrink-0 items-center md:h-auto sm:max-w-2xl bg-white rounded-3xl shadow-xl p-10 border-2 border-black ">
               <form method="POST" action="{{ route('bug-report.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Subjek -->
                <div class="mt-6">
                    <!-- <x-input-label for="name" :value="__('Name')" /> -->
                    <x-text-input id="subject" class="block w-full" type="text" name="subject" :value="old('subject')" placeholder="Subjek Bug" required autofocus autocomplete="subject" />
                    <x-input-error :messages="$errors->get('subject')"  class="w-auto"/>
                </div>

                <div class="mt-6">
                    <!-- <x-input-label for="name" :value="__('Username')" /> -->
                    <x-text-input id="description" class="block w-full" type="text" name="description" :value="old('description')" placeholder="Jelaskan bug nya seperti apa" required autofocus autocomplete="description" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>


                <!-- Email Address -->
                <div class="mt-4">
                    <!-- <x-input-label for="email" :value="__('Email')" /> -->
                    <x-text-input id="proof" class="block mt-1 w-full" type="file" name="proof" :value="old('proof')" placeholder="Kirim tangkapan layar bug nya" required autocomplete="file" />
                    <x-input-error :messages="$errors->get('proof')" class="mt-2" />
                </div>

                <div class="flex items-center justify-center flex-col mt-4">
                    <x-register-button class="h-6 text-base uppercase">
                        {{ __('KIRIM ADUAN') }}
                    </x-register-button>
                </div>
                @if(session('success'))
                <script>
                    alert('Bug report berhasil dikirim!');

                    window.location.href = "{{ route('dashboard') }}";
                </script>
                @endif
                </form>
            </div>
        </div>
    </body>
</html>
