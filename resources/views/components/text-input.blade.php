@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-black border-2 700 text-black focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-full shadow-sm']) }}>
