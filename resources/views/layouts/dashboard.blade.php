<?php use App\Fly01\Models\Blog\Setting; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    
</head>
<body>
<header>
    <navigation></navigation>
</header>
<main>
    <router-link v-show="showActionButton"
                 to="/dashboard/posts/create"
                 class="fixed-action-btn btn-floating btn-large waves-effect waves-light blue tooltipped hide-on-med-and-down"
                 data-position="left" data-delay="50" :data-tooltip="$trans('create')">
        <i class="material-icons">mode_edit</i>
    </router-link>
    <div class="col s12 m12 l10">
        <circular-loader id="main-preloader" size="tiny" :loading="store.loading" class="right"></circular-loader>
        <router-view></router-view>
    </div>
</main>
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'isProduction' => env('APP_ENV') === 'prod' || env('APP_ENV') === 'production'
    ]) !!};
    window.dictionary = {!! json_encode(trans('app')) !!};
</script>
<script src="{{ url('js/dashboard.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
            
</body>
</html>