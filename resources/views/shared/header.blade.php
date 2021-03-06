<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
  <a class="navbar-brand text-white" href="#">ProQuest</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="nav navbar-nav">
      <li class="nav-item"><a class="nav-link"  href="{{url('questions')}}">Questions</a></li>
      <li class="nav-item"><a class="nav-link"  href="{{url('about')}}">About</a></li>
      <li class="nav-item"><a class="nav-link"  href="{{url('contact')}}">Contact</a></li>
      
    </ul>
     
     @include('shared.user_actions')
     @include('shared.question_search_form')

  </div>
</nav>
<!-- End of header-->