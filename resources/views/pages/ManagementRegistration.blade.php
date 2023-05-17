
@push('style')
    <link rel="stylesheet" href="{{asset('css/ManagementRegistration.css')}}">
@endpush

@extends('layout.layout')

@section('content')
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
            <table class="table table-bordered tbl-100p" data-adjust="-30" id="tblHeadCount">
                <thead>
                    <tr>
                        <th style="width: 2%;"><input type="checkbox" id="chkAll"></th>
                        <th style="width: 7%;">ID</th>
                        <th style="width: 20%;">Name</th>
                        <th style="width: 20%;">Code</th>
                        <th style="width: 20%;">Job Categories</th>
                        <th style="width: 20%;">Operations</th>
                        <th style="width: 4%;">Age</th>
                        <th style="width: 7%;">Sent To Abroad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td><input class="form-control" type="text"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>1</td>
                        <td>Jenefer Raquin</td>
                        <td>Agriculture</td>
                        <td>Cultivate Agriculture</td>
                        <td>Fruit Growing</td>
                        <td>20</td>
                        <td>
                            <select class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>2</td>
                        <td>Lenard Robenta</td>
                        <td>Agriculture</td>
                        <td>Cultivate Agriculture</td>
                        <td>Fruit Growing</td>
                        <td>45</td>
                        <td>
                            <select class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{asset('/js/ManagementRegistration.js')}}"></script>
@endpush