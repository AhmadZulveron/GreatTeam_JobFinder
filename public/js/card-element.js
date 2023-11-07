document.addEventListener('DOMContentLoaded', function () {
    const tagContainer = document.querySelector('.tag-container');
    const tagInput = document.getElementById('tag-input');
    const addTagButton = document.getElementById('add-tag-button');

    function addTag() {
        const tagText = tagInput.value.trim();
        if (tagText) {
            const tag = document.createElement('span');
            tag.className = 'tag';
            tag.innerHTML = `${tagText} <span class="tag-remove">&times;</span>`;
            tagContainer.appendChild(tag);
            tagInput.value = '';
        }
    }

    function removeTag(tag) {
        tagContainer.removeChild(tag);
    }

    addTagButton.addEventListener('click', addTag);

    tagContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('tag-remove')) {
            const tag = event.target.parentElement;
            removeTag(tag);
        }
    });

    tagInput.addEventListener('keydown', (event) => {
        if (event.key === 'Enter') {
            addTag();
        }
    });
});

$(document).ready(function() {
    if ($(window).width() >= 992) {
        $("#loginButton").appendTo(".navbar-collapse");
    }
});

$(window).resize(function() {
    if ($(window).width() >= 992) {
        $("#loginButton").appendTo(".navbar-collapse");
    } else {
        $("#loginButton").appendTo(".d-lg-none");
    }
});