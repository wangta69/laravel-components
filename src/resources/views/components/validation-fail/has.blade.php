@if ($errors->has($field))
<div class="alert alert-danger" role="alert">
  {{$errors->first($field)}}
</div>
@endif