@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-400',
        'danger' => 'bg-red-400',
        'warning' => 'bg-yellow-400',
    ]
])
<!-- <section class="{{$colors[$type]}} p-4">
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>
        <button>&times;</button>
    </div>
</section> -->

<!-- for the custom styling we can accesspt the attributes -->
<section {{ $attributes->merge(['class'=> "{$colors[$type]} p-4"]) }}>
    <div class="flex justify-between">
        <p>
            {{ $slot }}
        </p>
        <button>&times;</button>
    </div>
</section>