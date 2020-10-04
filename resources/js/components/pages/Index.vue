<template>
  <div>
    <div class="row">
      <div
        class="col-12 d-flex align-items-center justify-content-center"
        style="height: 70vh"
      >
        <h1
          class="d-flex text-white flex-column text-center bg-dark px-5 py-3 rounded-lg"
        >
          <span>Solusi kamu punya website tanpa ribet</span>
          <span class="font-weight-bold"
            >{
            <router-link
              to="/jasa"
              class="base-text-purple font-weight-bold"
              style="text-decoration: none"
            >
              Jascom
            </router-link>
            }</span
          >
        </h1>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-12">
        <div class="card border-0">
          <div class="card-body px-0">
            <div class="input-group">
              <div class="input-group-prepend border-right-0">
                <span class="input-group-text focus-include bg-transparent">
                  <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-search"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"
                    />
                  </svg>
                </span>
              </div>
              <input
                type="text"
                class="form-control shadow-none focus-border border-left-0 pl-0"
                placeholder="Cari referensi halaman yang kamu inginkan ..."
                autofocus
              />
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img src="images/go-crepe-353x284.jpg" class="card-img-top" />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Go crepe</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img
            src="images/creative-photography-353x286.jpg"
            class="card-img-top"
          />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Creative photography</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img src="images/katt-353x292.jpg" class="card-img-top" />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Katt</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img src="images/ilene-berg-353x295.jpg" class="card-img-top" />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Ilene berg</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img src="images/go-crepe-353x284.jpg" class="card-img-top" />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Go crepe</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img
            src="images/creative-photography-353x286.jpg"
            class="card-img-top"
          />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Creative photography</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img src="images/katt-353x292.jpg" class="card-img-top" />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Katt</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img src="images/ilene-berg-353x295.jpg" class="card-img-top" />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Ilene berg</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img src="images/go-crepe-353x284.jpg" class="card-img-top" />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Go crepe</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img
            src="images/creative-photography-353x286.jpg"
            class="card-img-top"
          />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Creative photography</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img src="images/katt-353x292.jpg" class="card-img-top" />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Katt</h6>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 px-2 mt-3">
        <div class="card border-0">
          <img src="images/ilene-berg-353x295.jpg" class="card-img-top" />
          <div class="card-body pt-2">
            <a href="#" class="text-dark">
              <h6 class="card-title">Ilene berg</h6>
            </a>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</template>
<script>
export default {};
</script>
<style lang="scss" scoped>
@media (max-width: 512px) {
  h1 {
    font-size: 11px;
    span:last-child {
      font-size: 20px;
    }
  }
}
</style>