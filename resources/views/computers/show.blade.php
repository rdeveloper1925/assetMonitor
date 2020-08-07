@extends('layout.app')
@section('title')
    View Computer: <?=$computer->CompName?>
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
                    <form action="" method="post" CLASS="row">
                        @csrf
                        <div class="form-group col-6">
                            <label>Computer Name</label>
                            <input class="form-control"disabled name="CompName" value="<?=$computer->CompName?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>IP</label>
                            <input class="form-control"disabled name="IP" value="<?=$computer->IP?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Manufacturer</label>
                            <input class="form-control"disabled name="Manufacturer" value="<?=$computer->Manufacturer?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Model</label>
                            <input class="form-control"disabled name="Model" value="<?=$computer->Model?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>OS</label>
                            <input class="form-control"disabled name="OS" value="<?=$computer->OS?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Asset Tag</label>
                            <input class="form-control"disabled name="AssTag" value="<?=$computer->AssTag?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Capacity</label>
                            <input class="form-control"disabled name="Capacity" value="<?=$computer->Capacity?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Processor</label>
                            <input class="form-control"disabled name="Processor" value="<?=$computer->Processor?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>SN</label>
                            <input class="form-control"disabled name="SN" value="<?=$computer->SN?>" required/>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
