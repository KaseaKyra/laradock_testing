{{--@extends('admin.layouts.master')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row clearfix">--}}
{{--            <button class="btn btn-success float-right"--}}
{{--                    data-toggle="modal"--}}
{{--                    data-target="#modal-creat"--}}
{{--                    data-action-target="{{ route('admin.category.create') }}">--}}
{{--                <i class="fas fa-plus-circle"></i> Create--}}
{{--            </button>--}}
{{--        </div>--}}
{{--        @include('admin.categories.partials.create-modal')--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="table-responsive">--}}
{{--                    <table class="data-table table table-bordered table-hover">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th>ID</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Created At</th>--}}
{{--                            <th>Actions</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @if (isset($categories))--}}
{{--                            @foreach ($categories as $category)--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ route('admin.category.edit', [$category->id]) }}">--}}
{{--                                            {{ $category->id }}--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ route('admin.category.edit', [$category->id]) }}">--}}
{{--                                            {{ $category->name }}--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <a href="{{ route('admin.category.edit', [$category->id]) }}">--}}
{{--                                            {{ $category->created_at }}--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div class="btn-group">--}}
{{--                                            <button class="btn btn-primary"--}}
{{--                                                    data-toggle="modal"--}}
{{--                                                    data-target="#modal-edit"--}}
{{--                                                    data-action-target="{{ route('admin.category.edit', [$category->id]) }}">--}}
{{--                                                <i class="fa fa-pencil"></i>--}}
{{--                                            </button>--}}
{{--                                            <button class="btn btn-danger"--}}
{{--                                                    data-toggle="modal"--}}
{{--                                                    data-target="#modal-delete-confirmation"--}}
{{--                                                    data-action-target="{{ route('admin.category.destroy', [$category->id]) }}">--}}
{{--                                                <i class="fa fa-trash"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--                        </tbody>--}}
{{--                        <tfoot>--}}
{{--                        <tr>--}}
{{--                        </tr>--}}
{{--                        </tfoot>--}}
{{--                    </table>--}}
{{--                    <!-- /.box-body -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @include('admin.categories.partials.delete-modal')--}}
{{--    @include('admin.categories.partials.edit-modal')--}}
{{--@endsection--}}
@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 clearfix">
                <input type="text" name="search-box" id="search-box" class="float-md-left">
            </div>
            <div class="col-md-6 clearfix">
                <button href="javascript:void(0)" class="btn btn-success float-md-right" id="btn-create">
                    <i class="fas fa-plus-circle"></i> Create
                </button>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
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
                        <tbody id="tbl-body">
                        @if (isset($categories))
                            @foreach ($categories as $category)
                                <tr id="cate_id_{{ $category->id }}">
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
                                            <button class="btn btn-primary btn-edit" href="javascript:void(0)"
                                                    id="{{ $category->id }}"
                                                    data-id="{{ $category->id }}">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <button class="btn btn-danger btn-delete" href="javascript:void(0)"
                                                    id="{{ $category->id }}"
                                                    data-id="{{ $category->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            {{--                                            <a href="javascript:void(0)" data-toggle="tooltip"--}}
                                            {{--                                               data-id="{{$category->id}}" data-original-title="Edit"--}}
                                            {{--                                               class="btn btn-primary btn-sm">Edit</a>--}}
                                            {{--                                            <a href="javascript:void(0)" data-toggle="tooltip"--}}
                                            {{--                                               data-id="{{$category->id}}" data-original-title="Delete"--}}
                                            {{--                                               class="btn btn-danger btn-sm">Delete</a>--}}
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
                    {{--                    {{ $categories->link() }}--}}
                </div>
            </div>
        </div>
    </div>
    @include('admin.categories.partials.create-modal')
    @include('admin.categories.partials.delete-modal')

    @push('custom-scripts')
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // click btn-create
                $('#btn-create').click(function () {
                    $('#modal-form').trigger("reset");
                    $('.modal-header').addClass('bg-success').removeClass('bg-danger bg-primary');
                    $('#modal-header-title').html("Create");
                    $('#action_button').html("Create").val("create")
                        .removeClass('btn-primary btn-danger')
                        .addClass('btn btn-success')
                        .prepend($("<i class='fas fa-plus-circle'></i>"));
                    $('#modal-box').modal('show');
                });

                /* When click edit user */
                // $('.btn-edit').click(function () {
                //     var categoryId = $(this).data('id');
                //     console.log(categoryId);
                //     $.ajax({
                //         url: '/admin/categories/' + categoryId + '/edit',
                //         dataType: "json",
                //         success(html) {
                //             $('#name').val(html.data.name);
                //             $('#cate_id').val(html.data.id);
                //             $('.modal-header').addClass('bg-primary').removeClass('bg-success bg-danger');
                //             $('#modal-header-title').text("Edit");
                //             $('#action_button').text('Edit').val("edit")
                //                 .removeClass('btn-success btn-danger')
                //                 .addClass('btn btn-primary')
                //                 .prepend($("<i class='fa fa-pencil'></i>"));
                //             $('#action').val("edit");
                //             $('#modal-box').modal('show');
                //         }
                //     })
                // });

                /* When click edit user */
                $('.btn-edit').click(function () {
                    var categoryId = $(this).data('id');
                    console.log(categoryId);
                    $.get('/admin/categories/' + categoryId + '/edit', function (html) {
                        $('#name').val(html.name);
                        $('#cate_id').val(html.id);
                        $('.modal-header').addClass('bg-primary').removeClass('bg-success bg-danger');
                        $('#modal-header-title').text("Edit");
                        $('#action_button').text('Edit').val("edit")
                            .removeClass('btn-success btn-danger')
                            .addClass('btn btn-primary')
                            .prepend($("<i class='fa fa-pencil'></i>"));
                        $('#modal-box').modal('show');
                    })
                });

                /* store data when CREATE or UPDATE*/
                $('#action_button').click(function () {
                    var actionType = $('#action_button').val();
                    $.ajax({
                        data: $('#modal-form').serialize(),
                        url: "{{ route('admin.category.store') }}",
                        type: "POST",
                        dataType: 'json',

                        success: function (data) {
                            var category = '<tr id="cate_id_' + data.id + '"><td>' + data.id + '</td><td>'
                                + data.name + '</td>';
                            category += '<td><a href="javascript:void(0)" id="' + data.id + '" ' +
                                'data-id="' + data.id + '" ' + 'class="btn btn-primary btn-edit">' +
                                '<i class="fa fa-pencil"></i></a></td>';
                            category += '<td><a href="javascript:void(0)" id="' + data.id + '" ' +
                                'data-id="' + data.id + '" ' + 'class="btn btn-danger btn-delete">' +
                                '<i class="fa fa-trash"></i></a></td>' + '</tr>';

                            if (actionType === "create") {
                                $('#tbl-body').prepend(category);
                            } else {
                                $("#cate_id_" + data.id).replaceWith(category);
                            }

                            $('#modal-form').trigger("reset");
                            $('#modal-box').modal('hide');
                        },

                        error: function (data) {
                            console.error();
                            // console.log('Error:', data);
                        }
                    });
                });

                // click btn-delete
                $('.btn-delete').click(function () {
                    var categoryId = ($(this).attr('id'));
                    $('.modal-header').addClass('bg-danger').removeClass('bg-success bg-primary');
                    $('#modal-delete-title').html("Delete");
                    $('#modal-message').text('Are you sure want to delete?');
                    $('#modal-delete-confirmation').modal('show');
                    $('#btn-action').html("Delete").val("delete")
                        .addClass('btn btn-danger')
                        .removeClass('btn-success btn-primary')
                        .prepend($("<i class='fa fa-trash'></i>"))
                        .click(() => {
                            $.ajax({
                                type: "DELETE",
                                url: '/admin/categories/' + categoryId,
                                beforeSend() {
                                    $('#action').text('Deleting...');
                                },
                                success() {
                                    $("#cate_id_" + categoryId).remove();
                                },
                                error(data) {
                                    console.log('Error:', data);
                                }
                            });
                        })
                });
            })
        </script>
    @endpush

@endsection


