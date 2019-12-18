@extends('layouts.admin')

@section('title')
    Update Team Member
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Team Member Information</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('team.member.update',$team->id) }}">
                    @csrf

                    <div class="box-body">


                        <div class="form-group {{ $errors->has('name') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter name"
                                       name="name" value="{{ $team->name }}">

                                @error('name')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('type') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Type</label>

                            <div class="col-sm-4">
                                <select class="form-control" name="type">
                                    <option selected value="{{ $team->type}}" >{{ $team->type }}</option>
                                    <option value="Board of Directors" {{ old('type') == 'Board of Directors' ? 'selected' : '' }}>Board of Directors</option>
                                    <option value="Chief official Team" {{ old('type') == 'Chief official Team' ? 'selected' : '' }}>Chief official Team</option>
                                    <option value="Executive Team" {{ old('type') == 'Executive Team' ? 'selected' : '' }}>Executive Team</option>
                                    <option value="Office staff" {{ old('type') == 'Office staff' ? 'selected' : '' }}>Office staff</option>
                                </select>
                                @error('type')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('designation') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Designation</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter designation"
                                       name="designation" value="{{ $team->designation }}">

                                @error('designation')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('image') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Image</label>

                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="image">

                                @error('image')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

