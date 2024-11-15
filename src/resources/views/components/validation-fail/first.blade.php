@if (!$errors->isEmpty())
<div {{ $attributes->merge(['class'=>'alert alert-danger', 'role'=>'alert'])}}>
  {{$errors->first()}}
</div>
@endif