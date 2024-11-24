{{-- <x-app>

    @push('head')
        <script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
    @endpush

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div id="dae-2" class="ratio ratio-16x9">
                    <div id="flashContent" style="width:960px; height:620px; margin:0px; padding:0px;"></div>
                </div>
            </div>

        </div>
    </div>

    @push('body')
        <!-- SWFObject -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

        <!-- Client Wiki -->
        <script src="{{ asset('js') }}/client-wiki.js?{{ rand(1, 100) }}"></script>

        <script>
            $(document).ready(function() {
                var params = {
                    LOOP: "false",
                    SCALE: "exactfit",
                    allowScriptAccess: "always",
                    allowFullScreen: "true",
                    menu: "false",
                    flashvars: "&sLang=en&{!! $params !!}"
                }

                swfobject.embedSWF("{{ $loader }}", "flashContent", "960", "550", "9.0", null, null,
                    params, {
                        id: "Game",
                        name: "flashContent"
                    });
            });
        </script>
    @endpush

</x-app> --}}
