<template>
  <article id="scrollspy">
    <card-lable lablename="Scrollspy" lablelink="https://templates.iqonic.design/hope-ui/pro/documentation/vue/Scrollspy"></card-lable>
    <section-components preview-component="scrollspy-preview" code-component="scrollspy-code" targetpreview="scrollspy-preview" targetcode="scrollspy-code"></section-components>
  </article>
</template>
<script>
import SectionComponents from '../../components/SectionComponents.vue';
import CardLable from '../../components/CardLable.vue';
import { onMounted } from 'vue';
const prism = () => import('@/plugins/prism.mini.js');

export default {
  components: {
    SectionComponents,
    CardLable,
  },
  setup() {
    onMounted(() => {
      prism();
    });
  },
};
</script>
