<nav class="navbar navbar-expand-lg bg-body-tertiary mx-auto">
  <div class="container">
      <a class="navbar-brand" href="/">Faqih Al Firdaus</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto"> <!-- mx-auto untuk navbar berada di tengah -->
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/About">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/Blog">Info</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
