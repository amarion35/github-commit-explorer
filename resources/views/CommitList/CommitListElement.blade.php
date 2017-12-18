<!-- Commit list element -->

<!--
There is a lot of different cases depending on given
informations like the author or the committer.
Sometimes we don't have access to the user informations.
The profile picture or the author description depend of
this parameters.
-->

<div class="ui segment raised">
  <div class="ui container commitListElement">
    <div class="sha">
      <i class="tag icon"></i>
      {{$commit->sha}}
    </div>
    <div class="commitContent">

      <!--Profile picture cases-->
      @if(isset($commit->author))
        <a href="{{$commit->author->html_url or 'http://github.com'}}" class="profilePictureContainer">
          <img href="{{$commit->author->html_url or 'http://github.com'}}" class="profilePicture" src="{{$commit->author->avatar_url}}">
        </a>
      @elseif(isset($commit->committer->html_url))
        <a href="{{$commit->committer->html_url}}">
          <img class="profilePicture" src="{{$commit->committer->avatar_url}}">
        </a>
      @else
        <img class="profilePicture" src="https://camo.githubusercontent.com/489d36b29a8ff7aa6eee9adabcb6eb085285613a/68747470733a2f2f312e67726176617461722e636f6d2f6176617461722f33326266326237636166343233656264346435636335633632383861663431363f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d6726733d3732">
      @endif
      <div class="commitInfos">
        <a href="commits/{{$commit->sha}}" class="commitTitle">
          {{substr($commit->commit->message, 0, 100)}}
          @if(strlen($commit->commit->message)>100)
            ...
          @endif
        </a>
        <div class="commitAuthor">
        
          <!-- Authors description cases -->
          @if(isset($commit->author))
            <a href="{{$commit->author->html_url or 'http://github.com'}}" >{{$commit->author->login or 'Author unknown'}}</a>
          @elseif(isset($commit->committer->html_url))
            <div>
              {{$commit->commit->author->name}} committed with
              <a href="{{$commit->committer->html_url}}">{{$commit->committer->login}}</a>
            </div>
          @else
            <div>
              {{$commit->commit->author->name}} committed with
              {{$commit->commit->committer->name}}
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
