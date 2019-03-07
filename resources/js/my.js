Vue.component('info', {
    props: ['attr'],
    template: `
        <p class="subtitle">
            <span class="has-text-grey">{{ attr }}:</span>

            <span class="has-text-weight-semibold"><slot></slot></span>
        </p>
    `
})

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
    el: '#app',
    data: {
        filename: 'Select Document'
    },
    methods: {
        selectFile(file) {
            this.filename = file.target.files[0].name;
        }
    }
});