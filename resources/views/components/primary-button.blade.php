<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button ml-3']) }}>
    {{ $slot }}
</button>
