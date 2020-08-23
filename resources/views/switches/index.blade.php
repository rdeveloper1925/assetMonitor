@extends('layout.app')
@section('title')
    Computers
    @endsection
@section('content')
<div class="row">
    <a href="{{route('computers.create')}}" class="btn btn-success btn-md">New Computer</a><br>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Computers</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>IP</th>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th>OS</th>
                        <th>AssTag</th>
                        <th>Capacity</th>
                        <th>Processor</th>
                        <th>SN</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($computers))
                        @foreach($computers as $c)
                            <tr>
                                <td><?=$c->CompID?></td>
                                <td><?=$c->CompName?></td>
                                <td><?=$c->IP?></td>
                                <td><?=$c->Manufacturer?></td>
                                <td><?=$c->Model?></td>
                                <td><?=$c->OS?></td>
                                <td><?=$c->AssTag?></td>
                                <td><?=$c->Capacity?></td>
                                <td><?=$c->Processor?></td>
                                <td><?=$c->SN?></td>
                                <td>
                                    <a href="{{route('computers.show',['computer'=>$c->CompID])}}" class="btn btn-sm btn-primary">View</a>
                                    <a href="{{route('computers.edit',['computer'=>$c->CompID])}}" class="btn btn-sm btn-warning">Edit</a>
                                    <form method="post" action="{{route('computers.destroy',['computer'=>$c->CompID])}}">
                                        @csrf
                                        <input type="hidden" value="DELETE" NAME="_method">
                                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>IP</th>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th>OS</th>
                        <th>AssTag</th>
                        <th>Capacity</th>
                        <th>Processor</th>
                        <th>SN</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection
