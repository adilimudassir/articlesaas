var base = require('settings/api/create-token');

Vue.component('spark-create-token', {
    mixins: [base],
    methods: {
        /**
         * Reset the token form back to its default state.
         */
        resetForm() {
            this.form.name = '';
            this.form.site = '';

            this.assignDefaultAbilities();

            this.allAbilitiesAssigned = false;
        },
        /**
         * Create a new API token.
         */
        create() {
            Spark.post('/settings/api/token', this.form)
                .then(response => {
                    console.log(response);
                    this.showToken({'token':response.token, 'secret':response.secret});

                    this.resetForm();

                    this.$parent.$emit('updateTokens');
                });
        },
        /**
         * Select the secret and copy to Clipboard.
         */
        selectSecret() {
            $('#api-secret').select();

            if (this.copyCommandSupported) {
                document.execCommand("copy");
            }
        }
    }
});
