{{-- <x-app>

    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="text-center">
                    <img src="https://account.aq.com/images/aqw/gfx-char-boom.png" class="img-fluid" alt="...">
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-body">
                    <form id="form">
                        <div class="mb-3">
                            <x-input-label for="name" :value="__('Character Name')" />
                            <x-text-input class="block w-full" id="name" type="text" name="name"
                                :value="old('name', 'Zueira')" :messages="$errors->get('name')" required autofocus autocomplete="name" />
                        </div>
                        <button id="search" class="btn btn-primary" type="submit">
                            Find
                            <i class="fa-solid fa-magnifying-glass ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    @push('body')
        <script type="text/javascript">
            $(document).ready(function() {
                let url = "{{ route('char.show', ':id') }}";

                $("#search").click(function(e) {
                    e.preventDefault();
                    var username = $("#name").val();
                    if (username) window.open(url.replace(':id', username));
                    else toastr.error("Enter the character name.");
                });
            });
        </script>
    @endpush

</x-app> --}}
