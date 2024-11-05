@php
$merge = ['type'=>'radio'];
$merge['checked'] = isset($curval) && $curval == $value ? true : false;
@endphp
<input {{ $attributes->merge($merge)->except(['curval']) }}>