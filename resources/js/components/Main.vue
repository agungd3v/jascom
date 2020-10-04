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
          class="collapse navbar-collapse justify-content-end align-items-center"
          id="navJascom"
        >
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <router-link to="/tentang" class="nav-link base-text-gray">
                Tentang Kami
              </router-link>
            </li> -->
            <li class="nav-item pr-2">
              <router-link to="/jasa" class="nav-link base-text-gray">
                Jasa Kami
              </router-link>
            </li>
            <!-- <li class="nav-item dropdown">
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
            </li> -->
            <li class="nav-item">
              <a
                href="https://api.whatsapp.com/send?phone=6282179099557&text=Hello%20Jascom!,%20saya%20tertarik%20dengan%20jasa%20anda%0ABagaimana%20cara%20saya%20menggunakan%20jasa%20anda%20?"
                target="_blank"
                class="nav-link btn base-bg-purple base-text-white px-3 rounded-lg"
              >
                <small>Hubungi Kami</small>
              </a>
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
export default {
  data() {
    return {
      appName: process.env.MIX_APP_NAME,
      mixKey: process.env.MIX_MY_KEYGEN,
    };
  },
  mounted() {
    require("particles.js");
    this.$nextTick(() => {
      this.initParticlesJS();
    });
    this.focusInclude();
  },
  methods: {
    initParticlesJS() {
      particlesJS(
        "content",
        {
          particles: {
            number: {
              value: 80,
            },
            color: {
              value: "#b626df",
            },
            size: {
              value: 3,
            },
            line_linked: {
              color: "#718096",
              width: 0.5,
            },
          },
          interactivity: {
            detect_on: "canvas",
            events: {
              onhover: {
                enable: false,
                mode: "repulse",
              },
              onclick: {
                enable: true,
                mode: "push",
              },
              resize: true,
            },
            modes: {
              grab: {
                distance: 400,
                line_linked: {
                  opacity: 1,
                },
              },
              bubble: {
                distance: 400,
                size: 40,
                duration: 2,
                opacity: 8,
                speed: 3,
              },
              repulse: {
                distance: 200,
              },
              push: {
                particles_nb: 4,
              },
              remove: {
                particles_nb: 2,
              },
            },
          },
          retina_detect: true,
        },
        false
      );
    },
    focusInclude() {
      const fb = document.querySelectorAll(".focus-border").forEach((e) => {
        e.addEventListener("focus", () => {
          e.parentNode.children[0].children[0].classList.add("true");
        });
        e.addEventListener("focusout", () => {
          e.parentNode.children[0].children[0].classList.remove("true");
        });
      });
    },
  },
};
</script>