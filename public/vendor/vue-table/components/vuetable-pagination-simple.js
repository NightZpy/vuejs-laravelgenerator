Vue.component('vuetable-pagination-simple', {
    template: '#vuetable-pagination-simple-template',
    mixins: [paginationMixin],
    methods: {
        loadPage: function(page) {
            this.$dispatch('vuetable-pagination:change-page', page)
        },
    },
});  