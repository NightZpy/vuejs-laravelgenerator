Vue.component('vuetable-pagination-dropdown', {
    template: '#vuetable-pagination-dropdown-template',
    mixins: [paginationMixin],
    props: {
        'dropdownClass': {
            type: String,
            default: function() {
                return 'form-control'
            }
        },
        'pageText': {
            type: String,
            default: function() {
                return 'Page'
            }
        }
    },
    methods: {
        loadPage: function(page) {
            // update dropdown value
            if (page == 'prev' && !this.isOnFirstPage) {
                this.setDropdownToPage(this.tablePagination.current_page-1)
            } else if (page == 'next' && !this.isOnLastPage) {
                this.setDropdownToPage(this.tablePagination.current_page+1)
            }

            this.$dispatch('vuetable-pagination:change-page', page)
        },
        setDropdownToPage: function(page) {
            this.$nextTick(function() {
                document.getElementById('vuetable-pagination-dropdown').value = page
            })
        },
        selectPage: function(event) {
            this.$dispatch('vuetable-pagination:change-page', event.target.selectedIndex+1)
        },
    },
    events: {
        'vuetable:load-success': function(tablePagination) {
            this.tablePagination = tablePagination
            this.setDropdownToPage(tablePagination.current_page)
        }
    }
}); 