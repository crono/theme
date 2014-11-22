<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Themosis</title>
    <meta name="description" content="Themosis framework">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<h1>Sample Page</h1>
<p>Hello World!</p>

<p>{{ $prout }}</p>

<div class="form">
    <h2>Basic form</h2>
    {{ Form::open() }}

    <p>{{ Form::label('acteur', 'Acteur:') }}</p>
    <p>{{ Form::text('acteur', $inputs['acteur'], array('id' => 'acteur')) }}</p>
    <p>{{ Form::label('director', 'Director email:') }}</p>
    <p>{{ Form::text('director', $inputs['director'], array('id' => 'director')) }}</p>

    <p>{{ Form::submit('submit', 'Submit') }}</p>

    {{ Form::close() }}
</div>

<?php wp_footer(); ?>
</body>
</html>