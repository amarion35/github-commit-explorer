<!-- Commit list page -->

@extends('page')

@section('content')
<div class="ui three column centered grid">
  <div class="row">
    <div class="three wide column">
      <h2 class='ui header' id='searchHeader'>Search</h2>
      @include('Common/SearchForm')
    </div>
    <div class="ten wide column">
      @include('CommitList/CommitList')
    </div>
    <div class="three wide column">
    </div>
  </div>
</div>
@stop