<x-register-layout>
    <div class="text-sm text-black ">
        {{ __('Terima Kasih telah mendaftar! Tolong Verifikasi Emailmu, Jika tidak ada email silahkan tekan tombol kembali!.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

                    <x-login-button class="flex place-self-center w-auto h-auto uppercase bg-[#9DFF00] px-4 py-1 font-semibold text-sm tracking-tighter">
                        {{ __('Kirim Ulang') }}
                    </x-login-button>
        </form>
{{-- 
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form> --}}
    </div>
</x-register-layout>
