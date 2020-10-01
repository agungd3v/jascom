<template>
  <div class="row justify-content-center">
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-3">
      <div class="card pricing position-relative">
        <div class="card-body">
          <div class="text-center">
            <p class="text-muted">Portfolio Website</p>
            <h1 class="mt-3">1,5 juta</h1>
          </div>
          <hr />
          <ul class="list-group">
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Termasuk .com</span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Termasuk perlindungan https</span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Fitur <strong>statis</strong></span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Penyimpanan <strong>terbatas</strong></span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Bantuan <strong>Senin - Jum'at</strong></span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Pengajuan perubahan konten</span>
            </li>
          </ul>
          <hr />
          <button
            type="button"
            class="btn btn-block base-bg-purple base-text-white"
            v-on:click="portfolio"
            data-toggle="modal"
            data-target="#pricing"
          >
            Pesan Sekarang
          </button>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-3">
      <div class="card pricing position-relative">
        <div class="card-body">
          <div class="text-center">
            <p class="text-muted">Company Profile</p>
            <h1 class="mt-3">5,5 juta</h1>
          </div>
          <hr />
          <ul class="list-group">
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Termasuk .com</span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Termasuk perlindungan https</span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Termasuk manajemen konten</span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Fitur <strong>dinamis</strong></span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span><strong>Pengajuan fitur dari anda</strong></span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Penyimpanan <strong>tidak terbatas</strong></span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Bantuan <strong>24/7</strong></span>
            </li>
            <li class="list-group-item border-0 py-1">
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>Pemeliharaan sistem oleh kami</span>
            </li>
          </ul>
          <hr />
          <button
            type="button"
            class="btn btn-block base-bg-purple base-text-white"
            v-on:click="company"
            data-toggle="modal"
            data-target="#pricing"
          >
            Pesan Sekarang
          </button>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="pricing"
      data-backdrop="static"
      data-keyboard="false"
      tabindex="-1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <span>Pesan Website Sekarang</span>
              <img
                class="loader ml-2"
                :src="loader"
                alt="loading"
                v-if="waiting"
              />
            </h5>
            <button
              type="button"
              class="close outline-none"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <input v-model="orderCode" type="hidden" />
          <div class="modal-body pb-1">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="form-group">
                  <label for="name" class="form-label form-label-sm mb-0">
                    Nama Lengkap
                  </label>
                  <input
                    type="text"
                    id="name"
                    v-model="fullName"
                    class="form-control jascom-input"
                  />
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="form-group">
                  <label for="no_tlp" class="form-label form-label-sm mb-0">
                    Nomor Telepon
                  </label>
                  <input
                    type="text"
                    id="no_tlp"
                    v-model="phoneNumber"
                    class="form-control jascom-input"
                  />
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="form-group">
                  <label for="email" class="form-label form-label-sm mb-0">
                    Email
                  </label>
                  <input
                    type="text"
                    id="email"
                    v-model="emailAddress"
                    class="form-control jascom-input"
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="deskripsi"
                    >Deskripsikan website yang kamu inginkan</label
                  >
                  <textarea
                    id="deskripsi"
                    class="form-control outline-none shadow-none"
                    v-model="description"
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              v-on:click="order"
              class="btn btn-block base-bg-purple base-text-white"
            >
              Pesan
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      // Order
      orderCode: null,
      fullName: null,
      phoneNumber: null,
      emailAddress: null,
      description: null,
      // Loader
      loader: require("../assets/loader.gif"),
      waiting: false,
    };
  },
  mounted() {},
  methods: {
    portfolio() {
      if (this.orderCode != 1) {
        this.orderCode = 1;
      }
    },
    company() {
      if (this.orderCode != 2) {
        this.orderCode = 2;
      }
    },
    order() {
      if (this.waiting == false) {
        this.waiting = true;
        axios
          .post("/order-proccess", {
            nama: this.fullName,
            tlp: this.phoneNumber,
            email: this.emailAddress,
            keterangan: this.description,
            order: this.orderCode,
          })
          .then((result) => {
            this.waiting = false;
            console.log(result);
          })
          .catch((err) => {
            console.log(err);
          });
      }
    },
  },
};
</script>
<style lang="scss" scoped>
.pricing {
  top: 0;
  box-shadow: none;
  transition: all 0.3s ease;
  &:hover {
    top: -0.35rem;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    transition: all 0.3s ease;
  }
}
</style>