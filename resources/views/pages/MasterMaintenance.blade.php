
@push('style')
    <link rel="stylesheet" href="{{asset('css/MasterMaintenance.css')}}">
@endpush

@extends('layout.layout')

@section('content')
<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#">Job Information</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="UserInformation.html">User Information</a>
    </li>
  </ul>
  <h4 style="margin-left:50px; margin-top: 5px;"><span class="fa fa-briefcase" style="margin-right: 5px; margin-top: 5px;"></span>Job Information</h4>
<div class="panel panel-inverse" id="main-panel" style="margin: auto; margin-top: 10px; width: 95%; font-size: 14px; box-shadow: 0px 2px 5px 2px rgba(0,0,0,0.1);" >
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <button type="button" id="btnAdd" class="btn btn-sm btn-info btn-block" style="width: 90%; margin: auto;"><span class="fa fa-plus"></span><span class="btnLabel">Add</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnEdit" class="btn btn-sm btn-green btn-block" style="width: 90%; margin: auto;"><span class="fa fa-edit"></span><span class="btnLabel">Edit</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnDelete" class="btn btn-sm btn-danger btn-block" style="width: 90%; margin: auto;"><span class="fa fa-trash"></span><span class="btnLabel">Delete</span></button>
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
                        <button type="button" id="btnAdd" class="btn btn-sm btn-info btn-block" style="width: 90%; margin: auto;"><span class="fa fa-plus"></span><span class="btnLabel">Add</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnEdit" class="btn btn-sm btn-green btn-block" style="width: 90%; margin: auto;"><span class="fa fa-edit"></span><span class="btnLabel">Edit</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnDelete" class="btn btn-sm btn-danger btn-block" style="width: 90%; margin: auto;"><span class="fa fa-trash"></span><span class="btnLabel">Delete</span></button>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive xs">
                        <table class="table table-bordered tbl-100p" data-adjust="-30" id="tblJobCategories">
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <button type="button" id="btnAdd" class="btn btn-sm btn-info btn-block" style="width: 90%; margin: auto;"><span class="fa fa-plus"></span><span class="btnLabel">Add</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnEdit" class="btn btn-sm btn-green btn-block" style="width: 90%; margin: auto;"><span class="fa fa-edit"></span><span class="btnLabel">Edit</span></button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" id="btnDelete" class="btn btn-sm btn-danger btn-block" style="width: 90%; margin: auto;"><span class="fa fa-trash"></span><span class="btnLabel">Delete</span></button>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive xs">
                        <table class="table table-bordered tbl-100p" data-adjust="-30" id="tblOperations">
                            <thead>
                                <tr >
                                    <th style="width: 2%;"><input type="checkbox" id="chkAll"></th>
                                    <th style="width: 8%;">ID</th>
                                    <th style="width: 90%;">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td></td>
                                    <td></td>
                                    <td><input class="form-control" type="text"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>1</td>
                                    <td>Agriculture</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>2</td>
                                    <td>IT</td>
                                </tr>
                            </tbody>
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