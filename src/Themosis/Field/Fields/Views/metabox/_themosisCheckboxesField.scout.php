{{ Themosis\Facades\Form::checkboxes($field['name'], $field['options'], $field['value'], array('data-field' => 'checkbox', 'id' => $field['name'].'-id', 'class' => $field['class'])) }}

@if(isset($field['info']))
    <div class="themosis-field-info">
        <p>{{ $field['info'] }}</p>
    </div>
@endif