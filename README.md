# Pondol's components

## Installation
```
composer require wangta69/laravel-components
```

## How to Use
### HTML Components
#### text
```
<x-pondol::text 
  class="" 
   name="example"
  :placeholder="trans('bbs::messages.admin.bbs.category-name')" />
```

#### radio
```
<x-pondol::radio 
  class="" 
  id=""
  name="example" 
  value="0" 
  curval="{{ old('example', isset($example) &&  $example ? $example :'[default value]')}}"/>
```

#### checkbox
```
<x-pondol::checkbox 
  class="" 
  id=""
  name="example" 
  value="0" 
  curval= "{{  old('example', $example )}}"/>
```
#### select
```
<x-pondol::select 
  class="" 
  id="" 
  name="example" 
  :options="$options" 
  value="{{ old('example', isset($example) && $example ? $example : '')}}" />
```
##### When options is object
```
<x-pondol::select 
  :options="$options" 
  option-label="name" 
  option-value="id"
  value="{{ old('example', isset($example) && $example ? $example : '')}}" />
```

#### select multiple
```
<x-pondol::select multiple .......... />
```

### Error
> 기본 style은 bootstrap 5 이다.
#### has
> 특정 필드만 validaion error 발생시
```
<x-pondol::validation-fail.has field="email" />
```
#### first
> 다수 에러중 하나만 출력
```
<x-pondol::validation-fail.first />
```
#### all
> 다수 에러 출력
```
<x-pondol::validation-fail.all />
```
#### custom
> errors 가 아닌 redirect()->back()->with('error', '') 로 정의된 경우
```
<x-pondol::validation-fail.custom />
```

