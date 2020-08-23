@extends('layout.app')
@section('title')
    Create New routers
@endsection
@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title">New routers</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('routers.store')}}" method="post" CLASS="row">
                        @csrf
                        <div class="form-group col-6">
                            <label>routers Name</label>
                            <input class="form-control" name="routername" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>IP</label>
                            <input class="form-control" name="ip" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Manufacturer</label>
                            <input class="form-control" name="manufacturer" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Model</label>
                            <input class="form-control" name="model" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>IOS</label>
                            <input class="form-control" name="OS" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Asset Tag</label>
                            <input class="form-control" name="AssTag" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>RAM</label>
                            <input class="form-control" name="ram" required/>
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
                            <input type="submit" class="btn btn-md btn-success" value="Save routers">
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
