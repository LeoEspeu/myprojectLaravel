<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>My Project</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="RECAPTCHA-TOKEN" content="">
    <!--[if IE]>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="no" http-equiv="imagetoolbar"/>
    <meta content="true" name="MSSmartTagsPreventParsing"/>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
</head>
<body id="top">
<div>
    <img id="image" src="/images/basic.jpg">
</div>
<div class="container-fluid" style="margin-top: 20px;">
    {!! form($form, $formOptions = ['class'=>'dropzone']) !!}
    @if(session()->has('error'))
        <div class="alert alert-danger text-center" style="margin-top: 1rem !important">{!! session('error') !!}</div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success text-center" style="margin-top: 1rem !important">{!! session('success') !!}</div>
    @endif
</div>
<div class="container-fluid" id="img-cropp">
</div>
</body>
</html>