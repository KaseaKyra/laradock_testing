<div class="modal fade modal-danger" id="modal-edit" tabindex="-1" role="dialog"
     aria-labelledby="delete-confirmation-title" aria-hidden="true">
    <div class="modal-dialog">
        {!! Form::open(['route' => ['admin.category.edit', $category->id], 'method' => 'get', 'name'=>'form-edit', 'id'=>'form-edit']) !!}
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="modal-header-text"></h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Name:</label>
                    {!! Form::text('name', '', ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Cancel
                </button>
                {{--                                {!! Form::submit('Create', ['class'=>'btn btn-success', 'id'=>'action_button', 'name'=>'action_button', '<i--}}
                {{--                                        class="fas fa-plus-circle"'=>'']) !!}--}}
                <button type="submit" id="action_button" name="action_button">
                    <i class="fas fa-plus-circle"></i>
                </button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
