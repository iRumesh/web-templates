<template>
  <article id="formToggleButton">
    <card-lable lablename="Toggle Button" lablelink="https://templates.iqonic.design/hope-ui/pro/documentation/vue/Togglebutton"></card-lable>
    <section-components preview-component="formToggleButton-preview" code-component="formToggleButton-code" targetpreview="formToggleButton-preview" targetcode="formToggleButton-code"></section-components>
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
