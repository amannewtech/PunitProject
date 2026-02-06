@extends('backend.layout.main')
@section('backend-container')
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Stream</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Stream</li>
            </ul>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">

        {{-- Tabs --}}
        <ul class="nav nav-tabs mb-3" id="tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button"
                    role="tab">
                    Stream List
                </button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button"
                    role="tab">
                    Add Stream
                </button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button"
                    role="tab">
                    Edit Stream
                </button>
            </li>
        </ul>


        {{-- Tab Content Wrapper --}}
        <div class="tab-content" id="tabContent">

            {{-- List Tab --}}
            <div class="tab-pane fade show active" id="list" role="tabpanel">

                <div class="card stretch stretch-full">
                    <div class="card-header py-2">
                        <div class="card-title">Stream List</div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="streamList">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Stream</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Show Web</th>
                                        <th>Order</th>
                                        <th class="text-end">Actions</th>
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
                                                <a href="{{ route('streams.edit', $stream->id) }}"
                                                    class="avatar-text avatar-md text-info">
                                                    <i class="feather-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    {{-- <tr>
                                        <td>1</td>
                                        <td>Humanities</td>
                                        <td>humanities</td>
                                        <td>Active</td>
                                        <td>Yes</td>
                                        <td>1</td>
                                        <td class="text-end">
                                            <div class="hstack gap-2 justify-content-end">
                                                <a href="#" class="avatar-text avatar-md text-success">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                <a href="#" class="avatar-text avatar-md text-info">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a href="#" class="avatar-text avatar-md text-danger">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Add Tab --}}
            <div class="tab-pane fade" id="add" role="tabpanel">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Stream</h5>
                    </div>

                    <div class="card-body">
                        <form id="streamForm">
                            @csrf
                            <input type="hidden" id="stream_id">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Stream Name</label>
                                    <input type="text" id="name" class="form-control">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Status</label>
                                    <select id="status" class="form-select">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Show on Website</label>
                                    <select id="show_web" class="form-select">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label>Order</label>
                                    <input type="number" id="order" class="form-control">
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Save Stream
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

            {{-- Edit Tab --}}
            <div class="tab-pane fade" id="edit" role="tabpanel">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Edit Stream</h5>
                    </div>

                    <div class="card-body">
                        <p class="text-muted">
                            Select a stream from the list to edit.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- [ Main Content ] end -->
    @endsection


    @push('backend-js')
        <script>
            $(document).ready(function() {

                $('#streamList').DataTable({
                    pageLength: 10,
                    ordering: true,
                    searching: true,
                    responsive: true
                });

                // ADD / UPDATE
                $('#streamForm').on('submit', function(e) {
                    e.preventDefault();

                    let id = $('#stream_id').val();
                    let url = id ?
                        `/admin/streams/${id}` :
                        `/admin/streams`;

                    let method = id ? 'PUT' : 'POST';

                    $.ajax({
                        url: url,
                        type: method,
                        data: {
                            _token: '{{ csrf_token() }}',
                            name: $('#name').val(),
                            status: $('#status').val(),
                            show_web: $('#show_web').val(),
                            order: $('#order').val(),
                        },
                        success: function(res) {
                            alert(res.message);
                            location.reload();
                        },
                        error: function(err) {
                            alert('Validation failed');
                        }
                    });
                });

                // EDIT BUTTON CLICK
                $(document).on('click', '.edit-btn', function() {
                    let id = $(this).data('id');

                    $.get(`/admin/streams/${id}/edit`, function(data) {
                        $('#stream_id').val(data.id);
                        $('#name').val(data.name);
                        $('#status').val(data.status);
                        $('#show_web').val(data.show_web);
                        $('#order').val(data.order);

                        $('#add-tab').tab('show'); // switch tab
                    });
                });


            });
        </script>
    @endpush
