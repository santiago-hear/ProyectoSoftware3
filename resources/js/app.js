require('./bootstrap');
const ClassicEditor = require('@ckeditor/ckeditor5-build-classic');
/* el query selector recibe el nombre del id del textarea */
ClassicEditor.create(document.querySelector('#content_publication'))
.then(editor => {
    console.log(editor);
})
.catch(error => {
    console.error(error);
});
/* al final se ejecuta: npm run dev" */