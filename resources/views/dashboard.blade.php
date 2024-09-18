<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Vite') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto bg-white p-4 rounded-lg">
        <h1>Form Validation with Jquery</h1>

        <div id="validation_message" class="alert alert-danger hide" role="alert">
            Ralat. Sila betulkan kembali form anda dan submit balik.
        </div>

        <form id="myform" action="https://learnjs.test" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" />

                <p id="nama_error" class="text-danger"></p>
            </div>

            <div class="mb-3">
                <label for="emel" class="form-label">Emel</label>
                <input type="text" class="form-control" name="emel" id="emel" />

                <p id="emel_error" class="text-danger"></p>
            </div>

            <div class="mb-3">
                <label for="umur" class="form-label">Umur (min 18)</label>
                <input type="text" class="form-control" name="umur" id="umur" />

                <p id="umur_error" class="text-danger"></p>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username (Alpha numeric)</label>
                <input type="text" class="form-control" name="username" id="username" />

                <p id="username_error" class="text-danger"></p>
            </div>

            <button type="submit" class="bg-gray-800 text-white p-2 rounded">Hantar</button>
        </form>
    </div>
</x-app-layout>

<script type="module">
    $("#myform").submit(function(event) {
        event.preventDefault();

        submitAjax();
    });

    function submitAjax() {

        var nama = $("#nama").val();
        var emel = $("#emel").val();
        var umur = $("#umur").val();
        var username = $("#username").val();

        let payload = {
            nama: nama,
            emel: emel,
            umur: umur,
            username: username,
            _token: '{{ csrf_token() }}'
        }

        $.ajax({
            url: '{{ route('ajax.submitform') }}', // Laravel route URL
            method: 'POST',
            data: payload,
            success: function(response) {
                alert('Form submitted successfully!');
                console.log(response);
            },
            error: function(xhr) {
                alert('An error occurred while submitting the form');
                console.error(xhr.responseText);
            }
        });


    }
</script>
