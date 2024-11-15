@if (!$errors->isEmpty())
  @foreach ($errors->all() as $error)
    <li {{ $attributes->merge(['class'=>'alert alert-danger', 'role'=>'alert'])}}>{{ $error }}</li>
  @endforeach
@endif