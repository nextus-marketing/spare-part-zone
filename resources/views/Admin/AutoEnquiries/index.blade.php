@extends('layouts.admin')
@section('title')
    Auto Parts Enquiry
@endsection

@section('content')

<style>
    /* Improve table layout */
    #datatable {
        table-layout: fixed;
        width: 100%;
    }

    #datatable td {
        vertical-align: middle;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Allow wrapping only where needed */
    .wrap-text {
        white-space: normal !important;
        word-break: break-word;
        line-height: 1.4;
    }

    /* Column specific styling */
    .notes-column {
        max-width: 260px;
        white-space: normal !important;
        word-break: break-word;
    }

    .vin-column {
        max-width: 160px;
    }

    .email-column {
        max-width: 180px;
    }

    .name-column {
        max-width: 140px;
    }

    .model-column {
        max-width: 140px;
    }

    .part-column {
        max-width: 160px;
    }

    /* Buttons spacing */
    .dt-buttons .btn {
        margin-right: 6px;
        margin-bottom: 6px;
    }

    /* Mobile optimization */
    @media (max-width: 768px) {
        #datatable td {
            font-size: 12px;
        }
    }
</style>

<section>
    <div class="row">
        <div class="col-12">
            <div class="card w-100 position-relative overflow-hidden">
                
                <div class="card-header px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 lh-sm">
                        Auto Parts Enquiry
                    </h5>
                </div>

                <div class="card-body p-4">
                    <div class="table-responsive rounded-2 mb-4">

                        <table class="table border table-bordered table-sm mb-0 align-middle" id="datatable">
                            <thead class="text-dark fs-3">
                                <tr>
                                    <th width="50">#</th>
                                    <th width="90">Actions</th>
                                    <th width="140">Date-Time</th>
                                    <th width="140">Full Name</th>
                                    <th width="180">E-Mail</th>
                                    <th width="110">Mobile</th>
                                    <th width="90">Zip Code</th>
                                    <th width="140">Vehicle Model</th>
                                    <th width="90">Vehicle Year</th>
                                    <th width="160">Part Name</th>
                                    <th width="120">Make</th>
                                    <th width="160">VIN</th>
                                    <th width="140">Purchase Planning</th>
                                    <th width="130">Enquiry Type</th>
                                    <th width="130">IP Address</th>
                                    <th width="260">Notes</th>
                                </tr>
                            </thead>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
$(function() {

    var dataTable = $('#datatable').DataTable({
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"],
        processing: true,
        serverSide: true,

        /* ✅ CRITICAL FIX */
        scrollX: true,
        scrollCollapse: true,

        ajax: {
            url: '{!! route('admin.auto_enquiries.data') !!}',
            type: 'POST',
            data: function(d) {
                d._token = $('meta[name=csrf-token]').attr('content');
            }
        },

        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false },

            { data: 'action', name: 'auto_enquiries.id', searchable: false },

            { data: 'datetime', name: 'auto_enquiries.created_at' },

            { 
                data: 'full_name', 
                name: 'auto_enquiries.full_name',
                className: "name-column"
            },

            { 
                data: 'email', 
                name: 'auto_enquiries.email',
                className: "email-column"
            },

            { data: 'mobile', name: 'auto_enquiries.mobile' },

            { data: 'zip', name: 'auto_enquiries.zip' },

            { 
                data: 'vehicle_model', 
                name: 'auto_enquiries.vehicle_model',
                className: "model-column"
            },

            { data: 'vehicle_year', name: 'auto_enquiries.vehicle_year' },

            { 
                data: 'part_name', 
                name: 'auto_enquiries.part_name',
                className: "part-column"
            },

            { data: 'make', name: 'auto_enquiries.make' },

            { 
                data: 'vin', 
                name: 'auto_enquiries.vin',
                className: "vin-column"
            },

            { data: 'purchase_time', name: 'auto_enquiries.purchase_time' },

            

            { data: 'form_name', name: 'auto_enquiries.form_name' },

            { data: 'ip_address', name: 'auto_enquiries.ip_address' },

            { 
                data: 'notes', 
                name: 'auto_enquiries.notes',
                className: "notes-column wrap-text",
                render: function(data, type, row) {
                    if (!data) return 'NA';

                    return '<span title="' + data + '">' + data + '</span>';
                }
            },
        ],

        order: [],

        columnDefs: [
            {
                targets: [0, 1],
                className: "text-center"
            }
        ]
    });

    $(".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel")
        .addClass("btn btn-primary");

});
</script>

@endsection
