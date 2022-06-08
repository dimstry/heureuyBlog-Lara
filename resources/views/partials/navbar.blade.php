   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">Dims Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item {{ ($tittle === "Home") ? 'active' : '' }}">
            <a class="nav-link " href="/">Home</a>
          </li>
          <li class="nav-item  {{ ($tittle === "About") ? 'active' : '' }}">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item {{ ($tittle === "Post") ? 'active' : '' }}">
            <a class="nav-link" href="/blog">Post</a>
          </li>
        </ul>
      </div>
    </nav>
    
    