<?php $view->script('repo', 'repo:js/index.js', 'vue')?>


    <div id="repo-config" class="uk-form uk-form-horizontal">

        <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin="">
            <div data-uk-margin="">

                <h2 class="uk-margin-remove">Configuration</h2>
                <br>
                <h4>Configure your github account settings here.</h4>

            </div>
            <div data-uk-margin="">

                <button class="uk-button uk-button-primary" @click="save()">Save</button>

            </div>
        </div>
        <div class="uk-switcher uk-margin">
            <div aria-hidden="false" class="uk-active">
                <div class="uk-grid" data-uk-grid-margin="">
                  <div class="uk-width-medium-2-3 uk-width-large-3-4 uk-row-first">
                    <div class="uk-form-row">
                      <label for="form-username" class="uk-form-label">GitHub Username</label>
                      <div class="uk-form-controls">
                        <input id="form-ghusername" class="uk-form-width-large" type="text" name="ghusername" value="{{ ghconfig.ghusername }}" v-model="username">
                      </div>
                    </div>
                    <div class="uk-form-row">
                      <label for="form-name" class="uk-form-label">Github Access Token</label>
                      <div class="uk-form-controls">
                        <input id="form-name" class="uk-form-width-large" type="text" name="ghauthtoken" value="{{ ghconfig.ghauthtoken }}" v-model="token">
                        <p>You can generate a token <a href="https://github.com/settings/tokens" target="_blank">here.</a></p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
<br>
<br>
            <div class="uk-switcher uk-margin">
                <div aria-hidden="false" class="uk-active">
                    <div class="uk-grid" data-uk-grid-margin="">
                      <div class="uk-width-medium-2-3 uk-width-large-3-4 uk-row-first">
                        <div class="uk-form-row">
                          <label for="form-username" class="uk-form-label">Page Headder</label>
                          <div class="uk-form-controls">
                            <input id="form-ghusername" class="uk-form-width-large" type="text" name="pageheadder" value="{{ ghconfig.pageheadder }}" v-model="pageheadder">
                          </div>
                        </div>
                        <div class="uk-form-row">
                          <label for="form-name" class="uk-form-label">Sub Headding Text</label>
                          <div class="uk-form-controls">
                            <input class="uk-textarea uk-form-width-large" rows="5" type='text' value='{{ ghconfig.subtext }}' v-model='subtext'></textarea>

                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div>Icon made by <a href="http://www.flaticon.com/authors/daniel-bruce" title="Daniel Bruce">Daniel Bruce</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> and is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    </div>
