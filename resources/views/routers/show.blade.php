@extends('layout.app')
@section('title')
    View router: <?=$router->routername?>
@endsection
@section('content')
    <div class="row">
        <a href="{{route('routers.index')}}" class="btn btn-md btn-warning"><i class="fa fa-backward"></i> Back </a><br>
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title"> router</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="" method="post" CLASS="row">
                        @csrf
                        <div class="form-group col-6">
                            <label>router Name</label>
                            <input class="form-control"disabled name="routername" value="<?=$router->routername?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>IP</label>
                            <input class="form-control"disabled name="IP" value="<?=$router->IP?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Manufacturer</label>
                            <input class="form-control"disabled name="Manufacturer" value="<?=$router->Manufacturer?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Model</label>
                            <input class="form-control"disabled name="Model" value="<?=$router->Model?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>OS</label>
                            <input class="form-control"disabled name="OS" value="<?=$router->OS?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Asset Tag</label>
                            <input class="form-control"disabled name="AssTag" value="<?=$router->AssTag?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Capacity</label>
                            <input class="form-control"disabled name="Capacity" value="<?=$router->Capacity?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>Processor</label>
                            <input class="form-control"disabled name="Processor" value="<?=$router->Processor?>" required/>
                        </div>
                        <div class="form-group col-6">
                            <label>SN</label>
                            <input class="form-control"disabled name="SN" value="<?=$router->SN?>" required/>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
