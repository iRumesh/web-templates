<template>
  <article id="badge">
    <card-lable lablename="Badge" lablelink="https://templates.iqonic.design/hope-ui/pro/documentation/vue/Badges"></card-lable>
    <section-components preview-component="badge-preview" code-component="badge-code" targetpreview="badge-preview" targetcode="badge-code"></section-components>
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
