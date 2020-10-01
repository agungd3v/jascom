<template>
  <div>
    <nav
      class="navbar navbar-expand-lg navbar-light bg-light fixed-top w-100 bg-white border-bottom"
    >
      <div class="container">
        <router-link to="/" class="navbar-brand">
          <h1 class="base-text-purple">Jascom</h1>
        </router-link>
        <button
          class="navbar-toggler outline-none border-0"
          type="button"
          data-toggle="collapse"
          data-target="#navJascom"
          aria-expanded="false"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between align-items-center"
          id="navJascom"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link to="/tentang" class="nav-link base-text-gray">
                Tentang Kami
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/jasa" class="nav-link base-text-gray">
                Jasa Kami
              </router-link>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle base-text-gray"
                href="#"
                id="dropJascom"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Blog's
              </a>
              <div class="dropdown-menu py-0" aria-labelledby="dropJascom">
                <router-link to="/javascript" class="dropdown-item">
                  <small>Javascript</small>
                </router-link>
                <router-link to="/php" class="dropdown-item">
                  <small>PHP</small>
                </router-link>
                <router-link to="/python" class="dropdown-item">
                  <small>Python</small>
                </router-link>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link
                to=""
                class="nav-link btn base-bg-purple base-text-white px-3 rounded-lg"
              >
                <small>Hubungi Kami</small>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-10">
      <router-view></router-view>
    </div>
  </div>
</template>
<script>
export default {};
</script>