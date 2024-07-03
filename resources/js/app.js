import './bootstrap';
import { createApp } from 'vue';
import Authentication from "./Components/Authentication.vue";
import Registration from "./Components/Registration.vue";


const app = createApp({
    data() {
        return {
            isLoading: true, // Переменная для отслеживания состояния загрузки
            isMobile: window.innerWidth <= 1279,
            isPc: window.innerWidth > 1279,
            isRetina: window.devicePixelRatio > 1,
            isChromeOrFirefox: /Firefox|Chrome|Chromium|Opera/.test(navigator.userAgent)
        };
    },
    components: {
        'Authentication': Authentication,
        'Registration': Registration
    },
    created() {
        // Установка isLoading на false после загрузки компонента
        this.$nextTick(() => {
            this.isLoading = false;
        });
    }
})

app.mount('#app')
