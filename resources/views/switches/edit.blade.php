@extends('layout.app')
@section('title')
    Edit Computer: <?=$computer->CompName?>
@endsection
@section('content')
    <div class="row">
        <a href="{{route('computers.index')}}" class="btn btn-md btn-warning"><i class="fa fa-backward"></i> Back </a><br>
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title"> Computer</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{route('computers.update',['computer'=>$computer->CompID])}}" method="post" CLASS="row">
                        @csrf
                        <INPUT type="hidden" name="_method" value="PUT">
                        <div class="form-group col-6">
                            <label>Computer Name</label>
                            <input class="form-control" name="CompName" value="<?=$computer->CompName?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>IP</label>
                            <input class="form-control" name="IP" value="<?=$computer->IP?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Manufacturer</label>
                            <input class="form-control" name="Manufacturer" value="<?=$computer->Manufacturer?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Model</label>
                            <input class="form-control" name="Model" value="<?=$computer->Model?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>OS</label>
                            <input class="form-control" name="OS" value="<?=$computer->OS?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Asset Tag</label>
                            <input class="form-control" name="AssTag" value="<?=$computer->AssTag?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Capacity</label>
                            <input class="form-control" name="Capacity" value="<?=$computer->Capacity?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Processor</label>
                            <input class="form-control" name="Processor" value="<?=$computer->Processor?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>SN</label>
                            <input class="form-control" name="SN" value="<?=$computer->SN?>" required/>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-md btn-success" value="Save Edits">
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
