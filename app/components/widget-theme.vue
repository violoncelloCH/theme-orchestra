<template>

    <div class="uk-block uk-block-secondary uk-text-center">
      <h1 class="uk-contrast">Violoncello Widget Settings</h1>
    </div>

    <div class="uk-block uk-block-muted" style="border:1px solid #ede7e7; padding: 10px;">
      <div class="uk-form uk-form-horizontal">
        <div class="uk-form-row">
            <label class="uk-form-label" for="form-h-it">Widget Title Hide</label>
            <div class="uk-form-controls">
              <input class="uk-width-medium" v-model="widget.theme.title_hide" type="checkbox">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="form-h-it">Card Style</label>
            <div class="uk-form-controls">
              <select class="uk-width-1-2" v-model="widget.theme.card_style">
                <option value="">No Style</option>
                <option value="uk-card-default">.uk-card-default</option>
                <option value="uk-card-primary">.uk-card-primary</option>
                <option value="uk-card-secondary">.uk-card-secondary</option>
              </select>
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="form-h-it">Card Padding</label>
            <div class="uk-form-controls">
              <select class="uk-width-1-2" v-model="widget.theme.card_padding">
                <option value="">No Padding</option>
                <option value="uk-card-body">.uk-card-body</option>
              </select>
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="form-h-it">Image Link</label>
            <div class="uk-form-controls">
                <input class="uk-width-1-2" v-model="widget.theme.image_link" type="text">
            </div>
        </div>
        <div class="uk-form-row">
          <label class="uk-form-label" for="form-h-it">Card Background Image</label>
          <div class="uk-form-controls">
            <input-image :source.sync="widget.theme.card_image"></input-image>
          </div>
        </div>
      </div>
    </div>

</template>

<script>
    module.exports = {
        section: {
            label: 'Theme',
            priority: 90
        },
        props: ['widget', 'config']
    };
    window.Widgets.components['theme'] = module.exports;
</script>
