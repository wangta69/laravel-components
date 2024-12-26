<?php

// use Appstract\BladeDirectives\Parser;
use Illuminate\Support\Str;

return [

 'checkedtrue' => function ($condition) {
    return "<?php echo $condition ? 'checked': '' ?>";
  },

  'iftrue' => function ($expression) {
    list($condition, $expression) = explode(', ', $expression);
    return "<?php echo $condition ? $expression: '' ?>";
  },

  'inarray' => function ($expression) {
    list($key, $arr, $expression) = explode(', ', $expression);
    return "<?php echo isset({$arr}) && in_array($key, {$arr}) ? $expression: '' ?>";
  },


    /*
  |---------------------------------------------------------------------
  | @istrue / @isfalse
  |---------------------------------------------------------------------
  |
  | These directives can be used in different ways.
  | @istrue($v) Echo this @endistrue, @istrue($v, 'Echo this')
  | or @istrue($variable, $echoThisVariables)
  |
  */

  'istrue' => function ($expression) {
    if (Str::contains($expression, ',')) {
        list($condition, $expression) = explode(', ', $expression);
        return implode('', [
            "<?php if (isset({$condition}) && (bool) {$condition} === true) : ?>",
            "<?php echo {$expression}; ?>",
            '<?php endif; ?>',
        ]);
    }

    return "<?php if (isset({$expression}) && (bool) {$expression} === true) : ?>";
  },

  'endistrue' => function () {
      return '<?php endif; ?>';
  },

  'isfalse' => function ($expression) {
      if (Str::contains($expression, ',')) {
        list($condition, $expression) = explode(', ', $expression);

          return implode('', [
              "<?php if (isset({$condition}) && (bool) {$condition} === false) : ?>",
              "<?php echo {$expression}; ?>",
              '<?php endif; ?>',
          ]);
      }

      return "<?php if (isset({$expression}) && (bool) {$expression} === false) : ?>";
  },

  'endisfalse' => function () {
    return '<?php endif; ?>';
  },

  /*
  |---------------------------------------------------------------------
  | @isnull / @isnotnull
  |---------------------------------------------------------------------
  |
  | These directives can be used in different ways.
  | @isnull($v) Echo this @endisnull, @isnull($v, 'Echo this')
  | or @isnull($variable, $echoThisVariables)
  |
  */

  'isnull' => function ($expression) {
    if (Str::contains($expression, ',')) {
      list($condition, $expression) = explode(', ', $expression);

      return implode('', [
        "<?php if (is_null({$condition})) : ?>",
        "<?php echo {$expression}; ?>",
        '<?php endif; ?>',
      ]);
    }

    return "<?php if (is_null({$expression})) : ?>";
  },

  'endisnull' => function () {
    return '<?php endif; ?>';
  },

  'isnotnull' => function ($expression) {
    if (Str::contains($expression, ',')) {
      list($condition, $expression) = explode(', ', $expression);

      return implode('', [
        "<?php if (is_null({$condition})) : ?>",
        "<?php echo {$expression}; ?>",
        '<?php endif; ?>',
      ]);
    }

    return "<?php if (! is_null({$expression})) : ?>";
  },

  'endisnotnull' => function () {
      return '<?php endif; ?>';
  },

  /*
  |---------------------------------------------------------------------
  | @nl2br
  |---------------------------------------------------------------------
  */

  'nl2br' => function ($expression) {
    return "<?php echo nl2br($expression); ?>";
  },


];