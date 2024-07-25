<script setup>
import QrcodeVue from 'qrcode.vue'
import {ref} from 'vue';
import { useToast } from 'vue-toast-notification'

const props = defineProps({
    refCode: String,
    siteUrl: String
})

const qrValue = ref(props.siteUrl + '/register-with-referral/' + props.refCode);
const size = ref(200);
const type = ref('canvas');
const toast = useToast();

function getClass(qrSize) {
    return qrSize === size.value ? 'referal-qr__link selected' : 'referal-qr__link';
}

function copyToClipboard() {
    navigator.clipboard.writeText(qrValue.value).then(() => {
        toast.success('Текст скопирован в буфер обмена')
    }).catch(err => {
        console.error('Не удалось скопировать текст: ', err)
    })
}

</script>

<template>
    <div class="referal-share account-block">
        <div class="referal-share__title account-subtitle">Реферальная ссылка:</div>
        <div class="referal-share__group d-flex">
            <div class="referal-share__group-left">
                <div class="referal-share__link d-flex">
                    <div class="referal-share__link-txt">{{ siteUrl }}/register-with-referral/{{ refCode }}</div>
                    <a class="referal-share__link-copy icon" @click.prevent="copyToClipboard" href="javascript.void(0)">
                        <svg class="svg-sprite-icon icon-copy-2">
                            <use :xlink:href="siteUrl + '/images/svg/symbol/sprite.svg#copy-2'"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="referal-share__group-right">
                <div class="referal-share__subtitle">Поделитьсся ссылкой:</div>
                <div class="referal-share__social d-flex">
                    <div class="referal-share__social-item centered"
                         data-href="https://developers.facebook.com/docs/plugins/" data-layout="" data-size="">
                        <a target="_blank"
                           :href="'https://www.facebook.com/sharer/sharer.php?u='+ siteUrl + '/register-with-referral/' + refCode + ';src=sdkpreparse'"
                           class="referal-share__social-item centered fb-xfbml-parse-ignore">
                            <img src="@images/general/contacts-fb.svg" width="28" height="28" alt="img">
                        </a>
                    </div>
                    <a class="referal-share__social-item centered"
                       :href="'https://twitter.com/intent/tweet?text=' + siteUrl + '/register-with-referral/' + refCode"
                       target="_blank">
                        <img src="@images/general/contacts-tw.svg" width="28" height="28" alt="img">
                    </a>
                    <a class="referal-share__social-item centered"
                       :href="'https://vk.com/share.php?url=' + siteUrl + '/register-with-referral/' + refCode"
                       target="_blank">
                        <img src="@images/general/contacts-vk.svg" width="28" height="28" alt="img">
                    </a>
                    <a class="referal-share__social-item centered" :href="'https://connect.ok.ru/offer?url=' + siteUrl + '/register-with-referral/' + refCode">
                            <img src="@images/general/contacts-ok.svg" width="28" height="28" alt="img">

                    </a>
                </div>
            </div>
        </div>
        <div class="referal-qr border">
            <div class="referal-qr__head">
                <div class="referal-qr__list d-flex">
                    <div class="referal-qr__list-item">
                        <a @click="() => {type = 'canvas'; size = 100}"
                           :class="getClass(100)" href="javascript:void(0)">100 px</a>
                    </div>
                    <div class="referal-qr__list-item">
                        <a @click="() => {type = 'canvas'; size = 200}"
                           :class="getClass(200)" href="javascript:void(0)">200 px</a>
                    </div>
                    <div class="referal-qr__list-item">
                        <a @click="() => {type = 'canvas'; size = 300}"
                           :class="getClass(300)" href="javascript:void(0)">300 px</a>
                    </div>
                    <div class="referal-qr__list-item">
                        <a @click="() => {type = 'canvas'; size = 500}"
                           :class="getClass(500)" href="javascript:void(0)">500 px</a>
                    </div>
                    <div class="referal-qr__list-item">
                        <a @click="() => {type = 'svg'}"
                           class="referal-qr__link" href="javascript:void(0)">SVG</a>
                    </div>
                </div>
            </div>
            <div class="referal-qr__body">
                <div class="referal-qr__img">
                    <qrcode-vue v-if="qrValue && size"
                                :value="qrValue"
                                :size="size"
                                :render-as="type ? type : 'canvas'" level="L"/>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
