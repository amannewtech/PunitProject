@extends('backend.layout.main')

@section('backend-container')
    <!-- ========================= PAGE HEADER ========================= -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Designation</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Designation</li>
            </ul>
        </div>
    </div>

    <!-- ========================= MAIN CONTENT ========================= -->
    <div class="main-content">

        <!-- ========================= TABS ========================= -->
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#list">
                    Designation List
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#add">
                    Add Designation
                </button>
            </li>
            <li class="nav-item" id="editTab" hidden>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit">
                    Edit Designation
                </button>
            </li>
        </ul>

        <div class="tab-content">

            <!-- ========================= LIST ========================= -->
            <div class="tab-pane fade show active" id="list">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Designation List</h5>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="designationList">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Designation Name</th>
                                        <th>User Type</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($designations as $key => $designation)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $designation->designation_name }}</td>
                                            <td>{{ $designation->user_type_label }}</td>
                                            <td>{{ $designation->status ? 'Active' : 'Inactive' }}</td>

                                            <td class="text-end">
                                                <div class="hstack gap-2 justify-content-end">
                                                    {{-- <a href="javascript:void(0);"
                                                        class="avatar-text avatar-md viewBtn btn-success"
                                                        data-id="{{ $designation->id }}">
                                                        <i class="feather-eye"></i>
                                                    </a> --}}
                                                    <a href="javascript:void(0);"
                                                        class="avatar-text avatar-md editBtn btn-primary"
                                                        data-id="{{ $designation->id }}">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        class="avatar-text avatar-md deleteBtn btn-danger"
                                                        data-id="{{ $designation->id }}">
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
                        <h5>Add Designation</h5>
                    </div>
                    <div class="card-body">

                        <form id="addDesignationForm">
                            @csrf

                            <div class="row">

                                <div class="col-12 mb-3">
                                    <label>Select User Type *</label>
                                    <select name="user_type" class="form-select">
                                        <option value="">Select User Type</option>
                                        <option value="3">Teaching</option>
                                        <option value="4">Non-teaching</option>

                                    </select>
                                    <span class="text-danger error-message" id="error_user_type"></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Designation Name *</label>
                                    <input type="text" name="designation_name" class="form-control">
                                    <span class="text-danger error-message" id="error_designation_name"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <span class="text-danger error-message" id="error_status"></span>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" id="addDesignationBtn" class="btn btn-primary">
                                    Save Designation
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
                        <h5>Edit Designation</h5>
                    </div>
                    <div class="card-body">

                        <form id="editDesignationForm">
                            @csrf
                            <input type="hidden" id="edit_designation_id">

                            <div class="row">

                                <div class="col-12 mb-3">
                                    <label>Select User Type*</label>
                                    <select id="edit_user_type" class="form-select">
                                        <option value="">Select User Type</option>
                                        <option value="3">Teaching</option>
                                        <option value="4">Non-teaching</option>
                                    </select>
                                    <span class="text-danger error-message" id="editerror_user_type"></span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label>Designation Name *</label>
                                    <input type="text" id="edit_designation_name" class="form-control">
                                    <span class="text-danger error-message" id="editerror_designation_name"></span>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Status</label>
                                    <select id="edit_status" class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <span class="text-danger error-message" id="editerror_status"></span>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="button" class="btn btn-success" id="updateDesignationBtn">
                                    Update Designation
                                </button>
                            </div>

                        </form>

                    </div>
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


        //============================
        $(document).ready(function() {

            /* =========================
               DATATABLE
            ========================= */
            $('#designationList').DataTable();

            function clearErrors() {
                $('.error-message').text('');
            }

            /* =========================
               ADD Designation
            ========================= */
            $('#addDesignationForm').submit(function(e) {
                e.preventDefault();
                clearErrors();

                let $btn = $('#addDesignationBtn');
                let originalText = $btn.html();

                // Disable button + show processing
                $btn.prop('disabled', true).html('Processing...');

                let formData = new FormData(this);

                // alert('Hello');

                $.ajax({
                    url: "{{ route('superadmin.designation.store') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(res) {
                        Swal.fire("Success", res.success, "success");
                        setTimeout(() => location.reload(), 1200);
                    },

                    error: function(xhr) {
                        console.group('🚨 ADD DESIGNATION ERROR');
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
               EDIT Designation
            ========================= */
            $(document).on('click', '.editBtn', function() {

                let id = $(this).data('id');
                let url = "{{ route('superadmin.designation.edit', ':id') }}".replace(':id', id);

                $.get(url, function(data) {

                    $('#edit_designation_id').val(data.id);
                    $('#edit_user_type').val(data.user_type);
                    $('#edit_designation_name').val(data.designation_name);
                    $('#edit_status').val(data.status);
                    $('#editTab').removeAttr('hidden');
                    $('#editTab button').trigger('click');
                });

            });

            /* =========================
               UPDATE Designation
            ========================= */
            $('#updateDesignationBtn').click(function() {

                let $btn = $(this);
                let originalText = $btn.html();

                // Disable button + show processing
                $btn.prop('disabled', true).html('Processing...');

                let id = $('#edit_designation_id').val();
                let url = "{{ route('superadmin.designation.update', ':id') }}".replace(':id', id);

                let formData = new FormData();
                formData.append('_method', 'PUT');
                formData.append('user_type', $('#edit_user_type').val());
                formData.append('designation_name', $('#edit_designation_name').val());

                formData.append('status', $('#edit_status').val());


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
               DELETE DESIGNATION
            ========================= */
            $(document).on('click', '.deleteBtn', function() {

                let id = $(this).data('id');
                let url = "{{ route('superadmin.designation.delete', ':id') }}".replace(':id', id);

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This designation will be permanently deleted!',
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
