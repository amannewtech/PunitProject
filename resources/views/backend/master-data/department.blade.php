@extends('backend.layout.main')

@section('backend-container')
    <!-- ========================= PAGE HEADER ========================= -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Department</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Department</li>
            </ul>
        </div>
    </div>

    <!-- ========================= MAIN CONTENT ========================= -->
    <div class="main-content">

        <!-- ========================= TABS ========================= -->
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#list">
                    Department List
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#add">
                    Add Department
                </button>
            </li>
            <li class="nav-item" id="editTab" hidden>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit">
                    Edit Department
                </button>
            </li>
        </ul>

        <div class="tab-content">

            <!-- ========================= LIST ========================= -->
            <div class="tab-pane fade show active" id="list">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Department List</h5>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="departmentList">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Department</th>
                                        <th>Stream</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Show Web</th>
                                        <th>Order</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departments as $key => $department)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $department->department_name }}</td>
                                            <td>{{ $department->stream->name }}</td>
                                            <td>{{ $department->slug }}</td>
                                            <td>{{ $department->status ? 'Active' : 'Inactive' }}</td>
                                            <td>{{ $department->show_web ? 'Yes' : 'No' }}</td>
                                            <td>{{ $department->order }}</td>
                                            <td class="text-end">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-md viewBtn"
                                                        data-id="{{ $department->id }}">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="avatar-text avatar-md editBtn"
                                                        data-id="{{ $department->id }}">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" class="avatar-text avatar-md deleteBtn"
                                                        data-id="{{ $department->id }}">
                                                        <i class="feather-trash-2"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========================= ADD ========================= -->
            <div class="tab-pane fade" id="add">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Department</h5>
                    </div>
                    <div class="card-body">

                        <form id="addDepartmentForm">
                            @csrf

                            <div class="row">

                                <div class="col-12 mb-3">
                                    <label>Select Stream *</label>
                                    <select name="stream" class="form-select">
                                        <option value="">Select Stream...</option>
                                        @foreach ($streams as $stream)
                                            <option value="{{ $stream->id }}">{{ $stream->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger error-message" id="error_stream"></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Department Name *</label>
                                    <input type="text" name="department_name" class="form-control">
                                    <span class="text-danger error-message" id="error_department_name"></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                    <span class="text-danger error-message" id="error_description"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <span class="text-danger error-message" id="error_status"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Show Web</label>
                                    <select name="show_web" class="form-select">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <span class="text-danger error-message" id="error_show_web"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Order</label>
                                    <input type="number" name="order" class="form-control" value="0">
                                    <span class="text-danger error-message" id="error_order"></span>
                                </div>

                            </div>

                            <div class="text-end">
                                <button type="submit" id="addDepartmentBtn" class="btn btn-primary">
                                    Save Department
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

            <!-- ========================= EDIT ========================= -->
            <div class="tab-pane fade" id="edit">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Department</h5>
                    </div>
                    <div class="card-body">

                        <form id="editDepartmentForm">
                            @csrf
                            <input type="hidden" id="edit_department_id">

                            <div class="row">

                                <div class="col-12 mb-3">
                                    <label>Select Stream *</label>
                                    <select id="edit_stream" class="form-select">
                                        <option value="">Select Stream...</option>
                                        @foreach ($streams as $stream)
                                            <option value="{{ $stream->id }}">{{ $stream->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger error-message" id="editerror_stream"></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Department Name *</label>
                                    <input type="text" id="edit_department_name" class="form-control">
                                    <span class="text-danger error-message" id="editerror_department_name"></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Description</label>
                                    <textarea id="edit_description" class="form-control"></textarea>
                                    <span class="text-danger error-message" id="editerror_description"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Status</label>
                                    <select id="edit_status" class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <span class="text-danger error-message" id="editerror_status"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Show Web</label>
                                    <select id="edit_show_web" class="form-select">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <span class="text-danger error-message" id="editerror_show_web"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Order</label>
                                    <input type="number" id="edit_order" class="form-control">
                                    <span class="text-danger error-message" id="editerror_order"></span>
                                </div>

                            </div>

                            <div class="text-end">
                                <button type="button" class="btn btn-success" id="updateDepartmentBtn">
                                    Update Department
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- =========================
                                                                                                                                                                VIEW DEPARTMENT MODAL
                                                                                                                                                            ========================= -->
    <div class="modal fade custom-modal" id="viewDepartmentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header bg-info py-2">
                    <h5 class="modal-title">
                        <i class="feather-eye me-1"></i> Department Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body p-0">
                    <table class="table table-bordered table-striped mb-0">
                        <tbody>
                            <tr>
                                <th width="30%">Department Name</th>
                                <td id="viewDepartmentName"></td>
                            </tr>
                            <tr>
                                <th>Stream</th>
                                <td id="viewDepartmentStream"></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td id="viewDepartmentDescription"></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span id="viewDepartmentStatus" class="badge"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Show on Website</th>
                                <td>
                                    <span id="viewDepartmentShowWeb" class="badge"></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Order</th>
                                <td id="viewDepartmentOrder"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer py-1">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
@endsection




@push('backend-js')
    <script>
        // ===============Tab toggle Logic==================
        $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {

            let target = $(e.target).data('bs-target');

            if (target === '#list' || target === '#add') {
                $('#editTab').attr('hidden', true);
                $('#edit').removeClass('show active');
            }
        });

        $(document).ready(function() {

            /* =========================
               DATATABLE
            ========================= */
            $('#departmentList').DataTable();

            function clearErrors() {
                $('.error-message').text('');
            }

            /* =========================
               ADD Department
            ========================= */
            $('#addDepartmentForm').submit(function(e) {
                e.preventDefault();
                clearErrors();

                let $btn = $('#addDepartmentBtn');
                let originalText = $btn.html();

                // Disable button + show processing
                $btn.prop('disabled', true).html('Processing...');

                let formData = new FormData(this);

                // alert('Hello');

                $.ajax({
                    url: "{{ route('superadmin.department.store') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(res) {
                        Swal.fire("Success", res.success, "success");
                        setTimeout(() => location.reload(), 1200);
                    },

                    error: function(xhr) {
                        console.group('🚨 ADD DEPARTMENT ERROR');
                        console.log(xhr.responseText);
                        console.groupEnd();

                        if (xhr.status === 422 && xhr.responseJSON?.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                $('#error_' + key).text(value[0]);
                            });
                        }
                    },

                    complete: function() {
                        // Re-enable button
                        $btn.prop('disabled', false).html(originalText);
                    }
                });
            });


            /* =========================
               VIEW DEPARTMENT
            ========================= */
            $(document).on('click', '.viewBtn', function() {

                let id = $(this).data('id');
                let url = "{{ route('superadmin.department.show', ':id') }}".replace(':id', id);

                $.get(url)
                    .done(function(data) {

                        $('#viewDepartmentName').text(data.department_name);
                        $('#viewDepartmentStream').text(data.stream ? data.stream.name : '-');
                        $('#viewDepartmentDescription').text(data.description ?? 'N/A');
                        $('#viewDepartmentOrder').text(data.order);

                        $('#viewDepartmentStatus')
                            .text(data.status ? 'Active' : 'Inactive')
                            .attr('class', 'badge ' + (data.status ? 'bg-success' : 'bg-danger'));

                        $('#viewDepartmentShowWeb')
                            .text(data.show_web ? 'Yes' : 'No')
                            .attr('class', 'badge ' + (data.show_web ? 'bg-success' : 'bg-secondary'));

                        $('#viewDepartmentModal').modal('show');
                    })
                    .fail(function(xhr) {
                        console.error('VIEW DEPARTMENT ERROR:', xhr.responseText);
                    });
            });





            /* =========================
               EDIT Department
            ========================= */
            $(document).on('click', '.editBtn', function() {

                let id = $(this).data('id');
                let url = "{{ route('superadmin.department.edit', ':id') }}".replace(':id', id);

                $.get(url, function(data) {

                    $('#edit_department_id').val(data.id);
                    $('#edit_stream').val(data.stream_id);
                    $('#edit_department_name').val(data.department_name);
                    $('#edit_description').val(data.description);
                    $('#edit_status').val(data.status);
                    $('#edit_show_web').val(data.show_web);
                    $('#edit_order').val(data.order);

                    $('#editTab').removeAttr('hidden');
                    $('#editTab button').trigger('click');
                });

            });

            /* =========================
               UPDATE Department
            ========================= */
            $('#updateDepartmentBtn').click(function() {

                let $btn = $(this);
                let originalText = $btn.html();

                // Disable button + show processing
                $btn.prop('disabled', true).html('Processing...');

                let id = $('#edit_department_id').val();
                let url = "{{ route('superadmin.department.update', ':id') }}".replace(':id', id);

                let formData = new FormData();
                formData.append('_method', 'PUT');
                formData.append('stream_name', $('#edit_stream').val());
                formData.append('department_name', $('#edit_department_name').val());
                formData.append('description', $('#edit_description').val());
                formData.append('status', $('#edit_status').val());
                formData.append('show_web', $('#edit_show_web').val());
                formData.append('order', $('#edit_order').val());


                $.ajax({
                    url: url,
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(res) {
                        Swal.fire("Updated", res.success, "success");
                        setTimeout(() => location.reload(), 1200);
                    },

                    error: function(xhr) {
                        console.error(xhr.responseText);
                        Swal.fire('Error!', 'Update failed.', 'error');
                    },

                    complete: function() {
                        // Re-enable button
                        $btn.prop('disabled', false).html(originalText);
                    }
                });
            });


            /* =========================
               DELETE STREAM (FIXED)
            ========================= */
            $(document).on('click', '.deleteBtn', function() {

                let id = $(this).data('id');
                let url = "{{ route('superadmin.department.delete', ':id') }}".replace(':id', id);

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This Department will be permanently deleted!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    if (result.isConfirmed === true || result.value === true) {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            success: function(res) {
                                Swal.fire('Deleted!', res.success, 'success');
                                setTimeout(() => location.reload(), 800);
                            },
                            error: function(xhr) {
                                console.error(xhr.responseText);
                                Swal.fire('Error!', 'Delete failed.', 'error');
                            }
                        });
                    }
                });
            });


        });
    </script>
@endpush
