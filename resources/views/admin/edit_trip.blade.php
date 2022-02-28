@extends('admin.layout.master')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Edit Trip</div>
                            <div class="card-body card-block">
                                <form action="{{route('trip.update', $trip->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                              <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="username2" name="name" placeholder="Trip Name" class="form-control" value={{$trip->name}}>
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="email2" name="driver_name" placeholder="Driver Name" class="form-control"value={{$trip->driver_name}} >
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                             <div class="mx-1">From</div>
                                    <input type="string" id="appt" name="from" value={{$trip->from}}
                                        required>
                                             <div class="mx-1">To</div>
                                    <input type="string" id="appt" name="to" value={{$trip->to}}
                                          required>
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="input-group">
                                            <input type="date" id="email2" name="Date" placeholder="Trip Date" class="form-control" value={{$trip->Date}}>
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="email2" name="capacity" placeholder="Capacity" class="form-control" value={{$trip->capacity}}>
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                                <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="email2" name="price" placeholder="Price" class="form-control" value={{$trip->price}}>
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                                       <div class="form-group">
                                        <div class="input-group">
                                            <input type="string" id="email2" name="car_model" placeholder="Car Model" class="form-control" value={{$trip->car_model}}>
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


@endsection