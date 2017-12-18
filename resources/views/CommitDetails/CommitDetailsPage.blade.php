@extends('page')

@section('content')
<div class="ui three column centered grid">
  <div class="row">
    <div class="three wide column">
    </div>
    <div class="ten wide column">
      @include('CommitDetails/CommitDetails')
    </div>
    <div class="three wide column">
    </div>
  </div>
</div>
@stop