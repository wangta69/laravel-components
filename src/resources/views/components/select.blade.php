
<select 
name="{{$name}}" 
@if(isset($class)) class="{{ $class }}" @endif 
@if(isset($id)) id="{{ $id }}" @endif 
@if(isset($multiple)) multiple @endif
@if(isset($style)) style="{{ $style }}" @endif
@if(isset($autocomplete)) autocomplete="{{ $autocomplete }}" @endif
>
  @foreach($options as $k=>$v)
    @if(isset($optionLabel)) 
    {{-- <option value="{{ $v->{$optionValue} }}" @if(isset($value) && $value == $k) selected @endif>{{ $v->{$optionLabel} }}</option> --}}
   
    <option value="{{ $v->{$optionValue} }}" @if(isset($value) && $value->find($v->{$optionValue})) selected @endif>
      {{ $v->{$optionLabel} }}
    </option>
    @else
      <option value="{{$k}}" @if(isset($value) && $value == $k) selected @endif>{{$v}}</option>
    @endif
  @endforeach
</select>