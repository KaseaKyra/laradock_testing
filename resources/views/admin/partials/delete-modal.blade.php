{{--<div class="modal fade" id="modal-delete-confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header bg-danger" id="modal-header">--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body font-weight-bold" id="modal-body">--}}
{{--                <h5>Are you sure want to delete?</h5>--}}
{{--            </div>--}}
{{--            <div class="modal-footer" id="modal-footer">--}}
{{--                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>--}}
{{--                <button type="button" class="btn btn-danger" id="modal-btn-delete">Delete</button>--}}
{{--                {!! Form::open(['method' => 'delete']) !!}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@push('js-stack')--}}
{{--    <script>--}}
{{--        $( document ).ready(function() {--}}
{{--            $('#modal-delete-confirmation').on('show.bs.modal', function (event) {--}}
{{--                var button = $(event.relatedTarget);--}}
{{--                var actionTarget = button.data('action-target');--}}
{{--                var modal = $(this);--}}
{{--                modal.find('form').attr('action', actionTarget);--}}

{{--                if (button.data('message') === undefined) {--}}
{{--                } else if (button.data('message') != '') {--}}
{{--                    modal.find('.custom-message').show().empty().append(button.data('message'));--}}
{{--                    modal.find('.default-message').hide();--}}
{{--                } else {--}}
{{--                    modal.find('.default-message').show();--}}
{{--                    modal.find('.custom-message').hide();--}}
{{--                }--}}
{{--                if (button.data('remove-submit-button') === true) {--}}
{{--                    modal.find('button[type=submit]').hide();--}}
{{--                } else {--}}
{{--                    modal.find('button[type=submit]').show();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}

<div class="modal fade modal-danger" id="modal-delete-confirmation" tabindex="-1" role="dialog"
     aria-labelledby="delete-confirmation-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <div class="default-message">
                    Are you sure want to delete?
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"
                        data-dismiss="modal">Cancel
                </button>
                {!! Form::open(['route' => ['admin.category.destroy', $category->id], 'method' => 'delete']) !!}
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><i
                        class="fa fa-trash"></i> Delete
                </button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@push('js-stack')
    <script>
        $(document).ready(function () {
            $('#modal-delete-confirmation').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var actionTarget = button.data('action-target');
                var modal = $(this);
                modal.find('form').attr('action', actionTarget);

                if (button.data('remove-submit-button') === true) {
                    modal.find('button[type=submit]').hide();
                } else {
                    modal.find('button[type=submit]').show();
                }
            });
        });
    </script>
@endpush
