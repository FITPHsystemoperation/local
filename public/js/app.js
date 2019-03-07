new Vue({
    el: '#navbar',
    data: {
        isActive: false,
    },
    methods: {
        toggleNavbar()
        {
            this.isActive = ! this.isActive;
        }
    }
});
