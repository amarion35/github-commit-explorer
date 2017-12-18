<!--
Search menu
Take 2 inputs: user & repo
Then redirect to /user/repo/commits
If the repository is not found the server
redirect to the last page with an error message
stored in Session
-->

<div class="repoSearch">
  <div class="ui input">
    <input id='user' type="text" placeholder="user .."></br>
  </div>
  <div class="ui input">
    <input id='repo' type="text" placeholder="repository .."></br>
  </div>
  <button type="submit" class="ui button searchButton" id="searchButton">
    Search
  </button>
  @if(Session::get('error'))
    <div class="ui negative message">
      <div class="header">
        Error
      </div>
      <p>{{Session::get('error')}}</p>
    </div>
  @endif
</div>

<script>
  $('#searchButton').click(function() {
    var user = $('#user').val();
    var repo = $('#repo').val();
    window.location.replace('../../'+user+'/'+repo+'/commits');
  })
</script>