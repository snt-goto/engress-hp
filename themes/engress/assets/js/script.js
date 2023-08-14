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
