<template>
  <section class="section hide-model">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <!-- Vertically centered Modal -->
            <button
              id="login-btn"
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#verticalycentered"
            >
              Log In
            </button>
            <div class="modal fade" id="verticalycentered" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <!-- login code section start -->
                  <div class="container nopadding">
                    <div
                      class="col-12 d-flex flex-column align-items-center justify-content-center"
                    >
                      <div class="card mb-3 noshadow">
                        <div class="card-body">
                          <div class="pt-4 pb-2 cardheader">
                            <h5 class="card-title text-center pb-0 fs-4 d-flex">
                              Login to Your Account
                            </h5>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>

                          <form
                            class="row g-3 needs-validation"
                            novalidate
                            @submit.prevent="signIn"
                          >
                            <div class="col-12">
                              <label for="yourUsername" class="form-label"
                                >Username</label
                              >
                              <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend"
                                  >@</span
                                >
                                <input
                                  type="text"
                                  name="username"
                                  class="form-control"
                                  id="yourUsername"
                                  v-model="userName"
                                  required
                                />
                                <div class="invalid-feedback">
                                  Please enter your username.
                                </div>
                              </div>
                            </div>

                            <div class="col-12">
                              <label for="yourPassword" class="form-label"
                                >Password</label
                              >
                              <input
                                type="password"
                                name="password"
                                class="form-control"
                                id="yourPassword"
                                v-model="userPassword"
                                required
                              />
                              <div class="invalid-feedback">
                                Please enter your password!
                              </div>
                            </div>

                            <div class="col-12">
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  name="remember"
                                  value="true"
                                  id="rememberMe"
                                />
                                <label class="form-check-label" for="rememberMe"
                                  >Remember me</label
                                >
                              </div>
                            </div>
                            <div class="col-12">
                              <button class="btn btn-primary w-100" type="submit">
                                Login
                              </button>
                            </div>
                            <div class="col-12">
                              <p class="small mb-0">
                                Don't have account?
                                <a href="pages-register.html">Create an account</a>
                              </p>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- login code section end -->
                </div>
              </div>
            </div>
            <!-- End Vertically centered Modal-->
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script setup>
import { ref } from "vue";
import axios from "axios";

const show = ref(false);
const userName = ref("");
const userPassword = ref("");

defineExpose({
  doSomething() {
    document.getElementById("login-btn").click();
  },
});
async function signIn() {
  let formData = {
    email: userName.value,
    password: userPassword.value,
  };
  let postResponse = await axios
    .post("http://127.0.0.1:8000/api/auth/login", formData)
    .then((response) => {
      return response;
    });
  debugger;
}
</script>
<style>
.hide-model {
  position: absolute;
  inset: 0;
  display: grid;
}
</style>
