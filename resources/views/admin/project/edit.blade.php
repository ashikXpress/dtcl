@extends('layouts.admin')

@section('title')
    Edit Project
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Project Information</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('edit_project_post', ['project' => $project->id]) }}">
                    @csrf

                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Type</label>

                            <div class="col-sm-4">
                                <select class="form-control" name="type">
                                    <option value="Complete" {{ empty(old('type')) ? ($errors->has('type') ? '' : ($project->type == 'Complete' ? 'selected' : '')) :
                                            (old('type') == 'Complete' ? 'selected' : '') }}>Complete</option>
                                    <option value="Ongoing" {{ empty(old('type')) ? ($errors->has('type') ? '' : ($project->type == 'Ongoing' ? 'selected' : '')) :
                                            (old('type') == 'Ongoing' ? 'selected' : '') }}>Ongoing</option>
                                    <option value="Shortlisted" {{ empty(old('type')) ? ($errors->has('type') ? '' : ($project->type == 'Shortlisted' ? 'selected' : '')) :
                                            (old('type') == 'Shortlisted' ? 'selected' : '') }}>Shortlisted</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('title') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Title</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter title"
                                       name="title" value="{{ empty(old('title')) ? ($errors->has('title') ? '' : $project->title) : old('title') }}">

                                @error('title')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('sector') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Sector</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter sector"
                                       name="sector" value="{{$project->sector }}">

                                @error('sector')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('client') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Client</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter Client"
                                       name="client" value="{{ $project->client }}">

                                @error('client')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('date') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Period</label>

                            <div class="col-sm-10">
                                <input type="date" class="form-control" placeholder="Enter date"
                                       name="date" value="{{$project->date}}">

                                @error('date')
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
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('admin_all_project') }}" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('additionalJS')

@stop
