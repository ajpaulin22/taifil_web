
@push('style')
    <link rel="stylesheet" href="{{asset('css/admin/ManagementRegistration.css')}}">
@endpush

@extends('layout.layout')

@section('content')
<style>
    .form-control{
        display: inline;
    }
    .header{
        text-align:center;
        padding-bottom:25px !important;
        
    }

</style>
<div class="panel panel-inverse" id="main-panel" style="margin: auto; margin-top: 10px; width: 95%; font-size: 14px;" >
    <div class="panel-heading">
        <h4 class="panel-title"><span class="fa fa-user"></span>Management Registration</h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3 mb-2">
                <div class="form-group">
                    <label>Code:</label>
                    <select class="form-control" id="Code" style="width: 70%;">
                        <option value="1">Agriculture</option>
                        <option value="2">IT</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3 mb-2">
                <div class="form-group">
                    <label>Job Categories:</label>
                    <select class="form-control" id="JobCategories" style="width: 70%;">
                        <option value="1">Agriculture</option>
                        <option value="2">IT</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3 mb-2">
                <div class="form-group">
                    <label>Operations:</label>
                    <select class="form-control" id="Operations" style="width: 70%;">
                        <option value="1">Agriculture</option>
                        <option value="2">IT</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3 mb-2">
                <div class="form-group">
                    <label>Age:</label>
                    <input type="text" class="form-control" style="width: 15%; text-align: center;"> - <input type="text" class="form-control" style="width: 15%; text-align: center;">
                </div>
            </div>
        </div>
        <div>
        <div class="row">
            <div class="col-sm-1 mb-2">
                <button type="button" id="btnFilter" class="btn btn-sm btn-info btn-block" style="width: 100px;"><span class="fa fa-filter"></span><span class="btnLabel">Filter</span></button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1 mb-2">
                <button type="button" id="btnEdit" class="btn btn-sm btn-primary btn-block" style="width: 100px;"><span class="fa fa-edit"></span><span class="btnLabel">Edit</span></button>
            </div>
            <div class="col-sm-1 mb-2">
                <button type="button" id="btnDelete" class="btn btn-sm btn-danger btn-block" style="width: 100px;"><span class="fa fa-trash"></span><span class="btnLabel">Delete</span></button>
            </div>
            <div class="col-sm-3 offset-7 mb-2">
                <button type="button" id="btnSave" class="btn btn-sm btn-green btn-block" style="width: 200px;"><span class="fa fa-save"></span><span class="btnLabel">Update Applicant Status</span></button>
            </div>
        </div>
        <div class="table-responsive xs">
            <table class="table table-striped table-bordered tbl-100p display" style='border: 1px solid grey' data-adjust="-30" id="tblManagementRegistration">
                <thead style='border: 1px solid black;'>
                    <tr>
                        <th rowspan="2" class='header' style='padding-bottom:25px;'></th>
                        <th rowspan="2" class='header' style='margin:auto;text-align:center;'>ID</th>
                        <th rowspan="2" class='header'>Name</th>
                        <th rowspan="2" class='header'>Job Categories</th>
                        <th colspan="3" style='text-align: center;'>Interview History</th>
                        <th rowspan="2" class='header'>Age</th>
                        <th rowspan="2" class='header'>Sent To Abroad</th>
                    </tr>
                    <tr>
                        <th style='text-align:center'>Show/No Show</th>
                        <th style='text-align:center'>InterviewDate</th>
                        <th style='text-align:center'>Company</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td name="checkbox"><input type="checkbox"></td>
                        <td name="ID" style='text-align: center;'></td>
                        <td name="Name"></td>
                        <td name="JobCategories"></td>
                        <td name=Show></td>
                        <td name="InterviewDate"></td>
                        <td name="Company"></td>
                        <td name="Age"></td>
                        <td name="ToAbroad"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{asset('/js/admin/ManagementRegistration.js')}}"></script>
@endpush