<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/fontawesome-free/all.min.js')}}"></script>
<script src="{{asset('assets/js/sweetlaert2/sweetalert2.min.js')}}"></script>

<script>
    const base_url = "{{ url('/') }}"
    const token = document.getElementsByName("csrf_token")[0].getAttribute('content')
    function showLoading() {
        swal.fire({
            title: "Loading...",
            allowEscapeKey: false,
            allowOutsideClick: false,
            didOpen: () => {
                swal.showLoading();
            }
        });
    }
    function hideLoading() {
        Swal.close();
    }
</script>
