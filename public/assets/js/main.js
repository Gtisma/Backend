// All Custom JS
    // @package nnpc-inv

(function() {
    'use strict';

    // Helpers
    const q = (selector, parent) => (parent ? parent : document).querySelector(selector);
    const qq = (selector, parent) => Array.from((parent ? parent : document).querySelectorAll(selector));
    const nl = (selector, parent) => (parent ? parent : document).querySelectorAll(selector);
    const log = (el) => console.log(el);
    const money = (arr) => {
        arr.map(i => {
            let
                num = parseFloat(Number(i.textContent).toFixed(2)).toLocaleString(),
                newItem = `<span class="r-currency">&#8358;&hairsp;</span><span class="r-amount">${num.split('.')[0]}</span><span class="r-sides r-floats">&hairsp;.${num.split('.')[1]}</span>`;
            i.innerHTML = newItem;
        })
    };
    const siblings = (el) => {
        let
            siblings = [],
            sibling = el.parentNode.firstElementChild;

        while (sibling) {
            if (sibling.nodeType === 1 && sibling !== el) siblings.push(sibling);
            sibling = sibling.nextElementSibling;
        }

        return siblings;
    }
    const getPrevUntil = (el, selector) => {
        let siblings = [],
            prev = el.previousElementSibling
        while (prev) {
            if (selector && prev.matches(selector)) break
            siblings.push(prev)
            prev = prev.previousElementSibling
        }
        return siblings
    }
    const getNextUntil = (el, selector) => {
        let siblings = [],
            next = el.nextElementSibling
        while (next) {
            if (selector && next.matches(selector)) break
            siblings.push(next)
            next = next.nextElementSibling
        }
        return siblings
    }



    // R Reveal
    if (q('.r-reveal')) {
        const
            cards = qq('.r-reveal'),
            collapse = el => el.classList.remove('r-active'),
            toggler = e => {
                let currentCard = e.target.closest('.r-reveal');

                if (!currentCard) cards.forEach(collapse);
                if (!e.target.matches('.r-activator')) return;

                currentCard.classList.toggle('r-active');

                cards.filter(card => {
                    return card !== currentCard;
                }).forEach(collapse);
            }
        ;
        document.addEventListener('click', toggler, false);
    }




    // Sidenav
    if (q('.r-menu-toggle')) {
        let
            button = q('.r-menu-toggle'),
            body = q('body'),
            overlay = document.createElement('div'),
            overlayClasses = ['r-overlay', 'r-zx-7'],
            links = qq('.r-aside a');

        overlay.classList.add(...overlayClasses);
        button.addEventListener('click', showNav, false);
        overlay.addEventListener('click', removeOverlay, false);
        links.map(a => a.addEventListener('click', removeOverlay, false));

        function showNav() {
            if (body.classList.contains('r-visible')) {
                body.classList.remove('r-visible');
            } else {
                body.classList.add('r-visible');
                body.appendChild(overlay);
                window.setTimeout(() => {
                    overlay.classList.add('r-show');
                }, 1);
            }
        }

        function removeOverlay() {
            body.classList.remove('r-visible');
            overlay.classList.remove('r-show');
            window.setTimeout(() => {
                body.removeChild(overlay);
            }, 320);
        };
    }




    // Button Submit
    if (q('.r-btn-spinner')) {
        const forms = qq('form');
        forms.map(form => {
            const
                button = q('button[type="submit"]', form),
                handler = (e) => {
                    // e.preventDefault();
                    button.setAttribute('disabled', '');
                    button.classList.add('r-active');
                    form.reset();
                }
            ;
            form.addEventListener('submit', handler, false)
        });
    };



    // Forgot Password
    if (q('#forgot')) {
        const
            form = q('#forgot'),
            processForm = form => {
                const
                    data = new FormData(form),
                    parent = form.closest('.r-js-resolve'),
                    child = q('.r-js-resolve_child', parent),
                    a = document.createElement('a'),
                    classes = ['r-btn', 'r-btn--primary', 'r-mt-butter'];

                a.setAttribute('href', '/');
                a.textContent = form.getAttribute('data-button');
                a.classList.add(...classes);
                data.append('form-name', 'Reset Password');

                fetch('/', {
                    method: 'POST',
                    body: data,
                })
                .then(() => {
                    setTimeout(() => {
                        form.remove();
                        child.textContent = form.getAttribute('data-success');
                        parent.appendChild(a)
                    }, 300);
                })
                .catch(err => console.log(err));
            }
        ;
        form.addEventListener('submit', e => {
            e.preventDefault();
            processForm(form);
        });
    };



    // Reset Password
    if (q('#reset')) {
        const
            form = q('#reset'),
            processForm = form => {
                const
                    data = new FormData(form),
                    parent = form.closest('.r-js-resolve'),
                    child = q('.r-js-resolve_child', parent),
                    a = document.createElement('a'),
                    classes = ['r-btn', 'r-btn--primary', 'r-mt-butter'];

                a.setAttribute('href', '/login');
                a.textContent = form.getAttribute('data-button');
                a.classList.add(...classes);
                data.append('form-name', 'Reset Password');

                fetch('/', {
                    method: 'POST',
                    body: data,
                })
                .then(() => {
                    setTimeout(() => {
                        form.remove();
                        child.textContent = form.getAttribute('data-success');
                        parent.appendChild(a)
                    }, 300);
                })
                .catch(err => console.log(err));
            }
        ;
        form.addEventListener('submit', e => {
            e.preventDefault();
            processForm(form);
        });
    };



    // Materializecss Inits
    let
        dropdownInstance = M.Dropdown.init(nl('.dropdown-trigger'), {}),
        modalInstance = M.Modal.init(nl('.modal'), {}),
        tabInstance = M.Tabs.init(nl('.tabs'), {}),
        selectInstance = M.FormSelect.init(nl('select'), {});
    M.updateTextFields();



    // Number
    let numbers = qq('.r-js-number');
    numbers.forEach(number => {
        let
            num = parseFloat(Number(number.textContent).toFixed(2)).toLocaleString(),
            parent = number.closest('.r-big-number'),
            container = number.closest('.r-big-number_number');

        number = '';
        number += `<span class="r-big-number_currency">&#8358;</span>`;
        number += `<span class="r-big-number_amount">${num.split('.')[0]}</span>`;
        number += `<span class="r-big-number_floats">.${num.split('.')[1]}</span>`;

        container.innerHTML = number;
        parent.prepend(container);
    });
    money(qq('.r-format-amount'));



    // Today's Date
    let
        today = new Date,
        months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        month = today.getMonth(),
        day = String(today.getDate()).padStart(2, '0');

    today = ` Today, ${months[month]} ${day}`;
    qq('.r-js-today').forEach(e => e.textContent = today);



    // Progressbar
    const meters = qq('svg[data-value] .r-progress-meter_meter');
    meters.forEach(path => {
        let
            length = path.getTotalLength(),
            value = parseInt(path.parentNode.getAttribute('data-value')),
            to = length * ((100 - value) / 100);

        path.style.strokeDashoffset = Math.max(0, to);
    });



    // DataTables Options
    if (q('#r-transactions-table')) {
        var dataTable = new DataTable('#r-transactions-table', {
            perPageSelect: false,
            perPage: 50,
            prevText: '<svg style="pointer-events:none;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-chevron-left"><polyline points="15 18 9 12 15 6"/></svg>',
            nextText: '<svg style="pointer-events:none;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-chevron-right"><polyline points="9 18 15 12 9 6"/></svg>',
            labels: {
                placeholder: 'Find transactions...',
                perPage: '{select}',
                noRows: 'No entries to found',
                info: '{start} - {end} / {rows}',
            },
            layout: {
                top: '{search}{info}{pager}',
                bottom: ''
            }
        });
    }



    // Glide Slider
    if (q('.glide')) {
        // Glide Variables
        const glide = new Glide('.glide', {
            gap: 0,
            rewind: false,
            keyboard: false,
            dragThreshold: false,
            swipeThreshold: false
        })

        // Constants
        const
            lis = qq('.glide__slide'),
            length = lis.length,
            innerBar = q('.r-progressbar_bar'),
            btnPrev = q('[data-glide-dir="<"]'),
            btnNext = q('[data-glide-dir=">"]')

        // Variables
        let
            value = '',
            dataValue

        // Functions
        let ini = 2
        lis.forEach((li, i) => {
            value = 100 / length
            li.setAttribute('data-value', value)
            li.setAttribute('id', ini + i)
            dataValue = parseInt(li.getAttribute('data-value'))
        })

        innerBar.style.width = `${value}%`
        if (value === dataValue) btnPrev.style.display = 'none'

        const decreaseWidth = () => {
            let
                activeLiId = parseInt(q('.glide__slide--active').getAttribute('id')),
                activeDataValue = parseInt(q('.glide__slide--active').getAttribute('data-value')),
                progressValue = (activeLiId - ini) * activeDataValue

            innerBar.style.width = `${parseInt(progressValue)}%`
            if (progressValue === value) btnPrev.style.display = 'none'
            if (progressValue < 100) {
                btnNext.setAttribute('type', 'button')
                btnNext.textContent = 'Next'
                btnNext.addEventListener('click', increaseWidth, false)
            }
        }
        const increaseWidth = () => {
            let
                activeLiId = parseInt(q('.glide__slide--active').getAttribute('id')),
                activeDataValue = parseInt(q('.glide__slide--active').getAttribute('data-value')),
                progressValue = activeLiId * activeDataValue

            innerBar.style.width = `${parseInt(progressValue)}%`
            btnPrev.style.display = 'block'
            if (progressValue === 100) {
                btnNext.setAttribute('type', 'submit')
                // btnNext.removeAttribute('data-glide-dir')
                btnNext.textContent = 'Submit'
                btnNext.removeEventListener('click', increaseWidth)
                //  Submit form here
                // btnNext.setAttribute('formaction', '/')
            }
        }

        glide.mount()

        btnPrev.addEventListener('click', decreaseWidth, false)
        btnNext.addEventListener('click', increaseWidth, false)
    }
})()
