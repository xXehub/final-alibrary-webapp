{{-- <x-app>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Item
                        </h5>
    
                        <div class="border-bottom my-4"></div>

                        <table id="list" class="table table-striped w-100"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('body')
        <script>
            $(document).ready(function() {

                function decodeHtml(html) {
                    var txt = document.createElement("textarea");
                    txt.innerHTML = html;

                    return txt.value;
                }

                function pointsToRank(points) {
                    if (points >= 302500) return 10;
                    if (points >= 202500) return 9;
                    if (points >= 129600) return 8;
                    if (points >= 78400) return 7;
                    if (points >= 44100) return 6;
                    if (points >= 22500) return 5;
                    if (points >= 10000) return 4;
                    if (points >= 3600) return 3;
                    if (points >= 900) return 2;
                    if (points >= 0) return 1;
                }

                let url = {
                    item: "{{ route('wiki.item.show', ':id') }}",
                };

                $("#list").DataTable({
                    processing: true,
                    serverSide: true,
                    autoWidth: false,
                    pageLength: 10,
                    ajax: "{{ route('api.wiki.item.index') }}",
                    columns: [{
                        "width": "1%",
                        "title": "Action",
                        "data": null,
                        "render": function(data, type, row) {
                            return `<a href="` + url.item.replace(':id', row.id) +
                                `" target="_blank"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button></a>`;
                        },
                        "searchable": false,
                        "orderable": false
                    }, {
                        "title": "Name",
                        "data": "Name",
                        "render": function(data, row, full) {
                            // var strColor = full.Color;
                            var strColor = '000000';
                            if (full.Upgrade) {
                                strColor = '0000EE';
                            }
                            if (full.Coins) {
                                strColor = 'd07000';
                            }
                            // if (full.Color != 'FFFFFF') {
                            //     strColor = full.Color;
                            // }
                            var strName =
                                `<img class=\"me-2\" src=\"/images/icons/ii${full.Type}.png\" alt=\"${full.Type}\" width="20" height="20" onerror='this.src=\"/images/icons/iiItem.png\"'> <font color='#${strColor}'>${decodeHtml(full.Name)}</font>`;

                            return strName;
                        },
                    }, {
                        "title": "Type",
                        "data": "Type",
                        "className": "align-middle",
                    }, {
                        "title": 'Rarity',
                        "data": 'rarity',
                        "render": function(data, row, full) {
                            var strName = (data) ? data : 'Unknown';
                            return strName;
                        }
                    }],
                });
            });
        </script>
    @endpush

</x-app> --}}
