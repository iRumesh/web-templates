<template>
  <div id="recent-posts-2" class="widget widget_recent_entries">
    <h5 class="widget-title">{{ $t('blogs.recent_posts') }}</h5>
    <ul>
      <li v-for="recent in props.recents" :key="recent">
        <router-link :to="{ name: 'landing-page.blogs.detail', params: { slug: recent.slug } }"> {{ recent.title }} </router-link>
      </li>
    </ul>
  </div>
</template>
<script setup>
const props = defineProps({
  recents: { type: Array, default: () => [] },
});
</script>
