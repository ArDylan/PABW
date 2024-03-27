@extends('layouts.app')

@section('navbar', View::make('layouts.navbar.navbar-dashboard'))
@section('sidebar', View::make('layouts.navbar.sidebar'))

@section('content')
    <div>
        
    </div>

    <script>
        let inboxLettertable;
        let detailLetterTable;
        let sentLetterId;

        const onDetailButtonClick = (id) => {
            sentLetterId = id;
            detailLetterTable.draw();
        }


        $(document).ready(function() {
            inboxLettertable = $('#inbox_table').DataTable({
                processing: true,
                serverSide: true,
                retrieve: true,
                deferRender: true,
                responsive: false,
                aaSorting: [],
                buttons: [],
                language: {
                    "lengthMenu": "Show _MENU_",
                    "emptyTable": "Tidak ada data terbaru 📁",
                    "zeroRecords": "Data tidak ditemukan 😞",
                },
                dom: "<'row mb-2'" +
                    "<'col-12 col-lg-6 d-flex align-items-center justify-content-start'l B>" +
                    "<'col-12 col-lg-6 d-flex align-items-center justify-content-lg-end justify-content-start 'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-12 col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-start'i>" +
                    "<'col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end'p>" +
                    ">",
                ajax: {
                    url: "{{ route('inbox.tableInbox') }}",
                },

                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'action',
                        searchable: false,
                    },
                ],
                createdRow: function(row, data, dataIndex) {
                    const { read } = data;

                    if (!read) {
                        return $(row).css('background-color', 'rgb(255, 255, 255)');
                    } else {
                        return $(row).css('background-color', 'whitesmoke');
                    }
                },
            });

            detailLetterTable = $('#table_detail')
                .DataTable({
                    processing: true,
                    serverSide: true,
                    retrieve: true,
                    deferRender: true,
                    responsive: false,
                    aaSorting: [],
                    ajax: {
                        url: "{{ route('sent.letter-table-detail') }}",
                        data: function(data) {
                            data.id = sentLetterId
                        },
                    },
                    language: {
                        "lengthMenu": "Show _MENU_",
                        "emptyTable": "Tidak ada data terbaru 📁",
                        "zeroRecords": "Data tidak ditemukan 😞",
                    },
                    buttons: [],
                    dom: "<'row mb-2'" +
                        "<'col-12 col-lg-6 d-flex align-items-center justify-content-start'l B>" +
                        "<'col-12 col-lg-6 d-flex align-items-center justify-content-lg-end justify-content-start '>" +
                        ">" +

                        "<'table-responsive'tr>" +

                        "<'row'" +
                        "<'col-12 col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-start'i>" +
                        "<'col-12 col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-end'p>" +
                        ">",

                    columns: [{
                            data: 'DT_RowIndex',
                            searchable: false,
                        },
                        {
                            data: "name"
                        },
                        {
                            data: "role"
                        },
                        {
                            data: "action",
                            searchable: false,
                        },
                    ],
                    columnDefs: [{
                        targets: [0],
                        className: 'text-center',
                    }],
                });
        });
    </script>
@endsection
