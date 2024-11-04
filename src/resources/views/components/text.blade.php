<input 
type="text"
@if(isset($class)) class="{{ $class }}" @endif 
  @if(isset($id)) id="{{ $id }}" @endif 
  @if(isset($style)) style="{{ $style }}" @endif
  @if(isset($placeholder)) placeholder="{{ $placeholder }}" @endif
  name="{{ $name }}" 
  value="@if(isset($value)){{trim($value)}}@endif">
