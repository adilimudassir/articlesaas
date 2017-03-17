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
        }
    }
});
