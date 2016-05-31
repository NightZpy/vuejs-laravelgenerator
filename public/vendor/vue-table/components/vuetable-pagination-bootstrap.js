Vue.component('vuetable-pagination-bootstrap', {
    template: '#vuetable-pagination-bootstrap-template',
    mixins: [paginationMixin],
    methods: {
        loadPage: function(page) {
            this.$dispatch('vuetable-pagination:change-page', page)
        },
    },
});