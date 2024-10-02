const sporform = (function () {
  const maskInit = () => {
    $("[data-mask='letters']").inputmask({ regex: "[a-zA-Zа-яА-Я- ]*" });
  }

  return {
    init: function () {
      maskInit()
    },
  }
})()

$(document).ready(function () {
  sporform.init()
})
