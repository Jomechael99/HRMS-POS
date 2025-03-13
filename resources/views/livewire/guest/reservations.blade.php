<div class="py-16 text-center">
    <h1 class="text-4xl font-bold text-blue-600">Reservations</h1>
    <p class="text-gray-700 mt-4">Book your stay with us today.</p>
    <a
        @if(Auth::check())
            href="{{ route('reservation.create') }}"
        @else
            href="{{ route('login') }}"
        @endif
        class="mt-4 inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-blue-700">
    Reservations
    </a>
</div>
