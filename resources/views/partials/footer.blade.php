@php
    $now = new \DateTime('now', new \DateTimeZone('Asia/Singapore'));
@endphp
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Work Log {{ $now->format('Y')  }}</span>
        </div>
    </div>
</footer>
