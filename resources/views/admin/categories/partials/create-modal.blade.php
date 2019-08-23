<div class="modal fade modal-danger" id="modal-box" tabindex="-1" role="dialog"
     aria-labelledby="delete-confirmation-title" aria-hidden="true">
    <div class="modal-dialog">
        {{--        {!! Form::open(['route' => ['admin.category.store'], 'method' => 'post', 'name'=>'form-create', 'id'=>'form-create']) !!}--}}
        <form name="modal-form" id="modal-form">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="modal-header-title"></h4>
                    <div id="form-result"></div>
                    <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span id="form_result"></span>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        {!! Form::text('name', '', ['class'=>'form-control', 'required', 'id'=>'name']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Cancel
                    </button>
                    {{--                {!! Form::submit('Create', ['class'=>'btn btn-success', 'id'=>'action_button', 'name'=>'action_button', '<i--}}
                    {{--                        class="fas fa-plus-circle"'=>'']) !!}--}}
                    <button type="submit" id="action_button" name="action_button">
                        <i class="fas fa-plus-circle"></i>
                    </button>
                    <input type="hidden" id="cate_id" name="cate_id" value="0">
                    <input type="hidden" name="action" id="action"/>
                </div>
            </div>
            {{--            {!! Form::close() !!}--}}
        </form>
    </div>
</div>

{{--@push('js-stack')--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#modal-delete-confirmation').on('show.bs.modal', function (event) {--}}
{{--                var button = $(event.relatedTarget);--}}
{{--                var actionTarget = button.data('action-target');--}}
{{--                var modal = $(this);--}}
{{--                modal.find('form').attr('action', actionTarget);--}}

{{--                if (button.data('remove-submit-button') === true) {--}}
{{--                    modal.find('button[type=submit]').hide();--}}
{{--                } else {--}}
{{--                    modal.find('button[type=submit]').show();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
{{--<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h4 class="modal-title" id="userCrudModal"></h4>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <form id="userForm" name="userForm" class="form-horizontal">--}}
{{--                    <input type="hidden" name="user_id" id="user_id">--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="name" class="col-sm-2 control-label">Name</label>--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"--}}
{{--                                   value="" maxlength="50" required="">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="col-sm-2 control-label">Email</label>--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"--}}
{{--                                   value="" required="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-primary" id="btn-save" value="create">Save changes--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
