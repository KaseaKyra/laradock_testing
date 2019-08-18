@extends('layouts.master')

@section('content')
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
                        <?php if (isset($categories)): ?>
                        <?php foreach ($categories as $category): ?>
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
                                    <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#modal-delete-confirmation"
                                            data-action-target="{{ route('admin.category.destroy', [$category->id]) }}">
                                        <i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
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
@endsection
