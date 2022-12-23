@extends('platform.layouts.template')
@section('toolbar')
<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        @include('platform.layouts.parts._breadcrum')
    </div>
</div>
@endsection
@section('content')
    <style>
        .paginate_button {
            padding: 5px 14px;
        }

        a.paginate_button.current {
            background: #009EF7;
            color: white;
            border-radius: 5px;
        }
    </style>
  <div id="kt_content_container" class="container-xxl">
    <div class="card">
        <div class="card-header border-0 pt-6 w-100">
            <div class="card-toolbar w-100">
                <div class="d-flex justify-content-end w-100" data-kt-coupon-table-toolbar="base">

                   @include('platform.offers.discount._filter')

                   @include('platform.layouts.parts.common._export_button')

                    <button type="button" class="btn btn-primary" onclick="return openForm('discount')">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                    rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        Add Discount
                    </button>

                </div>

            </div>

        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body py-4">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-2 mb-0 dataTable no-footer" id="discount-table">
                    <thead>
                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                            <th> Discount Name  </th>
                            <th> Start Date </th>
                            <th> End Date </th>
                            <th> Discount Value </th>
                            <th> Status </th>
                            <th style="width: 75px;">Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>

@endsection
@section('add_on_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="{{ asset('assets/js/datatable.min.js') }}"></script>
    <script >
    var dtTable = $('#discount-table').DataTable({

        processing: true,
        serverSide: true,
        type: 'POST',
        ajax: {
            "url": "{{ route('discount') }}",
            "data": function(d) {
                d.status = $('select[name=filter_status]').val();
            }
        },

        columns: [
          
            {
                data: 'discount_name',
                name: 'discount_name'
            },
          
            {
                data: 'start_date',
                name: 'start_date'
            },
            {
                data: 'end_date',
                name: 'end_date'
            },
            {
                data: 'calculate_type',
                name: 'calculate_type'
            },
            {
                data: 'status',
                name: 'status'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ],
        language: {
            paginate: {
                next: '<i class="fa fa-angle-right"></i>', // or '→'
                previous: '<i class="fa fa-angle-left"></i>' // or '←' 
            }
        },
        "aaSorting": [],
        "pageLength": 25
    });
    $('.dataTables_wrapper').addClass('position-relative');
        $('.dataTables_info').addClass('position-absolute');
        $('.dataTables_filter label input').addClass('form-control form-control-solid w-250px ps-14');
        $('.dataTables_filter').addClass('position-absolute end-0 top-0');
        $('.dataTables_length label select').addClass('form-control form-control-solid');

        $('#search-form').on('submit', function(e) {
            dtTable.draw();
            e.preventDefault();
        });
        $('#search-form').on('reset', function(e) {
            $('select[name=filter_status]').val(0).change();

            dtTable.draw();
            e.preventDefault();
        });
</script>
@endsection

