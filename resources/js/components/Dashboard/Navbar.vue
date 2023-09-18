<template>
    <li class="nav-item dropdown pe-3">

<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
  <!-- <img src="../../../../public/dashboard_css/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
  <span class="d-none d-md-block dropdown-toggle ps-2 text-capitalize">{{ 'user_name' }}</span>
</a><!-- End Profile Iamge Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
  <li class="dropdown-header">
    <h6 class="text-capitalize">{{ 'user_name' }}</h6>
    <h1 class="text-capitalize" style="font-size:16px;">{{ 'user_role' }}</h1>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <a class="dropdown-item d-flex align-items-center hand"  @click.stop="$root.changeRoute('/account-setting')">
      <i class="bi bi-person"></i>
      <span>Account Setting</span>
    </a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>
  <li>
    <a class="dropdown-item d-flex align-items-center hand" @click.stop="logOut">
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign Out</span>
    </a>
  </li>

</ul><!-- End Profile Dropdown Items -->
</li>
</template>
<script>
export default {
    
};

</script>