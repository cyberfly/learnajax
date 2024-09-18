<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books Search') }}
        </h2>
    </x-slot>

    <div class="container mx-auto bg-white p-4 rounded-lg mt-4">
        <form action="/" id="bookSearchForm">

            <input type="text" name="search_query" id="search_query" placeholder="Book title">

            <button type="submit" class="bg-gray-800 text-white rounded p-2">Search</button>

        </form>

        <div id="search_results" class="mt-4">
            
        </div>
        
    </div>
</x-app-layout>

<script type="module">
    $("#bookSearchForm").submit(function(event) {
        event.preventDefault();

        ajaxSearch();
    });

    function ajaxSearch() {
        var search_query = $("#search_query").val();

        let payload = {
            search_query: search_query,
            _token: '{{ csrf_token() }}'
        }

        $.ajax({
            url: '{{ route('books.search') }}',
            method: 'GET',
            data: payload,
            success: function(response) {

                console.log(response);

                $("#search_results").html(response);
            },
            error: function(xhr) {

                var error_response = JSON.parse(xhr.responseText);


            }
        });
    }
</script>
