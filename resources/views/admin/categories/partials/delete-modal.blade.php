{{--<div class="modal fade modal-danger" id="modal-delete-confirmation" tabindex="-1" role="dialog"--}}
{{--     aria-labelledby="delete-confirmation-title" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header bg-danger">--}}
{{--                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span--}}
{{--                        class="sr-only">Close</span></button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-secondary"--}}
{{--                        data-dismiss="modal">Cancel--}}
{{--                </button>--}}
{{--                {!! Form::open(['route' => ['admin.category.destroy', $category->id], 'method' => 'delete']) !!}--}}
{{--                @method('DELETE')--}}
{{--                @csrf--}}
{{--                <button type="submit" class="btn btn-danger"><i--}}
{{--                        class="fa fa-trash"></i> Delete--}}
{{--                </button>--}}
{{--                {!! Form::close() !!}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="modal fade modal-danger" id="modal-delete-confirmation" tabindex="-1" role="dialog"
     aria-labelledby="delete-confirmation-title" aria-hidden="true">
    <div class="modal-dialog">
        <form name="modal-form" id="modal-form">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-delete-title"></h4>
                    <div id="form-result"></div>
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 id="modal-message"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cancel
                    </button>
                    <button type="submit" id="btn-action" name="btn-action">
                        <i class="fas fa-plus-circle"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
