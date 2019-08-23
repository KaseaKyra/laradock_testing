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
                <input type="text" name="search-box" id="search-box" class="float-left">
            </div>
            <div class="col-md-6 clearfix">
                <button href="javascript:void(0)" class="btn btn-success float-right" id="btn-create">
                    <i class="fas fa-plus-circle"></i> Create
                </button>
            </div>
        </div>
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
                    $('.modal-header').addClass('bg-success');
                    $('#modal-header-title').html("Create");
                    $('#action_button').html("Create").val("create")
                        .addClass('btn btn-success')
                        .prepend($("<i class='fas fa-plus-circle'></i>"));
                    $('#modal-box').modal('show');
                });

                /* When click edit user */
                $('.btn-edit').click(function () {
                    var categoryId = $(this).data('id');
                    console.log(categoryId);
                    $.ajax({
                        url: '/admin/categories/' + categoryId + '/edit',
                        dataType: "json",
                        success(html) {
                            $('#name').val(html.data.name);
                            $('#cate_id').val(html.data.id);
                            $('#modal-header-title').text("Edit");
                            $('#action_button').val("edit");
                            $('#action').val("Edit");
                            $('#modal-box').modal('show');
                        }
                    })
                });

                /* When click edit user */
                // $('.btn-edit').click(function () {
                //     var categoryId = $(this).data('id');
                //     $.get('/admin/categories/' + categoryId + '/edit', function (data) {
                //         $('.modal-header').addClass('bg-primary');
                //         $('#modal-header-title').html("Edit");
                //         $('#action_button').html("Edit").val("edit").addClass('btn btn-primary')
                //             .prepend($("<i class='fa fa-pencil'></i>"));
                //         $('#modal-box').modal('show');
                //         $('#cate_id').val(data.id);
                //         $('#name').val(data.name);
                //     })
                // });

                {{--$('.btn-edit').click(function () {--}}
                {{--    var id = $(this).attr('id');--}}
                {{--    $('#form_result').html('');--}}
                {{--    $.ajax({--}}
                {{--        url: "/ajax-crud/" + id + "/edit",--}}
                {{--        dataType: "json",--}}
                {{--        success: function (html) {--}}
                {{--            $('#first_name').val(html.data.first_name);--}}
                {{--            $('#last_name').val(html.data.last_name);--}}
                {{--            $('#store_image').html("<img src={{ URL::to('/') }}/images/" + html.data.image + " width='70' class='img-thumbnail' />");--}}
                {{--            $('#store_image').append("<input type='hidden' name='hidden_image' value='" + html.data.image + "' />");--}}
                {{--            $('#hidden_id').val(html.data.id);--}}
                {{--            $('.modal-title').text("Edit New Record");--}}
                {{--            $('#action_button').val("Edit");--}}
                {{--            $('#action').val("Edit");--}}
                {{--            $('#formModal').modal('show');--}}
                {{--        }--}}
                {{--    })--}}
                {{--});--}}

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


