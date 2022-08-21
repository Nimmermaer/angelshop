requirejs([
  '../typo3conf/ext/angelshop/Resources/Public/Backend/Js/quill.min.js'
], function (Quill) {
  var quill1 = new Quill('#bodytext-container', {
    modules: {
      toolbar: [
        ['bold', 'italic', 'underline'],
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],
        [{'header': [2, 3, 4, 5, 6, false]}],
        [{'align': []}],
        ['clean']
      ]
    },
    placeholder: 'Bitte Text eingeben',
    theme: 'snow'  // or 'bubble'
  });
  var quill12 = new Quill('#description-container', {
    modules: {
      toolbar: [
        ['bold', 'italic', 'underline'],
        [{'list': 'ordered'}, {'list': 'bullet'}],
        [{'script': 'sub'}, {'script': 'super'}],
        [{'header': [2, 3, 4, 5, 6, false]}],
        [{'align': []}],
        ['clean']
      ]
    },
    placeholder: 'Bitte Text eingeben',
    theme: 'snow'  // or 'bubble'
  });
  var form = document.querySelector('form');
  form.onsubmit = function () {
    // Populate hidden form on submit
    var bodytext = document.querySelector("input[name='tx_angelshop_web_angelshopproductlist[content][bodytext]']");
    bodytext.value = document.querySelector("#bodytext-container .ql-editor").innerHTML;
    var additionalDescription = document.querySelector("input[name='tx_angelshop_web_angelshopproductlist[content][additionalDescription]']");
    additionalDescription.value = document.querySelector("#description-container .ql-editor").innerHTML;
  };
});
