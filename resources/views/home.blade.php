<!-- Home page -->

@extends('page')

@section('content')
<div class='ui container fluid' id='homeSearchContainer'>
  @include('Common/SearchForm')
</div>
<div id='homeLinuxRepo'>
  <div class='ui divider'></div>
  <h1 class='ui header'>OR</h1>
  <div class="ui segment" id='linuxSegment'>
    <a href="torvalds/linux/commits">
      torvalds/linux
    </a>
  </div>
</div>
@stop()