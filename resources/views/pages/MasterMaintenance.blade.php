
@push('style')
    <link rel="stylesheet" href="{{asset('css/MasterMaintenance.css')}}">
@endpush

@extends('layout.layout')

@section('content')
<style>
    .dataTables_length > label{
        width:200px;
    }
    .dataTables_length > label > select{
        width:25%;
        margin-bottom:5px;
        display: inline;
    }
    .table{
        overflow-x: hidden !important;
    }
</style>
<br>
<ul class="nav nav-tabs" style='background-image:linear-gradient(to right top, #53aa71, #53aa71, #53aa71, #53aa71, #53aa71, #4ea871, #4aa771, #45a571, #3aa171, #2d9d72, #1d9972, #009572);'>
    <li class="nav-item">
      <a class="nav-link active" href="#">Job Information</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="UserInformation.html" style='color: white'>User Information</a>
    </li>
  </ul>
  <h4 style="margin-left:50px; margin-top: 5px;"><span class="fa fa-briefcase" style="margin-right: 5px; margin-top: 5px;"></span>Job Information</h4>
<div class="panel panel-inverse" id="main-panel" style="margin: auto; margin-top: 10px; margin-bottom: 100px; width: 95%; font-size: 14px; box-shadow: 0px 2px 5px 2px rgba(0,0,0,0.1);" >
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <button type="button" id="btnAddCodes" class="btn btn-sm btn-info btn-block" style="width: 90%; margin: auto;"><span class="fa fa-plus"></span><span class="btnLabel">Add</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnEditCodes" class="btn btn-sm btn-success btn-block" style="width: 90%; margin: auto;"><span class="fa fa-edit"></span><span class="btnLabel">Edit</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnDeleteCodes" class="btn btn-sm btn-danger btn-block" style="width: 90%; margin: auto;"><span class="fa fa-trash"></span><span class="btnLabel">Delete</span></button>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive xs">
                        <table class="table table-striped table-bordered tbl-100p" data-adjust="-30" id="tblCodes">
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <button type="button" id="btnAddJobCategories" class="btn btn-sm btn-info btn-block" style="width: 90%; margin: auto;"><span class="fa fa-plus"></span><span class="btnLabel">Add</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnEditJobCategories" class="btn btn-sm btn-success btn-block" style="width: 90%; margin: auto;"><span class="fa fa-edit"></span><span class="btnLabel">Edit</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnDeleteJobCategories" class="btn btn-sm btn-danger btn-block" style="width: 90%; margin: auto;"><span class="fa fa-trash"></span><span class="btnLabel">Delete</span></button>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive xs">
                        <table class="table table-striped table-bordered tbl-100p" data-adjust="-30" id="tblJobCategories">
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <button type="button" id="btnAddOperations" class="btn btn-sm btn-info btn-block" style="width: 90%; margin: auto;"><span class="fa fa-plus"></span><span class="btnLabel">Add</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnEditOperations" class="btn btn-sm btn-success btn-block" style="width: 90%; margin: auto;"><span class="fa fa-edit"></span><span class="btnLabel">Edit</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnDeleteOperations" class="btn btn-sm btn-danger btn-block" style="width: 90%; margin: auto;"><span class="fa fa-trash"></span><span class="btnLabel">Delete</span></button>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive xs">
                        <table class="table table-striped table-bordered tbl-100p" data-adjust="-30" id="tblOperations">
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{asset('/js/admin/MasterMaintenance.js')}}"></script>
@endpush