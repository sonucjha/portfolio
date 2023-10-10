<template>
  <ul class="sidebar-nav" id="sidebar-nav">
    <!-- <li class="nav-item">
      <a class="nav-link collapsed hand" @click.stop="changeRoute('/intro')">
        <i class="bi bi-grid"></i>
        <span>Intro</span>
      </a>
    </li> -->

    <li class="nav-item">
      <a
        class="nav-link collapsed"
        data-bs-target="#components-nav"
        data-bs-toggle="collapse"
        href="#"
      >
        <i class="bi bi-gear"></i><span>Introduction</span
        ><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a @click.stop="changeRoute('/intro')" class="hand">
            <i class="bi bi-circle"></i><span>Detail</span>
          </a>
        </li>
        <li>
          <a @click.stop="changeRoute('/intro-add')" class="hand">
            <i class="bi bi-circle"></i><span>Add Detail</span>
          </a>
        </li>
        <li>
          <a @click.stop="changeRoute('/intro-edit')" class="hand">
            <i class="bi bi-circle"></i><span>Edit Detail</span>
          </a>
        </li>
      </ul>
    </li>
    <!-- End Dashboard Nav -->

    <!-- <li class="nav-item">
  <a class="nav-link collapsed hand"  @click.stop="$root.changeRoute('/chat')">
    <i class="bi bi-person"></i>
    <span>Chat</span>
  </a>
</li> -->
    <!-- End Student Nav -->

    <!-- <li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-gear"></i><span>Setting</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a @click.stop="$root.changeRoute('/register-student')" class="hand">
        <i class="bi bi-circle"></i><span>Register Student</span>
      </a>
    </li>
    
   
  </ul>
</li> -->
    <!-- End Setting Nav -->
  </ul>
</template>
