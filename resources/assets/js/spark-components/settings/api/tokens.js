var base = require('settings/api/tokens');

Vue.component('spark-tokens', {
    mixins: [base],
    /**
     * The component's data.
     */
    data() {
        return {
            updatingToken: null,
            deletingToken: null,

            updateTokenForm: new SparkForm({
                name: '',
                site: '',
                abilities: []
            }),

            deleteTokenForm: new SparkForm({})
        }
    }
});
