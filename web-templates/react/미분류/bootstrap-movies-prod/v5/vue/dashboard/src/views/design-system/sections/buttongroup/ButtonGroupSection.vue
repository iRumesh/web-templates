<template>
  <article id="buttonGroup">
    <card-lable lablename="Button Group" lablelink="https://templates.iqonic.design/hope-ui/pro/documentation/vue/Buttongroup"></card-lable>
    <section-components preview-component="buttonGroup-preview" code-component="buttonGroup-code" targetpreview="buttonGroup-preview" targetcode="buttonGroup-code"></section-components>
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
