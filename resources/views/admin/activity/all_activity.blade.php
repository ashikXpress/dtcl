@extends('layouts.admin')

@section('title')
    All Our Activity
@stop

@section('content')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Image 3</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>

                        @foreach($activities as $activity)
                            <tr>
                                <td>
                                    <img src="{{ asset('uploads/activity/'.$activity->image1) }}" height="50px">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/activity/'.$activity->image2) }}" height="50px">
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/activity/'.$activity->image3) }}" height="50px">
                                </td>
                                <td>{{ $activity->title }}</td>
                                <td>{{ $activity->date }}</td>

                                <td>
                                    <a href="{{ route('edit.our.activity',$activity->id) }}">Edit</a> |
                                    <a role="button" class="text-red btnDelete" data-id="{{ $activity->id }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="box-footer clearfix">
                    {{ $activities->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-danger fade" id="modal-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline" id="modalBtnDelete">Delete</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop

@section('additionalJS')
    <script>
        $(function () {
            var selectedId;

            $('.btnDelete').click(function () {
                $('#modal-delete').modal('show');
                selectedId = $(this).data('id');
            });

            $('#modalBtnDelete').click(function () {
                $.ajax({
                    method: "POST",
                    url: "{{ route('delete.our.activity') }}",
                    data: { id: selectedId }
                }).done(function( msg ) {
                    location.reload();
                });
            });
        });
    </script>
@stop
