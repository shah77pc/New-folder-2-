@extends('admin.layout.base')

@section('title', 'Novo Motivo de Cancelamento ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
        <div class="box box-block bg-white">
            <a href="{{ URL::previous() }}" class="btn btn-default pull-right"><i class="fa fa-angle-left"></i> @lang('admin.back')</a>

            <h5 style="margin-bottom: 2em;">@lang('admin.reason.add_reason')</h5>

            <form class="form-horizontal" action="{{route('admin.reason.store')}}" method="POST" enctype="multipart/form-data" role="form">
                {{csrf_field()}}
                <div class="form-group row">
                    <label for="type" class="col-xs-2 col-form-label">@lang('admin.reason.type')</label>
                    <div class="col-xs-10">
                        <select class="form-control" name="type" id="type">
                            <option value="">Selecione</option>
                            <option value="USER">Passageiro</option>
                            <option value="PROVIDER">Motorista</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="reason" class="col-xs-2 col-form-label">@lang('admin.reason.reason')</label>
                    <div class="col-xs-10">
                        <input class="form-control" autocomplete="off"  type="text" value="{{ old('reason') }}" name="reason" required id="reason" placeholder="@lang('admin.reason.reason')">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="max_amount" class="col-xs-2 col-form-label">@lang('admin.reason.status')</label>
                    <div class="col-xs-10">
                        <select class="form-control" name="status" id="status">
                            <option value="">Selecione</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="zipcode" class="col-xs-2 col-form-label"></label>
                    <div class="col-xs-10">
                        <button type="submit" class="btn btn-primary">@lang('admin.reason.add_reason')</button>
                        <a href="{{route('admin.reason.index')}}" class="btn btn-default">@lang('admin.cancel')</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

