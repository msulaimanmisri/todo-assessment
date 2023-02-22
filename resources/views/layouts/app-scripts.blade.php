<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

{{-- Clear session using JS --}}
<script>
    window.addEventListener('beforeunload', function() {
        // Delete all data
        $.get('{{ route('session.delete.data') }}').done(function(response) {
            console.log(response.message);
        }).fail(function(error) {
            console.log(error);
        });

        // Remove Session
        $.post('{{ route('session.delete') }}').done(function(response) {
            console.log(response.message);
        }).fail(function(error) {
            console.log(error);
        });
    });
</script>


@stack('child-script')
