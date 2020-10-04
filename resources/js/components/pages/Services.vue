<template>
  <div class="row justify-content-center">
    <div
      v-for="service in services"
      :key="service.data"
      class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-3"
    >
      <div class="card pricing position-relative">
        <div class="card-body">
          <div class="text-center">
            <p class="text-muted">{{ service.service_name }}</p>
            <h1 class="mt-3">{{ service.budget }}</h1>
          </div>
          <hr />
          <ul class="list-group">
            <li
              v-for="item in service.item"
              :key="item.item"
              class="list-group-item border-0 py-1"
            >
              <i class="fa fa-check mr-2 base-text-purple"></i>
              <span>{{ item.item_name }}</span>
            </li>
          </ul>
          <hr />
          <button
            type="button"
            class="btn btn-block base-bg-purple base-text-white"
            v-on:click="orderCode = service.id"
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
                    type="number"
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
                    type="email"
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
              :disabled="isDisabled == true"
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
      // Disabled after click
      isDisabled: false,
      // Order
      orderCode: null,
      fullName: null,
      phoneNumber: null,
      emailAddress: null,
      description: null,
      // Loader
      loader: require("../assets/loader.gif"),
      waiting: false,
      // Mix key
      mixKey: process.env.MIX_MY_KEYGEN,
      // Services
      services: null,
    };
  },
  mounted() {
    this.getService(this.mixKey);
  },
  methods: {
    order() {
      if (this.waiting == false) {
        this.waiting = true;
        this.isDisabled = true;
        pace.start();
        axios
          .post("/order-proccess", {
            nama: this.fullName,
            tlp: this.phoneNumber,
            email: this.emailAddress,
            keterangan: this.description,
            order: this.orderCode,
          })
          .then((result) => {
            if (result.status == 200) {
              this.waiting = false;
              $("#pricing").modal("toggle");
              this.$router.push({ path: "/" });
              setTimeout(() => {
                this.flash("Terimakasih telah memesan jasa kami", "success", {
                  timeout: 5000,
                  important: true,
                });
              }, 500);
            }
          })
          .catch((err) => {
            console.log(err);
          });
      }
    },
    getService(key) {
      axios
        .get(`api/${key}/get/jasa`)
        .then((res) => {
          if (res.status == 200) {
            this.services = res.data;
          }
        })
        .catch((err) => {
          console.log(err);
        });
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