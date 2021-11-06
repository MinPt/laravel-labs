<label for="{{ $fieldId }}" class="form-label">{{ $labelText }}</label>
<input  name="{{$fieldId}}" id="{{  $fieldId }}" placeholder="{{ $placeHolderText }}"
       @isset($fieldValue)
       value="{{ old($fieldValue) ? old($fieldValue) : $fieldValue }}"
       @else
       value="{{old($fieldValue)}}"
        @endisset
       >
@include("includes/validationErr", ['errFieldName' => $fieldId])
