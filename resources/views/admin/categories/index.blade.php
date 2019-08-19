@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
            <a href="{{ route('admin.cate') }}" class="btn btn-primary btn-flat"
               style="padding: 4px 10px;">
                <i class="fa fa-pencil"></i> {{ trans('jobnews::jobnews.button.create jobnews') }}
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (isset($categories))
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.category.edit', [$category->id]) }}">
                                            {{ $category->id }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.category.edit', [$category->id]) }}">
                                            {{ $category->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.category.edit', [$category->id]) }}">
                                            {{ $category->created_at }}
                                        </a>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.category.edit', [$category->id]) }}"
                                               class="btn btn-primary mr-3"><i class="fa fa-pencil text-white"></i></a>
                                            <button id="btn-delete-{{$category->id}}" class="btn btn-danger"
                                                    data-toggle="modal"
                                                    data-target="#modal-delete-confirmation"
                                                    data-action-target="{{ route('admin.category.destroy', [$category->id]) }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                        <tfoot>
                        <tr>
                        </tr>
                        </tfoot>
                    </table>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
        @include('admin.partials.delete-modal')
@endsection

{{--@push('js-stack')--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#btn-delete').click(function (event) {--}}
{{--                event.preventDefault();--}}

{{--                var me = $(this),--}}
{{--                    url = me.attr('href'),--}}
{{--                    title = me.attr('title'),--}}
{{--                    csrf_token = $('meta[name="csrf-token"]').attr('content');--}}

{{--                swal({--}}
{{--                    title: 'Are you sure want to delete ' + title + ' ?',--}}
{{--                    text: 'You won\'t be able to revert this!',--}}
{{--                    type: 'warning',--}}
{{--                    showCancelButton: true,--}}
{{--                    confirmButtonColor: '#c82333',--}}
{{--                    cancelButtonColor: '#5a6268',--}}
{{--                    confirmButtonText: 'Delete'--}}
{{--                }).then((result) => {--}}
{{--                    if (result.value) {--}}
{{--                        $.ajax({--}}
{{--                            url: url,--}}
{{--                            type: "POST",--}}
{{--                            data: {--}}
{{--                                '_method': 'DELETE',--}}
{{--                                '_token': csrf_token--}}
{{--                            },--}}
{{--                            success: function (response) {--}}
{{--                                $('#datatable').DataTable().ajax.reload();--}}
{{--                                swal({--}}
{{--                                    type: 'success',--}}
{{--                                    title: 'Success!',--}}
{{--                                    text: 'Data has been deleted!'--}}
{{--                                });--}}
{{--                            },--}}
{{--                            error: function (xhr) {--}}
{{--                                swal({--}}
{{--                                    type: 'error',--}}
{{--                                    title: 'Oops...',--}}
{{--                                    text: 'Something went wrong!'--}}
{{--                                });--}}
{{--                            }--}}
{{--                        });--}}
{{--                    }--}}
{{--                });--}}

{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
