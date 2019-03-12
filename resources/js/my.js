Vue.component('info', {
    props: ['attr'],
    template: `
        <p class="subtitle">
            <span class="has-text-grey">{{ attr }}:</span>

            <span class="has-text-weight-semibold"><slot></slot></span>
        </p>
    `
})

Vue.component('my-link', {
    props: {
        lined: { default: false },
    },
    template: `
        <a class="button" :class="{ 'is-loading': isLoading, 'is-outlined': isOutlined }" @click="toggleMe"><slot></slot></a>
    `,
    data() {
        return {
            isLoading: false,
            isOutlined: false,
        }
    },
    methods: {
        toggleMe() {
            this.isLoading = true;
            this.isOutlined = false;
        }
    },
    mounted() {
        this.isOutlined = this.lined;
    }
})

Vue.component('my-submit', {
    props: {
        lined: { default: false },
    },
    template: `
        <button type="submit" class="button" :class="{ 'is-loading': isLoading, 'is-outlined': isOutlined }" @click="toggleMe"><slot></slot></button>
    `,
    data() {
        return {
            isLoading: false,
            isOutlined: false,
        }
    },
    methods: {
        toggleMe() {
            this.isLoading = true;
            this.isOutlined = false;
        }
    },
    mounted() {
        this.isOutlined = this.lined;
    }
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
        filename: 'Select Document',
        isLoading: false,
        dropdownActive: false,
    },
    methods: {
        selectFile(file) {
            this.filename = file.target.files[0].name;
        },
        submit() {
            this.isLoading = true;
        },
        toggleDropdown() {
            this.dropdownActive = ! this.dropdownActive;
        },
        alert() {
            alert('ok')
        }
    }
});