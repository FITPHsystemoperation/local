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

new Vue({
    el: '.file',
    data: {
        filename: 'Select Document'
    },
    methods: {
        selectFile(file) {
            this.filename = file.target.files[0].name;
        }
    }
});
