@if ( session('error'))
<div {{ $attributes->merge(['class'=>'alert alert-danger', 'role'=>'alert'])}}>
{{ session('error') }}
</div>
@endif