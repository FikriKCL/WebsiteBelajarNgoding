@props(['user'])
<div class="mt-16 w-80 mx-auto bg-white rounded-3xl border-2 border-black shadow-[4px_6px_0_#000] p-6">

    {{-- Profile Icon --}}
    <div class="w-28 h-28 mx-auto mb-4 flex items-center justify-center
                border-2 border-black rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 16 16" class="w-16 h-16 text-[#35401B]">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
            <path d="M14 14s-1-4-6-4-6 4-6 4 1 2 6 2 6-2 6-2Z"/>
        </svg>
    </div>

    {{-- Name --}}
    <div class="bg-white rounded-full border-2 border-black shadow-[3px_4px_0_#777]
                text-center py-2 mb-3 text-xl font-semibold">
        {{ $user->name }}
    </div>

    {{-- Email --}}
    <div class="bg-white rounded-full border-2 border-black shadow-[3px_4px_0_#777]
                text-center py-2 mb-6 text-sm">
        {{ $user->email }}
    </div>

    {{-- Edit Button --}}
    @if(auth()->check() && auth()->id() === $user->id)
        <button onclick="window.location.href='{{ route('profile.edit', $user->username) }}'"
            class="w-full bg-[#9DFF00] border-2 border-black rounded-full shadow-[3px_4px_0_#777] py-2 text-lg font-semibold">
            Edit?
        </button>
    @endif
</div>