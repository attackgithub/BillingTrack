@include('recurring_invoices._js_copy')

<div class="modal fade" id="modal-copy-recurring-invoice">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">@lang('fi.copy')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                <div id="modal-status-placeholder"></div>

                <form>

                    <div class="form-group d-flex align-items-center">
                        <label class="col-sm-4 text-right text">@lang('fi.client')</label>
                        <div class="col-sm-8">
                            {!! Form::text('client_name', $recurringInvoice->client->unique_name, ['id' => 'copy_client_name', 'class' => 'form-control client-lookup', 'autocomplete' => 'off']) !!}
                        </div>
                    </div>

                    <div class="form-group d-flex align-items-center">
                        <label class="col-sm-4 text-right text">@lang('fi.company_profile')</label>
                        <div class="col-sm-8">
                            {!! Form::select('company_profile_id', $companyProfiles, config('fi.defaultCompanyProfile'),
                            ['id' => 'copy_company_profile_id', 'class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group d-flex align-items-center">
                        <label class="col-sm-4 text-right text">@lang('fi.group')</label>
                        <div class="col-sm-8">
                            {!! Form::select('group_id', $groups, $recurringInvoice->group_id, ['id' => 'copy_group_id', 'class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group d-flex align-items-center">
                        <label class="col-sm-4 text-right text">@lang('fi.start_date')</label>
                        <div class="col-sm-8">
                            {!! Form::text('next_date', date(config('fi.dateFormat')), ['id' => 'copy_next_date', 'class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group d-flex align-items-center">
                        <label class="col-sm-4 text-right text">@lang('fi.every')</label>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-3">
                                    {!! Form::select('recurring_frequency', array_combine(range(1, 90), range(1, 90)), '1', ['id' => 'copy_recurring_frequency', 'class' => 'form-control']) !!}
                                </div>
                                <div class="col-sm-8">
                                    {!! Form::select('recurring_period', $frequencies, $recurringInvoice->recurring_period, ['id' => 'copy_recurring_period', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group d-flex align-items-center">
                        <label class="col-sm-4 text-right text">@lang('fi.stop_date')</label>
                        <div class="col-sm-8">
                            {!! Form::text('stop_date', null, ['id' => 'copy_stop_date', 'class' => 'form-control']) !!}
                        </div>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('fi.cancel')</button>
                <button type="button" id="btn-copy-recurring-invoice-submit" class="btn btn-primary">@lang('fi.submit')</button>
            </div>
        </div>
    </div>
</div>