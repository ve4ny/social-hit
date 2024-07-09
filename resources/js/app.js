import './bootstrap';
import { createApp } from 'vue';
import Authentication from "./Components/Auth/Authentication.vue";
import AuthenticationMin from "./Components/Auth/AuthenticationMin.vue";
import Registration from "./Components/Auth/Registration.vue";
import RemindPassword from "./Components/Auth/RemindPassword.vue";
import PasswordReset from "./Components/Auth/PasswordReset.vue";
import Profile from "./Components/Profile.vue";
import Safety from "./Components/Safety.vue";


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
        'AuthenticationMin': AuthenticationMin,
        'Registration': Registration,
        'RemindPassword': RemindPassword,
        'PasswordReset': PasswordReset,
        'Profile': Profile,
        'Safety': Safety
    },
    created() {
        // Установка isLoading на false после загрузки компонента
        this.$nextTick(() => {
            this.isLoading = false;
        });
    }
})

app.mount('#app')
