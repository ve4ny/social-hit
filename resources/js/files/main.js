console.log('JavaScript file loaded successfully.');
document.addEventListener('DOMContentLoaded', function () {
    function dropdownMenu() {

        const link = document.querySelector('.has-child')
        const content = document.querySelector('.menu__dropdown')
        const back = document.querySelector('.menu__dropdown-back')
        const allMore = document.querySelectorAll('.dropdown-menu__more')
        if (!link) return

        link.addEventListener('click', (e) => {
            e.preventDefault()
            link.classList.toggle('active')
            content.classList.toggle('visible')
        })

        back.addEventListener('click', (e) => {
            e.preventDefault()
            link.classList.remove('active')
            content.classList.remove('visible')
        })

        document.addEventListener('click', (e) => {
            if (!link.contains(e.target) && !content.contains(e.target)) {
                link.classList.remove('active');
                content.classList.remove('visible');
                allMore.forEach(i => i.classList.remove('show'))
            }
        });
    }

    dropdownMenu()


    function mobileMenu() {
        const btn = document.querySelector('.open-menu')
        const content = document.querySelector('.header__group')

        btn.addEventListener('click', (e) => {
            e.preventDefault()
            btn.classList.toggle('active')
            content.classList.toggle('visible')
        })
    }

    mobileMenu()


    function addCollapse() {
        const rightColumns = document.querySelectorAll('.account-table__right');

        if (window.innerWidth < 1200) {
            rightColumns.forEach(column => column.classList.add('collapse'));
        } else {
            rightColumns.forEach(column => column.classList.remove('collapse'));
        }
    }

    window.addEventListener('load', addCollapse);

    window.addEventListener('resize', addCollapse);


    function changeRefill() {
        const main = document.querySelector('.form-refill')
        if (!main) return
        const outputTxt = main.querySelector('.form-refill__btn-txt')
        const outputImg = main.querySelector('.form-refill__btn-icon img')
        const inputs = main.querySelectorAll('.form-refill__label input')

        inputs.forEach(input => {
            input.addEventListener('change', () => {
                outputTxt.textContent = input.dataset.txt
                outputImg.setAttribute('src', `static/images/general/${input.dataset.img}.svg`)
            })
        })
    }

    changeRefill()


    function orderQty() {
        const qtyElements = document.querySelectorAll('.form-qty');
        if (!qtyElements.length) return

        qtyElements.forEach(qtyElement => {
            const input = qtyElement.querySelector('.form-qty__input');
            const minusBtn = qtyElement.querySelector('.form-qty__minus');
            const plusBtn = qtyElement.querySelector('.form-qty__plus');

            function decreaseQty() {
                let value = parseInt(input.value);
                if (value > 1) {
                    value--;
                    input.value = value;
                    if (value === 1) {
                        minusBtn.setAttribute('disabled', '');
                    }
                }
            }

            function increaseQty() {
                let value = parseInt(input.value);
                value++;
                input.value = value;
                minusBtn.removeAttribute('disabled');
            }

            minusBtn.addEventListener('click', decreaseQty);

            plusBtn.addEventListener('click', increaseQty);

            input.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, '');
            });
        });
    }

    orderQty()

    document.getElementById('perPageSelect').addEventListener('change', function () {
        const selectedValue = this.value;
        window.location.href = `/orders?perPage=${selectedValue}`;
    });

});
