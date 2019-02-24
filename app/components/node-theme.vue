<template>

    <div class="uk-block uk-block-default uk-text-center">
      <h1>Violoncello Page Settings</h1>
    </div>

    <div class="uk-block uk-block-muted" style="border:1px solid #ede7e7; padding: 10px;">
      <div class="uk-form uk-form-horizontal">
        <div class="uk-form-row">
            <label class="uk-form-label" for="form-h-it">Page type</label>
            <div class="uk-form-controls">
              <select class="uk-width-1-2" v-model="node.theme.page_type">
                <option value="">Default</option>
                <option value="home">Home</option>
                <option value="archive">Archive</option>
                <option value="about">About</option>
              </select>
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="form-h-it">Hide site title</label>
            <div class="uk-form-controls">
              <input class="uk-width-medium" v-model="node.theme.title_hide" type="checkbox">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="form-h-it">Remove main area margin</label>
            <div class="uk-form-controls">
              <input class="uk-width-medium" v-model="node.theme.margin_remove" type="checkbox">
            </div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label" for="form-h-it">Page background image</label>
          <div class="uk-form-controls">
            <input-image :source.sync="node.theme.page_image"></input-image>
          </div>
        </div>
      </div>
    </div>

</template>

<script>

    module.exports = {

        section: {
            label: 'Config',
            priority: 90
        },

        props: ['node']

    };

    window.Site.components['node-theme'] = module.exports;

</script>
