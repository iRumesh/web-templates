<template>
  <article id="tables">
    <card-lable lablename="Tables" lablelink="https://templates.iqonic.design/hope-ui/pro/documentation/vue/Tables"></card-lable>
    <section-components preview-component="tables-preview" code-component="tables-code" targetpreview="tables-preview" targetcode="tables-code"></section-components>
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
