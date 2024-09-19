<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books Search') }}
        </h2>
    </x-slot>

    <div class="container mx-auto bg-white p-4 rounded-lg mt-4">

        <form action="/" id="dropdownExampleForm">

            <label for="negeri" class="block mb-4">Negeri</label>
            <select name="negeri" id="negeri" class="form-control">
                <option value="">Pilih Negeri</option>

                @foreach ($negeris as $negeri)
                    <option value="{{ $negeri->id }}">{{ $negeri->nama }}</option>
                @endforeach
            </select>

            <label for="daerah" class="block mt-4 mb-4">Daerah</label>
            <select name="daerah" id="daerah" class="form-control">
                <option value="">Pilih Daerah</option>
            </select>
        </form>

    </div>
</x-app-layout>

<script type="module">
    // write change event for negeri here

    $("#negeri").change(function() {
        ajaxSearchDaerah();
    });

    function ajaxSearchDaerah() {

        var negeri_id = $("#negeri").val();

        let payload = {
            negeri_id: negeri_id,
            _token: '{{ csrf_token() }}'
        }

        $.ajax({
            url: '{{ route('forms.search_daerah') }}',
            method: 'GET',
            data: payload,
            success: function(response) {

                // console.log(response);

                // set option html into daerah select
                $("#daerah").html(response);
            },
            error: function(xhr) {

                var error_response = JSON.parse(xhr.responseText);


            }
        });
    }
</script>
