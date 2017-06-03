$(function(){

    var vm = new Vue({

        el: '#repo-config',

        data: {
          ghconfig: $data.ghconfig,
          pageheadder: '',
          subtext: '',
          username: '',
          token: ''
        },

        methods: {
          save: function() {
                this.$set('ghconfig.ghusername', this.username);
                this.$set('ghconfig.ghauthtoken', this.token);
                this.$set('ghconfig.pageheadder', this.pageheadder);
                this.$set('ghconfig.subtext', this.subtext);
                this.$http.post('admin/repositories/save', {ghconfig: this.ghconfig}, function() {
                    UIkit.notify(vm.$trans('Saved.'), '');
                }).catch(function(data) {
                    UIkit.notify(data, 'danger');
                });
            }

        }

    });

});
