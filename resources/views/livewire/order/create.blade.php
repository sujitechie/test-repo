<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('order.somedetails') ? 'invalid' : '' }}">
        <label class="form-label" for="somedetails">{{ trans('cruds.order.fields.somedetails') }}</label>
        <input class="form-control" type="text" name="somedetails" id="somedetails" wire:model.defer="order.somedetails">
        <div class="validation-message">
            {{ $errors->first('order.somedetails') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.somedetails_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('product') ? 'invalid' : '' }}">
        <label class="form-label" for="product">{{ trans('cruds.order.fields.product') }}</label>
        <x-select-list class="form-control" id="product" name="product" wire:model="product" :options="$this->listsForFields['product']" multiple />
        <div class="validation-message">
            {{ $errors->first('product') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.order.fields.product_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>