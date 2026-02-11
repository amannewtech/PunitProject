@extends('backend.layout.main')

@section('backend-container')
    <!-- ========================= PAGE HEADER ========================= -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Blood Group</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Blood Group</li>
            </ul>
        </div>
    </div>

    <!-- ========================= MAIN CONTENT ========================= -->
    <div class="main-content">

        <!-- ========================= TABS ========================= -->
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#list">
                    Blood Group List
                </button>
            </li>
            {{-- <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#add">
                    Add Employee Type
                </button>
            </li>
            <li class="nav-item" id="editTab" hidden>
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit">
                    Edit Employee Type
                </button>
            </li> --}}
        </ul>

        <div class="tab-content">

            <!-- ========================= LIST ========================= -->
            <div class="tab-pane fade show active" id="list">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Blood Group List</h5>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="employeeTypeList">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Blood Group</th>
                                        {{-- <th class="text-end">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blood_groups as $key => $blood_group)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $blood_group->blood_group }}</td>


                                            {{-- <td class="text-end">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="javascript:void(0);"
                                                        class="avatar-text avatar-md viewBtn btn-success"
                                                        data-id="{{ $designation->id }}">
                                                        <i class="feather-eye"></i>
                                                    </a>
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
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection




@push('backend-js')
@endpush
