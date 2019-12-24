@extends('layouts.admin')

@section('title')
    All Client
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
                            <th>Image</th>
                            <th>Name</th>
                            <th>type</th>
                            <th>Action</th>
                        </tr>

                        @foreach($clients as $client)
                            <tr>
                                <td>
                                    <img src="{{ asset('uploads/client/'.$client->image) }}" height="50px">
                                </td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->type }}</td>
                                <td>
                                    <a href="{{ route('edit.client',$client->id)}}">Edit</a> |
                                    <a role="button" class="text-red btnDelete" data-id="{{ $client->id }}">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="box-footer clearfix">
                    {{ $clients->links() }}
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
                    url: "{{ route('delete.client') }}",
                    data: { id: selectedId }
                }).done(function( msg ) {
                    location.reload();
                });
            });
        });
    </script>
@stop

