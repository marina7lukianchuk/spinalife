<template>
  <li
    v-click-away="onClickAway"
    @click="isActive = !isActive"
    :style="{
      'width': isActive ? itemMaxWidth + 'px' : itemMinWidth + 'px',
      'min-width': isMobile ? itemMinWidthMobile + 'px' : itemMinWidth + 'px',
      'max-width': isMobile ? itemMaxWidthMobile + 'px' : itemMaxWidth + 'px',
      'height': isActive ? itemMaxHeight + 'px' : itemMinHeight + 'px',
      'min-height': isMobile ? itemMinHeight + 'px' : 'auto',
      'max-height': isMobile ? itemMaxHeight + 'px' : 'auto'
    }"
    class="js-horizontal-collapse-item horizontal-collapse__item"
    :class="{
      'is-active': isActive,
      [className]: true,
      'js-horizontal-collapse-item--mobile': isMobile,
      'js-horizontal-collapse-item--tablet': isTablet
    }"
    tabindex="0"
    role="button"
  >
    <div
      :style="{
        'width': isMobile ? itemMaxWidthMobile + 'px' : itemMaxWidth + 'px',
        'min-height': isMobile ? itemMinHeight + 'px' : 'auto',
        'max-height': isMobile ? itemMaxHeight + 'px' : 'auto'
      }"
      class="js-horizontal-collapse-item-inner horizontal-collapse__item-inner"
    >
      <slot></slot>
    </div>
  </li>
</template>
  
<script>
import { mixin as VueClickAway } from "vue3-click-away";
  export default {
    name: 'HorizontalCollapseItem',
    mixins: [VueClickAway],
    data() {
    return {
      isActive: false,
      itemMinWidth: 228,
      itemMaxWidth: 585,
      isMobile: false,
      isTablet: false,
      itemMinHeight: 450,
      itemMaxHeight: 450,
    };
  },
  methods: {
    onClickAway() {
      this.isActive = false;
    },
    updateWidth() {
      const windowWidth = window.innerWidth;
      if (windowWidth <= 576) {
        this.isMobile = true;
        this.isTablet = false;
        this.itemMinWidth = 400;
        this.itemMaxWidth = 400;
        this.itemMinHeight = 200;
        this.itemMaxHeight = 350;
        this.itemMinWidthMobile = 400;
        this.itemMaxWidthMobile = 400;
      } else if (windowWidth <= 768) {
        this.isMobile = true;
        this.isTablet = false;
        this.itemMinWidth = 420;
        this.itemMaxWidth = 520;
        this.itemMinWidthMobile = 450;
        this.itemMaxWidthMobile = 520;
        this.itemMinHeight = 240;
        this.itemMaxHeight = 380;
      } else if (windowWidth <= 1024) {
        this.isMobile = false;
        this.isTablet = true;
        this.itemMinWidth = 180;
        this.itemMaxWidth = 360;
      } else {
        this.isMobile = false;
        this.isTablet = false;
        this.itemMinWidth = 228;
        this.itemMaxWidth = 585;
        this.itemMinHeight = 500;
        this.itemMaxHeight = 500;
      }
    }
  },
  props: ["className"],
  mounted() {
    window.addEventListener('resize', this.updateWidth);
    this.updateWidth();
  },
  beforeUnmount() {
    window.removeEventListener('resize', this.updateWidth);
  }
};
</script>
  
  <style>

</style>