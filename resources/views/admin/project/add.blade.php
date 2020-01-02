@extends('layouts.admin')
@section('additionalCSS')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('themes/back/bower_components/select2/css/select2.min.css') }}">
    <style>
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 0;
            height: 35px;
        }
    </style>
@endsection

@section('title')
    Add Project
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
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('add_project_post') }}">
                    @csrf

                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Type</label>

                            <div class="col-sm-4">
                                <select class="form-control" name="type">
                                    <option value="Complete" {{ old('type') == 'Complete' ? 'selected' : '' }}>Complete</option>
                                    <option value="Ongoing" {{ old('type') == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                                    <option value="Shortlisted" {{ old('type') == 'Shortlisted' ? 'selected' : '' }}>Shortlisted</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('title') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Title</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Enter title"
                                       name="title" value="{{ old('title') }}">

                                @error('title')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('sector') ? 'has-error' :'' }}">
                            <label for="sector" class="col-sm-2 control-label">Sector</label>
                            <div class="col-sm-10">
                                <select id="sector" name="sector" class="form-control select2" style="width: 100%;">
                                    <option selected disabled>Select</option>
                                    @foreach($sectors as $sector)
                                    <option value="{{$sector->name}}" {{ old('sector') == $sector->url ? 'selected' : '' }}>{{$sector->name}}</option>
                                    @endforeach

                                </select>

                                @error('sector')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('client') ? 'has-error' :'' }}">
                            <label for="client" class="col-sm-2 control-label">Client</label>

                            <div class="col-sm-10">
                                <select id="client" name="client" class="form-control select2" style="width: 100%;">
                                    <option selected disabled>Select</option>
                                    @foreach($clients as $client)
                                        <option value="{{$client->name}}" {{ old('client') == $client->name ? 'selected' : '' }}>{{$client->name}}</option>
                                    @endforeach

                                </select>
                                @error('client')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('start_date') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Start date</label>

                            <div class="col-sm-10">
                                <input type="date" class="form-control" placeholder="Enter start date"
                                       name="start_date" value="{{ old('start_date') }}">

                                @error('start_date')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('end_date') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">End date</label>

                            <div class="col-sm-10">
                                <input type="date" class="form-control" placeholder="Enter end date"
                                       name="end_date" value="{{ old('end_date') }}">

                                @error('end_date')
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
                        <div class="form-group {{ $errors->has('description') ? 'has-error' :'' }}">
                            <label class="col-sm-2 control-label">Description</label>

                            <div class="col-sm-10">
                                <textarea id="editor1" name="description" rows="10" cols="80">{{ old('description') }}</textarea>

                                @error('description')
                                <span class="help-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>




                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('additionalJS')
    <!-- CK Editor -->
    <script src="{{ asset('themes/back/bower_components/ckeditor/ckeditor.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('themes/back/bower_components/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('editor1');
            $('.select2').select2()
        });
    </script>
@stop
