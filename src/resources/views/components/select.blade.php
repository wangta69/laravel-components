<select {{ $attributes->except(['options', 'option-label', 'option-value']) }}>
  @foreach($options as $k=>$v)
    @if(isset($optionLabel)) 
      @if(gettype($value) == 'string') 
      <option value="{{ $v->{$optionValue} }}"  @if(isset($value) && $value == $v->{$optionValue}) selected @endif>
      @else
      <option value="{{ $v->{$optionValue} }}" @if(isset($value) && $value->find($v->{$optionValue})) selected @endif>
      @endif
      {{ $v->{$optionLabel} }}
    </option>
    @else
      <option value="{{$k}}" @if(isset($value) && $value == $k) selected @endif>{{$v}}</option>
    @endif
  @endforeach
</select>