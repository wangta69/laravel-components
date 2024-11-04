<input 
type="checkbox"
@if(isset($class)) class="{{ $class }}" @endif 
  @if(isset($id)) id="{{ $id }}" @endif 
  @if(isset($style)) style="{{ $style }}" @endif
  name="{{ $name }}" 
  value="{{ $value }}" 
  @if(isset($checked) && $checked == $value) checked @endif>