<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>

{{-- Remove the Cookie using JS --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.cookie = 'todo=' + JSON.stringify({{ $todo }}) + '; path=/;';
    });

    window.addEventListener('unload', function() {
        document.cookie = 'todo=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    });
</script>

@stack('child-script')
