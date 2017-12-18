<!-- CommitDetails -->

<!--
As CommitListElement there is a lot of
different cases for the authors and the
profile picture depending on the informations
we have access.
-->

<div class="ui segment commitDetails">
  <div class="commitDetailsHeader">
    <div class="commitAuthor">
      <!--Profile picture cases-->
      @if(isset($commit->author))
        <a href="{{$commit->author->html_url or 'http://github.com'}}" class="profilePictureContainer">
          <img href="{{$commit->author->html_url or 'http://github.com'}}" class="profilePicture" src="{{$commit->author->avatar_url}}">
        </a>
      @else
        <a href="{{$commit->committer->html_url}}">
          <img class="profilePicture" src="{{$commit->committer->avatar_url}}">
        </a>
      @endif
      <div class="commitAuthorLogin">
        <!--Authors description cases-->
        @if(isset($commit->author))
            <a href="{{$commit->author->html_url or 'http://github.com'}}" >{{$commit->author->login or 'Author unknown'}}</a>
        @else
            <div>
              {{$commit->commit->author->name}} committed with
              <a href="{{$commit->committer->html_url}}">{{$commit->committer->login}}</a>
            </div>
        @endif
      </div>
    </div>
    <div class="headerRight">
      <div class="sha" href="commits/{{$commit->sha}}">
        <i class="tag icon"></i>
        {{$commit->sha}}
      </div>
      <div class="commitDetailsDate">
        <?php
          $date = new DateTime($commit->commit->author->date, new DateTimeZone('Europe/London'));
          echo ($date->format('Y-m-d H:i:s'));
        ?>
      </div>
      <div class="commitDetailsGithubLink">
        <a href="{{$commit->html_url}}">Github Link</a>
      </div>
    </div>
  </div>
  <div class="ui divider"></div>
  <div class="commitDetailsContent">
    <div class="description ui container">
      {!! str_replace("\n", "</br>", $commit->commit->message) !!}
    </div>
  </div>
  <div class="ui divider"></div>
  <div class="commitDetailsParents">
    Parents
    @forelse($commit->parents as $parent)
      <div class="commitDetailParent">
        <a class="sha" href="{{$parent->sha}}">
          <i class="tag icon"></i>
          {{$parent->sha}}
        </a>
      </div>
    @endforeach
  </div>
</div>