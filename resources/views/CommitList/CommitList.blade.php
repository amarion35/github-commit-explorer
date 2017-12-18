<!-- Commit List -->

@forelse($commits as $commit)
  @include('CommitList/CommitListElement')
@endforeach