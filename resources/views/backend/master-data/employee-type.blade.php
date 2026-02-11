@extends('backend.layout.main')

@section('backend-container')
    <!-- ========================= PAGE HEADER ========================= -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Employee Type</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Employee Type</li>
            </ul>
        </div>
    </div>

    <!-- ========================= MAIN CONTENT ========================= -->
    <div class="main-content">

        <!-- ========================= TABS ========================= -->
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#list">
                    Employee Type List
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
                        <h5 class="card-title">Employee Type List</h5>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="employeeTypeList">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Employee Type</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Show on Web</th>
                                        {{-- <th class="text-end">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employee_types as $key => $employee_type)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $employee_type->employee_type }}</td>
                                            <td>{{ $employee_type->slug }}</td>
                                            <td>{{ $employee_type->status ? 'Active' : 'Inactive' }}</td>
                                            <td>{{ $employee_type->show_on_web ? 'Yes' : 'No' }}</td>

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
