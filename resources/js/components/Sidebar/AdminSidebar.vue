<template>
  <ul class="intro-sidebar" id="intro-sidebar">
    <li class="nav-item">
      <a
        class="nav-link collapsed"
        data-bs-target="#intro-nav"
        data-bs-toggle="collapse"
        href="#"
      >
        <i class="bi bi-gear"></i><span>Introduction</span
        ><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="intro-nav" class="nav-content collapse" data-bs-parent="#intro-sidebar">
        <li>
          <a @click.stop="changeRoute('/intro')" class="hand">
            <span>Detail</span>
          </a>
        </li>
        <li>
          <a @click.stop="changeRoute('/intro-add')" class="hand">
            <span>Add Detail</span>
          </a>
        </li>
        <li>
          <a @click.stop="changeRoute('/intro-edit')" class="hand">
            <span>Edit Detail</span>
          </a>
        </li>
      </ul>
    </li>
  </ul>
  <ul class="about-sidebar" id="about-sidebar">

   <li class="nav-item">
     <a
       class="nav-link collapsed"
       data-bs-target="#about-nav"
       data-bs-toggle="collapse"
       href="#"
     >
       <i class="bi bi-gear"></i><span>About</span
       ><i class="bi bi-chevron-down ms-auto"></i>
     </a>
     <ul id="about-nav" class="nav-content collapse" data-bs-parent="#about-sidebar">
       <li>
         <a @click.stop="changeRoute('/about')" class="hand">
           <span>Detail</span>
         </a>
       </li>
       <li>
         <a @click.stop="changeRoute('/about-add')" class="hand">
           <span>Add Detail</span>
         </a>
       </li>
       <li>
         <a @click.stop="changeRoute('/about-edit')" class="hand">
           <span>Edit Detail</span>
         </a>
       </li>
     </ul>
   </li>
 </ul>
</template>
