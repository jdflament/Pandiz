<div class="page-header">
    <h1>{{ $title }}</h1>
</div>

<p>{{ $welcomeMessage }}</p>

<a class="btn btn-md btn-success" href="{{ site_url('subpage') }}">
    {{ __('Open subpage') }}
</a>

<a class="btn btn-md btn-success" href="{{ site_url('about') }}">
    {{ __('Open about') }}
</a>
