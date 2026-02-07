@extends('backend.layout.main')

@section('backend-container')
    <!-- =========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                             PAGE HEADER
                                                                                                                                                                                                                                                                                                                                                                                                                                                        ========================= -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Stream</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Stream</li>
            </ul>
        </div>
    </div>

    <!-- =========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                             MAIN CONTENT
                                                                                                                                                                                                                                                                                                                                                                                                                                                        ========================= -->
    <div class="main-content">

        <!-- =========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                 TABS
                                                                                                                                                                                                                                                                                                                                                                                                                                                            ========================= -->
        <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#list">
                    Stream List
                </button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#add">
                    Add Stream
                </button>
            </li>

            <li class="nav-item" id="editTab" hidden>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit">
                    Edit Stream
                </button>
            </li>
        </ul>

        <div class="tab-content">

            <!-- =========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                     STREAM LIST TAB
                                                                                                                                                                                                                                                                                                                                                                                                                                                                ========================= -->
            <div class="tab-pane fade show active" id="list">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Stream List</h5>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="streamList">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Stream Name</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Show Web</th>
                                        <th>Order</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($streams as $key => $stream)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $stream->name }}</td>
                                            <td>{{ $stream->slug }}</td>
                                            <td>{{ $stream->status ? 'Active' : 'Inactive' }}</td>
                                            <td>{{ $stream->show_web ? 'Yes' : 'No' }}</td>
                                            <td>{{ $stream->order }}</td>
                                            <td class="text-end">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="javascript:void(0);"
                                                        class="avatar-text avatar-md viewBtn btn-success"
                                                        data-id="{{ $stream->id }}">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        class="avatar-text avatar-md editBtn btn-primary"
                                                        data-id="{{ $stream->id }}">
                                                        <i class="feather-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);"
                                                        class="avatar-text avatar-md deleteBtn btn-danger"
                                                        data-id="{{ $stream->id }}">
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

            <!-- =========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ADD STREAM TAB
                                                                                                                                                                                                                                                                                                                                                                                                                                                                ========================= -->
            <div class="tab-pane fade" id="add">

                <div class="card">
                    <div class="card-header">
                        <h5>Add Stream</h5>
                    </div>

                    <div class="card-body">
                        <form id="addStreamForm" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <!-- Stream Name -->
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Stream Name *</label>
                                    <input type="text" name="stream_name" class="form-control">
                                    <span class="text-danger error-message" id="error_stream_name"></span>
                                </div>

                                <!-- Description -->
                                <div class="col-md-12 mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3"></textarea>
                                    <span class="text-danger error-message" id="error_description"></span>
                                </div>

                                <!-- Stream Icon -->
                                <div class="col-md-12 mb-3">
                                    <label>Stream Icon</label>
                                    <input type="file" name="stream_icon" class="form-control" accept="image/*">
                                    <span class="text-danger error-message" id="error_stream_icon"></span>

                                </div>

                                <!-- Status -->
                                <div class="col-md-4 mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <span class="text-danger error-message" id="error_status"></span>
                                </div>

                                <!-- Show Web -->
                                <div class="col-md-4 mb-3">
                                    <label>Show on Website</label>
                                    <select name="show_web" class="form-select">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <span class="text-danger error-message" id="error_show_web"></span>
                                </div>

                                <!-- Order -->
                                <div class="col-md-4 mb-3">
                                    <label>Order</label>
                                    <input type="number" name="order" class="form-control" value="0">
                                    <span class="text-danger error-message" id="error_order"></span>
                                </div>

                            </div>

                            <div class="text-end">
                                <button type="submit" id="addStreamBtn" class="btn btn-primary">Save Stream</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <!-- =========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                     EDIT STREAM TAB
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   ========================= -->
            <div class="tab-pane fade" id="edit">

                <div class="card">
                    <div class="card-header">
                        <h5>Edit Stream</h5>
                    </div>

                    <div class="card-body">
                        <form id="editStreamForm" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="edit_stream_id">

                            <div class="row">

                                <!-- Stream Name -->
                                <div class="col-md-12 mb-3">
                                    <label>Stream Name *</label>
                                    <input type="text" id="edit_stream_name" class="form-control">
                                    <span class="text-danger error-message" id="editerror_stream_name"></span>
                                </div>

                                <!-- Description -->
                                <div class="col-md-12 mb-3">
                                    <label>Description</label>
                                    <textarea id="edit_description" class="form-control" rows="3"></textarea>
                                    <span class="text-danger error-message" id="editerror_description"></span>
                                </div>

                                <!-- Stream Icon -->
                                <div class="col-md-12 mb-3">
                                    <label>Stream Icon</label>
                                    <input type="file" id="edit_stream_icon" class="form-control">
                                    <span class="text-danger error-message" id="editerror_stream_icon"></span>
                                    <!-- Existing Stream Icon Preview -->
                                    <div id="existingIconWrapper" class="mt-2" style="display:none;">
                                        <div class="d-flex align-items-center gap-2">
                                            <img id="existingStreamIcon" src="" class="img-thumbnail"
                                                style="max-width:120px;">
                                            <button type="button" class="btn btn-sm btn-danger"
                                                id="deleteStreamIconBtn">
                                                <i class="feather-trash-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-4 mb-3">
                                    <label>Status</label>
                                    <select id="edit_status" class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <span class="text-danger error-message" id="editerror_status"></span>
                                </div>

                                <!-- Show Web -->
                                <div class="col-md-4 mb-3">
                                    <label>Show on Website</label>
                                    <select id="edit_show_web" class="form-select">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <span class="text-danger error-message" id="editerror_show_web"></span>
                                </div>

                                <!-- Order -->
                                <div class="col-md-4 mb-3">
                                    <label>Order</label>
                                    <input type="number" id="edit_order" class="form-control">
                                    <span class="text-danger error-message" id="editerror_order"></span>
                                </div>

                            </div>

                            <div class="text-end">
                                <button type="button" class="btn btn-success" id="updateStreamBtn">
                                    Update Stream
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade custom-modal" id="viewStreamModal" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header bg-info py-2">
                        <h5 class="modal-title">
                            <i class="feather-eye me-1"></i> Stream Details
                        </h5>
                        <button type="button" class="btn-close txt-danger" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body p-0">
                        <table class="table table-bordered table-striped mb-0">
                            <tbody>
                                <tr>
                                    <th width="30%">Name</th>
                                    <td id="viewStreamName"></td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td id="viewStreamDescription"></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span id="viewStreamStatus" class="badge"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Show on Website</th>
                                    <td>
                                        <span id="viewStreamShowWeb" class="badge"></span>
                                    </td>
                                </tr>
                                <tr id="iconRow" class="d-none">
                                    <th>Stream Icon</th>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img id="viewStreamIcon" class="img-thumbnail" style="max-width:80px">

                                            <a id="viewIconBtn" href="javascript:void(0)" target="_blank"
                                                class="btn btn-sm btn-outline-primary">
                                                <i class="feather-eye"></i>
                                            </a>

                                            <a id="downloadIconBtn" href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-success">
                                                <i class="feather-download"></i>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-footer py-1">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection



@push('backend-js')
    <script>
        $(document).ready(function() {

            /* =========================
               DATATABLE
            ========================= */
            $('#streamList').DataTable();

            function clearErrors() {
                $('.error-message').text('');
            }

            /* =========================
               ADD STREAM
            ========================= */
            $('#addStreamForm').submit(function(e) {
                e.preventDefault();
                clearErrors();

                let $btn = $('#addStreamBtn');
                let originalText = $btn.html();

                // Disable button + show processing
                $btn.prop('disabled', true).html('Processing...');

                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('superadmin.stream.store') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(res) {
                        Swal.fire("Success", res.success, "success");
                        setTimeout(() => location.reload(), 1200);
                    },

                    error: function(xhr) {
                        console.group('🚨 ADD STREAM ERROR');
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
               VIEW STREAM
            ========================= */
            $(document).on('click', '.viewBtn', function() {

                let id = $(this).data('id');
                let url = "{{ route('superadmin.stream.show', ':id') }}".replace(':id', id);

                $.get(url).done(function(data) {

                        $('#viewStreamName').text(data.name);
                        $('#viewStreamDescription').text(data.description ?? 'N/A');

                        $('#viewStreamStatus')
                            .text(data.status ? 'Active' : 'Inactive')
                            .attr('class', 'badge ' + (data.status ? 'bg-success' : 'bg-danger'));

                        $('#viewStreamShowWeb')
                            .text(data.show_web ? 'Yes' : 'No')
                            .attr('class', 'badge ' + (data.show_web ? 'bg-success' : 'bg-secondary'));

                        // ===== ICON HANDLING (FIXED PATH) =====
                        if (data.icon) {

                            let iconUrl = "{{ asset('uploads/stream') }}/" + data.icon;

                            $('#iconRow').removeClass('d-none');

                            $('#viewStreamIcon').attr('src', iconUrl);

                            $('#viewIconBtn')
                                .attr('href', iconUrl)
                                .attr('target', '_blank');

                            $('#downloadIconBtn')
                                .attr('href', iconUrl)
                                .attr('download', data.icon);

                        } else {
                            $('#iconRow').addClass('d-none');
                        }


                        $('#viewStreamModal').modal('show');
                    })
                    .fail(function(xhr) {
                        console.error('VIEW STREAM ERROR:', xhr.responseText);
                    });
            });




            /* =========================
               EDIT STREAM
            ========================= */
            $(document).on('click', '.editBtn', function() {

                let id = $(this).data('id');
                let url = "{{ route('superadmin.stream.edit', ':id') }}".replace(':id', id);

                $.get(url, function(data) {

                    $('#edit_stream_id').val(data.id);
                    $('#edit_stream_name').val(data.name);
                    $('#edit_description').val(data.description);
                    $('#edit_status').val(data.status);
                    $('#edit_show_web').val(data.show_web);
                    $('#edit_order').val(data.order);

                    // ICON PREVIEW
                    if (data.icon) {
                        $('#existingStreamIcon').attr(
                            'src',
                            "{{ asset('uploads/stream') }}/" + data.icon
                        );
                        $('#existingIconWrapper').show();
                    } else {
                        $('#existingIconWrapper').hide();
                    }

                    $('#editTab').removeAttr('hidden');
                    $('#editTab button').trigger('click');
                });

            });

            /* =========================
               UPDATE STREAM
            ========================= */
            $('#updateStreamBtn').click(function() {

                let $btn = $(this);
                let originalText = $btn.html();

                // Disable button + show processing
                $btn.prop('disabled', true).html('Processing...');

                let id = $('#edit_stream_id').val();
                let url = "{{ route('superadmin.stream.update', ':id') }}".replace(':id', id);

                let formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('_method', 'PUT');
                formData.append('stream_name', $('#edit_stream_name').val());
                formData.append('description', $('#edit_description').val());
                formData.append('status', $('#edit_status').val());
                formData.append('show_web', $('#edit_show_web').val());
                formData.append('order', $('#edit_order').val());

                let icon = $('#edit_stream_icon')[0].files[0];
                if (icon) formData.append('stream_icon', icon);

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
                let url = "{{ route('superadmin.stream.delete', ':id') }}".replace(':id', id);

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This stream will be permanently deleted!',
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

            /* =========================
            DELETE STREAM ICON
            ========================= */
            $(document).on('click', '#deleteStreamIconBtn', function() {

                let streamId = $('#edit_stream_id').val();
                let url = "{{ route('superadmin.stream.icon.delete', ':id') }}"
                    .replace(':id', streamId);

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This icon will be permanently deleted!',
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
                                $('#existingIconWrapper').fadeOut();
                            },

                            error: function(xhr) {
                                console.error(xhr.responseText);
                                Swal.fire('Error!', 'Icon delete failed.', 'error');
                            }
                        });
                    }
                });
            });


        });
    </script>
@endpush
