# Pondol's components

## Installation
```
composer require wangta69/laravel-components
```

## How to Use

### text
```
<x-pondol::text 
  class="" 
   name="example"
  :placeholder="trans('bbs::messages.admin.bbs.category-name')" />
```

### radio
```
<x-pondol::radio 
  class="" 
  id=""
  name="example" 
  value="0" 
  checked="{{ old('example', isset($example) &&  $example ? $example :'0')}}"/>
```

### checkbox
```
<x-pondol::checkbox 
  class="" 
  id=""
  name="example" 
  value="0" 
  checked="{{ old('example', isset($example) &&  $example ? $example :'0')}}"/>
```
### select
```
<x-pondol::select 
  class="" 
  id="" 
  name="example" 
  :options="$options" 
  value="{{ old('example', isset($example) && $example ? $example : '')}}" />
```
#### When options is object
```
<x-pondol::select 
  :options="$options" 
  option-label="name" 
  option-value="id"
  value="{{ old('example', isset($example) && $example ? $example : '')}}" />
```

### select multiple
```
<x-pondol::select multiple .......... />
```

