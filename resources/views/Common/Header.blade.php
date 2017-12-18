<!-- Header -->

<div class='navBarHeader'>
  <!--Title depend of the page-->
  @if(isset($repo))
    <h1>{{$repo}} repository</h1>
  @else
    <h1>Welcome</h1>
  @endif
  <!--Button in the header also depend of the page-->
  @if($title=='Commit Details')
    <a href="." id="backButton">
      <i class="chevron left icon big"></i>
    </a>
  @elseif($title=='Commits List')
    <a href="/home" id="backButton">
      <i class="home left icon big"></i>
    </a>
  @endif
</div>