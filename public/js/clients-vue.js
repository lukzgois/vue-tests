;new Vue({
    el: '#clients',
    data: {
        clients: [],
        prev_page_url: '',
        next_page_url: ''
    },
    
    ready: function() {
        var self = this;
        this.makeAjaxRequest('/clients');
    },

    methods: {
        changePage: function(action, e) {
            var self = this;
            var page = action == 'next' ? self.next_page_url : self.prev_page_url;
            self.makeAjaxRequest(page);
            e.preventDefault();
        },
        makeAjaxRequest: function(page) {
            var self = this;
            this.$http.get(page, function(data, status, request) {
                self.clients =  data.data;
                self.prev_page_url = data.prev_page_url;
                self.next_page_url = data.next_page_url;
            });
        }
    }
});