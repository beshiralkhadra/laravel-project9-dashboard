@extends('admin.layout.master')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Add Trip</div>
                            <div class="card-body card-block">
                                <form action="{{route('trip.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="username2" name="name" placeholder="Trip Name" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="email2" name="driver_name" placeholder="Driver Name" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                                              <select class="form-select w-100 mb-3 py-1 px-2" name="driver_id" aria-label="Default select example">
                                    @foreach($drivers as $driver)
                                    <option value="{{$driver->id}}">{{$driver->name}}</option>
                                    @endforeach
                                </select>
                                    <div class="form-group">
                                        <div class="input-group">
                                             <div class="mx-1">From</div>
                                    <input type="string" id="appt" name="from"
                                        required>
                                             <div class="mx-1">To</div>
                                    <input type="string" id="appt" name="to"
                                          required>
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="input-group">
                                            <input type="date" id="email2" name="Date" placeholder="Trip Date" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="email2" name="capacity" placeholder="Capacity" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                                <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="email2" name="price" placeholder="Price" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                                <div class="form-group">
                                        <div class="input-group">
                                            <input type="string" id="email2" name="car_model" placeholder="Car Model" class="form-control">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection