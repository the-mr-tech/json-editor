
<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <div id="{{$name}}" style="width: 100%; height: 100%;"></div>

        <input type="hidden" name="{{$name}}" value="{{ !is_string(old($column, $value)) ? json_encode(old($column, $value)) : old($column, $value) }}" />
        @include('admin::form.help-block')

    </div>
</div>
