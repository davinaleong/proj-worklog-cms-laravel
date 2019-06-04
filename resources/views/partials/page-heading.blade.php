@php
    $now = new \DateTime('now', new \DateTimeZone('Asia/Singapore'));
@endphp
<h1 class="h3 mb-4 text-gray-800">Today: {{ $now->format('d M Y') }}</h1>
