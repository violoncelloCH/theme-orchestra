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
        <div v-if="node.theme.page_type === 'about'">
          <hr>
          <div class="uk-form-row">
              <label class="uk-form-label" for="form-h-it">Show about images</label>
              <div class="uk-form-controls">
                <input class="uk-width-medium" v-model="node.theme.about_images" type="checkbox">
              </div>
          </div>
          <div v-if="node.theme.about_images" class="uk-form-row">
            <label class="uk-form-label" for="form-h-it">Folder with images</label>
            <div class="uk-form-controls">
              <input-link class="uk-width-1-2" :link.sync="node.theme.image_folder"></input-link>
              <p>Make sure to select a folder and not a file or URL here.<br>The folder should only contain the images you want to see on the about page (no other files/subfolders). The images are ordered alphabetically by name.</p>
            </div>
          </div>

          <div class="uk-form-row">
              <label class="uk-form-label" for="form-h-it">Show about videos</label>
              <div class="uk-form-controls">
                <input class="uk-width-medium" v-model="node.theme.about_videos" type="checkbox">
              </div>
          </div>
          <div v-if="node.theme.about_videos" class="uk-form-row">
            <label class="uk-form-label" for="form-h-it">Link(s?)</label>
            <div v-for="(key, video_link) in node.theme.about_video_links" class="uk-form-controls">
              <input-link class="uk-width-1-2" :link.sync="node.theme.about_video_links[key]"></input-link>
            </div>
            <div class="uk-form-controls">
              <input-link id="new" class="uk-width-1-2" :link.sync="node.theme.about_video_links[node.theme.about_video_links.length]"></input-link>
            </div>
          </div>


          <hr>
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
