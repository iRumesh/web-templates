<template>
  <div ref="slider" :class="props.cardStyleSlider ? null : 'card-style-slider'">
    <div :class="`${props.classlist}`">
      <div :class="props.containerClass ? 'container p-0' : 'container-fluid'">
        <div class="overflow-hidden">
          <div :class="`d-flex align-items-center justify-content-between ${props.marginPadding}`">
            <h5 class="main-title text-capitalize mb-0">{{ props.title }}</h5>
            <slot name="headerLink"></slot>
          </div>
          <Swiper v-if="render" :dir="rtl" :breakpoints="{
            0: {
              slidesPerView: 2,
              spaceBetween: 0,
            },
            576: {
              slidesPerView: 2,
              spaceBetween: 0,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 0,
            },
            1025: {
              slidesPerView: props.slidesPerView,
              spaceBetween: 0,
            },
            1500: {
              slidesPerView: props.slidesPerView,
              spaceBetween: 0,
            },
          }" :watch-slides-progress="true"
            :class="`position-relative swiper swiper-card ${props.swipperClass} ${props.wrapperClass ? 'wrapper-class' : ''}`"
            slide-fully-visible-class="swiper-active" :slides-per-view="slidesPerView" :loop="props.loop"
            :space-between="props.spaceBetween"
            :navigation="{ prevEl: '.swiper-button-prev', nextEl: '.swiper-button-next' }" :modules="modules"
            @swiper="initSwiper" @transition-end="initSwiper">
            <SwiperSlide v-for="data in props.list" :key="data" tag="li">
              <slot :data="data"></slot>
            </SwiperSlide>
            <div class="swiper-button swiper-button-next"></div>
            <div class="swiper-button swiper-button-prev"></div>
          </Swiper>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
// Swiper Components Import
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Autoplay, Navigation } from 'swiper';
import { ref, computed, watch } from 'vue';
import { useSetting } from '../../store/setting/index';

const store = useSetting();
const rtl = computed(() => store.theme_scheme_direction_value);
const render = ref(true);
watch(
  () => rtl.value,
  () => {
    render.value = false;
    setTimeout(() => {
      render.value = true;
    }, 0);
  }
);

// Swiper Modules
const modules = [Navigation, Autoplay];

// Component Props
const props = defineProps({
  title: { type: String, default: 'Section' },
  list: { type: Array, default: () => [] },
  slidesPerView: { type: Number, default: 5 },
  loop: { type: Boolean, default: true },
  spaceBetween: { type: Number, default: 0 },
  classlist: { type: String, default: '' },
  marginPadding: { type: String, default: '' },
  swipperClass: { type: String, default: '' },
  containerClass: { type: String, default: '' },
  cardStyleSlider: { type: String, default: '' },
  wrapperClass: { type: Boolean, default: false },
});

const slider = ref();
const initSwiper = (swiper) => {
  addCustomClassToVisibleSlides(swiper);
};

const addCustomClassToVisibleSlides = (swiper) => {
  if (swiper) {
    slider.value.querySelectorAll('.swiper-slide').forEach((seprateSlide) => seprateSlide.classList.remove('last'));

    // Remove the custom classes from all slides
    const swiperSlide = slider.value.querySelectorAll('.swiper-slide-visible');
    swiperSlide.forEach((sep) => {
      sep.classList.add('swiper-active');
    });
    const lastVisibleSlide = swiperSlide[swiperSlide.length - 1];
    // Add the 'last' class to the last visible slide with 'swiper-active' class
    setTimeout(() => {
      if (lastVisibleSlide) {
        lastVisibleSlide.classList.add('last');
      }
    }, 0);
  }
};
</script>

<style>
.swiper-backface-hidden .swiper-slide {
  transform: unset;
  backface-visibility: visible;
}
</style>
