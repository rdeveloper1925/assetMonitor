@extends('layout.app')
@section('title')
    View switch: <?=$switch->switchname?>
@endsection
@section('content')
    <div class="row">
        <a href="{{route('switches.index')}}" class="btn btn-md btn-warning"><i class="fa fa-backward"></i> Back </a><br>
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title"> switch</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="" method="post" CLASS="row">
                        @csrf
                        <div class="form-group col-6">
                            <label>switch Name</label>
                            <input class="form-control"disabled name="switchname" value="<?=$switch->switchname?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>IP</label>
                            <input class="form-control"disabled name="IP" value="<?=$switch->IP?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Manufacturer</label>
                            <input class="form-control"disabled name="Manufacturer" value="<?=$switch->Manufacturer?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Model</label>
                            <input class="form-control"disabled name="Model" value="<?=$switch->Model?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>OS</label>
                            <input class="form-control"disabled name="OS" value="<?=$switch->OS?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Asset Tag</label>
                            <input class="form-control"disabled name="AssTag" value="<?=$switch->AssTag?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Capacity</label>
                            <input class="form-control"disabled name="Capacity" value="<?=$switch->Capacity?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Processor</label>
                            <input class="form-control"disabled name="Processor" value="<?=$switch->Processor?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>SN</label>
                            <input class="form-control"disabled name="SN" value="<?=$switch->SN?>" required/>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
