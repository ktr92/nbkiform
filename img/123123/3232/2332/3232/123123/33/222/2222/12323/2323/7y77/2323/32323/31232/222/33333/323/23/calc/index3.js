(function calcFront() {
    //демонстрация - убрать
//    const $button = document.querySelector("[data-calc='calc']")
//    const $result = document.querySelector("[data-calc='result']")
//    const $title = document.querySelector(".calcresults__title")
//    $button.addEventListener('click', function (e) {
//        e.preventDefault()
//        $button.classList.add('active')
//        $result.classList.add('active')
//        $title.classList.add('active')
//        $result.scrollIntoView()
//    })
})();
(function inputLimit() {
    const onChange = (e) => {

        let value = e.target.value
        if (e.target.getAttribute('maxlength')) {
            let length = Number(e.target.getAttribute('maxlength'))
            if (value.length > length) {
                e.target.value = value.slice(0, length)
            }
        }

    }
    //демонстрация - убрать
//    document.querySelectorAll('input[type="number"]').forEach(item => {
//        item.addEventListener('change', (e) => {
//            onChange(e)
//        })
//        item.addEventListener('input', (e) => {
//            onChange(e)
//        })
//    })

})();
(function inputData() {
    const checkData = (e) => {
        let value = e.target.value
        if (value.length) {
            e.target.classList.add('complete')
            e.target.parentNode.classList.add('complete')
        } else {
            e.target.classList.remove('complete')
            e.target.parentNode.classList.remove('complete')
        }

    }

    document.querySelectorAll('[data-input="custom"]').forEach(item => {
        item.addEventListener('change', (e) => {
            checkData(e)
        })
        item.addEventListener('input', (e) => {
            checkData(e)
        })
    })

})();




/* (function accordion() {
    const $toggler = document.querySelectorAll('[data-toggler]')
    $toggler.forEach($item => {
        $item.addEventListener('click', e => {
            const accId = $item.getAttribute('data-toggler')
            const $accContent = document.querySelector(`[data-toggle=${accId}]`)
            if ($accContent.classList.contains('active')) {
                $accContent.classList.remove('active')
                $item.classList.remove('active')
            } else {
                $accContent.classList.add('active')
                $item.classList.add('active')
            }
        })
    })
})(); */

function switchClass(firstEl, secondEl, className) {
    if (firstEl.classList.contains(className)) {
        if (!secondEl.classList.contains(className)) {
            secondEl.classList.add(className)
            firstEl.classList.remove(className)
        }
    } else {
        if (secondEl.classList.contains(className)) {
            firstEl.classList.add(className)
            secondEl.classList.remove(className)
        }
    }
}
function switchContent(firstEl, secondEl, selector) {
    const firstContent = firstEl.querySelector(selector)
    const secondContent = secondEl.querySelector(selector)
    const firstText = firstContent.innerHTML
    const secondText = secondContent.innerHTML
    console.log(secondText)
    if (firstText && firstText.length) {
        secondContent.innerHTML = firstText
    }
    if (secondText && secondText.length) {
        firstContent.innerHTML = secondText
    }
}
//(function switcher() {
//    document.querySelector(".switcher a").addEventListener("click", function (e) {
//        e.preventDefault()
//        const $inputFrom = document.querySelector("#cityInput1")
//        const $inputTo = document.querySelector("#cityInput2")
//        const $from = document.querySelector("[data-input='from']")
//        const $to = document.querySelector("[data-input='to']")
//        const $wrapperFrom = document.querySelector("[data-wrapper='from']")
//        const $wrapperTo = document.querySelector("[data-wrapper='to']")
//        let input1 = $inputFrom.value
//        let input2 = $inputTo.value
//        $inputTo.value = input1
//        $inputFrom.value = input2
//
//        input1 = $from.value
//        input2 = $to.value
//        $from.value = input2
//        $to.value = input1
//
//        switchClass($wrapperFrom, $wrapperTo, 'complete')
//        switchClass($wrapperFrom, $wrapperTo, 'error')
//        switchClass($inputFrom, $inputTo, 'complete')
//        switchContent($wrapperFrom, $wrapperTo, '.errortext')
//
//    })
//})();
