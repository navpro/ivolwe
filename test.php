<!DOCTYPE html>

<html>

<body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<p>Example Alert use closeOnClickOutside</p>



<button onclick="run()">Run</button>

<script>

    function run() {

        swal("Can't close modal when click outside modal",{

            closeOnClickOutside: false,

        });

    }

</script>

</body>

</html>