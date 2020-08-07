@extends('layout.app')
@section('title')
    Create New Computer
@endsection
@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">New Computer</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('computers.store')}}" method="post" CLASS="row">
                        @csrf
                        <div class="form-group col-6">
                            <label>Computer Name</label>
                            <input class="form-control" name="CompName" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>IP</label>
                            <input class="form-control" name="IP" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Manufacturer</label>
                            <input class="form-control" name="Manufacturer" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Model</label>
                            <input class="form-control" name="Model" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>OS</label>
                            <input class="form-control" name="OS" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Asset Tag</label>
                            <input class="form-control" name="AssTag" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Capacity</label>
                            <input class="form-control" name="Capacity" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Processor</label>
                            <input class="form-control" name="Processor" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>SN</label>
                            <input class="form-control" name="SN" required/>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-md btn-success" value="Save Computer">
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
