function fileAdded() {
    console.log(this);
    this.parentNode.classList.add('attached');
}

$(document).ready(function(){
    var inputFiles = document.querySelectorAll('.File_theme_link input[type="file"]');

    inputFiles.forEach(function (e) {
        //console.log(e);
        e.addEventListener('change', fileAdded)
    })
});