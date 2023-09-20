<template>
  <login ref="childComponentRef"></login>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" />
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a @click.stop="showModel" class="logo d-flex align-items-center w-auto">
            <span class="d-none d-lg-block">Log In</span>
          </a>
        </li>
        <!-- End Profile Nav -->
      </ul>
    </nav>
    <!-- End Icons Navigation -->
  </header>
  <!-- End Header -->

  <main id="main" class="main bf-main">
    <div class="pagetitle">
      <h1>Blank Page</h1>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Example Card</h5>
              <p>
                This is an examle page with no contrnt. You can use it as a starter for
                your custom pages.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Example Card</h5>
              <p>
                This is an examle page with no contrnt. You can use it as a starter for
                your custom pages.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- End #main -->
</template>

<script setup>
import Login from "./Login.vue";
import { ref, watch } from "vue";

const childComponentRef = ref(null);
let showLogin = ref(false);

function showModel() {
  childComponentRef.value.doSomething();
}

watch(showLogin, async () => {
  childComponentRef.value.doSomething();
});
</script>

<style>
@media (min-width: 1200px) {
  .bf-main {
    margin-left: 0px !important;
  }
}
</style>
