<template>
  <article id="dropdowns">
    <card-lable lablename="Dropdown" lablelink="https://templates.iqonic.design/hope-ui/pro/documentation/vue/Dropdown"></card-lable>
    <section-components preview-component="dropdown-preview" code-component="dropdown-code" targetpreview="dropdown-preview" targetcode="dropdown-code"></section-components>
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
