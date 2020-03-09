@extends('adminlte::page')

@section('title', 'Town')

@section('content_header')
    <p><strong>Laravel App 02 - </strong>List Towns</p>
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('error') }}
        </div>
    @endif
    <div class="row mb-2 list-towns-header">
        <div class="col-md-12">
            <a href="{{ route('createTown') }}" class="btn btn-success list-towns-add"><i class="fa fa-fw fa-plus" aria-hidden="true"></i>Add Town</a>
        </div>
    </div>
    <div class="row justify-content-center list-towns-content">
        <div class="col-md-12">
            <div class="card list-towns-card">
                <div class="card-header">List of all towns</div>
                <div class="card-body">
                    <table id="town-lists" class="table table-hover display" style="width:100%">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Country Code</th>
                                <th>Country Code ISO</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($towns as $town)
                                <tr>
                                    <td>{{ $town->id }}</td>
                                    <td>{{ $town->name }}</td>
                                    <td>{{ $town->country }}</td>
                                    <td>{{ $town->country_code }}</td>
                                    <td>{{ $town->country_iso_code }}</td>
                                    <td>{{ $town->created_at }}</td>
                                    <td>{{ $town->updated_at }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ route('showTown', ['id' => $town->id]) }}">View</a>
                                        <a class="btn btn-sm btn-info" href="{{ route('editTown', ['id' => $town->id]) }}">Update</a>
                                        <form action="{{ route('destroyTown', ['id' => $town->id]) }}" method="post" accept-charset="utf-8">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#town-lists thead tr').clone(true).appendTo('#town-lists thead');
            $('#town-lists thead tr:eq(0) th').each(function (i) {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="' + title + '"/>');
                $('input', this).on( 'keyup change clear', function () {
                    if (table.column(i).search() !== this.value ) {
                        table.column(i).search(this.value).draw();
                    }
                });
            });
            var table = $('#town-lists').DataTable({
                orderCellsTop: false,
                dom: 'B<"clear">lfrtip',
                scrollX:        200,
                scrollCollapse: true
            });
        });
    </script>
@endsection