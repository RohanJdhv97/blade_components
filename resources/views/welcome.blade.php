{{-- @extends('layout')

@section('contents')
    <h1>Welcome</h1>
    <p>This is the welcome page.</p>
@endsection --}}

<!-- <x-layout>
    <x-section>
        <h1>Welcome</h1>
        <p>This is the welcome page.</p>
    </x-section>
    <x-section>
        <h1>Section 2</h1>
        <p>This is section 2.</p>
    </x-section>
    <x-section>
        <h1>Section 3</h1>
        <p>This is section 3.</p>
    </x-section>
</x-layout> -->
<x-layout>
    <x-section>
        <h1>Welcome</h1>
        <p>This is the welcome page.</p>
    </x-section>

    <x-flash type="warning">You are logged in...</x-flash>

    <x-flash class="mt-4" type="success">You are logged in...</x-flash>
</x-layout>