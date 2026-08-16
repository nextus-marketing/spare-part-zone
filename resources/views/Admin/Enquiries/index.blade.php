@extends('layouts.admin')

@section('title')
    Enquiries
@endsection

@section('content')

<style>
    /* Improve table readability */
    #datatable td {
        vertical-align: middle;
        font-size: 14px;
    }

    /* Prevent ugly text breaking */
    .text-wrap {
        white-space: normal !important;
        word-break: break-word;
    }

    /* Message column styling */
    .message-column {
        max-width: 280px;
        white-space: normal !important;
        word-break: break-word;
        line-height: 1.4;
    }

    /* Keep long text visually clean */
    .truncate {
        max-height: 42px;
        overflow: hidden;
        display: block;
    }

    /* Buttons spacing */
    .dt-buttons .btn {
        margin-right: 6px;
        margin-bottom: 6px;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
        #datatable td {
            font-size: 12px;
        }

        .message-column {
            max-width: 180px;
        }
    }
</style>

<section>
    <div class="row">
        <div class="col-12">
            <div class="card w-100 position-relative overflow-hidden">
                <div class="card-header px-4 py-3 border-bottom">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-start">
                            <h5 class="card-title fw-semibold mb-0 lh-sm">
                                Enquiry
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="card-body p-4">
                    <div class="table-responsive rounded-2 mb-4">
                        <table class="table border table-bordered table-sm mb-0 align-middle" id="datatable">
                            <thead class="text-dark fs-3">
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="5%">Actions</th>
                                    <th width="12%">Date-Time</th>
                                    <th width="12%">Full Name</th>
                                    <th width="10%">Subject</th>
                                    <th width="14%">E-Mail</th>
                                    <th width="10%">Mobile</th>
                                    <th width="10%">IP Address</th>
                                    <th width="24%">Message</th>
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
            ajax: {
                url: '{!! route('admin.enquiries.data') !!}',
                type: 'POST',
                data: function(d) {
                    d._token = $('meta[name=csrf-token]').attr('content');
                }
            },

            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false },

                { data: 'action', name: 'enquiries.id', searchable: false },

                { data: 'datetime', name: 'enquiries.created_at', className: "text-wrap" },

                { data: 'full_name', name: 'enquiries.full_name', className: "text-wrap" },

                { data: 'subject', name: 'enquiries.subject', className: "text-wrap" },

                { data: 'email', name: 'enquiries.email', className: "text-wrap" },

                { data: 'mobile', name: 'enquiries.mobile' },

                { data: 'ip_address', name: 'enquiries.ip_address', className: "text-wrap" },

                {
                    data: 'message',
                    name: 'enquiries.message',
                    className: "message-column",
                    render: function(data) {
                        if (!data) return '—';

                        return `<div class="truncate" title="${data}">
                                    ${data}
                                </div>`;
                    }
                },
            ],

            order: [],

            columnDefs: [{
                targets: [0, 1],
                className: "text-center"
            }],
        });

        $(".buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel")
            .addClass("btn btn-primary");
    });
</script>

@endsection
