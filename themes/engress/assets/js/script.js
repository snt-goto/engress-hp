const pathname = location.pathname;

// ヘッダーの余白
const headerElem = document.getElementById('eng-header'),
    bodyElem = document.getElementsByTagName('body')[0];

const setHeight = () => {
    const headerHeight = Math.round(headerElem.getBoundingClientRect().height * 100) / 100;
      bodyElem.style.paddingTop = headerHeight + 'px';
};

setHeight();

window.onresize = () => {
    setHeight();
};

// モバイルナビゲーション
const listElem = document.getElementById('eng-mobileMenu__list'),
    btnElem = document.getElementById('eng-mobileMenu__btn');

btnElem.onclick = () => {
    listElem.classList.toggle('open');
    btnElem.classList.toggle('open');
}

// よくある質問アコーディオン
const faqElems = Array.from(document.getElementsByClassName("eng-faq"));

faqElems.forEach((i) => {
    i.addEventListener('click', () => {
        const answer = i.getElementsByClassName('eng-faq__answer')[0],
            question = i.getElementsByClassName('eng-faq__question')[0];

        answer.classList.toggle('display');
        question.classList.toggle('display');
    })
})

// ScrollHintの設定
new ScrollHint('.scrollHint', {
  i18n: {
    scrollable: 'スクロールできます'
  },
  scrollHintIconAppendClass: 'scroll-hint-icon-white'
});

// お問い合わせフォーム
if(pathname === '/contact/') {
  const radioElem = document.getElementsByClassName('wpcf7-radio')[0],
  radioLabelElems = radioElem.getElementsByTagName('label');

  const removeChecked = () => {
    Array.from(radioLabelElems).forEach((i) => {
      i.classList.remove('checked');
    });
  };

  Array.from(radioLabelElems).forEach((i) => {
    const inputElem = i.getElementsByTagName('input')[0];

    inputElem.onchange = () => {
      removeChecked();
      i.classList.add('checked');
    }
  })

  const checkboxElem = document.getElementsByClassName('wpcf7-checkbox')[0],
    checkboxLabelElem = checkboxElem.getElementsByTagName('label')[0],
    checkboxInputElem = checkboxLabelElem.getElementsByTagName('input')[0];

    checkboxInputElem.onchange = () => {
      checkboxLabelElem.classList.toggle('checked');
    };
}
